<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;
use App\Http\Requests\ValidatedCategoryForm;
use App\Components\TreeviewCategory;

class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category){
        $this->category = $category;
    }
    
    public function index()
    {
        $data = $this->category->all();
        $treeview = new TreeviewCategory($data);
        $treeview = $treeview->getTreeviewCategory($currentId = '');
        return view('admin.category.index', compact('treeview'));
    }

    public function create()
    {
        $data = $this->category->all();
        $treeview = new TreeviewCategory($data);
        $treeview = $treeview->getTreeviewCategory($currentId = '');
        return view('admin.category.create', compact('treeview'));
    }

    public function store(ValidatedCategoryForm $request)
    {
        $this->category->create([
            'parent_id' => $request->parent_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return redirect('admin/categories/create')->with('status','Thêm danh mục thành công!');
    }

    
    public function show($id)
    {
        echo 'show';
    }

    public function edit($id)
    {
        $current_category = $this->category->find($id);
        if ($current_category->parent_id == 0) {
            $parent_category = new Category;
            $parent_category->id=0;
            $parent_category->name='Là danh mục cha';
        } else $parent_category = $this->category->find($current_category->parent_id);
        $data = $this->category->all();
        $treeview = new TreeviewCategory($data);
        $treeview = $treeview->getTreeviewCategory($currentId = '');
        return view('admin.category.edit', compact('treeview','current_category','parent_category'));
    }

    public function update(Request $request, $id)
    {
        $name = $request->name;
        $parent_id = $request->parent_id;
        $category_except_id = $this->category->all()->except($id);
        foreach ($category_except_id as $value) {
            if($value->name == $name){
                return back()->with('status','Tên danh mục phải là duy nhất');
            }
        }
        $this->category->find($id)->update([
            'parent_id' => $request->parent_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return redirect('admin/categories')->with('status','Sửa danh mục thành công!');
    }

    public function destroy($id)
    {
        $this->category->find($id)->delete();
        return back()->with('status','Xóa thành công!');
    }
}

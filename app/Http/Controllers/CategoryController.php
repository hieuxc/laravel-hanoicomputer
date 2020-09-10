<?php

namespace App\Http\Controllers;

use App\Category;
use App\ProductType;
use App\Components\GetCategory;
use App\Http\Requests\ValidatedCategoryForm;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category)
    {
        $this->middleware('auth:admin');
        $this->category = $category;
    }

    public function getTreeview()
    {
        $data = $this->category->all();
        $get_category = new GetCategory($data);
        return $get_category->getTreeviewCategory();
    }

    public function index()
    {
        $treeview = $this->getTreeview();
        $list_product_type = ProductType::all();
        return view('admin.category.index', compact('treeview', 'list_product_type'));
    }

    public function create()
    {
        $treeview = $this->getTreeview();
        $list_product_type = ProductType::all();
        return view('admin.category.create', compact('treeview', 'list_product_type'));
    }

    public function store(ValidatedCategoryForm $request)
    {
        $this->category->create([
            'parent_id' => $request->parent_id,
            'product_type_id' => $request->product_type_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return back()->with('status', 'Thêm danh mục thành công!');
    }

    public function show($id)
    {
        return abort(404);
    }

    public function edit($id)
    {
        $current_category = $this->category->find($id);

        if ($current_category->parent_id == 0) {
            $parent_category = new Category;
            $parent_category->id = 0;
            $parent_category->name = 'Là danh mục cha';
        } else {
            $parent_category = $this->category->find($current_category->parent_id);
        }

        $treeview = $this->getTreeview();
        $list_product_type = ProductType::all();
        return view('admin.category.edit', compact('treeview', 'list_product_type', 'current_category', 'parent_category'));
    }

    public function update(ValidatedCategoryForm $request, $id)
    {
        $this->category->find($id)->update([
            'parent_id' => $request->parent_id,
            'product_type_id' => $request->product_type_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect('admin/categories')->with('status', 'Sửa danh mục thành công!');
    }

    public function destroy($id)
    {
        $this->category->find($id)->delete();
        return back()->with('status', 'Xóa thành công!');
    }
}

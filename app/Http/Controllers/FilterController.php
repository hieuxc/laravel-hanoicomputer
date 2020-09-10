<?php

namespace App\Http\Controllers;

use App\Filter;
use App\FilterOption;
use App\Http\Requests\ValidatedFilterForm;
use App\ProductType;
use Illuminate\Support\Str;

class FilterController extends Controller
{
    private $filter;
    public function __construct(Filter $filter)
    {
        $this->middleware('auth:admin');
        $this->filter = $filter;
    }

    public function index($product_type_id)
    {
        $product_type = ProductType::find($product_type_id);
        $list_filter = $this->filter->where('product_type_id', $product_type_id)->get();
        $list_filter_option = array();
        foreach ($list_filter as $key => $value) {
            $list_filter_option[$key]= FilterOption::where('filter_id',$value->id)->get();
        }
        return view('admin.filter.index', compact('product_type', 'list_filter', 'list_filter_option'));
    }

    public function create()
    {
        return abort(404);
    }

    public function store(ValidatedFilterForm $request, $product_type_id)
    {
        $this->filter->create([
            'product_type_id' => $product_type_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('filters.index',$product_type_id)->with('status', 'Thêm thông số lọc thành công!');
    }

    public function show($id)
    {
        return abort(404);
    }

    public function edit($product_type_id, $id)
    {
        $product_type = ProductType::find($product_type_id);
        $current_filter = $this->filter->find($id);
        return view('admin.filter.edit', compact('product_type', 'current_filter'));
    }

    public function update(ValidatedFilterForm $request, $product_type_id, $id)
    {
        $this->filter->find($id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('filters.index', $product_type_id)->with('status', 'Sửa thông số lọc thành công!');
    }

    public function destroy($product_type_id, $id)
    {
        $this->filter->find($id)->delete();
        return back()->with('status', 'Xóa thành công!');
    }
}

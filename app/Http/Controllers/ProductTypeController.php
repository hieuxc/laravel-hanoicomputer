<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidatedProductTypeForm;
use App\ProductType;
use App\Specification;

class ProductTypeController extends Controller
{
    private $product_type;
    public function __construct(ProductType $product_type)
    {
        $this->middleware('auth:admin');
        $this->product_type = $product_type;
    }

    public function index()
    {
        $list_product_type = $this->product_type->paginate(15);
        return view('admin.product-type.index', compact('list_product_type'));
    }

    public function create()
    {
        return abort(404);
    }

    public function store(ValidatedProductTypeForm $request)
    {
        $this->product_type->create($request->all());
        return redirect()->route('product-types.index')->with('status', 'Thêm loại sản phẩm thành công');
    }

    public function show($id)
    {
        return abort(404);
    }

    public function edit($id)
    {
        $current_product_type = $this->product_type->find($id);
        return view('admin.product-type.edit', compact('current_product_type'));
    }

    public function update(ValidatedProductTypeForm $request, $id)
    {
        $this->product_type->find($id)->update($request->all());
        return redirect('admin/product-types')->with('status', 'Sửa loại sản phẩm thành công');
    }

    public function destroy($id)
    {
        $this->product_type->find($id)->delete();
        return back()->with('status', 'Xóa thành công!');
    }
}

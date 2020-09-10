<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidatedSpecificationForm;
use App\ProductType;
use App\Specification;

class SpecificationController extends Controller
{
    private $specification;
    public function __construct(Specification $specification)
    {
        $this->middleware('auth:admin');
        $this->specification = $specification;
    }

    public function index($product_type_id)
    {
        $product_type = ProductType::find($product_type_id);
        $list_specification = $this->specification->where('product_type_id', $product_type_id)->get();
        return view('admin.specification.index', compact('product_type', 'list_specification'));
    }

    public function create($product_type_id)
    {
        return abort(404);
    }

    public function store(ValidatedSpecificationForm $request, $product_type_id)
    {
        $this->specification->create([
            'product_type_id' => $product_type_id,
            'name' => $request->name,
        ]);
        return redirect()->route('specifications.index',$product_type_id)->with('status', 'Thêm thông số kĩ thuật thành công');
    }

    public function show($id)
    {
        return abort(404);
    }

    public function edit($product_type_id, $id)
    {
        $product_type = ProductType::find($product_type_id);
        $current_specification = $this->specification->find($id);
        return view('admin.specification.edit', compact('product_type', 'current_specification'));
    }

    public function update(ValidatedSpecificationForm $request, $product_type_id, $id)
    {
        $this->specification->find($id)->update($request->all());
        return redirect()->route('specifications.index', $product_type_id)
            ->with('status', 'Sửa thông số kĩ thuật thành công');
    }

    public function destroy($product_type_id, $id)
    {
        $this->specification->find($id)->delete();
        return back()->with('status', 'Xóa thành công!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Filter;
use App\FilterOption;
use App\Http\Requests\ValidatedFilterOptionForm;
use Illuminate\Support\Str;

class FilterOptionController extends Controller
{
    private $filter_option;
    public function __construct(FilterOption $filter_option)
    {
        $this->middleware('auth:admin');
        $this->filter_option = $filter_option;
    }

    public function index($filter_id)
    {
        $filter = Filter::find($filter_id);
        $list_filter_option = $this->filter_option->where('filter_id', $filter_id)->get();
        return view('admin.filter-option.index', compact('filter', 'list_filter_option'));
    }

    public function create()
    {
        return abort(404);
    }

    public function store(ValidatedFilterOptionForm $request, $filter_id)
    {
        $this->filter_option->create([
            'filter_id' => $filter_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('filter-options.index', $filter_id)->with('status', 'Thêm lựa chọn lọc thành công!');
    }

    public function show($id)
    {
        return abort(404);
    }

    public function edit($filter_id, $id)
    {
        $filter = Filter::find($filter_id);
        $current_filter_option = $this->filter_option->find($id);
        return view('admin.filter-option.edit', compact('filter', 'current_filter_option'));
    }

    public function update(ValidatedFilterOptionForm $request, $filter_id, $id)
    {
        $this->filter_option->find($id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('filter-options.index', $filter_id)->with('status', 'Sửa lựa chọn lọc thành công!');
    }

    public function destroy($filter_id, $id)
    {
        $this->filter_option->find($id)->delete();
        return back()->with('status', 'Xóa thành công!');
    }
}

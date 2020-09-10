@extends('admin.layout.index')

@section('title','List Category')

@section('css')
<link rel="stylesheet" href="{{ asset('css/TreeviewCategory.css')}}">
@endsection

@section('content')

@include('admin.layout.content-header',[
'name'=> 'List Category' ,
'back_url'=> route('admin.index') ,
'back_name'=>'Home' ])

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 col-12 pl-4">
                <h5><b>Chọn danh mục để sửa hoặc xóa</b></h5>
                <ul id="treeview-category">
                    {!! $treeview !!}
                </ul>
            </div>
            <div class="col-md-5 col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('categories.create') }}" class="btn btn-success float-right"><i
                                class="fas fa-plus mr-2"></i>Add</a>
                        <div class="mt-5">
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif
                            <form id="delete_link" action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <input id="category_name" class="form-control" type="text"
                                        placeholder="Chọn danh mục" disabled>
                                    <div id="error_category_name" class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label>Loại sản phẩm</label>
                                    <select id="product_type_name" class="form-control" name="product_type_id" disabled>
                                        <option>Chọn danh mục</option>
                                        @foreach ($list_product_type as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="float-right">
                                        <a id="edit_link" class="btn btn-primary" href="" type="submit"><i
                                                class="fas fa-pencil-alt mr-2"></i>Edit</a>
                                        <button type="button" class="btn btn-danger" data-target="#modal_confirm_delete"
                                            data-toggle="modal"><i class="fas fa-trash-alt mr-2"></i>Delete</button>
                                    </div>
                                    <div id="modal_confirm_delete" class="modal fade" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Delete Confirmation</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Are you sure?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" id="delete_btn"
                                                        class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('js/Category/TreeviewCategory.js')}}"></script>
<script src="{{ asset('js/Category/IndexTreeviewCategory.js')}}"></script>
@endsection
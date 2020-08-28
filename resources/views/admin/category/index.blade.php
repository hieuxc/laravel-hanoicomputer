@extends('admin.layout')

@section('title','Category')

@section('css')
<link rel="stylesheet" href="{{ asset('css/TreeviewCategory.css')}}">
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Categories List</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">
                            <a href="{{ route('admin.index') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('categories.index') }}">Categories</a>
                        </li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="conteiner-fluid">
            <div class="row">
                <div class="col-md-7 col-12">
                    <ul id="treeview-category" class="ml-3">
                        {!! $treeview !!}
                    </ul>
                </div>
                <div class="col-md-4 col-12">
                    <a href="{{ route('categories.create') }}" class="btn btn-success"><i
                            class="fas fa-plus mr-2"></i>Add</a>
                    <div class="mt-5">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form id="delete_link" action="" method="POST">
                            @csrf
                            @method('delete')
                            <div class="form-group">
                                <label>Chọn danh mục để sửa hoặc xóa</label>
                                <input id="category_name" class="form-control" type="text" placeholder="Chọn danh mục"
                                    disabled>
                                <div id="error_category_name" class="invalid-feedback"></div>
                                <a id="edit_link" class="btn btn-primary mt-3" href="" type="submit"><i
                                        class="fas fa-pencil-alt mr-2"></i>Edit</a>
                                <button type="button" class="btn btn-danger mt-3" data-target="#modal_confirm_delete"
                                    data-toggle="modal"><i class="fas fa-trash-alt mr-2"></i>Delete</button>
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
@endsection

@section('js')
<script src="{{ asset('js/Category/TreeviewCategory.js')}}"></script>
<script src="{{ asset('js/Category/IndexTreeviewCategory.js')}}"></script>
@endsection
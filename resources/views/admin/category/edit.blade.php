@extends('admin.layout')

@section('title','Create Category')

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
                    <h1 class="m-0 text-dark">Edit Categories</h1>
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
                <div class="col-md-6 col-11 ml-3">
                    <h5><b>Chọn danh mục cha</b></h5>
                    <ul id="treeview-category">
                        <li class="cate-item" data-id="0">Là danh mục cha</li>
                        {!! $treeview !!}
                    </ul>
                </div>
                <div class="col-md-5 col-11 ml-3">
                    <form action="{{ route('categories.update',$current_category->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input type="text" class="form-control @if (session('status')) is-invalid @endif"
                                name="name" value="{{$current_category->name}}" placeholder="Nhập tên danh mục">
                            @if (session('status'))
                            <div class="invalid-feedback">{{ session('status') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Danh mục cha</label>
                            <input id="parent_id_label" class="form-control" type="text"
                                value="{{$parent_category->name}}" placeholder="Chọn danh mục cha" disabled>
                            <input type="text" value="{{$parent_category->id}}" name="parent_id" id="parent_id" hidden>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary float-right" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('js/Category/TreeviewCategory.js')}}"></script>
<script src="{{ asset('js/Category/CETreeviewCategory.js')}}"></script>
@endsection
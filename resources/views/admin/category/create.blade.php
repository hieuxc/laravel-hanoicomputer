@extends('admin.layout.index')

@section('title','Create Category')

@section('css')
<link rel="stylesheet" href="{{ asset('css/TreeviewCategory.css')}}">
@endsection

@section('content')

@include('admin.layout.content-header',[
'name'=> 'Create Category' ,
'back_url'=> route('categories.index') ,
'back_name'=> 'Category' ])

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 col-12 pl-4">
                <h5><b>Chọn danh mục cha</b></h5>
                <ul id="treeview-category">
                    <li class="cate-item" data-id="0">Là danh mục cha</li>
                    {!! $treeview !!}
                </ul>
            </div>
            <div class="col-md-5 col-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form action="{{ route('categories.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input name="name" class="form-control @error('name') is-invalid @enderror" type="text"
                                    placeholder="Nhập tên danh mục">
                                @error('name')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Loại sản phẩm</label>
                                <select name="product_type_id" class="form-control">
                                    @foreach ($list_product_type as $product_type)
                                    <option value="{{$product_type->id}}">{{$product_type->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Danh mục cha</label>
                                <input id="parent_id_label"
                                    class="form-control @error('parent_id') is-invalid @enderror" type="text"
                                    placeholder="Chọn danh mục cha" disabled>
                                <input name="parent_id" id="parent_id" type="text" hidden>
                                @error('parent_id')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success float-right" type="submit">Add</button>
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
<script src="{{ asset('js/Category/CETreeviewCategory.js')}}"></script>
@endsection
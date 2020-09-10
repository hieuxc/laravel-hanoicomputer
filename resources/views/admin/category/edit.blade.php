@extends('admin.layout.index')

@section('title','Edit Category')

@section('css')
<link rel="stylesheet" href="{{ asset('css/TreeviewCategory.css')}}">
@endsection

@section('content')

@include('admin.layout.content-header',[
'name'=> 'Edit Category' ,
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
                        <form action="{{ route('categories.update',$current_category->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{$current_category->name}}" placeholder="Nhập tên danh mục">
                                @error('name')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Loại sản phẩm</label>
                                <select class="form-control" name="product_type_id">
                                    @foreach ($list_product_type as $item)
                                    @if ($current_category->product_type_id == $item->id)
                                    <option value="{{$item->id}}" selected>{{$item->name}}</option>
                                    @else
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Danh mục cha</label>
                                <input id="parent_id_label" class="form-control" type="text"
                                    value="{{$parent_category->name}}" placeholder="Chọn danh mục cha" disabled>
                                <input type="text" value="{{$parent_category->id}}" name="parent_id" id="parent_id"
                                    hidden>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary float-right" type="submit">Update</button>
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
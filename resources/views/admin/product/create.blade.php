@extends('admin.layout.index')

@section('title','Create Product')

@section('css')
<link rel="stylesheet" href="{{asset('vendor/summernote/summernote-lite.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/select2/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/select2/select2-bootstrap4.min.css')}}">
@endsection

@section('content')

@include('admin.layout.content-header',[
'name'=> 'Create Product' ,
'back_url'=> route('products.index') ,
'back_name'=> 'List Product' ])

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-danger">Thông số cơ bản</h5>
                                </div>
                                <input type="hidden" name="product_type_id" value="{{$product_type->id}}">
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input name="name" type="text"
                                            class="@error('name') is-invalid @enderror form-control"
                                            placeholder="Nhập tên sản phẩm">
                                        @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-sm-2 col-12">
                                    <div class="form-group">
                                        <label>Code</label>
                                        <input name="code" type="text"
                                            class="@error('code') is-invalid @enderror form-control"
                                            placeholder="Nhập ma sản phẩm">
                                        @error('code') <div class="invalid-feedback">{{$message}}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label>Danh mục sản phẩm</label>
                                        <select name="category_id" class="form-control select2bs4">
                                            @foreach ($list_category as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                        <label>Giá</label>
                                        <input name="price" type="number"
                                            class="@error('price') is-invalid @enderror form-control"
                                            placeholder="Nhập giá sản phẩm">
                                        @error('price') <div class="invalid-feedback">{{$message}} </div>@enderror
                                    </div>
                                </div>
                                <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                        <label>Giá Khuyến Mãi</label>
                                        <input name="discount" type="number"
                                            class="@error('discount') is-invalid @enderror form-control"
                                            placeholder="Nhập giá khuyến mãi sản phẩm">
                                        @error('discount') <div class="invalid-feedback">{{$message}} </div>@enderror
                                    </div>
                                </div>
                                <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                        <label>Số lượng</label>
                                        <input name="quality" type="number"
                                            class="@error('quality') is-invalid @enderror form-control"
                                            placeholder="Nhập số lượng sản phẩm">
                                        @error('quality') <div class="invalid-feedback">{{$message}} </div>@enderror
                                    </div>
                                </div>
                                <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                        <label>Bảo Hành</label>
                                        <input name="warranty" type="text"
                                            class="@error('warranty') is-invalid @enderror form-control"
                                            placeholder="Nhập thời gian bảo hành">
                                        @error('warranty') <div class="invalid-feedback">{{$message}} </div>@enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Ảnh</label>
                                        <input name="image" type="file"
                                            class="@error('image') is-invalid @enderror form-control-file">
                                        @error('image') <div class="invalid-feedback">{{$message}} </div>@enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Ảnh chi tiết</label>
                                        <input name="image_detail[]" type="file"
                                            class="form-control-file" multiple>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea name="description" type="text" class="textarea"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-danger">Thông số kĩ thuật</h5>
                                </div>
                                @foreach ($product_type->specifications as $spec)
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label>{{$spec->name}}</label>
                                        <input name="spec[]" type="text" class="form-control">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-danger">Thông số lọc</h5>
                                </div>
                                @foreach ($product_type->filters as $filter)
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label>{{$filter->name}}</label>
                                        <select name="filter[]" class="form-control select2bs4">
                                            @foreach ($filter->filter_options as $option)
                                            <option value="{{$option->id}}">{{$option->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success float-right">Add</button>
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
<script src="{{asset('vendor/summernote/summernote-lite.min.js')}}"></script>
<script src="{{asset('vendor/select2/select2.full.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.textarea').summernote({
            placeholder: 'Nhập mô tả',
            height: 200
        });
        $('.select2bs4').select2({
            theme: "bootstrap4"
        })
    })
</script>
@endsection
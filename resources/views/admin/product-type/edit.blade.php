@extends('admin.layout.index')

@section('title','Edit Product Type')

@section('content')

@include('admin.layout.content-header',[
'name'=> 'Edit '.$current_product_type->name.' Product Type' ,
'back_url'=> route('product-types.index') ,
'back_name'=> 'List Product Type' ])

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form action="{{route('product-types.update',$current_product_type->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Tên loại sản phẩm</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{$current_product_type->name}}" placeholder="Nhập tên loại sản phẩm">
                                @error('name')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
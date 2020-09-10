@extends('admin.layout.index')

@section('title','Edit Filter')

@section('content')

@include('admin.layout.content-header',[
'name'=> 'Edit '.$product_type->name.' Filter' ,
'back_url'=> route('filters.index',$product_type->id) ,
'back_name'=> $product_type->name.' Filter'])

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
                        <form action="{{route('filters.update',[$product_type->id,$current_filter->id])}}"
                            method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Tên thông số lọc</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{$current_filter->name}}" placeholder="Nhập tên thông số lọc">
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
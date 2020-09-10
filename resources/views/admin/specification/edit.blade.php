@extends('admin.layout.index')

@section('title','Edit Specification')

@section('content')

@include('admin.layout.content-header',[
'name'=> 'Edit '.$current_specification->name.' Product Type' ,
'back_url'=> route('specifications.index',$product_type->id) ,
'back_name'=> 'List '.$product_type->name.' Specification' ])

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
                        <form action="{{route('specifications.update',[$product_type->id,$current_specification->id])}}"
                            method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Tên thông số kĩ thuật</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{$current_specification->name}}" placeholder="Nhập tên thông số kĩ thuật">
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
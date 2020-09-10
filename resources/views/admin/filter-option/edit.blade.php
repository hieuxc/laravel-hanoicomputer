@extends('admin.layout.index')

@section('title','Edit Filter Option')

@section('content')

@include('admin.layout.content-header',[
'name'=> 'Edit '.$current_filter_option->name.' Product Type' ,
'back_url'=> route('filter-options.index',$filter->id) ,
'back_name'=> 'List '.$filter->name.' filter option' ])

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
                        <form action="{{route('filter-options.update',[$filter->id,$current_filter_option->id])}}"
                            method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Tên lựa chọn lọc</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{$current_filter_option->name}}" placeholder="Nhập tên lựa chọn lọc">
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
@extends('admin.layout.index')

@section('title','List Product')

@section('css')
<link rel="stylesheet" href="{{asset('vendor/select2/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/select2/select2-bootstrap4.min.css')}}">
@endsection

@section('content')
@include('admin.layout.content-header',[
'name'=> 'List Product' ,
'back_url'=> route('admin.index') ,
'back_name'=> 'Home' ])

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <button type="button" class="btn btn-success" data-target="#modal_create_product"
                                data-toggle="modal">Add</button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                        @endif
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Quality</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_product as $product)
                                <tr>
                                    <td style="width: 5%">{{$product->id}}</td>
                                    <td style="width: 25">{{$product->name}}</td>
                                    <td style="width: 30%"><img src="{{asset($product->image)}}" width="auto"
                                            height="150px"></td>
                                    <td style="width: 10%">{{$product->price}}</td>
                                    <td style="width: 10%">{{$product->discount}}</td>
                                    <td style="width: 10%">{{$product->quality}}</td>
                                    <td style="width: 10%">
                                        <a href="{{route('products.show',$product->id)}}" class="btn btn-info">
                                            <i class="fas fa-eye mr-2"></i>Show</a>
                                        <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary mt-1">
                                            <i class="fas fa-pencil-alt mr-2"></i>Edit</a>
                                        <button class="btn btn-danger mt-1">
                                            <i class="fas fa-trash-alt mr-2"></i>Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.product.modal-create-product', ['list_product_type' => $list_product_type])
{{-- @include('admin.layout.modal-delete'); --}}
@endsection

@section('js')
<script src="{{asset('vendor/select2/select2.full.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        });
    })
</script>
{{-- <script>
    $('.delete_btn').click(function(){
        $('#delete_form').attr(
            'action',
            '/admin/product-types/'+$(this).data('id')
        );
        $('#delete_name').text($(this).data('name'));
    })
</script> --}}
@endsection
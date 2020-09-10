@extends('admin.layout.index')

@section('title','List Product Type')

@section('content')

@include('admin.layout.content-header',[
'name'=> 'List Product Type' ,
'back_url'=> route('admin.index') ,
'back_name'=> 'Home' ])

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <form action="{{route('product-types.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="@error('name') is-invalid @enderror form-control mr-2"
                                        name="name" placeholder="Nhập tên loại sản phẩm">
                                    @error('name')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-success">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body p-0">
                        @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                        @endif
                        <table class="table table-striped table-hover">
                            <tbody>
                                @foreach ($list_product_type as $item)
                                <tr>
                                    <td class="align-middle">{{$item->id}}</td>
                                    <td class="align-middle">{{$item->name}}</td>
                                    <td class="float-right">
                                        <a href="{{route('specifications.index',['product_type_id'=>$item->id])}}"
                                            class="btn btn-secondary"><i class="fas fa-tools mr-2"></i>Specification</a>
                                        <a href="{{route('filters.index',['product_type_id'=>$item->id])}}"
                                            class="btn btn-info"><i class="fas fa-filter mr-2"></i>Filter</a>
                                        <a href="{{route('product-types.edit',$item->id)}}" class="btn btn-primary"><i
                                                class="fas fa-pencil-alt mr-2"></i>Edit</a>
                                        <button data-id="{{$item->id}}" data-name="{{$item->name}}" type="button"
                                            class="btn btn-danger delete_btn" data-target="#modal_confirm_delete"
                                            data-toggle="modal"><i class="fas fa-trash-alt mr-2"></i>Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            {{$list_product_type->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.layout.modal-delete');

@endsection

@section('js')
<script>
    $('.delete_btn').click(function(){
        $('#delete_form').attr(
            'action',
            '/admin/product-types/'+$(this).data('id')
        );
        $('#delete_name').text($(this).data('name'));
    })
</script>
@endsection
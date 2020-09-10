@extends('admin.layout.index')

@section('title','Filter')

@section('content')

@include('admin.layout.content-header',[
'name'=> $product_type->name.' Filter' ,
'back_url'=> route('product-types.index') ,
'back_name'=> 'List Product Type' ])

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <form action="{{route('filters.store',$product_type->id)}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="@error('name') is-invalid @enderror form-control mr-2"
                                        name="name" placeholder="Nhập tên thông số lọc">
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
                                @foreach ($list_filter as $key => $filter)
                                <tr>
                                    <td class="align-middle">{{$key+1}}</td>
                                    <td class="align-middle">{{$filter->name}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown">
                                                option
                                            </button>
                                            <div class="dropdown-menu">
                                                @foreach ($list_filter_option[$key] as $filter_option)
                                                <div class="dropdown-item">{{$filter_option->name}}</div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </td>
                                    <td class="float-right">
                                        <a href="{{route('filter-options.index',$filter->id)}}" class="btn btn-info"><i
                                                class="fas fa-eye mr-2"></i>Filter Option</a>
                                        <a href="{{route('filters.edit',[$product_type->id, $filter->id])}}"
                                            class="btn btn-primary"><i class="fas fa-pencil-alt mr-2"></i>Edit</a>
                                        <button data-id="{{$filter->id}}" data-name="{{$filter->name}}" type="button"
                                            class="btn btn-danger delete_btn" data-target="#modal_confirm_delete"
                                            data-toggle="modal"><i class="fas fa-trash-alt mr-2"></i>Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
            $(location).attr('pathname')+'/'+$(this).data('id')
        );
        $('#delete_name').text($(this).data('name'));
    })
</script>
@endsection
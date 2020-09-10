@extends('admin.layout.index')

@section('title','List Filter Option')

@section('content')

@include('admin.layout.content-header',[
'name'=> 'List '.$filter->name.' Filter Option' ,
'back_url'=> '' ,
'back_name'=> 'List '.' Filter Option' ])

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <form action="{{route('filter-options.store',$filter->id)}}" method="POST">
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
                                @foreach ($list_filter_option as $key => $filter_option)
                                <tr>
                                    <td class="align-middle">{{$key+1}}</td>
                                    <td class="align-middle">{{$filter_option->name}}</td>
                                    <td class="float-right">
                                        <a href="{{route('filter-options.edit',[$filter->id, $filter_option->id])}}"
                                            class="btn btn-primary"><i class="fas fa-pencil-alt mr-2"></i>Edit</a>
                                        <button data-id="{{$filter_option->id}}" data-name="{{$filter_option->name}}"
                                            type="button" class="btn btn-danger delete_btn"
                                            data-target="#modal_confirm_delete" data-toggle="modal"><i
                                                class="fas fa-trash-alt mr-2"></i>Delete</button>
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
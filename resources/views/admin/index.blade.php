@extends('admin.layout.index')

@section('title','Home')

@section('content')

@include('admin.layout.content-header',[
'name'=> 'Home Page' ,
'back_url'=> route('admin.index') ,
'back_name'=> 'Home' ])

@endsection
@extends('main.admin.master')

@section('body')
@include('main.partails.message')
<h3 class="text-center">Edit Product</h3>
 {{-- process: ist der Name für Button--}}
@section('process')
   Update
@endsection 

@include('main.admin.products.form')
@endsection
@extends('layouts.admin')

@section('body')

<x-alert />

<h3 class="text-center">Edit Product</h3>
 {{-- process: ist der Name für Button--}}
@section('process')
   Update
@endsection 

@include('admin.products._form')
@endsection
@extends('layouts.admin')

@section('body')

<x-alert />

<h3 class="text-center">Add Product</h3>
 {{-- process: ist der Name für Button--}}
 
@section('process')
   Add  
@endsection 

@include('admin.products._form')
@endsection
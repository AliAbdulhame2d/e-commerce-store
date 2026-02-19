@extends('main.admin.master')

@section('body')
@include('main.partails.message')

 {{-- process: ist der gleiche Name für Header und Button--}}
@section('process')
   Add  
@endsection 

@include('main.admin.products.form')
@endsection
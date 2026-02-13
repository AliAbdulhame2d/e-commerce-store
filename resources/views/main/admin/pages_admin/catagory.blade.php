@extends('main.admin.master_admin')

@section('body')
@if (session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss='alert' area-hidden='true'>x</button>
        {{session()->get('message')}}
    </div>
@endif

<form action="{{url('/add_catagory')}}" class="col-lg-6 offset-lg-3" method="POST">
    <h3 class="text-center">Add Catagory</h3>
    @csrf
    <div class="row justify-content-center">
            
            <input class="mr-1" type="text" name="catagory_input" placeholder="Catagory Name">
            <input type="submit" class="btn btn-primary" name="submit"  value="Add Catagory">
    </div>
</form>

@endsection
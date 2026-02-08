@extends('home.master')

@section('content')

    <form action="{{url('/add_catagory')}}" class="col-lg-6 offset-lg-3" method="POST">
        @csrf
        <div class="row justify-content-center">
                <input type="text" name="catagory_input" placeholder="Catagory Name">
                <input type="submit" class="btn btn-primary" name="submit"  value="Add Catagory">
        </div>
    </form>   

@endsection
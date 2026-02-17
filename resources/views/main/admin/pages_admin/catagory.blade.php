@extends('main.admin.master_admin')

@section('body')

@include('main.partails.message')

<form action="{{url('/add_catagory')}}" class="col-lg-6 offset-lg-3" method="POST">
    <h3 class="text-center">Add Catagory</h3>
    @csrf
    <div class="row justify-content-center">
            
            <input class="mr-1" type="text" name="catagory_input" placeholder="Catagory Name">
            <input type="submit" class="btn btn-primary" name="submit"  value="Add Catagory">
    </div>
</form>

<div class="col-lg-6 offset-lg-3 mt-5">
    <table class="table table-bordered table-hover text-center text-white">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Catagory</th>
            <th scope="col">...</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($catagory as $item)    
          <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->catagory_name }}</td>
            <td><a class="btn btn-danger" href="{{url('delete_catagory', $item->id )}}">Delete</a></td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>


@endsection
@extends('layouts.admin')

@section('body')

<x-alert />

<form action="{{route('categories.store')}}" class="col-lg-6 offset-lg-3" method="POST">
    <h3 class="text-center">Add Category</h3>
    @csrf
    <div class="row justify-content-center">
            
            <input class="mr-1" type="text" name="category_input" placeholder="Category Name">
            <input type="submit" class="btn btn-primary" name="submit"  value="Add Category">
    </div>
</form>

<div class="col-lg-6 offset-lg-3 mt-5">
    <table class="table table-bordered table-hover text-center text-white">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Category</th>
            <th scope="col">...</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($categories as $item)    
          <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>
              <form action="{{route('categories.destroy', $item->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>


@endsection
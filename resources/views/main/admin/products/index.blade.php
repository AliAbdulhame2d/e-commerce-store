@extends('main.admin.master')

@section('body')

@include('main.partails.message')

<h3 class="text-center">Products</h3>
<div class="overflow-auto mt-3">
    <table class="table table-bordered table-hover text-center text-white">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Discount</th>
            <th scope="col">Quantity</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">...</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($products as $item)    
          <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->discount_price }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->category }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->image }}</td>
            <td>
                <form class="d-inline" action="{{route('products.destroy', $item->id )}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a class="btn btn-success" href="{{route('products.edit', $item->id )}}">Edit</a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>


@endsection
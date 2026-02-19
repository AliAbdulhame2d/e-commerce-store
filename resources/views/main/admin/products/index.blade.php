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
         @foreach ($products as $product)    
          <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->discount_price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->description }}</td>
            <td ><img class="form-control p-0 m-0" src="{{asset('images/products/'.$product->image)}}" style="height: 100px; width: 100px; border-radius: 0%; "></td>
            <td>
                <form class="d-inline" action="{{route('products.destroy', $product->id )}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a class="btn btn-success" href="{{route('products.edit', $product->id )}}">Edit</a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>


@endsection
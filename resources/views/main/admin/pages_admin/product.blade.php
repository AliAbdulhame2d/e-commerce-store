@extends('main.admin.master_admin')

@section('body')

@include('main.partails.message')

<h3 class="text-center">Add Product</h3>
<div class="card col-lg-7 mx-auto">
    <div class="card-body">
      <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
       <!-- Produktname -->
      <div class="row mb-3">
        <label for="produktname" class="col-sm-3 col-form-label">Produktname</label>
        <div class="col-sm-9">
            <input type="text" class="form-control text-success" name="produktname" id="produktname" placeholder="Produktname eingeben" required>
        </div>
      </div>

      <!-- Preis -->
    <div class="row mb-3">
        <label for="price" class="col-sm-3 col-form-label">Preis (€)</label>
        <div class="col-sm-9">
          <input type="number" class="form-control text-success" id="price" name="price" placeholder="0.00" required>
        </div>
      </div>
      
        <!-- Discount Preis -->
    <div class="row mb-3">
        <label for="discount" class="col-sm-3 col-form-label">Discount (€)</label>
        <div class="col-sm-9">
          <input type="number" class="form-control text-success" id="discount" name="discount" placeholder="0.00">
        </div>
      </div>

     <!-- Quantity -->
     <div class="row mb-3">
        <label for="quantity" class="col-sm-3 col-form-label">Quantity</label>
        <div class="col-sm-9">
          <input type="number" class="form-control text-success" id="quantity" name="quantity" min="0" placeholder="0" required>
        </div>
      </div>

      <!-- Catagory -->
     <div class="row mb-3">
        <label for="catagory" class="col-sm-3 col-form-label">Catagory</label>
        <div class="col-sm-9">
          <select class="form-control text-success" id="catagory" name="catagory">
           
           @foreach ($catagory as $item)
                  <option value="{{$item->catagory_name}}">{{$item->catagory_name}}</option>
           @endforeach

         

          </select>
        </div>
      </div>

      <!-- Beschreibung -->
      <div class="row mb-3">
        <label for="description" class="col-sm-3 col-form-label">Beschreibung</label>
        <div class="col-sm-9">
          <textarea class="form-control text-success" id="description" name="description" rows="3"></textarea>
        </div>
      </div>

        <!-- Image -->
        <div class="row mb-3">
            <label for="image" class="col-sm-3 col-form-label">Image</label>
            <div class="col-sm-9">
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-block enter-btn w-25">Add</button>
        </div>


         </form>
    </div>
  </div>
@endsection
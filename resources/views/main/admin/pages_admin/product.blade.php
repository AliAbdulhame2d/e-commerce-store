@extends('main.admin.master_admin')


@section('body')

<h3 class="text-center">Add Product</h3>
<div class="card col-lg-7 mx-auto">
    <div class="card-body">
      <form action="{{url('/add_product')}}" method="POST" >
        @csrf
        
       <!-- Produktname -->
      <div class="row mb-3">
        <label for="produktname" class="col-sm-3 col-form-label">Produktname</label>
        <div class="col-sm-9">
            <input type="text" class="form-control text-success" name="produktname" id="produktname" placeholder="Produktname eingeben">
        </div>
      </div>

      <!-- Preis -->
    <div class="row mb-3">
        <label for="preis" class="col-sm-3 col-form-label">Preis (€)</label>
        <div class="col-sm-9">
          <input type="number" class="form-control text-success" id="preis" name="prise" placeholder="0.00">
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
          <input type="number" class="form-control text-success" id="quantity" name="quantity" min="0" placeholder="0">
        </div>
      </div>

      <!-- Catagory -->
     <div class="row mb-3">
        <label for="catagory" class="col-sm-3 col-form-label">Catagory</label>
        <div class="col-sm-9">
          <select class="form-control text-success" id="catagory">
            <option value="1">A</option>
            <option value="2">B</option>
            <option value="3">C</option>
          </select>
        </div>
      </div>

      <!-- Beschreibung -->
      <div class="row mb-3">
        <label for="beschreibung" class="col-sm-3 col-form-label">Beschreibung</label>
        <div class="col-sm-9">
          <textarea class="form-control text-success" id="beschreibung" rows="3"></textarea>
        </div>
      </div>

        <!-- Image -->
        <div class="row mb-3">
            <label for="beschreibung" class="col-sm-3 col-form-label">Image</label>
            <div class="col-sm-9">
                <input type="file" class="form-control" id="preis">
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-block enter-btn w-25">Add</button>
        </div>


         </form>
    </div>
  </div>
@endsection
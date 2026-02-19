
<div class="card col-lg-7 mx-auto overflow-auto" style="height: 485px">
    <div class="card-body">
      
      <form action="{{isset ($product) ?
        route('products.update', $product->id) :
        route('products.store')}}" 
        method="POST" enctype="multipart/form-data">
        
          @csrf
          @isset($product)
              @method('PUT')
          @endisset

          <!-- Produktname -->
          <div class="row mb-3">
            <label for="produktname" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control text-success" name="produktname" id="produktname" placeholder="Produktname eingeben" value="{{old('produktname', $product->name ?? '')}}" required>
            </div>
          </div>

          <!-- Preis -->
          <div class="row mb-3">
            <label for="price" class="col-sm-3 col-form-label">Price (€)</label>
            <div class="col-sm-9">
              <input type="number" class="form-control text-success" id="price" name="price" placeholder="0.00" value="{{old('price', $product->price ?? '')}}" required>
            </div>
          </div>
        
          <!-- Discount Preis -->
          <div class="row mb-3">
            <label for="discount" class="col-sm-3 col-form-label">Discount (€)</label>
            <div class="col-sm-9">
              <input type="number" class="form-control text-success" id="discount" name="discount" placeholder="0.00" value="{{old( 'discount', $product->discount_price ?? '') }}">
            </div>
          </div>

          <!-- Quantity -->
          <div class="row mb-3">
            <label for="quantity" class="col-sm-3 col-form-label">Quantity</label>
            <div class="col-sm-9">
              <input type="number" class="form-control text-success" id="quantity" name="quantity" min="0" placeholder="0" value="{{old('quantity', $product->quantity ?? '') }}" required>
            </div>
          </div>

          <!-- Category -->
          <div class="row mb-3">
            <label for="category" class="col-sm-3 col-form-label">Category</label>
            <div class="col-sm-9">
              <select class="form-control text-success" id="category" name="category">
              
              @foreach ($categories as $category)
                      <option value="{{$category->name}}" {{isset($product) && ($category->name == $product->category) ? 'selected' : '' }}>{{$category->name}}</option>
              @endforeach

            

              </select>
            </div>
          </div>

          <!-- Beschreibung -->
          <div class="row mb-3">
            <label for="description" class="col-sm-3 col-form-label">Description</label>
            <div class="col-sm-9">
              <textarea class="form-control text-success" id="description" name="description" rows="3">{{old('description', $product->description ?? '') }}</textarea>
            </div>
          </div>

            <!-- Image -->
            <div class="row mb-3">
                <label for="image" class="col-sm-3 col-form-label">Image</label>
                <div class="col-sm-9" >
                    @if (isset($product) && $product->image)
                        <img class="form-control" src="{{asset('images/products/'.$product->image)}}" style="height: 150px;">
                    @endif
                   <input type="file" class="form-control" id="image" name="image" required>
                 </div>
            </div>

            <div class="d-flex justify-content-center">
              {{-- process : ist der gleiche Name für Header und Button--}}
                <button type="submit" class="btn btn-primary btn-block enter-btn w-25 mb-2">
                  @yield('process')
                </button>
            </div>


         </form>
    </div>
  </div>

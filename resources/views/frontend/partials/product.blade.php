<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>products</span>
          </h2>
 
       </div>
      <div style="width:35%; margin:0 auto;">
         <form action="{{url('/search')}}" method="get">
            @csrf
            <input type="text" placeholder="Search by name" name="search"  >
            <input type="submit" value= "Search" >
         </form>
      </div>

       <div class="row">
       @foreach ($products as $product)
          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                      <a href="" class="option1">
                      Add To Cart
                      </a>
                      <a href="" class="option2">
                      Buy Now
                      </a>
                   </div>
                </div>
                <div class="img-box">
                 
                   <img src="{{'storage/'.$product->image}}" alt="">
                </div>
                <div class="detail-box">
                   <h5>
                     {{$product->name}}
                   </h5>
                   <h6>
                     {{$product->price}}
                   </h6>
                </div>
             </div>
          </div>
          @endforeach
         
            <div class="pt-3 pb-3">
            {!!$products->withQueryString()->links('pagination::bootstrap-5')!!}
            </div>

         </div>
       <div class="btn-box">
          <a href="">
          View All products
          </a>
       </div>
    </div>
 </section>
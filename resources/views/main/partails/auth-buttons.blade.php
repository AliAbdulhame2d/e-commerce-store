@if (Route::has('login'))
           
      @auth
      {{--   <span>  {{auth()->user()->name}} </span>--}}
      <li class="nav-item">
        

         <form method="POST" action="{{route('logout')}}">
         @csrf
         <button class="btn btn-primary m-1" type="submit">Logout</button> 
         </form> 
      </li>
      
      @else
      {{-- @abb Code --}}
      <li class="nav-item">
         <a class="btn btn-primary mr-1 mb-1" href="{{ route('login') }}">Login</a>
      </li>
      <li class="nav-item">
         <a class="btn btn-success" href="{{ route('register') }}">Register</a>
      </li>
      @endauth

@endif

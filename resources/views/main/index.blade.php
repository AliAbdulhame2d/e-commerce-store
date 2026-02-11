 @extends('main.master')

<!-- slider section -->
@section('slider')
@include('main.pages.slider')
@endsection
<!-- end slider section -->

 @section('content')
 <!-- why section -->
 @include('main.pages.why')
 <!-- end why section -->
 
 <!-- arrival section -->
 @include('main.pages.arrival')
 <!-- end arrival section -->
 
 <!-- product section -->
 @include('main.pages.product')
 <!-- end product section -->

 <!-- subscribe section -->
 @include('main.pages.subscribe')
 <!-- end subscribe section -->

 <!-- client section -->
 @include('main.pages.client')
 <!-- end client section -->
 @endsection
 @extends('home.master')

<!-- slider section -->
@section('slider')
@include('home.pages.slider')
@endsection
<!-- end slider section -->

 @section('content')
 <!-- why section -->
 @include('home.pages.why')
 <!-- end why section -->
 
 <!-- arrival section -->
 @include('home.pages.arrival')
 <!-- end arrival section -->
 
 <!-- product section -->
 @include('home.pages.product')
 <!-- end product section -->

 <!-- subscribe section -->
 @include('home.pages.subscribe')
 <!-- end subscribe section -->

 <!-- client section -->
 @include('home.pages.client')
 <!-- end client section -->
 @endsection
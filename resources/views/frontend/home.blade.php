 @extends('layouts.app')

<!-- slider section -->
@section('slider')
@include('frontend.partials.slider')
@endsection
<!-- end slider section -->

 @section('content')
 <!-- why section -->
 @include('frontend.partials.why')
 <!-- end why section -->
 
 <!-- arrival section -->
 @include('frontend.partials.arrival')
 <!-- end arrival section -->
 
 <!-- product section -->
 @include('frontend.partials..product')
 <!-- end product section -->

 <!-- subscribe section -->
 @include('frontend.partials..subscribe')
 <!-- end subscribe section -->

 <!-- client section -->
 @include('frontend.partials..client')
 <!-- end client section -->
 @endsection
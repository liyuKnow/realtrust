@extends('site.master')

@section('content')

<!-- Start slider  -->
@include('site.home.hero_slider')
<!-- End slider  -->

<!-- Advance Search -->
@include('site.home.search')
<!-- / Advance Search -->

<!-- About us -->
@include('site.home.about_us')
<!-- / About us -->

<!-- Latest property -->
@include('site.home.property')
<!-- / Latest property -->

<!-- Service section -->
@include('site.home.services')
<!-- / Service section -->

<!-- Promo Banner Section -->
@include('site.home.banner')
<!-- / Promo Banner Section -->

<!-- Our Agent Section-->
@include('site.home.agents')
<!-- / Our Agent Section-->

<!-- Client Testimonial -->
@include('site.home.testemonial')
<!-- Client Testimonial -->

<!-- Client brand -->
@include('site.home.client_brand')
<!-- / Client brand -->

<!-- Latest blog -->
@include('site.home.blog')
<!-- / Latest blog -->


@endsection
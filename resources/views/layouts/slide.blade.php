@extends('layouts.master')

@section('slide')
  <section class="tm-banner">
    <!-- Flexslider -->
    <div class="flexslider flexslider-banner">
      <ul class="slides">
        <li>
          <div class="tm-banner-inner">
          <h1 class="tm-banner-title">Find <span class="tm-yellow-text">Tour</span> Programs</h1>
          <p class="tm-banner-subtitle">For Your Destinations</p>
          <a href="#more" class="tm-banner-link">Learn More</a> 
        </div>
          <img src="{{asset('img/banner-2.jpg')}}" />
        </li>
        <li>
          <div class="tm-banner-inner">
          <h1 class="tm-banner-title">Lorem <span class="tm-yellow-text">Ipsum</span> Dolor</h1>
          <p class="tm-banner-subtitle">Wonderful Destinations</p>
          <a href="#more" class="tm-banner-link">Learn More</a> 
        </div>
          <img src="{{asset('img/banner-3.jpg')}}" />
        </li>
        <li>
          <div class="tm-banner-inner">
          <h1 class="tm-banner-title">Proin <span class="tm-yellow-text">Gravida</span> Nibhvell</h1>
          <p class="tm-banner-subtitle">Velit Auctor</p>
          <a href="#more" class="tm-banner-link">Learn More</a> 
        </div>
          <img src="{{asset('img/banner-1.jpg')}}" />
        </li>
      </ul>
    </div>      
  </section>
@endsection

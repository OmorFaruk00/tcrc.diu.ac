@extends('layouts.master')
@section('title', 'Tobacco Taxation Details')
@section('content')    
<section class="page-bg">
  <div class="container">
    <div class="" data-aos="fade-up" data-aos-delay="200">
      <h1 class="page-title"> Tobacco Taxation Details</h1>
      <p class="page-desc">Welcome to Tobacco Control and Research Cell (TCRC), DIU.</p>
      <button class="page-btn"> <a href="{{ route('home') }}">Home</a> <i class="fas fa-arrow-right"></i>Our Expertise <i class="fas fa-arrow-right"></i>
        Tobacco Taxation</button>
    </div>
  </div>
</section>

<div class="container py-5">
  <div class="details-body">
      <div class="details-img">
          <img src="{{$data->image_path}}" alt="">                   
      </div>
      {{-- <p class="mt-3">{{$data->created_at}}</p>  --}}
      <div class="details-title">
          <p class="title">{{$data->title}}</p>
      </div>
      <div class="details-desc">           
         <p>{!! $data->description !!}</p>
      </div>
  </div>
</div>



  @endsection
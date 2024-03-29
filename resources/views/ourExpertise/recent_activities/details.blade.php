@extends('layouts.master')
@section('title', 'Recent Activities')

@section('content')

    
</style>
<section class="page-bg">
  <div class="container">
    <div class="" data-aos="fade-up" data-aos-delay="200">
      <h1 class="page-title"> Recent Activites Details</h1>
      <p class="page-desc">Welcome to Tobacco Control and Research Cell (TCRC), DIU.</p>
      <button class="page-btn"> <a href="{{ route('home') }}">Home</a> <i class="fas fa-arrow-right"></i>
        Recent Activites</button>
    </div>
  </div>
</section>

<div class="container py-5">
    <div class="details-body">
        <div class="details-img">
            <img src="{{$activity->image_path}}" alt="">                   
            
        </div>
        <p class="mt-3">{{$activity->created_at}}</p> 
        <div class="details-title">
            <p class="title">{{$activity->title}}</p>
        </div>
        <div class="details-desc">           
           <p>{!! $activity->description !!}</p>
        </div>



    </div>
</div>



  @endsection
@extends('layouts.master')
@section('title', 'Completed Project Details')

@section('content')

    
</style>
<section class="page-bg">
  <div class="container">
    <div class="" data-aos="fade-up" data-aos-delay="200">
      <h1 class="page-title"> Our Completed Project Details</h1>
      <p class="page-desc">Welcome to Tobacco Control and Research Cell (TCRC), DIU.</p>
      <button class="page-btn"> <a href="{{ route('home') }}">Home</a> <i class="fas fa-arrow-right"></i>Projects<i class="fas fa-arrow-right"></i>
        Completed Project</button>
    </div>
  </div>
</section>

<div class="container py-5">
  <div class="details-body">
      <div class="details-img">
          <img src="{{$data->image_path}}" alt="">                   
      </div>
      <div class="details-title">
          <p class="title">{{$data->title}}</p>
      </div>
      <div class="details-desc">           
         <p>{!! $data->description !!}</p>
      </div>
  </div>
</div>



  @endsection
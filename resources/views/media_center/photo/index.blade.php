@extends('layouts.master')
@section('title', 'Photos')
@section('content')    
</style>
<section class="page-bg">
  <div class="container">
    <div class="" data-aos="fade-up" data-aos-delay="200">
      <h1 class="page-title"> Photos</h1>
      <p class="page-desc">Welcome to Tobacco Control and Research Cell (TCRC), DIU.</p>
      <button class="page-btn"> <a href="{{ route('home') }}">Home</a> <i class="fas fa-arrow-right"></i>Media Center<i class="fas fa-arrow-right"></i>
        Photos</button>
    </div>
  </div>
</section>
<div id="portfolio" class="portfolio py-4">
    <div class="container py-5" >  
      <div class="row portfolio-container"  data-aos-delay="200">
        @if($photos)
        @foreach ($photos->data as $index => $item)
        <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-app">
          <a href="{{$item->image_url}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
            title="photo">
            <img src="{{$item->image_url}}" class="" alt="" style="height: 200px;width:100%">
          </a>
        </div>
        @endforeach
        @endif      
        

      </div>

    </div>
  </div><!-- End Portfolio Section -->



  @endsection
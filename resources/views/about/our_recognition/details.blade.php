@extends('layouts.master')
@section('title', 'Our Recognition')
@section('content') 
<style>
     .details-img {
        height: 500px;
        display: flex;
        justify-content: center

    }
    .details-img img{
        height: 100%;
        width: 60%;
    }
</style>
<section class="page-bg">
  <div class="container">
    <div class="" data-aos="fade-up" data-aos-delay="200">
      <h1 class="page-title"> Our Recognition Details</h1>
      <p class="page-desc">Welcome to Tobacco Control and Research Cell (TCRC), DIU.</p>
      <button class="page-btn"> <a href="{{ route('home') }}">Home</a> <i class="fas fa-arrow-right"></i>About <i class="fas fa-arrow-right"></i>
        Our Recognition</button>
    </div>
  </div>
</section>

<div class="container py-5">
  <div class="details-body">
      <div class="details-img">
          <img src="{{$data->file_path}}" alt="">          
        </div>
      <div class="details-title pt-3">
          <h4 class="title">{{$data->title}}</h4>
      </div>
      <div class="details-desc">
          {!! $data->description !!}
      </div>
      {{-- <a class="btn_read" href="{{$data->file_link}}" target="_blank" download="downloaded_file.pdf">Download</a> --}}
  </div>
</div>



  @endsection
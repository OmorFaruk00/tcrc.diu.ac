@extends('layouts.master')
@section('title', 'Public Health Details')
@section('content')    
<section class="page-bg">
  <div class="container">
    <div class="" data-aos="fade-up" data-aos-delay="200">
      <h1 class="page-title"> Public Health Details</h1>
      <p class="page-desc">Welcome to Tobacco Control and Research Cell (TCRC), DIU.</p>
      <button class="page-btn"> <a href="{{ route('home') }}">Home</a> <i class="fas fa-arrow-right"></i>Our Expertise <i class="fas fa-arrow-right"></i>
        Public Health</button>
    </div>
  </div>
</section>

<div class="container py-5">
  <div class="clearfix">
      <h4 class="pb-3">{{$data->title}}</h4>     
      <a href="javascript:void(0);" onclick="openModal()">
          <img src="{{$data->image_path}}" alt="" class="article-img">
      </a>   
      <div class="content-desc" style="text-align: justify">{!! $data->description !!}</div>     
  </div>
</div>
<div id="imageModal" class="image-modal">
  <span class="close-btn" onclick="closeModal()">&times;</span>
  <img class="modal-content" id="modalImage">
</div>

  <!-- JavaScript for Modal -->
  <script>
    function openModal() {
        document.getElementById("imageModal").style.display = "flex";
        document.getElementById("modalImage").src = "{{$data->image_path}}";
    }
  
    function closeModal() {
        document.getElementById("imageModal").style.display = "none";
    }
  </script>
  @endsection
@extends('layouts.master')
@section('title', 'Journal Article Details')
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
            <h1 class="page-title"> Journal Article Details</h1>
            <p class="page-desc">Welcome to Tobacco Control and Research Cell (TCRC), DIU.</p>
            <button class="page-btn"> <a href="{{ route('home') }}">Home</a> <i class="fas fa-arrow-right"></i>Library <i class="fas fa-arrow-right"></i>Article <i class="fas fa-arrow-right"></i>
                Journal Article</button>
        </div>
    </div>
</section>


<div class="container py-5">
    <div class="clearfix">
        <h4 class="pb-3">{{$data->title}}</h4>

        <!-- Clickable Image -->
        <a href="javascript:void(0);" onclick="openModal()">
            <img src="{{$data->file_path}}" alt="" class="library-img">
        </a>

        <!-- Description -->
        <div class="content-desc" style="text-align: justify">{!! $data->description !!}</div>

        <!-- Download Button -->
        <a class="btn_read" href="{{$data->file_link}}" target="_blank" download="downloaded_file.pdf">Download</a>
    </div>
</div>

<!-- Image Modal -->
<div id="imageModal" class="image-modal">
    <span class="close-btn" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modalImage">
</div>

  <!-- JavaScript for Modal -->
  <script>
    function openModal() {
        document.getElementById("imageModal").style.display = "flex";
        document.getElementById("modalImage").src = "{{$data->file_path}}";
    }
  
    function closeModal() {
        document.getElementById("imageModal").style.display = "none";
    }
  </script>

@endsection

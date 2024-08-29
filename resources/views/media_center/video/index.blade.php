@extends('layouts.master')
@section('title', 'videos')
@section('content')    
</style>
<section class="page-bg">
  <div class="container">
    <div class="" data-aos="fade-up" data-aos-delay="200">
      <h1 class="page-title"> Videos</h1>
      <p class="page-desc">Welcome to Tobacco Control and Research Cell (TCRC), DIU.</p>
      <button class="page-btn"> <a href="{{ route('home') }}">Home</a> <i class="fas fa-arrow-right"></i>Media Center<i class="fas fa-arrow-right"></i>
        Videos</button>
    </div>
  </div>
</section>

<section>
    <div class="container">
        <div class="row">
          @if($videos)
          @foreach ($videos->data as $index => $item )          
            <div class="col-xl-3 col-md-3 col-sm-12 mb-4">
              <iframe width="100%" height="250" src="https://www.youtube.com/embed/{{ $item->code }}" allowfullscreen>
              </iframe>
            </div>
              
          @endforeach
            @endif
        </div>

    </div>
</section>





  @endsection
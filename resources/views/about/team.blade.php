@extends('layouts.master')

@section('title', 'about_team')

@section('content')
<section class="page-bg">
  <div class="container">
        <div class="" data-aos="fade-up" data-aos-delay="200">
          <h1 class="page-title"> About Resource Teams</h1>
          <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU.</p>
          <button class="page-btn"> <a href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> Resource</button>         
        </div>        
    </div>
</section>
@if(!empty($teams))
  <x-about-team :teams="$teams"></x-about-team>
  @endif
  
@endsection
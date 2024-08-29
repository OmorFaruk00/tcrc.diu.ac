@extends('/layouts.master')


@section('title', 'executive')

@section('content')

<section class="page-bg">
    <div class="container">
          <div class="" >
            <h1 class="page-title"> About Executive Teams</h1>
            <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU.</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> Executive</button>         
          </div>        
      </div>
</section>

@if(!empty($teams))
  <x-about-team :teams="$teams"></x-about-team>
  @endif


@endsection
@extends('layouts.master')
@section('title', 'Recent Activities')

@section('content')

    
</style>
<section class="page-bg">
  <div class="container">
    <div class="" data-aos="fade-up" data-aos-delay="200">
      <h1 class="page-title">Our Recent Activites</h1>
      <p class="page-desc"> Welcome to Tobacco Control and Research Cell (TCRC), DIU.</p>
      <button class="page-btn"> <a href="{{ route('home') }}">Home</a> <i class="fas fa-arrow-right"></i>
        Recent Activites</button>
    </div>
  </div>
</section>
<div class="container py-5">
 
  <div class="row">
    @if($response)
        @foreach ($response->data as $index =>$item)  
      <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                  
        
          <div class="card-body">
              <img src="{{$item->image_path}}" alt="" style="width:100%;height:200px">
              <div class="info">
                  <h5>{{$item->title}}</h5>
                  <h6 class="description">
                     {!! $item->description !!}
                  </h6>
                  <a href="{{route('recent_activities_details',['id'=>$item->id])}}" style="margin-top: 20px" class="btn_read " target="_blank">Read More</a>
              </div>
          </div>
        </div>
          @endforeach            
        @endif  
     
      
  </div>
</div>

</section>
  @endsection
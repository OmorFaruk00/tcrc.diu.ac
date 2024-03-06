@extends('layouts.master')

@section('title', 'National Partners')

@section('content')
<style>
    .clients{
  text-align: left
}

.clients img {
    max-width: 50% !important;
    
}
.fas{
  color: #000 !important;
  margin: 0px 5px;
}
</style>
<section class="page-bg">
    <div class="container">
      <div class="" data-aos="fade-up" data-aos-delay="200">
        <h1 class="page-title">Our National Partners</h1>
        <p class="page-desc">Welcome to Welcome to Tobacco Control and Research Cell (TCRC), DIU.</p>
        <button class="page-btn"> <a href="{{ route('home') }}">Home</a> <i class="fas fa-arrow-right"></i>Networks<i class="fas fa-arrow-right"></i>
            National Partners</button>
      </div>
    </div>
  </section>

<section id="publication" class="publication">
  <div class="container" data-aos="fade-up">   

    <div class="tab-content py-5">
      <div class="tab-pane active show">
        <div class="row"> 
  
          <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
            <a href="https://www.roadsafetyngos.org/" target="_blank">
            <img src="{{asset('assets/img/network/national/alliance_logo_464x200.png')}}" class="img-fluid" alt="" style="width:100%; height:100px">
          </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
            <a href="https://www.brac.net/" target="_blank">
              <img src="{{asset('assets/img/network/national/BRAC_logo.svg.png')}}" class="img-fluid" alt="" style="width:100%; height:100px">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
              <a href="https://clpatrust.org/" target="_blank">
              <img src="{{asset('assets/img/network/national/clpa_logo_wt.png')}}" class="img-fluid" alt="" style="width:100%; height:100px">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
              <a href="https://diu.ac/" target="_blank">
              <img src="{{asset('assets/img/network/national/DIU Logo High.png')}}" class="img-fluid" alt="" style="width:100%; height:100px">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
              <a href="http://www.brta.gov.bd/" target="_blank">
              <img src="{{asset('assets/img/network/national/Emblem_of_Bangladesh_Road_Transport_Authority_(BRTA).svg.png')}}" class="img-fluid" alt="" style="width:50%;height:80%">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
              <a href="https://www.iphrc.org/" target="_blank">
              <img src="{{asset('assets/img/network/national/IPHRC Logo.jpeg')}}" class="img-fluid" alt="" style="width:100%; height:100px">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
              <a href="https://interpressnetwork.org/" target="_blank">
              <img src="{{asset('assets/img/network/national/IPNLogoo.png')}}" class="img-fluid" alt="" style="width:100%; height:100px">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
              <a href="https://www.nirapadsarakchai.org/" target="_blank">
              <img src="{{asset('assets/img/network/national/Nirapad Sorok CHai.png')}}" class="img-fluid" alt="" style="width:100%; height:100px">
            </a>
            </div>
            
  
          
  
        </div>
        
      </div>

     

      

     

     

    </div>

  </div>
</section>




 
 
@endsection
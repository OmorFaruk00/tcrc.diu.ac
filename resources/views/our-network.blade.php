@extends('layouts.master')

@section('title', 'network')

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
            <h1 class="page-title">Our Networks</h1>
            <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU.</p>
            <button class="page-btn"> <a href="{{route('home')}}"> Home </a>  <i class="fas fa-arrow-right"></i> Our Network</button>         
          </div>        
      </div>
</section>

<section id="" class=" py-5">
    <div class="container" data-aos="zoom-in">
      <h2 class="text-center title-header">OUR NETWORKS</h2>
      <h3 class="text-left mb-4">International Partners</h3>
      <div class="row">


        <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
          <img src="assets/img/network/international/Asian_Development_Bank_logo.svg.png" class="" alt="" style="width:100%; height:100px">
        </div>
        <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
            <img src="assets/img/network/international/download.png" class="img-fluid" alt="" >
        </div>
        <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
            <img src="assets/img/network/international/png-clipart-green-oxfam-logo-oxfam-logo-icons-logos-emojis-shop-logos-thumbnail.png" class="img-fluid" alt="" style="width: 100%; height:100px">
        </div>
        <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
            <img src="assets/img/network/international/download.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
            <img src="assets/img/network/international/The Union.png" class="img-fluid" alt="" style="width:100%; height:100px">
        </div>

       
      </div>

      <div class="row">
        <h3>National Partners</h3>


        <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
          <img src="assets/img/network/national/alliance_logo_464x200.png" class="img-fluid" alt="" style="width:100%; height:100px">
        </div>
        <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
            <img src="assets/img/network/national/BRAC_logo.svg.png" class="img-fluid" alt="" style="width:100%; height:100px">
          </div>
          <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
            <img src="assets/img/network/national/clpa_logo_wt.png" class="img-fluid" alt="" style="width:100%; height:100px">
          </div>
          <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
            <img src="assets/img/network/national/DIU Logo High.png" class="img-fluid" alt="" style="width:100%; height:100px">
          </div>
          <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
            <img src="assets/img/network/national/Emblem_of_Bangladesh_Road_Transport_Authority_(BRTA).svg.png" class="img-fluid" alt="" style="width:50%;height:80%">
          </div>
          <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
            <img src="assets/img/network/national/IPHRC Logo.jpeg" class="img-fluid" alt="" style="width:100%; height:100px">
          </div>
          <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
            <img src="assets/img/network/national/IPNLogoo.png" class="img-fluid" alt="" style="width:100%; height:100px">
          </div>
          <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
            <img src="assets/img/network/national/Nirapad Sorok CHai.png" class="img-fluid" alt="" style="width:100%; height:100px">
          </div>
          <div class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
            <img src="assets/img/network/national/zzz.jpg" class="img-fluid" alt="" style="width:100%; height:100px">
          </div>

        

      </div>

    </div>
  </section>


 
 
@endsection
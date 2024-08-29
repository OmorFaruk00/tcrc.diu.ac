@extends('layouts.master')
@section('title', 'BD-TPack')
@section('content')
<style>



  .publication{
    background: #fff !important;
    border-radius: 20px;
    position: relative;
  }
  .publication h4{
    color: #000;
    text-align: center
  }
  /* .publication:hover{
    background: #FDC106 !important;
  } */
  .publication:hover h4{
    color: #000 !important;
  
  }  
  .area-read:hover{
    background: #093C34;
    color: #fff !important;
  }
  .publication-image{
    width: 80px;
    height: 80px;
    background: #135C51;
    border-radius: 50%;
    border: 1px solid;
    margin-bottom: 20px;
  
  }
  .area-read{
    background: #FDC106;
    color: #000;
    padding: 5px 10px;
    border-radius: 5px;
  }
  .publication:before,
.publication:after{
    content: "";
    background: #f3f3f3;
    border-radius: 20px;
    box-shadow: 4px 4px 2px rgba(0,0,0,0.2);
    position: absolute;
    left: 15px;
    top: 15px;
    bottom: 15px;
    right: 15px;
    z-index: -1;
}
.publication:after{
    background: transparent;
    width: 100px;
    height: 100px;
    border: 15px solid #f27f21;
    border-top: none;
    border-right: none;
    border-radius: 0 0 0 20px;
    box-shadow: none;
    top: auto;
    left: -10px;
    bottom: -10px;
    right: auto;
}


</style>
<section class="page-bg">
    <div class="container">
        <div class="" data-aos="fade-up" data-aos-delay="200">
            <h1 class="page-title"> BD-TPack</h1>
            <p class="page-desc">Welcome to Tobacco Control and Research Cell (TCRC), DIU.</p>
            <button class="page-btn"> <a href="{{ route('home') }}">Home</a> <i class="fas fa-arrow-right"></i>
                BD-TPack</button>
        </div>
    </div>
</section>

<div style="background:#F6F9FE">


<div class="container py-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5"  data-aos-delay="50">
          <div class="publication" style="width: 100%">
            <div class="d-flex justify-content-center px-4 pt-4">
              <div><img src="assets/img/area/area1.png" alt="" class="publication-image"></div>
              
            </div>
            <div class="px-4">
              <h4>Road Safety</h4>
            </div>
            <div class="d-flex justify-content-center p-4">
              <a href="" class="area-read" target="_blank"> Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5"  data-aos-delay="100">
          <div class="publication" style="width: 100%">
            <div class="d-flex justify-content-between px-4 pt-4">
              <div class=""><img src="assets/img/area/area2.png" alt="" class="publication-image"></div>
             
            </div>
            <div class="px-4">
              <h4>Climate Change</h4>
            </div>
            <div class="p-4">
              <a href="" class="area-read" target="_blank"> Read More </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5"  data-aos-delay="100">
          <div class="publication" style="width: 100%">
            <div class="d-flex justify-content-between px-4 pt-4">
              <div class=""><img src="assets/img/area/area3.png" alt="" class="publication-image"></div>              
            </div>
            <div class="px-4">
              <h4>Climate Migration</h4>
            </div>
            <div class="p-4">
              <a href="" class="area-read" target="_blank"> Read More 
                 </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5"  data-aos-delay="100">
          <div class="publication" style="width: 100%">
            <div class="d-flex justify-content-between px-4 pt-4">
              <div ><img src="assets/img/area/area4.png" alt="" class="publication-image"></div>
             
            </div>
            <div class="px-4">
              <h4>Public Health</h4>
            </div>
            <div class="p-4">
              <a href="" class="area-read" target="_blank"> Read More 
                  </a>
            </div>
          </div>
        </div>


      </div>
  </div>
</div>




@endsection
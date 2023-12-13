@extends('layouts.master')

@section('title', 'electronic media')

@section('content')
<style>
        #body-bg{
        background:#F4F4F4;        
    }
    .mainstream-body {
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }

    .mainstream-info {
        padding: 10px;
        background: #F6F7F9;
        /* margin-bottom:30px; */
    }

    .mainstream-info h5 {
        font-size: 18px;
        color: #07205C;
        font-weight: 500;
        text-align: justify;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
 
</style>
<section class="page-bg">
    <div class="container">
        <div class="" data-aos="fade-up" data-aos-delay="200">
            <h1 class="page-title">Electronic Media</h1>
            <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU.</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a> <i class="fas fa-arrow-right"></i>
              Electronic Media</button>
        </div>
    </div>
</section>

<section id="body-bgrr" class="publication">
    <div class="container">


        <div class="row my-4">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="#"></a>
                <div class="mainstream-body">
                    <img src="assets/img/climate1.png" alt="" style="width:100%;height:200px">
                    <div class="mainstream-info">
                        <h5>COP 27-Climate Change Debriefing Program at Parliament Members Club</h5>
                        <p>
                            24 March 2023
                        </p>
                       
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="#"></a>
                <div class="mainstream-body">
                    <img src="assets/img/climate1.png" alt="" style="width:100%;height:200px">
                    <div class="mainstream-info">
                        <h5>COP 27-Climate Change Debriefing Program at Parliament Members Club</h5>
                        <p>
                            24 March 2023
                        </p>
                       
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="#"></a>
                <div class="mainstream-body">
                    <img src="assets/img/climate1.png" alt="" style="width:100%;height:200px">
                    <div class="mainstream-info">
                        <h5>COP 27-Climate Change Debriefing Program at Parliament Members Club</h5>
                        <p>
                            24 March 2023
                        </p>
                       
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="#"></a>
                <div class="mainstream-body">
                    <img src="assets/img/climate1.png" alt="" style="width:100%;height:200px">
                    <div class="mainstream-info">
                        <h5>COP 27-Climate Change Debriefing Program at Parliament Members Club</h5>
                        <p>
                            24 March 2023
                        </p>
                       
                    </div>
                </div>
                </a>
            </div>
      
            
         
        </div>
    </div>

</section>


@endsection
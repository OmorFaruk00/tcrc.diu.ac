@extends('layouts.master')

@section('title', 'mainstream media')

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
    .mainstream-info p{
       color:#000;
    }
    .fas {
    color: #000 !important;
    margin: 0px 5px;
  }
 
</style>
<section class="page-bg">
    <div class="container">
        <div class="" data-aos="fade-up" data-aos-delay="200">
            <h1 class="page-title">Mainstream Media</h1>
            <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU.</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a> <i class="fas fa-arrow-right"></i>
              Mainstream Media</button>
        </div>
    </div>
</section>

<section id="body-bgrr" class="publication">
    <div class="container">


        <div class="row my-4">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                <a href="{{route('mainstream1')}}" target="_blank">
                <div class="mainstream-body">
                    <img src="assets/img/mainstream/mainstream1.jpg" alt="" style="width:100%;height:200px">
                    <div class="mainstream-info">                        
                        <h5>22 organizations demand ban on e-cigarette in Bangladesh</h5>
                        <p>
                            November 25, 2023
                        </p>
                    </div>
                </div>
               </a>                       
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                <a href="{{route('mainstream2')}}" target="_blank">
                <div class="mainstream-body">
                    <img src="assets/img/mainstream/mainstream2.jpeg" alt="" style="width:100%;height:200px">
                    <div class="mainstream-info">                        
                        <h5>E-cigarettes and tobacco are destroying youth society: Deputy Speaker</h5>
                        <p>
                            August 20, 2023
                        </p>
                    </div>
                </div>
                </a>                       
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                <a href="{{route('mainstream3')}}" target="_blank">
                <div class="mainstream-body">
                    <img src="assets/img/mainstream/mainstream3.jpeg" alt="" style="width:100%;height:200px">
                    <div class="mainstream-info">                        
                        <h5>Environment Minister for stopping tobacco farming</h5>
                        <p>
                            22 January 2023
                        </p>                                           
                    </div>
                </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                <a href="{{route('mainstream4')}}" target="_blank">
                <div class="mainstream-body">
                    <img src="assets/img/mainstream/mainstream4.png" alt="" style="width:100%;height:200px">
                    <div class="mainstream-info">                        
                        <h5>Fresh law for road safety demanded</h5>
                        <p>
                            22 January 2023
                        </p>                                           
                    </div>
                </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                <a href="{{route('mainstream5')}}" target="_blank">
                <div class="mainstream-body">
                    <img src="assets/img/mainstream/mainstream5.jpeg" alt="" style="width:100%;height:200px">
                    <div class="mainstream-info">                        
                        <h5>Govt plan cultivation cotton on tobacco land - Tk 6000cr import cost will be saved every year</h5>
                        <p>
                            12 February 2023
                        </p>                                           
                    </div>
                </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                <a href="{{route('mainstream6')}}" target="_blank">
                <div class="mainstream-body">
                    <img src="assets/img/mainstream/mainstream6.jpg" alt="" style="width:100%;height:200px">
                    <div class="mainstream-info">                        
                        <h5>তামাক পণ্যের মোড়কে ৯০ শতাংশ সচিত্র সতর্কবাণী দেওয়ার সুপারিশ</h5>
                        <p>
                             2023
                        </p>                                           
                    </div>
                </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                <a href="{{route('mainstream7')}}" target="_blank">
                <div class="mainstream-body">
                    <img src="assets/img/mainstream/mainstream4.png" alt="" style="width:100%;height:200px">
                    <div class="mainstream-info">                        
                        <h5>Comprehensive road safety law’ to halve fatalities from road mishaps: Speakers</h5>
                        <p>
                             2023
                        </p>                                           
                    </div>
                </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                <a href="{{route('mainstream8')}}" target="_blank">
                <div class="mainstream-body">
                    <img src="assets/img/mainstream/mainstream8.jpeg" alt="" style="width:100%;height:200px">
                    <div class="mainstream-info">                        
                        <h5>Seminar on "E-cigarette: The new threat to the youth and the way to ban in Bangladesh"</h5>
                        <p>
                             2023
                        </p>                                           
                    </div>
                </div>
            </a>
            </div>

           
            
         
        </div>
    </div>

</section>


@endsection
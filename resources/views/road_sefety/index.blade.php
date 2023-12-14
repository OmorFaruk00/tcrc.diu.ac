@extends('layouts.master')

@section('title', 'Road Safety')

@section('content')
<style>
       #body-bg{
        background:#F4F4F4;        
    }
    .card-body {
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }

    .info {
        padding: 30px;
        /* margin-bottom:30px; */
    }

    .info h5 {
        color: #000;
        font-weight: 500;
        text-align: justify;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .info p {
        text-align: justify;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .fas {
    color: #000 !important;
    margin: 0px 5px;
  }
</style>
<section class="page-bg">
    <div class="container">
        <div class="" data-aos="fade-up" data-aos-delay="200">
            <h1 class="page-title">Road Safety</h1>
            <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU.</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a> <i class="fas fa-arrow-right"></i>
                Road Safety</button>
        </div>
    </div>
</section>

<section id="body-bg" class="publication">
    <div class="container">


        <div class="row my-5">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card-body">
                    <img src="assets/img/road.jpg" alt="" style="width:100%;height:200px">
                    <div class="info">
                        <h5>Program Report: Roundtable Meeting on Road Safety Law - Bangladesh Perspective</h5>
                        <p>
                            The roundtable meeting on "Road Safety Law: Bangladesh Perspective" was organized by the Road Safety Coalition Bangladesh at Hotel Intercontinental, Dhaka. The discussion aimed
                        </p>
                        <a href="{{route('road_safety_1')}}" class="btn btn-warning" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
            
            
            
        </div>
    </div>

</section>


@endsection
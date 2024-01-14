@extends('layouts.master')

@section('title', 'climate migration')

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
            <h1 class="page-title">Climate Migration</h1>
            <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU.</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a> <i class="fas fa-arrow-right"></i>
                Climate Migration</button>
        </div>
    </div>
</section>

<section id="body-bg" class="">
    <div class="container">


        <div class="row my-5">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card-body">
                    <img src="assets/img/migration1.png" alt="" style="width:100%;height:200px">
                    <div class="info">
                        <h5>Seminar on "Importance of Standard Packaging Model to Protect Tobacco Tax Evasion in Bangladesh"</h5>
                        <p>
                            Speakers at a seminar said that it has become necessary to introduce the standard packaging for tobacco products as well the plain packaging in order to prevent revenue evasion.
                        </p>
                        <a href="{{route('migration_1')}}" class="btn btn-warning" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card-body">
                    <img src="assets/img/migration2.png" alt="" style="width:100%;height:200px">
                    <div class="info">
                        <h5>Textiles and Jute Minister's support for strengthening and amendment Tobacco Control Act- TCRC team met with the Minister</h5>
                        <p>
                            Tobacco seriously threatens public health, social degradation, the economy, and the environment. According to a study by the Bangladesh Cancer Society in 2018, the government's revenue from
                        </p>
                        <a href="{{route('migration_2')}}" class="btn btn-warning" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
            
            
            
        </div>
    </div>

</section>


@endsection
@extends('layouts.master')

@section('title', 'public awareness')

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
</style>
<section class="page-bg">
    <div class="container">
        <div class="" data-aos="fade-up" data-aos-delay="200">
            <h1 class="page-title">Public <A></A>Awareness</h1>
            <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU.</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a> <i class="fas fa-arrow-right"></i>
                Public Awareness</button>
        </div>
    </div>
</section>

<section id="body-bg" class="publication">
    <div class="container">


        <div class="row my-4">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card-body">
                    <img src="assets/img/climate1.png" alt="" style="width:100%;height:200px">
                    <div class="info">
                        <h5>COP 27-Climate Change Debriefing Program at Parliament Members Club</h5>
                        <p>
                            Team Dhaka International University is at COP 27-Climate Change Debriefing Program at
                            Parliament Members Club, Bangladesh National Parliament, Dhaka.
                        </p>
                        <a href="{{route('public_awereness1')}}" class="btn btn-warning" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card-body">
                    <img src="assets/img/climate2.png" alt="" style="width:100%;height:200px">
                    <div class="info">
                        <h5>Dhaka International University along with OXFAM Bangladesh conducted a COP side event on
                            “Equity and Just Transition Bangladesh Insights at COP 28”</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto id facere iusto cum
                            quas. Placeat ab provident temporibus repellat laboriosam quia fugit odio incidunt, rerum
                            fuga earum, ratione nostrum quis aliquid animi consequatur. Vitae ut delectus atque,
                        </p>
                        <a href="{{route('public_awereness2')}}" class="btn btn-warning" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card-body">
                    <img src="assets/img/climate3.png" alt="" style="width:100%;height:200px">
                    <div class="info">
                        <h5>The Multi-stakeholder Preparatory Workshop on "COP28 Influencing Arbitrations"</h5>
                        <p>
                            The Multi-stakeholder Preparatory Workshop on "COP28 Influencing Arbitrations" jointly
                            organized by Dhaka International University, CANSA, and OXFAM at Hotel Intercontinental,
                            Dhaka today (11 November 2023).
                        </p>
                        <a href="{{route('public_awereness3')}}" class="btn btn-warning" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card-body">
                    <img src="assets/img/united.png" alt="" style="width:100%;height:200px">
                    <div class="info">
                        <h5>United Nations Framework Convention on Climate Change</h5>
                        <p>
                            Dhaka International University has received international recognition (Observer Status) from
                            the United Nations Framework Convention on Climate Change (UNFCCC)..
                        </p>
                        <a href="{{route('public_awereness4')}}" class="btn btn-warning" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


@endsection
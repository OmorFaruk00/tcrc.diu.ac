@extends('layouts.master')

@section('title', 'Advocacy')

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
            <h1 class="page-title">Advocacy</h1>
            <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU.</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a> <i class="fas fa-arrow-right"></i>
                Advocacy</button>
        </div>
    </div>
</section>

<section id="body-bg" class="publication">
    <div class="container">


        <div class="row my-5">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card-body">
                    <img src="assets/img/activity/activity4.png" alt="" style="width:100%;height:200px">
                    <div class="info">
                        <h5>22 organizations demand ban on e-cigarette in Bangladesh</h5>
                        <p>
                            The organisations argued that the activities of tobacco companies in the production and expansion of e-cigarettes in the country may cause a serious threat to public health. 
                        </p>
                        <a href="{{route('advocacy1')}}" class="btn btn-warning" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card-body">
                    <img src="assets/img/activity/activity5.png" alt="" style="width:100%;height:200px">
                    <div class="info">
                        <h5>Health Ministry’s Proposal to Ban E-Cigarettes is Commendable</h5>
                        <p>
                            Recently, the drafting amendment of the Smoking and Tobacco Products Usage (Control) Act-2005 (amendment 2013) has included a provision banning the production and marketing of E-Cigarettes,
                        </p>
                        <a href="{{route('advocacy2')}}" class="btn btn-warning" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card-body">
                    <img src="assets/img/activity/activity8.png" alt="" style="width:100%;height:200px">
                    <div class="info">
                        <h5>Tobacco Tax Policy Reformation for Protecting Public Health</h5>
                        <p>
                            The lawmakers called upon the government to impose specific taxes on cigarettes and other tobacco products in the upcoming budget to protect public health and increase revenue income. Tobacco 
                        </p>
                        <a href="{{route('advocacy3')}}" class="btn btn-warning" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
            
            
            
        </div>
    </div>

</section>


@endsection
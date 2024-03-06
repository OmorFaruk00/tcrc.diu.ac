@extends('layouts.master')
@section('title', 'BD-TPack')
@section('content')
<style>
   
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

<section id="executive">
    <div class="container">
        <div class="owl-carousel owl-theme" id="activities">
            <div class="item">
                <div class="activitie mb-4">
                    <div class="activitie-img">
                        <img src="assets/img/activity/activity1.png" class="img-fluid" alt="">

                    </div>
                    <div class="activitie-info">
                        <h4>Program Report: Roundtable Meeting on Road Safety Law - Bangladesh Perspective
                        </h4>
                        <p>The roundtable meeting on Road Safety Law Bangladesh Perspective was organized by the Road
                            Safety
                            Coalition Bangladesh at Hotel Intercontinental, Dhaka. </p>
                        <p>21st October, 2023</p>
                        <a href="{{ route('activity1') }}" target="_blank" class="read_more mb-4">Read More</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="activitie">
                    <div class="activitie-img">
                        <img src="assets/img/activity/activity1.png" class="img-fluid" alt="">

                    </div>
                    <div class="activitie-info">
                        <h4>Program Report: Roundtable Meeting on Road Safety Law - Bangladesh Perspective
                        </h4>
                        <p>The roundtable meeting on Road Safety Law Bangladesh Perspective was organized by the Road
                            Safety
                            Coalition Bangladesh at Hotel Intercontinental, Dhaka. </p>
                        <p>21st October, 2023</p>
                        <a href="{{ route('activity1') }}" target="_blank" class="read_more mb-4">Read More</a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="activitie">
                    <div class="activitie-img">
                        <img src="assets/img/activity/activity1.png" class="img-fluid" alt="">

                    </div>
                    <div class="activitie-info">
                        <h4>Program Report: Roundtable Meeting on Road Safety Law - Bangladesh Perspective
                        </h4>
                        <p>The roundtable meeting on Road Safety Law Bangladesh Perspective was organized by the Road
                            Safety
                            Coalition Bangladesh at Hotel Intercontinental, Dhaka. </p>
                        <p>21st October, 2023</p>
                        <a href="{{ route('activity1') }}" target="_blank" class="read_more mb-4">Read More</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="activitie">
                    <div class="activitie-img">
                        <img src="assets/img/activity/activity1.png" class="img-fluid" alt="">

                    </div>
                    <div class="activitie-info">
                        <h4>Program Report: Roundtable Meeting on Road Safety Law - Bangladesh Perspective
                        </h4>
                        <p>The roundtable meeting on Road Safety Law Bangladesh Perspective was organized by the Road
                            Safety
                            Coalition Bangladesh at Hotel Intercontinental, Dhaka. </p>
                        <p>21st October, 2023</p>
                        <a href="{{ route('activity1') }}" target="_blank" class="read_more mb-4">Read More</a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="activitie">
                    <div class="activitie-img">
                        <img src="assets/img/activity/activity1.png" class="img-fluid" alt="">

                    </div>
                    <div class="activitie-info">
                        <h4>Program Report: Roundtable Meeting on Road Safety Law - Bangladesh Perspective
                        </h4>
                        <p>The roundtable meeting on Road Safety Law Bangladesh Perspective was organized by the Road
                            Safety
                            Coalition Bangladesh at Hotel Intercontinental, Dhaka. </p>
                        <p>21st October, 2023</p>
                        <a href="{{ route('activity1') }}" target="_blank" class="read_more mb-4">Read More</a>
                    </div>
                </div>
            </div>
           
           
        </div>

        
    </div>
    </div>
    </div>
</section>






<script>
    var owl = $('#activities');
        owl.owlCarousel({
            margin: 20,
            dots: true,
            nav: true,
            navText: [
                "<i class='fa fa-chevron-left'></i>",
                "<i class='fa fa-chevron-right'></i>"
            ],
            autoplay: true,
            autoplayHoverPause: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
</script>






@endsection
@extends('layouts.master')

@section('title', 'research')

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
            <h1 class="page-title">Our Research</h1>
            <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU.</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a> <i class="fas fa-arrow-right"></i>
                Research</button>
        </div>
    </div>
</section>

<section id="body-bg" class="publication">
    <div class="container">


        <div class="row my-4">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card-body">
                    <img src="assets/img/publication/publication.png" alt="" style="width:100%;height:200px">
                    <div class="info">
                        <h5>TOBACCO CONTROL LAWS OF BANGLADESH:
                            ANALYSIS OF GAPS AND PROPOSED REFORMS</h5>
                        <p>
                            The materials presented and the opinions expressed
                    in this publication are those of the researchers and
                    do not necessary reﬂect those of DIU.
                        </p>
                        <a href="{{route('research1')}}" class="btn btn-warning" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card-body">
                    <img src="assets/img/publication/publication2.png" alt="" style="width:100%;height:200px">
                    <div class="info">
                        <h5>Introduce Standard Packaging for Smokeless Tobacco and Bidi for Effective
                            Implementation of Pictorial Warnings in Bangladesh</h5>
                        <p>
                            In Bangladesh 37.8 million adults currently used tobacco in
                    different format. Among these 19.2 million adults used tobacco in
                    smoking format (15 million used cigarettes & 5.3 million used bidi). 22
                    million adults (16.2% men and 24.8% women)
                        </p>
                        <a href="{{route('research2')}}" class="btn btn-warning" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card-body">
                    <img src="assets/img/publication/publication3.jpg" alt="" style="width:100%;height:200px">
                    <div class="info">
                        <h5>Post Budget Market
                            Reflection of Increase
                            Tax on Smokeless
                            Tobacco (Jorda) in
                            Bangladesh</h5>
                        <p>
                            Bangladesh is a highly densely populated country and tobacco consumption is also high.
                            According to Global Adult Tobacco Survey-2017, In Bangladesh 37.8 million adults
                            currently used tobacco in different format. Among these 19.2 million adults used tobacco in
                        </p>
                        <a href="{{route('research3')}}" class="btn btn-warning" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card-body">
                    <img src="assets/img/publication/publication3.jpg" alt="" style="width:100%;height:200px">
                    <div class="info">
                        <h5>Markets of Smokeless Tobacco Products: Challenges and Way Forward</h5>
                        <p>
                            The philosopher and world famous traveler Ibn Battuta wrote his book "The Traveler of Ibn Battuta"
                          regarding the tradition of consuming betel leaf in this subcontinent.
                        </p>
                        <a href="{{route('research4')}}" class="btn btn-warning" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card-body">
                    <img src="assets/img/publication/publication5.png" alt="" style="width:100%;height:200px">
                    <div class="info">
                        <h5>বাজেট পরর্বতী ধোয়াবিহীন
                            তামাকের (জর্দ্দার) রাজ¯
                            বৃদ্ধি: বাস্তবতা</h5>
                        <p>
                            বাংলাদেশে ধোঁয়াবিহীন তামাক ব্যবহারকারীর সংখ্যা ২ কোটি ২০ লক্ষ হলেও এর ওপর যথোপযুক্ত করারোপ, কর বৃদ্ধি ও কর আদায়ের
                            বিষয়টি কখনোই গুরুত্বের সাথে বিবেচনা করা হয় না। যার ফলে সরকার মোটা অংকের রাজস্ব হারা”েছ
                        </p>
                        <a href="{{route('research5')}}" class="btn btn-warning" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                <div class="card-body">
                    <img src="assets/img/publication/publication6.png" alt="" style="width:100%;height:200px">
                    <div class="info">
                        <h5>ধোয়াবিহীন তামাকজাত  বাজার  নিয়ন্ত্রণে  করণীয়</h5>
                        <p>
                            বাংলাদেশে ধোঁয়াবিহীন তামাক ব্যবহারকারীর সংখ্যা ২ কোটি ২০ লক্ষ হলেও এর ওপর যথোপযুক্ত করারোপ, কর বৃদ্ধি ও কর আদায়ের
                              বিষয়টি কখনোই গুরুত্বের সাথে বিবেচনা করা হয় না। যার ফলে সরকার মোটা অংকের রাজস্ব হারা”েছ
                        </p>
                        <a href="{{route('research6')}}" class="btn btn-warning" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card-body">
                    <img src="assets/img/publication/publication88.png" alt="" style="width:100%;height:200px">
                    <div class="info">
                        <h5 style="margin-bottom: 30px">Resources</h5>
                        <p>
                            Dhaka International University (DIU) is one of the leading, familiar and note-worthy private universities in Bangladesh which was established on 7th April 1995. It is a non-profitable institution having strict academic discipline.
                        </p>
                        <a href="{{route('research8')}}" class="btn btn-warning" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
          
        </div>
    </div>

</section>


@endsection
@extends('layouts.master')

@section('title', 'home')

@section('content')
<style>
  .portfolio-item img {
    height: 200px;
    width: 100%
  }

  .team-info {
    padding: 20px 20px 0px;
    height: 130px;
  }

  .team-info h4 {
    font-weight: 700;
    margin-bottom: 5px;
    font-size: 18px;
    color: #222222;
  }

  .team-info p {
    font-style: italic;
    font-size: 14px;
    line-height: 26px;
    color: #777777;
  }
  .member{
    padding: 0px 30px;
  }

  .member-img img {
    border-radius: 20px 20px 0px 0px;
    height: 250px !important;
    width: 100% !important
  }

  .activitie {
    border: 3px solid #f5f5f5;
    padding: 10px;
    border-radius: 20px;
    margin:0px 20px;
  }

  .activitie-img img {
    height: 150px;
    border-radius: 20px;
    width: 100%;
    margin-bottom: 20px;


  }

  .activitie-info {
    margin-bottom: 20px;
  }

  .activitie-info h4 {
    font-size: 16px;
    line-height: 26px;
    color: #000;
    padding: 0px 10px;
    margin-bottom: 10px;
    text-align: justify;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  .activitie-info p {
    color: #6D747F;
    padding: 0px 10px;
    text-align: justify;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  .read_more {
    background: #FDC106;
    color: #000;
    padding: 5px 10px;
    margin-left: 10px;
    border-radius: 5px;
  }

  .read_more:hover {
    background: #fff;
    color: #000;
    border: 2px solid #FDC106;
  }
  .icon-box{
    background: #093C34 !important;
  }
  .icon-box h4{
    color: #fff;
  }
  .service-read{
    color: #FDC106 !important;
    font-size: 16px
  }
  .service-read i{
    color: #FDC106 !important;
  }
  .icon-box:hover{
    background: gray !important;
  }
  .icon-box:hover h4{
    color: #000 !important;
  }  
  /* .icon-box:hover a, a i{
    color: #FDC106 !important;
  } */
  .info-box i{
    color: #000 !important;
  }
  .arow{
    color: #000 !important;
  }


</style>

 <!-- ======= Header Section ======= -->
<div class="container">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/slider1.png" class="d-block w-100" alt="..." style="height: 75vh">
        {{-- <div class="carousel-caption d-none d-md-block">
          <h3>Welcome to Bangladesh Center for Governance and Development, DIU.</h3>
          <h6>BCGD are to become a think tank and academic hub on public policy, climate change and migration studies
            across the globe. </h6>
        </div> --}}
      </div>
      <div class="carousel-item">
        <img src="assets/img/slider2.jpg" class="d-block w-100" alt="..." style="height: 75vh">
        {{-- <div class="carousel-caption d-none d-md-block">
          <h3>Welcome to Bangladesh Center for Governance and Development, DIU.</h3>
          <h6>BCGD are to become a think tank and academic hub on public policy, climate change and migration studies
            across the globe. </h6>
        </div> --}}
      </div>
      <div class="carousel-item">
        <img src="assets/img/slider3.png" class="d-block w-100" alt="..." style="height: 75vh">
        {{-- <div class="carousel-caption d-none d-md-block">
          <h3>Welcome to Bangladesh Center for Governance and Development, DIU.</h3>
          <h6>BCGD are to become a think tank and academic hub on public policy, climate change and migration studies
            across the globe. </h6>
        </div> --}}
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>



<main id="main">


  <!-- ======= About Section ======= -->
  <section id="about" class="about about-bg">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-12">
          <h2>About DIU and BCGD</h2>
          <p style="text-align:justify">“A commitment to excellence in teaching and research will increasingly depend on
            a university’s capacity to partner as much it does on its ability to create and disseminate knowledge. Put
            another way, effective engagement that is central to university strategy may provide the most powerful
            driver of the agility required to thrive in the uncertain environment to which universities are subject
            worldwide.” said by Gaskell, S. & A. Collette. (The Benefits of Engagement. Times Higher Ed Feature Article;
            Dec 8, 2016.)</p>

          <p style="text-align:justify"><strong>Dhaka International University (DIU)</strong> is one of the leading
            private universities in Bangladesh. It is a non-profitable institution which maintains strict academic rules
            and provides quality educations in 10 disciplines. The mission of DIU is to produce able leaders in the
            respective field of study who can meet the challenges of present dynamic world. It provides
            multidisciplinary knowledge, improves communication and interpersonal skills at the highest level of
            excellence among the students, which will make them honest, sincere and dedicated in their thoughts and
            deeds. The vision of this university is ‘to see an educated and healthy generation’. </p>
          <a href="{{route('about.history')}}" target="_blank" class="btn-get-started scrollto mb-3">Read More <i
              class="fas fa-arrow-right arow"></i></a>

        </div>
        <div class="col-lg-5 col-md-5 col-sm-12">
          <iframe
            src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FBCGD.DIU%2Fposts%2Fpfbid0RZb1LihBTKmdd2fLtH46grGmyHxff7nBTCwMShQ22XrmiX27srMzsEi8zLaK68R5l&show_text=true&width=500"
            width="100%" height="370" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
            allowfullscreen="true" allow="autoplay; clipboard-write; picture-in-picture; web-share"></iframe>
          <div class=" mt-4" data-aos="fade-left" data-aos-delay="100">
            <a href="https://www.facebook.com/BCGD.DIU " target="_blank" class="btn-get-started scrollto" style="">View
              BCGD Latest Facebook Post <i class="fas fa-arrow-right arow"></i></a>

          </div>
        </div>

      </div>
  </section><!-- End About Section -->


  <!-- Recent Activities -->
  <section id="">
    <div class="container" data-aos="zoom-in">
      <h2 class="title-header text-center mb-4">RECENT ACTIVITIES</h2>


      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="row">

              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="activitie">
                  <div class="activitie-img">
                    <img src="assets/img/activity/activity1.png" class="img-fluid" alt="">

                  </div>
                  <div class="activitie-info">
                    <h4>Program Report: Roundtable Meeting on Road Safety Law - Bangladesh Perspective
                    </h4>
                    <p>The roundtable meeting on Road Safety Law Bangladesh Perspective was organized by the Road Safety
                      Coalition Bangladesh at Hotel Intercontinental, Dhaka. </p>
                    <p>21st October, 2023</p>
                    <a href="{{ route('activity1') }}" target="_blank" class="read_more mb-4">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="activitie">
                  <div class="activitie-img">
                    <img src="assets/img/activity/activity2.png" class="img-fluid" alt="">

                  </div>
                  <div class="activitie-info">
                    <h4>The Multi-stakeholder Preparatory Workshop on "COP28 Influencing Arbitrations"</h4>
                    <p>The Multi-stakeholder Preparatory Workshop on "COP28 Influencing Arbitrations" jointly </p>
                    <p>11 November 2023</p>
                    <a href="{{ route('activity2') }}" target="_blank" class="read_more mb-4">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="activitie">
                  <div class="activitie-img">
                    <img src="assets/img/activity/activity3.png" class="img-fluid" alt="">

                  </div>
                  <div class="activitie-info">
                    <h4>COP 27-Climate Change Debriefing Program at Parliament Members Club</h4>
                    <p>Team Dhaka International University is at COP 27-Climate Change Debriefing Program at Parliament
                      Members Club, Bangladesh National Parliament, Dhaka. </p>
                    <p>08 Feb 2023</p>
                    <a href="{{ route('activity3') }}" target="_blank" class="read_more mb-4">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="activitie">
                  <div class="activitie-img">
                    <img src="assets/img/activity/activity4.png" class="img-fluid" alt="">

                  </div>
                  <div class="activitie-info">
                    <h4>22 organizations demand ban on e-cigarette in Bangladesh</h4>
                    <p>The organisations argued that the activities of tobacco companies in the production and expansion
                      of e-cigarettes in the country may cause a serious threat to public health.  </p>
                    <p>November 25, 2023</p>
                    <a href="{{ route('activity4') }}" target="_blank" class="read_more mb-4">Read More</a>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="row">
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="activitie">
                  <div class="activitie-img">
                    <img src="assets/img/activity/activity5.png" class="img-fluid" alt="">

                  </div>
                  <div class="activitie-info">
                    <h4>Health Ministry’s Proposal to Ban E-Cigarettes is Commendable</h4>
                    <p>Recently, the drafting amendment of the Smoking and Tobacco Products Usage (Control) Act-2005
                      (amendment 2013) has included </p>
                    <p>January 30, 2023</p>
                    <a href="{{ route('activity5') }}" target="_blank" class="read_more mb-4">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="activitie">
                  <div class="activitie-img">
                    <img src="assets/img/activity/activity6.png" class="img-fluid" alt="">
                  </div>
                  <div class="activitie-info">
                    <h4>Seminar on "Importance of Standard Packaging Model to Protect Tobacco Tax Evasion in Bangladesh"
                    </h4>
                    <p>Speakers at a seminar said that it has become necessary to introduce the standard packaging for
                      tobacco products as well the plain packaging in order to prevent revenue evasion.</p>
                    <p>October 5 2023</p>
                    <a href="{{ route('activity6') }}" target="_blank" class="read_more mb-4">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="activitie">
                  <div class="activitie-img">
                    <img src="assets/img/activity/activity7.png" class="img-fluid" alt="">

                  </div>
                  <div class="activitie-info">
                    <h4>Textiles and Jute Minister's support for strengthening and amendment Tobacco Control Act- TCRC
                      team met with the Minister</h4>
                    <p>Tobacco seriously threatens public health, social degradation, the economy, and the environment.
                      According to a study by the Bangladesh Cancer Society in 2018, </p>
                    <p> 12 February 2023</p>
                    <a href="{{ route('activity7') }}" target="_blank" class="read_more mb-4">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="activitie">
                  <div class="activitie-img">
                    <img src="assets/img/activity/activity8.png" class="img-fluid" alt="">

                  </div>
                  <div class="activitie-info">
                    <h4>Tobacco Tax Policy Reformation for Protecting Public Health</h4>
                    <p>The lawmakers called upon the government to impose specific taxes on cigarettes and other tobacco
                      products in the upcoming budget to </p>
                    <p><i class="fas fa-calendar" style="margin-right: 10px"></i>26 Nov 2023</p>
                    <a href="{{ route('activity8') }}" target="_blank" class="read_more mb-4">Read More</a>
                  </div>
                </div>
              </div>

            </div>

          </div>


        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>
  <!-- End Recent Activities -->
   <!-- ======= Our Approach Section ======= -->
   <section section-bg>
    <div class="container">
      <h3 class="title-header text-center">Our Approach</h3>     

      <div class="row my-5">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <a href="{{route('research')}}" target="_blank">
            <div class="our-project">
              <img src="assets/img/publication/publication88.png" style="height: 200px">
              <div class="team-content">
                <span class="title">Research</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <a href="{{route('advocacy')}}" target="_blank">
            <div class="our-project">
              <img src="assets/img/activity/activity4.png" style="height: 200px">
              <div class="team-content">
                <span class="title">Advocacy</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <a href="{{route('capacity')}}" target="_blank">
            <div class="our-project">
              <img src="assets/img/migration1.png" style="height: 200px">
              <div class="team-content">
                <span class="title">Capacity Building</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <a href="{{route('public.awereness')}}" target="_blank">
            <div class="our-project">
              <img src="assets/img/climate2.png" style="height: 200px">
              <div class="team-content">
                <span class="title">Public Awareness</span>
              </div>
            </div>
          </a>
        </div>


      </div>


    </div>

  </section>
  <!-- ======= End Approach Section ======= -->
   <!-- ======= Area of Expertise======= -->
   <section id="services" class="services">
    <div class="container" data-aos="fade-up">


      <h2 class="title-header text-center mb-4">Area of Expertise</h2>
      <div class="row">
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box" style="width: 100%">
            <div class="d-flex justify-content-between px-4 pt-4">
              <div class="icon "><i class="fas fa-exclamation-triangle"></i></div>
              
            </div>
            <div class="px-4">
              <h4>Road Safety</h4>
            </div>
            <div class="p-4">
              <a href="{{route('road.safety')}}" class="service-read" target="_blank"> Read More <i
                  class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box" style="width: 100%">
            <div class="d-flex justify-content-between px-4 pt-4">
              <div class="icon "><i class="fas fa-cloud-sun"></i></div>
             
            </div>
            <div class="px-4">
              <h4>Climate Change</h4>
            </div>
            <div class="p-4">
              <a href="{{route('climate_change')}}" class="service-read" target="_blank"> Read More <i
                  class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box" style="width: 100%">
            <div class="d-flex justify-content-between px-4 pt-4">
              <div class="icon "><i class="fas fa-walking"></i></div>              
            </div>
            <div class="px-4">
              <h4>Migration</h4>
            </div>
            <div class="p-4">
              <a href="{{route('migration')}}" class="service-read" target="_blank"> Read More <i
                  class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box" style="width: 100%">
            <div class="d-flex justify-content-between px-4 pt-4">
              <div class="icon "><i class="fas fa-hospital"></i></div>
             
            </div>
            <div class="px-4">
              <h4>Public Health</h4>
            </div>
            <div class="p-4">
              <a href="{{route('public.health')}}" class="service-read" target="_blank"> Read More <i
                  class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>


      </div>

    </div>
  </section>
  <!-- End Area of Expertise Section -->
  <!--  Start Publication Section -->
  <section>
    <div class="container" data-aos="zoom-in">
      <h2 class="title-header text-center mb-4">PUBLICATIONS</h2>


      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="row">

              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="activitie">
                  <div class="activitie-img">
                    <img src="assets/img/publication/publication.png" class="img-fluid" alt="">

                  </div>
                  <div class="activitie-info">
                    <h4>TOBACCO CONTROL LAWS OF BANGLADESH:
                      ANALYSIS OF GAPS AND PROPOSED REFORMS
                    </h4>
                    <p>The materials presented and the opinions expressed
                      in this publication are those of the researchers and
                      do not necessary reﬂect those of DIU. </p>
                    <p>21st October, 2023</p>
                    <a href="{{ route('publication1') }}" target="_blank" class="read_more mb-4">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="activitie">
                  <div class="activitie-img">
                    <img src="assets/img/publication/publication2.png" class="img-fluid" alt="">

                  </div>
                  <div class="activitie-info">
                    <h4>Introduce Standard Packaging for Smokeless Tobacco and Bidi for Effective
                      Implementation of Pictorial Warnings in Bangladesh</h4>
                    <p>In Bangladesh 37.8 million adults currently used tobacco in
                      different format. Among these 19.2 million adults used tobacco in
                      smoking format (15 million used cigarettes & 5.3 million used bidi). 22
                      million adults (16.2% men and 24.8% women) </p>
                    <p>11 November 2023</p>
                    <a href="{{ route('publication2') }}" target="_blank" class="read_more mb-4">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="activitie">
                  <div class="activitie-img">
                    <img src="assets/img/publication/publication3.jpg" class="img-fluid" alt="">

                  </div>
                  <div class="activitie-info">
                    <h4>Post Budget Market
                      Reflection of Increase
                      Tax on Smokeless
                      Tobacco (Jorda) in
                      Bangladesh</h4>
                    <p>Bangladesh is a highly densely populated country and tobacco consumption is also high.
                      According to Global Adult Tobacco Survey-2017, In Bangladesh 37.8 million adults
                      currently used tobacco in different format. Among these 19.2 million adults used tobacco in </p>
                    <p>2020</p>
                    <a href="{{ route('publication3') }}" target="_blank" class="read_more mb-4">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="activitie">
                  <div class="activitie-img">
                    <img src="assets/img/publication/publication3.jpg" class="img-fluid" alt="">

                  </div>
                  <div class="activitie-info">
                    <h4>Markets of Smokeless Tobacco Products: Challenges and Way Forward</h4>
                    <p>The philosopher and world famous traveler Ibn Battuta wrote his book "The Traveler of Ibn
                      Battuta"
                      regarding the tradition of consuming betel leaf in this subcontinent.  </p>
                    <p>09 March 2020</p>
                    <a href="{{ route('publication4') }}" target="_blank" class="read_more mb-4">Read More</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-slide">
            <div class="row">
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="activitie">
                  <div class="activitie-img">
                    <img src="assets/img/publication/publication5.png" class="img-fluid" alt="">

                  </div>
                  <div class="activitie-info">
                    <h4>বাজেট পরর্বতী ধোয়াবিহীন
                      তামাকের (জর্দ্দার) রাজ¯
                      বৃদ্ধি: বাস্তবতা</h4>
                    <p>বাংলাদেশে ধোঁয়াবিহীন তামাক ব্যবহারকারীর সংখ্যা ২ কোটি ২০ লক্ষ হলেও এর ওপর যথোপযুক্ত করারোপ, কর
                      বৃদ্ধি ও কর আদায়ের
                      বিষয়টি কখনোই গুরুত্বের সাথে বিবেচনা করা হয় না। যার ফলে সরকার মোটা অংকের রাজস্ব হারা”েছ</p>
                    <p>2020</p>
                    <a href="{{ route('publication5') }}" target="_blank" class="read_more mb-4">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="activitie">
                  <div class="activitie-img">
                    <img src="assets/img/publication/publication6.png" class="img-fluid" alt="">
                  </div>
                  <div class="activitie-info">
                    <h4 style="margin-bottom:30px">ধোয়াবিহীন তামাকজাত বাজার নিয়ন্ত্রণে করণীয় </h4>
                    <p>বাংলাদেশে ধোঁয়াবিহীন তামাক ব্যবহারকারীর সংখ্যা ২ কোটি ২০ লক্ষ হলেও এর ওপর যথোপযুক্ত করারোপ, কর
                      বৃদ্ধি ও কর আদায়ের
                      বিষয়টি কখনোই গুরুত্বের সাথে বিবেচনা করা হয় না। যার ফলে সরকার মোটা অংকের রাজস্ব হারা”ে</p>
                    <p>2020</p>
                    <a href="{{ route('publication6') }}" target="_blank" class="read_more mb-4">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="activitie">
                  <div class="activitie-img">
                    <img src="assets/img/publication/publication88.png" class="img-fluid" alt="">
                  </div>
                  <div class="activitie-info">
                    <h4 style="margin-bottom: 30px">Resources </p>
                      <p> Dhaka International University (DIU) is one of the leading, familiar and note-worthy private
                        universities in Bangladesh which was established on 7th April 1995. It is a non-profitable
                        institution having strict academic discipline.</p>
                      <p> 12 February 2023</p>
                      <a href="{{ route('publication8') }}" target="_blank" class="read_more mb-4">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>
   <!-- End Publication  Section-->


  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Portfolio</h2>
        <h3 class="title-header">Check our <span>Portfolio</span></h3>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="assets/img/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
            title="portfolio">
            <img src="assets/img/portfolio-1.jpg" class="img-fluid" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="assets/img/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
            title="portfolio">
            <img src="assets/img/portfolio-2.jpg" class="img-fluid" alt="">
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="assets/img/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
            title="portfolio">
            <img src="assets/img/portfolio-3.jpg" class="img-fluid" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <a href="assets/img/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
            title="portfolio">
            <img src="assets/img/portfolio-4.jpg" class="img-fluid" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="assets/img/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
            title="portfolio">
            <img src="assets/img/portfolio-5.jpg" class="img-fluid" alt="">
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="assets/img/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
            title="portfolio">
            <img src="assets/img/portfolio-6.jpg" class="img-fluid" alt="">
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <a href="assets/img/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
            title="portfolio">
            <img src="assets/img/portfolio-7.jpg" class="img-fluid" alt="">
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <a href="assets/img/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
            title="portfolio">
            <img src="assets/img/portfolio-8.jpg" class="img-fluid" alt="">
          </a>
        </div>

        {{-- <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="assets/img/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
            title="Web 3">
            <img src="assets/img/portfolio-9.jpg" class="img-fluid" alt="">
          </a>
        </div> --}}

      </div>

    </div>
  </section><!-- End Portfolio Section -->
  

  <!-- ======= Team Section ======= -->
  <section id="team" style="background: #F4F4F4">
    <div class="container" data-aos="zoom-in">

      <div class="row">
        <div class="col-lg-9 col-md-6 col-sm-12">
          <h6 class="title-section">OUR COMMITTEE</h6>
          <div class="">
            <h3 class="title-header">BCGD Executive Committee</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-end mb-5">
          <a href="{{route('about.executive')}}" class="btn-get-started scrollto" target="_blank">View All<i
              class="fas fa-arrow-right arow"></i> </a>
        </div>
      </div>


      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="row">

              <div class="col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                <a href="https://profile.diu.ac/patwary">
                  <div class="member">
                    <div class="member-img">
                      <img
                        src="assets/img/team/Barrister Shameem Haider Patwary MP, Chairman, BoT,Dhaka International University.jpg"
                        class="img-fluid" alt="">

                    </div>
                    <div class="team-info">
                      <h4>Barrister Shameem Haider Patwary MP, Chairman, BoT,</h4>
                      <p>Chairman</p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                <a href="https://profile.diu.ac/md.azmir.hossain">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/Chairman, Department of Business Administration-Md Azmir Hossain.jpg"
                        class="img-fluid" alt="">

                    </div>
                    <div class="team-info">
                      <h4>Md. Azmir Hossain, Chairman, Department of Business Administration</h4>
                      <p>Member</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                <a href="https://profile.diu.ac/md.raisul.islam.sourav">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/Chairman, Department of Law, Md Raisul Islam Sourav.jpg"
                        class="img-fluid" alt="">

                    </div>
                    <div class="team-info">
                      <h4>Md. Raisul Islam Sourav, Chairman, Department of Law
                      </h4>
                      <p>Member</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                <a href="https://profile.diu.ac/prof.dr.a.t.mmahbuburrahmansarker">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/Chairman, Department of CSE, Dr. A.T.M. Mahbubur Rahman Sarker.jpg"
                        class="img-fluid" alt="">
                    </div>
                    <div class="team-info">
                      <h4>Dr. A.T.M. Mahbubur Rahman Sarker, Chairman, Department of CSE</h4>
                      <p>Member</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                <a href="https://profile.diu.ac/mohammad.tareq">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/Chairman, Department of EEE, Mohammad Tareq.jpg" class="img-fluid"
                        alt="">
                    </div>
                    <div class="team-info">
                      <h4>Mohammad Tareq, Chairman, Department of EEE</h4>
                      <p>Member</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                <a href="https://profile.diu.ac/shovon">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/Chairman, Department of Civil Engineering, S M SAZZAD AHMED SHOVON.jpg"
                        class="img-fluid" alt="">

                    </div>
                    <div class="team-info">
                      <h4>S M SAZZAD AHMED SHOVON, Chairman, Department of Civil Engineering</h4>
                      <p>Member</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                <a href="https://profile.diu.ac/s.jubair.al.ahmed">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/Chairman, Department of English, S. Jubair Al Ahmed.jpg"
                        class="img-fluid" alt="">

                    </div>
                    <div class="team-info">
                      <h4>S. Jubair Al Ahmed,Chairman, Department of English</h4>
                      <p>Member</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                <a
                  href="https://profile.diu.ac/jamsedur.rahman?fbclid=IwAR2mX4t0V4Qkk9aly9uMbv_bnAa_h2VheqDcPx4qf9S7Ny2rMxxQxINjvN4">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/Chairman, Department of Sociology, Jamsedur Rahman.jpg"
                        class="img-fluid" alt="">

                    </div>
                    <div class="team-info">
                      <h4>Jamsedur Rahman, Chairman, Department of Sociology</h4>
                      <p>Member</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                <a href="https://profile.diu.ac/professor.farida.begum">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/Chairman, Department of Pharmacy, Professor Farida Begum.jpg"
                        class="img-fluid" alt="">

                    </div>
                    <div class="team-info">
                      <h4>Professor Farida Begum, Chairman, Department of Pharmacy</h4>
                      <p>Member</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                <a
                  href="https://profile.diu.ac/md.fazlul.haque?fbclid=IwAR1iEwFPwxfdXkekbVN7KCVuDdedCtxb0ib3EC_h-UrWAUCLUQadAJoYRoM">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/Chairman, Department of Political Science, Md. Fazlul Haque.jpg"
                        class="img-fluid" alt="">

                    </div>
                    <div class="team-info">
                      <h4>Md. Fazlul Haque, Chairman, Department of Political Science</h4>
                      <p>Member</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                <a href="https://profile.diu.ac/md.rofiqul.islam">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/Chairman, Department of Economics, Md. Rofiqul Islam.jpg"
                        class="img-fluid" alt="">

                    </div>
                    <div class="team-info">
                      <h4>Md. Rofiqul Islam, Chairman, Department of Economics</h4>
                      <p>Member</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                <a href="">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/Sunita Rani Biswas, Assistant Professor, Department of Law.jpg"
                        class="img-fluid" alt="">

                    </div>
                    <div class="team-info">
                      <h4>Sunita Rani Biswas, Assistant Professor, Department of Law</h4>
                      <p>Member</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

          </div>
          <div class="swiper-slide">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                <a href="https://profile.diu.ac/farhana.zaman">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/Farhana Zaman Liza.jpg" class="img-fluid" alt="">

                    </div>
                    <div class="team-info">
                      <h4>Farhana Zaman Liza</h4>
                      <p>Member</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                <a href="https://profile.diu.ac/md.bazlur.rahman">
                  <div class="member">
                    <div class="member-img">
                      <img
                        src="assets/img/team/Md. Bazlur Rahman, Associate Professor, Department of Business Administration, DIU.jpg"
                        class="img-fluid" alt="">

                    </div>
                    <div class="team-info">
                      <h4>Md. Bazlur Rahman, Associate Professor, Department of Business Administration, DIU</h4>
                      <p>Member</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                <a href="https://profile.diu.ac/dr.md.sharifulislam">
                  <div class="member">
                    <div class="member-img">
                      <img
                        src="assets/img/team/Dr. Md. Shariful Alam, Associate Professor, Department of Political Science, DIU.jpg"
                        class="img-fluid" alt="">

                    </div>
                    <div class="team-info">
                      <h4>Shariful Alam, Associate Professor, Department of Political Science, DIU</h4>
                      <p>Member</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>
<!-- ======= End Team Section ======= -->

  <!-- ======= Network Section ======= -->
  <section id="clients" class="clients mb-5 py-5 my-5" style="background: #F6F9FE">
    <div class="container" data-aos="zoom-in">
      <h6 class="title-header">OUR NETWORKS</h6>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="row">
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/network/international/Asian_Development_Bank_logo.svg.png" class="img-fluid" alt=""
                  style="height: 100px">
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/network/international/download.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img
                  src="assets/img/network/international/png-clipart-green-oxfam-logo-oxfam-logo-icons-logos-emojis-shop-logos-thumbnail.png"
                  class="img-fluid" alt="">
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/network/international/download.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/network/international/The Union.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/network/national/alliance_logo_464x200.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="row mb-4">
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/network/national/BRAC_logo.svg.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/network/national/clpa_logo_wt.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/network/national/DIU Logo High.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/network/national/Emblem_of_Bangladesh_Road_Transport_Authority_(BRTA).svg.png"
                  class="img-fluid" alt="" style="height: 90px">
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/network/national/IPHRC Logo.jpeg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/network/national/IPNLogoo.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="row mb-4">
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/network/national/Nirapad Sorok CHai.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/network/national/zzz.jpg" class="img-fluid" alt="" style="height: 90px">
              </div>

            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Network Section -->



  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact" >
    
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <h3 class="title-header">Contact Us</h3><i class="fas fa-heart"></i>
        <p>Contact us for more information.</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <p class="">House# 04, Road# 01, Block# F,
              Banani, Dhaka 1213,
              Bangladesh.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p>bcgd.diu@gmail.com </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box">
            <i class="bx bx-phone"></i>
            <h3>Call Us</h3>
            <p class="">+8801718200985
            </p>
          </div>
        </div>

      </div>

      <div class="" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-8 col-md-6 col-sm-12">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14604.974079688413!2d90.40454096594159!3d23.774341155794485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sHouse%23%2004%2C%20Road%23%2001%2C%20Block%23%20F%2C%20Banani%2C%20Dhaka%201213%2C!5e0!3m2!1sen!2sbd!4v1702109721397!5m2!1sen!2sbd"
              width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">            
            <iframe width="420" height="400" src="https://www.youtube.com/embed/watch?v=B8bj74COb64&list=PLtPyVZ_r0dR4mBIQ9L8dfK2geQhbuBSBc">
            </iframe>
          </div>
        </div>



      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->



@endsection
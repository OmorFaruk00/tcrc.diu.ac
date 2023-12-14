@extends('layouts.master')

@section('title', 'publication')

@section('content')
<style>
  .activitie {
    /* border: 3px solid #f5f5f5; */
    padding: 10px;
    border-radius: 20px
  }

  .activitie-img img {
    height: 220px;
    width: 100%;
    /* border-radius: 20px; */
    margin-bottom: 20px;


  }

  .activitie-info {
    margin-bottom: 20px;
  }

  .activitie-info h4 {
    margin-top: 10px;
    font-size: 24px;
    line-height: 26px;
    color: #135C51;
    padding: 0px 10px;
    margin-bottom: 10px;
    text-align: justify;

  }

  .activitie-info p {
    color: #6D747F;
    padding: 0px 10px;
    text-align: justify;
    text-align: justify;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;

  }
  .activitie-info i {
    color: #000 !important
  }
  .fas {
    color: #000 !important;
    margin: 0px 5px;
  }
</style>
<section class="page-bg">
  <div class="container">
    <div class="" data-aos="fade-up" data-aos-delay="200">
      <h1 class="page-title">Our Publication</h1>
      <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU</p>
      <button class="page-btn"> <a href="{{ route('home') }}">Home</a> <i class="fas fa-arrow-right"></i>
        Publication</button>
    </div>
  </div>
</section>

<section>
  <div class="container mt-4" data-aos="fade-up">

    <div class="">
      <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
        <div class="activitie">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="activitie-img">
                <img src="assets/img/publication/publication.png" alt="">
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
              <a href="{{ route('publication1') }}" target="_blank">
                <div class="activitie-info">
                  <h4>TOBACCO CONTROL LAWS OF BANGLADESH:
                    ANALYSIS OF GAPS AND PROPOSED REFORMS
                  </h4>
                  <p>The materials presented and the opinions expressed
                    in this publication are those of the researchers and
                    do not necessary reﬂect those of DIU. </p>
                  <p><i class="fas fa-calendar" style="margin-right: 10px"></i>December 2021</p>
                  <a class="btn btn-warning" href="pdf/publication1.pdf" download="downloaded_file.pdf">Download</a>

                </div>
              </a>
            </div>
          </div>

        </div>
      </div>

      <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
        <div class="activitie">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="activitie-img">
                <img src="assets/img/publication/publication2.png" alt="">

              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
              <a href="{{ route('publication2') }}" target="_blank">
                <div class="activitie-info">
                  <h4>Introduce Standard Packaging for Smokeless Tobacco and Bidi for Effective
                    Implementation of Pictorial Warnings in Bangladesh
                  </h4>
                  <p>In Bangladesh 37.8 million adults currently used tobacco in
                    different format. Among these 19.2 million adults used tobacco in
                    smoking format (15 million used cigarettes & 5.3 million used bidi). 22
                    million adults (16.2% men and 24.8% women) </p>
                  <p><i class="fas fa-calendar" style="margin-right: 10px"></i>11 November 2023</p>
                  <a class="btn btn-warning" href="pdf/publication2.pdf" download="downloaded_file.pdf">Download</a>

                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
          <div class="activitie">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="activitie-img">
                  <img src="assets/img/publication/publication3.jpg" alt="">

                </div>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-12">
                <a href="{{ route('publication3') }}" target="_blank">
                  <div class="activitie-info">
                    <h4>Post Budget Market
                      Reflection of Increase
                      Tax on Smokeless
                      Tobacco (Jorda) in
                      Bangladesh</h4>

                    <p>Bangladesh is a highly densely populated country and tobacco consumption is also high.
                      According to Global Adult Tobacco Survey-2017, In Bangladesh 37.8 million adults
                      currently used tobacco in different format. Among these 19.2 million adults used tobacco in</p>
                    <p><i class="fas fa-calendar" style="margin-right: 10px"></i>2020</p>
                    <a class="btn btn-warning" href="pdf/publication3.pdf" download="downloaded_file.pdf">Download</a>

                  </div>
                </a>
              </div>
            </div>
          </div>


          
              <div class="mb-4 mt-4" data-aos="fade-up" data-aos-delay="100">
                <div class="activitie">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="activitie-img">
                        <img src="assets/img/publication/publication3.jpg"  alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                      <a href="{{ route('publication4') }}" target="_blank">
                      <div class="activitie-info">
                        <h4>Markets of Smokeless Tobacco Products: Challenges and Way Forward</h4>
                        
                        <p>The philosopher and world famous traveler Ibn Battuta wrote his book "The Traveler of Ibn Battuta"
                          regarding the tradition of consuming betel leaf in this subcontinent. </p>
                        <p>
                          <p><i class="fas fa-calendar" style="margin-right: 10px"></i>09 March 2020</p>
                          <a class="btn btn-warning" href="pdf/publication4.pdf" download="downloaded_file.pdf">Download</a>
                      </div>
                      </a>
                    </div>
                  </div>

                </div>
                <div class="mb-4" data-aos="fade-up" data-aos-delay="100">
                  <div class="activitie">
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="activitie-img">
                          <img src="assets/img/publication/publication5.png"  alt="">
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <a href="{{ route('publication5') }}" target="_blank">
                        <div class="activitie-info">
                          <h4>বাজেট পরর্বতী ধোয়াবিহীন
                            তামাকের (জর্দ্দার) রাজ¯
                            বৃদ্ধি: বাস্তবতা
                          </h4>                         
                          <p>বাংলাদেশে ধোঁয়াবিহীন তামাক ব্যবহারকারীর সংখ্যা ২ কোটি ২০ লক্ষ হলেও এর ওপর যথোপযুক্ত করারোপ, কর বৃদ্ধি ও কর আদায়ের
                            বিষয়টি কখনোই গুরুত্বের সাথে বিবেচনা করা হয় না। যার ফলে সরকার মোটা অংকের রাজস্ব হারা”েছ</p>    
                            <p><i class="fas fa-calendar" style="margin-right: 10px"></i>2020</p>
                            <a class="btn btn-warning" href="pdf/publication5.pdf" download="downloaded_file.pdf">Download</a>
                        </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="activitie">
                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="activitie-img">
                            <img src="assets/img/publication/publication6.png" alt="">
                          </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                          <a href="{{ route('publication6') }}" target="_blank">
                          <div class="activitie-info">
                            <h4>ধোয়াবিহীন তামাকজাত  বাজার  নিয়ন্ত্রণে  করণীয়</h4>                            
                            <p>বাংলাদেশে ধোঁয়াবিহীন তামাক ব্যবহারকারীর সংখ্যা ২ কোটি ২০ লক্ষ হলেও এর ওপর যথোপযুক্ত করারোপ, কর বৃদ্ধি ও কর আদায়ের
                              বিষয়টি কখনোই গুরুত্বের সাথে বিবেচনা করা হয় না। যার ফলে সরকার মোটা অংকের রাজস্ব হারা”েছ</p>
                              <p><i class="fas fa-calendar" style="margin-right: 10px"></i>2020</p>
                              <a class="btn btn-warning" href="pdf/publication6.pdf" download="downloaded_file.pdf">Download</a>
                         

                          </div>
                        </a>
                        </div>
                      </div>
                    </div>                    

                    <div class="mb-4" data-aos="fade-up" data-aos-delay="100">
                      <div class="activitie">
                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="activitie-img">
                              <img src="assets/img/publication/publication88.png" alt="">
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-12">
                            <a href="{{ route('publication8') }}" target="_blank">
                            <div class="activitie-info">
                              <h4>Resources</h4>
                             
                              <p> Dhaka International University (DIU) is one of the leading, familiar and note-worthy private universities in Bangladesh which was established on 7th April 1995. It is a non-profitable institution having strict academic discipline..
                              </p>
                              <p><i class="fas fa-calendar" style="margin-right: 10px"></i> 12 February 2023
                              </p>
                              <a class="btn btn-warning" href="pdf/publication8.pdf" download="downloaded_file.pdf">Download</a>

                            </div>
                            </a>
                          </div>
                        </div>
                      </div>

                    </div>


                  </div>
</section><!-- End Services Section -->
@endsection
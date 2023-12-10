@extends('layouts.master')

@section('title', 'home')

@section('content')
<style>
  .team-info{
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
.member-img img{
  border-radius: 20px 20px 0px 0px;
  height: 300px !important;
  width: 100% !important

}
.activitie{
  border: 3px solid #f5f5f5;
  padding: 10px;
  border-radius: 20px
}
.activitie-img img{
  height: 200px;
  border-radius: 20px;
  width: 100%;
  margin-bottom: 20px;
  

}
.activitie-info{
  margin-bottom: 20px;
}
.activitie-info h4{
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

.activitie-info p{
  color: #6D747F;
  padding: 0px 10px;
  text-align: justify;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
   overflow: hidden;
}
.read_more{
  background: #FDC106;
  color: #000;
  padding: 5px 10px;
  margin-left: 10px;
  border-radius: 5px;
}
.read_more:hover{
  background: #fff;
  color: #000;
  border: 2px solid #FDC106;
}

</style>
 

  <div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/slider1.png" class="d-block w-100" alt="..." style="height: 75vh">
          <div class="carousel-caption d-none d-md-block">
            <h3>Welcome to Bangladesh Center for Governance and Development, DIU.</h3>
            <h6>BCGD are to become a think tank and academic hub on public policy, climate change and migration studies across the globe. </h6>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/slider2.jpg" class="d-block w-100" alt="..." style="height: 75vh">
          <div class="carousel-caption d-none d-md-block">
            <h3>Welcome to Bangladesh Center for Governance and Development, DIU.</h3>
            <h6>BCGD are to become a think tank and academic hub on public policy, climate change and migration studies across the globe. </h6>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/slider3.png" class="d-block w-100" alt="..." style="height: 75vh">
          <div class="carousel-caption d-none d-md-block">
            <h3>Welcome to Bangladesh Center for Governance and Development, DIU.</h3>
            <h6>BCGD are to become a think tank and academic hub on public policy, climate change and migration studies across the globe. </h6>
          </div>
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
              <p style="text-align:justify" >“A commitment to excellence in teaching and research will increasingly depend on a university’s capacity to partner as much it does on its ability to create and disseminate knowledge. Put another way, effective engagement that is central to university strategy may provide the most powerful driver of the agility required to thrive in the uncertain environment to which universities are subject worldwide.” said by Gaskell, S. & A. Collette. (The Benefits of Engagement. Times Higher Ed Feature Article; Dec 8, 2016.)</p>
            
              <p style="text-align:justify"><strong>Dhaka International University (DIU)</strong> is one of the leading private universities in Bangladesh. It is a non-profitable institution which maintains strict academic rules and provides quality educations in 10 disciplines. The mission of DIU is to produce able leaders in the respective field of study who can meet the challenges of present dynamic world. It provides multidisciplinary knowledge, improves communication and interpersonal skills at the highest level of excellence among the students, which will make them honest, sincere and dedicated in their thoughts and deeds. The vision of this university is ‘to see an educated and healthy generation’. </p>
              <a href="{{route('about.history')}}" target="_blank" class="btn-get-started scrollto mb-3">Read More <i class="fas fa-arrow-right"></i></a>
          
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12" >
              <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FBCGD.DIU%2Fposts%2Fpfbid0RZb1LihBTKmdd2fLtH46grGmyHxff7nBTCwMShQ22XrmiX27srMzsEi8zLaK68R5l&show_text=true&width=500" width="100%" height="370" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; picture-in-picture; web-share"></iframe>
            <div class=" mt-4" data-aos="fade-left" data-aos-delay="100">
              <a href="https://www.facebook.com/BCGD.DIU " target="_blank" class="btn-get-started scrollto" style="">View BCGD Latest Facebook Post <i class="fas fa-arrow-right"></i></a>

          </div>
        </div>

            </div>
    </section><!-- End About Section -->
    

<!-- Recent Activities -->
<section>
  <div class="container" data-aos="zoom-in">
    <h2 >RECENT ACTIVITIES</h2>


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
                    <p>The roundtable meeting on Road Safety Law Bangladesh Perspective was organized by the Road Safety Coalition Bangladesh at Hotel Intercontinental, Dhaka. </p>
                    <p><i class="fas fa-calendar" style="margin-right: 10px"></i>21st October, 2023</p>
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
                    <p>The Multi-stakeholder Preparatory Workshop on "COP28 Influencing Arbitrations" jointly  </p>
                    <p><i class="fas fa-calendar" style="margin-right: 10px"></i>11 November 2023</p>
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
                    <p>Team Dhaka International University is at COP 27-Climate Change Debriefing Program at Parliament Members Club, Bangladesh National Parliament, Dhaka. </p>
                    <p><i class="fas fa-calendar" style="margin-right: 10px"></i>08 Feb 2023</p>
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
                    <p>The organisations argued that the activities of tobacco companies in the production and expansion of e-cigarettes in the country may cause a serious threat to public health.  </p>
                    <p><i class="fas fa-calendar" style="margin-right: 10px"></i>November 25, 2023</p>
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
                    <p>Recently, the drafting amendment of the Smoking and Tobacco Products Usage (Control) Act-2005 (amendment 2013) has included </p>
                    <p><i class="fas fa-calendar" style="margin-right: 10px"></i>January 30, 2023</p>
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
                    <h4>Seminar on "Importance of Standard Packaging Model to Protect Tobacco Tax Evasion in Bangladesh"</h4>
                    <p>Speakers at a seminar said that it has become necessary to introduce the standard packaging for tobacco products as well the plain packaging in order to prevent revenue evasion.</p>
                    <p><i class="fas fa-calendar" style="margin-right: 10px"></i>October 5 2023</p>
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
                    <h4>Textiles and Jute Minister's support for strengthening and amendment Tobacco Control Act- TCRC team met with the Minister</h4>
                    <p>Tobacco seriously threatens public health, social degradation, the economy, and the environment. According to a study by the Bangladesh Cancer Society in 2018, </p>
                    <p><i class="fas fa-calendar" style="margin-right: 10px"></i> 12 February 2023</p>
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
                    <p>The lawmakers called upon the government to impose specific taxes on cigarettes and other tobacco products in the upcoming budget to  </p>
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

  
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg mb-5">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/diu.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/sanpa.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/united.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title mb-3">
          <h3 style="color:#135C51 ">WHAT WE DO</h3>
          {{-- <h3 h2>Future Course Plan</h3>
          <p style="color: #726d6d">Vestibulum lectus mauris ultrices eros in. Cursus sit amet dictum sit amet. Adipiscing tristique risus nec feugiat the aenean bcom here</p> --}}
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in"   data-aos-delay="100">
            <div class="icon-box">
                <div class="d-flex justify-content-between px-4 pt-4">
                    <div class="icon "><i class="bx bx-file"></i></div>
                    <div class="">
                        <p class="servece-serial">01</p>
                    </div>                    
                </div>              
              <div class="px-4">
                <h4><a href="">Future Course Plan</a></h4>
              <p>BCGD has plan to offer several courses on the basis of below concepts...</p>
              </div>
              <div class="p-4">
                <a href="{{route('recent.activities')}}" class="service-read"> Read More <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in"   data-aos-delay="100">
            <div class="icon-box">
                <div class="d-flex justify-content-between px-4 pt-4">
                    <div class="icon "><i class="bx bx-file"></i></div>
                    <div class="">
                        <p class="servece-serial">02</p>
                    </div>                    
                </div>              
              <div class="px-4">
                <h4><a href="">Short Courses</a></h4>
              <p>BCGD currecntly offering Short Certificate Course on Migration Governance...</p>
              </div>
              <div class="p-4">
                <a href="{{route('recent.activities')}}" class="service-read"> Read More <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in"   data-aos-delay="100">
            <div class="icon-box">
                <div class="d-flex justify-content-between px-4 pt-4">
                    <div class="icon "><i class="fas fa-search"></i></div>
                    <div class="">
                        <p class="servece-serial">03</p>
                    </div>                    
                </div>              
              <div class="px-4">
                <h4><a href="">Research and dialogue</a></h4>
              <p>Apart from the executive courses, BCGD expresses a strong interest...</p>
              </div>
              <div class="p-4">
                <a href="{{route('recent.activities')}}" class="service-read"> Read More <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in"   data-aos-delay="100">
            <div class="icon-box">
                <div class="d-flex justify-content-between px-4 pt-4">
                    <div class="icon "><i class="fas fa-comments"></i></div>
                    <div class="">
                        <p class="servece-serial">04</p>
                    </div>                    
                </div>              
              <div class="px-4">
                <h4><a href="">Dialogue partners</a></h4>
              <p>BCGD partners with different stakeholders to spread the research findings and inform the policy community....</p>
              </div>
              <div class="p-4">
                <a href="{{route('recent.activities')}}" class="service-read"> Read More <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in"   data-aos-delay="100">
            <div class="icon-box">
                <div class="d-flex justify-content-between px-4 pt-4">
                    <div class="icon "><i class="fas fa-handshake"></i></div>
                    <div class="">
                        <p class="servece-serial">05</p>
                    </div>                    
                </div>              
              <div class="px-4">
                <h4><a href="">Partnership beyond the country</a></h4>
              <p>BCGD’s foremost objectives are to be a credible platform for ideas to promote excellence in governance...</p>
              </div>
              <div class="p-4">
                <a href="{{route('recent.activities')}}" class="service-read"> Read More <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in"   data-aos-delay="100">
            <div class="icon-box">
                <div class="d-flex justify-content-between px-4 pt-4">
                    <div class="icon "><i class="bx bx-arch"></i></div>
                    <div class="">
                        <p class="servece-serial">06</p>
                    </div>                    
                </div>              
              <div class="px-4">
                <h4><a href="">Link Building</a></h4>
              <p>Proactively envisioned multimedia based expertise and cross-media growth strategies.</p>
              </div>
              <div class="p-4">
                <a href="#" class="service-read"> Read More <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div> --}}

         

        </div>

      </div>
    </section><!-- End Services Section -->

    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <h3>Check our <span>Portfolio</span></h3>
          {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> --}}
        </div>

        {{-- <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> --}}

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">             
              <a href="assets/img/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
             
              <a href="assets/img/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">             
              <a href="assets/img/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              
              <a href="assets/img/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">             
              <a href="assets/img/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">           
              <a href="assets/img/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">            
              <a href="assets/img/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">              
              <a href="assets/img/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">             
              <a href="assets/img/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

     
 <!-- ======= Our Project Section ======= -->
          <section id=project>
            <div class="container" >
                <h6 class="title-section">OUR PROJECT</h6>
                <div class="d-flex justify-content-between">
                    <h3 class="title-header">Explore Case Studies</h3>
                    <a href="#" class="btn-get-started scrollto">View All Project <i class="fas fa-arrow-right"></i> </a>
                </div>

                <div class="row my-5">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="our-project">
                            <img src="assets/img/project1.jpg">
                            <div class="team-content">
                                <h3 class="post">Business service</h3>
                                <span class="title">Business Planning</span>                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="our-project">
                            <img src="assets/img/project2.jpg">
                            <div class="team-content">
                                <h3 class="post">Development Servece</h3>
                                <span class="title">Investment</span>                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="our-project">
                            <img src="assets/img/project3.jpg">
                            <div class="team-content">
                                <h3 class="post">Marketing Service</h3>
                                <span class="title">Risk Management</span>                              
                            </div>
                        </div>
                    </div>
             
                  
                </div>


            </div>

          </section>
<!-- ======= End Project Section ======= -->
  
    <!-- ======= Team Section ======= -->


    <section id="team" class="team section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 col-md-6 col-sm-12">
            <h6 class="title-section ">OUR COMMITTEE</h6>
            <div class="">
                <h3 class="content-section">BCGD Executive Committee</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-end mb-5">
                <a href="{{route('about.executive')}}" class="btn-get-started scrollto">View All<i class="fas fa-arrow-right"></i> </a>
            </div>
          </div>

       

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="row">
                  
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <a href="https://profile.diu.ac/patwary">
                    <div class="member">
                      <div class="member-img">
                        <img src="assets/img/team/Barrister Shameem Haider Patwary MP, Chairman, BoT,Dhaka International University.jpg" class="img-fluid" alt="">
                        
                      </div>
                      <div class="team-info">
                        <h4>Barrister Shameem Haider Patwary MP, Chairman, BoT,</h4>
                        <p>Chairman</p>
                      </div>
                    </div>
                  </a>
                  </div>              
    
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <a href="https://profile.diu.ac/md.azmir.hossain">
                    <div class="member">
                      <div class="member-img">
                        <img src="assets/img/team/Chairman, Department of Business Administration-Md Azmir Hossain.jpg" class="img-fluid" alt="">
                        
                      </div>
                      <div class="team-info">
                        <h4>Md. Azmir Hossain, Chairman, Department of Business Administration</h4>
                        <p>Member</p>
                      </div>
                    </div>
                  </a>
                  </div>
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <a href="https://profile.diu.ac/md.raisul.islam.sourav">
                    <div class="member">
                      <div class="member-img">
                        <img src="assets/img/team/Chairman, Department of Law, Md Raisul Islam Sourav.jpg" class="img-fluid" alt="">
                        
                      </div>
                      <div class="team-info">
                        <h4>Md. Raisul Islam Sourav, Chairman, Department of Law
                        </h4>
                        <p>Member</p>
                      </div>
                    </div>
                  </a>
                  </div>
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <a href="https://profile.diu.ac/prof.dr.a.t.mmahbuburrahmansarker">
                    <div class="member">
                      <div class="member-img">
                        <img src="assets/img/team/Chairman, Department of CSE, Dr. A.T.M. Mahbubur Rahman Sarker.jpg" class="img-fluid" alt="">
                        
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
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <a href="https://profile.diu.ac/mohammad.tareq">
                    <div class="member">
                      <div class="member-img">
                        <img src="assets/img/team/Chairman, Department of EEE, Mohammad Tareq.jpg" class="img-fluid" alt="">
                        
                      </div>
                      <div class="team-info">
                        <h4>Mohammad Tareq, Chairman, Department of EEE</h4>
                        <p>Member</p>
                      </div>
                    </div>
                  </a>
                  </div>
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <a href="https://profile.diu.ac/shovon">
                    <div class="member">
                      <div class="member-img">
                        <img src="assets/img/team/Chairman, Department of Civil Engineering, S M SAZZAD AHMED SHOVON.jpg" class="img-fluid" alt="">
                        
                      </div>
                      <div class="team-info">
                        <h4>S M SAZZAD AHMED SHOVON, Chairman, Department of Civil Engineering</h4>
                        <p>Member</p>
                      </div>
                    </div>
                  </a>
                  </div>
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <a href="https://profile.diu.ac/s.jubair.al.ahmed">
                    <div class="member">
                      <div class="member-img">
                        <img src="assets/img/team/Chairman, Department of English, S. Jubair Al Ahmed.jpg" class="img-fluid" alt="">
                        
                      </div>
                      <div class="team-info">
                        <h4>S. Jubair Al Ahmed,Chairman, Department of English</h4>
                        <p>Member</p>
                      </div>
                    </div>
                  </a>
                  </div>
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <a href="https://profile.diu.ac/jamsedur.rahman?fbclid=IwAR2mX4t0V4Qkk9aly9uMbv_bnAa_h2VheqDcPx4qf9S7Ny2rMxxQxINjvN4">
                    <div class="member">
                      <div class="member-img">
                        <img src="assets/img/team/Chairman, Department of Sociology, Jamsedur Rahman.jpg" class="img-fluid" alt="">
                        
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
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <a href="https://profile.diu.ac/professor.farida.begum">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/Chairman, Department of Pharmacy, Professor Farida Begum.jpg" class="img-fluid" alt="">
                      
                    </div>
                    <div class="team-info">
                      <h4>Professor Farida Begum, Chairman, Department of Pharmacy</h4>
                      <p>Member</p>
                    </div>
                  </div>
                </a>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <a href="https://profile.diu.ac/md.fazlul.haque?fbclid=IwAR1iEwFPwxfdXkekbVN7KCVuDdedCtxb0ib3EC_h-UrWAUCLUQadAJoYRoM">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/Chairman, Department of Political Science, Md. Fazlul Haque.jpg" class="img-fluid" alt="">
                      
                    </div>
                    <div class="team-info">
                      <h4>Md. Fazlul Haque, Chairman, Department of Political Science</h4>
                      <p>Member</p>
                    </div>
                  </div>
                </a>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <a href="https://profile.diu.ac/md.rofiqul.islam">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/Chairman, Department of Economics, Md. Rofiqul Islam.jpg" class="img-fluid" alt="">
                      
                    </div>
                    <div class="team-info">
                      <h4>Md. Rofiqul Islam, Chairman, Department of Economics</h4>
                      <p>Member</p>
                    </div>
                  </div>
                </a>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <a href="">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/Sunita Rani Biswas, Assistant Professor, Department of Law.jpg" class="img-fluid" alt="">
                      
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
                
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
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
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <a href="https://profile.diu.ac/md.bazlur.rahman">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Md. Bazlur Rahman, Associate Professor, Department of Business Administration, DIU.jpg" class="img-fluid" alt="">
                    
                  </div>
                  <div class="team-info">
                    <h4>Md. Bazlur Rahman, Associate Professor, Department of Business Administration, DIU</h4>
                    <p>Member</p>
                  </div>
                </div>
              </a>
              </div>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <a href="https://profile.diu.ac/dr.md.sharifulislam">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Dr. Md. Shariful Alam, Associate Professor, Department of Political Science, DIU.jpg" class="img-fluid" alt="">
                    
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
  
   

   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>Contact us for more information.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p class="mb-3">House# 04, Road# 01, Block# F,
                Banani, Dhaka 1213,
                Bangladesh.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>bcgd.diu@gmail.com & infobcgddiu@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p class="mb-3">01718200985
              </p>
            </div>
          </div>

        </div>

        <div class="" data-aos="fade-up" data-aos-delay="100">

          <div class=" ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14604.974079688413!2d90.40454096594159!3d23.774341155794485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sHouse%23%2004%2C%20Road%23%2001%2C%20Block%23%20F%2C%20Banani%2C%20Dhaka%201213%2C!5e0!3m2!1sen!2sbd!4v1702109721397!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 

    @endsection
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

</style>
  <!-- ======= Hero Section ======= -->
  {{-- <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>Bcgd</span></h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started <i class="fas fa-arrow-right"></i></a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section><!-- End Hero --> --}}

  <div>
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
            <h1>Welcome to Bangladesh Center for Governance and Development, DIU.</h1>
            <h5>BCGD are to become a think tank and academic hub on public policy, climate change and migration studies across the globe. </h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/slider2.jpg" class="d-block w-100" alt="..." style="height: 75vh">
          <div class="carousel-caption d-none d-md-block">
            <h1>Welcome to Bangladesh Center for Governance and Development, DIU.</h1>
            <h5>BCGD are to become a think tank and academic hub on public policy, climate change and migration studies across the globe. </h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/slider3.png" class="d-block w-100" alt="..." style="height: 75vh">
          <div class="carousel-caption d-none d-md-block">
            <h1>Welcome to Bangladesh Center for Governance and Development, DIU.</h1>
            <h5>BCGD are to become a think tank and academic hub on public policy, climate change and migration studies across the globe. </h5>
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

        <div >
          <h2>About DIU and BCGD</h2>
          <p style="text-align:justify" >“A commitment to excellence in teaching and research will increasingly depend on a university’s capacity to partner as much it does on its ability to create and disseminate knowledge. Put another way, effective engagement that is central to university strategy may provide the most powerful driver of the agility required to thrive in the uncertain environment to which universities are subject worldwide.” said by Gaskell, S. & A. Collette. (The Benefits of Engagement. Times Higher Ed Feature Article; Dec 8, 2016.)</p>
        
          <p style="text-align:justify"><strong>Dhaka International University (DIU)</strong> is one of the leading private universities in Bangladesh. It is a non-profitable institution which maintains strict academic rules and provides quality educations in 10 disciplines. The mission of DIU is to produce able leaders in the respective field of study who can meet the challenges of present dynamic world. It provides multidisciplinary knowledge, improves communication and interpersonal skills at the highest level of excellence among the students, which will make them honest, sincere and dedicated in their thoughts and deeds. The vision of this university is ‘to see an educated and healthy generation’. </p>
        
          <p style="text-align:justify">To meet successfully the above vision and missions, the university is continuously working on various governance, and development issues including climate change, human migration due to climate change, public health, human rights and so on.</p>
        
          <p style="text-align:justify">As Bangladesh looks forward to becoming an advanced economy by 2041, the country needs professionals with an adequate understanding of the evolving governance and development dynamics. Therefore, there is always an overarching need for critical research on governance and development issues such as nationwide fast mobility and communication for fast economic growth, climate change, river erosion, reduced upstream flow of the rivers, salinity, migration, displacement, increased inequality, unemployment, social disintegration, and so on. Within this context and formalization with the community engagement, the university has established the <strong> Bangladesh Center for Governance and Development (BCGD). </strong></p>

          <div class="d-flex justify-content-end mt-4" data-aos="fade-left" data-aos-delay="100">
            <a href="https://www.facebook.com/BCGD.DIU " class="btn-get-started scrollto">View BCGD Latest Facebook Post <i class="fas fa-arrow-right"></i></a>
          </div>
        
        </div>

       

      </div>
    </section><!-- End About Section -->

  
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
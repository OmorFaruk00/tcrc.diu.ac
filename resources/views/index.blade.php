@extends('layouts.master')

@section('title', 'home')

@section('content')
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
          <p style="text-align: justify" >“A commitment to excellence in teaching and research will increasingly depend on a university’s capacity to partner as much it does on its ability to create and disseminate knowledge. Put another way, effective engagement that is central to university strategy may provide the most powerful driver of the agility required to thrive in the uncertain environment to which universities are subject worldwide.” said by Gaskell, S. & A. Collette. (The Benefits of Engagement. Times Higher Ed Feature Article; Dec 8, 2016.)</p>
        
          <p ><strong>Dhaka International University (DIU)</strong> is one of the leading private universities in Bangladesh. It is a non-profitable institution which maintains strict academic rules and provides quality educations in 10 disciplines. The mission of DIU is to produce able leaders in the respective field of study who can meet the challenges of present dynamic world. It provides multidisciplinary knowledge, improves communication and interpersonal skills at the highest level of excellence among the students, which will make them honest, sincere and dedicated in their thoughts and deeds. The vision of this university is ‘to see an educated and healthy generation’. </p>
        
          <p >To meet successfully the above vision and missions, the university is continuously working on various governance, and development issues including climate change, human migration due to climate change, public health, human rights and so on.</p>
        
          <p>As Bangladesh looks forward to becoming an advanced economy by 2041, the country needs professionals with an adequate understanding of the evolving governance and development dynamics. Therefore, there is always an overarching need for critical research on governance and development issues such as nationwide fast mobility and communication for fast economic growth, climate change, river erosion, reduced upstream flow of the rivers, salinity, migration, displacement, increased inequality, unemployment, social disintegration, and so on. Within this context and formalization with the community engagement, the university has established the <strong> Bangladesh Center for Governance and Development (BCGD). </strong></p>

          <div class="d-flex justify-content-end mt-4" data-aos="fade-left" data-aos-delay="100">
            <a href="https://www.facebook.com/BCGD.DIU " class="btn-get-started scrollto">View BCGD Latest Facebook Post <i class="fas fa-arrow-right"></i></a>
          </div>
        
        </div>

       

      </div>
    </section><!-- End About Section -->

  

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

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

  <!-- ======= Skills Section ======= -->
      <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">
  
          <div class="row skills-content">  
            <div class="col-lg-6  p-5" data-aos="fade-up" data-aos-delay="100">
                <h6 class="title-section">OUR SKILL</h6>
                <h3 class="title-header">Let's Build Together The Digital Experience</h3>
                <p class="fst-italic my-4" class="title-desc">
                    Malesuada bibendum arcu vitae elementum. Semper eget duis at tellus at urna condimentum. Aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed..
                </p> 
            
            
              <div class="progress">
                <span class="skill">Design & Development
                    <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90"></div>
                </div>
              </div>  
              <div class="progress">
                <span class="skill">Digital Marketing
                    <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80"></div>
                </div>
              </div>  
              <div class="progress">
                <span class="skill">Product Promotion
                    <i class="val">95%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="95"></div>
                </div>
              </div>  
              <div class="d-flex mb-4">
                <a href="#about" class="btn-get-started scrollto">Get Started <i class="fas fa-arrow-right"></i> </a>
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span class="ml-3" >Watch Video</span></a>                
                
              </div>
            </div> 
  
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/skil.jpg" class="img-fluid" alt="">
                  </div>  
  
          </div>
  
        </div>
      </section><!-- End Skills Section -->

       <!-- ======= benifit Section ======= -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">
      
              <div class="row skills-content"> 
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/benifit.jpg" class="img-fluid" alt="">
                  </div> 
                <div class="col-lg-6  p-5" data-aos="fade-up" data-aos-delay="100">
                    <h6 class="title-section">YOUR BENEFIT</h6>
                    <h3 class="title-header">Expert Services Change Your Business Value</h3>
                    <p class="fst-italic my-4" class="title-desc">
                        Curabitur vitae nunc sed. Fringilla urna porttitor rhoncus dolor purus non at enim malesuada bibeum arcu vitae elementum. Semper eget duis tellus  lorem ipsum dolor simit urna condimentum..
                    </p> 

                   
                     <div class="list-icon">
                      <p> <i class="fas fa-square"></i> <strong>Multiply global marketing policy</strong> </p>
                      <p> <i class="fas fa-square"></i> <strong>Integrate it on your business</strong> </p>
                      <p> <i class="fas fa-square"></i> <strong>Track your daily activity.</strong> </p>
                      <p> <i class="fas fa-square"></i> <strong>Let's monitor the team.</strong> </p>
                      <p> <i class="fas fa-square"></i> <strong>Virtual support team.policy</strong> </p>
                     </div>
                 
                  <div class="d-flex mb-4">
                    <a href="#about" class="btn-get-started scrollto">Get Started <i class="fas fa-arrow-right"></i> </a>                  
                    
                  </div>                 

                </div>
                </div>  
      
                   
      
      
              </div>
      
            </div>
          </section><!-- End Skills Section -->
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
    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

       <div class="text-center mb-5">
        <h4 class=" text-white">TESTIMONIALS</h4>
        <h1 class=" text-white">What’s Clients Says</h1>
        <p class=" text-white">Vestibulum lectus mauris ultrices eros in. Cursus sit amet dictum sit amet. Adipiscing tristique risus nec feugiat the aenean bcom here</p>
       </div>    

       

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                       <div class="monial-body">
                        <div class="monial">
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus diam massa, vel tincidunt purus pellentesque non. Phasellus feugiat at ex id euismod. Quisque dictum varius mi et interdum. Aenean. </p>
                            </div>
                            <div class="monial-pic">
                                <img src="assets/img/testimonials/testimonials-1.jpg"  alt="">
                            </div>
                            <div class="monial-review">
                                <h3 class="monial-title">kristiana</h3>
                                <span>Web Desginer</span>
                            </div>
                        </div>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                        <div class="monial-body">
                         <div class="monial">
                             <div class="description">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus diam massa, vel tincidunt purus pellentesque non. Phasellus feugiat at ex id euismod. Quisque dictum varius mi et interdum. Aenean. </p>
                             </div>
                             <div class="monial-pic">
                                 <img src="assets/img/testimonials/testimonials-2.jpg"  alt="">
                             </div>
                             <div class="monial-review">
                                 <h3 class="monial-title">kristiana</h3>
                                 <span>Web Desginer</span>
                             </div>
                         </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                        <div class="monial-body">
                         <div class="monial">
                             <div class="description">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus diam massa, vel tincidunt purus pellentesque non. Phasellus feugiat at ex id euismod. Quisque dictum varius mi et interdum. Aenean. </p>
                             </div>
                             <div class="monial-pic">
                                 <img src="assets/img/testimonials/testimonials-3.jpg"  alt="">
                             </div>
                             <div class="monial-review">
                                 <h3 class="monial-title">kristiana</h3>
                                 <span>Web Desginer</span>
                             </div>
                         </div>
                        </div>
                     </div>
                   </div>
             
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                       <div class="monial-body">
                        <div class="monial">
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus diam massa, vel tincidunt purus pellentesque non. Phasellus feugiat at ex id euismod. Quisque dictum varius mi et interdum. Aenean. </p>
                            </div>
                            <div class="monial-pic">
                                <img src="assets/img/testimonials/testimonials-4.jpg"  alt="">
                            </div>
                            <div class="monial-review">
                                <h3 class="monial-title">kristiana</h3>
                                <span>Web Desginer</span>
                            </div>
                        </div>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                        <div class="monial-body">
                         <div class="monial">
                             <div class="description">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus diam massa, vel tincidunt purus pellentesque non. Phasellus feugiat at ex id euismod. Quisque dictum varius mi et interdum. Aenean. </p>
                             </div>
                             <div class="monial-pic">
                                 <img src="assets/img/testimonials/testimonials-5.jpg"  alt="">
                             </div>
                             <div class="monial-review">
                                 <h3 class="monial-title">kristiana</h3>
                                 <span>Web Desginer</span>
                             </div>
                         </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                        <div class="monial-body">
                         <div class="monial">
                             <div class="description">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus diam massa, vel tincidunt purus pellentesque non. Phasellus feugiat at ex id euismod. Quisque dictum varius mi et interdum. Aenean. </p>
                             </div>
                             <div class="monial-pic">
                                 <img src="assets/img/testimonials/testimonials-1.jpg"  alt="">
                             </div>
                             <div class="monial-review">
                                 <h3 class="monial-title">kristiana</h3>
                                 <span>Web Desginer</span>
                             </div>
                         </div>
                        </div>
                     </div>
                   </div>
             
            </div>

        

           

         

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section --> --}}

   

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-9 col-md-6 col-sm-12">
            <h6 class="title-section">OUR Team</h6>
            <div class="">
                <h3 class="content-section">Our Professional Team</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-end mb-5">
                <a href="#" class="btn-get-started scrollto">View All<i class="fas fa-arrow-right"></i> </a>
            </div>
          </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

   

   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 

    @endsection
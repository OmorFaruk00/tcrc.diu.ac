<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TCRC-DIU @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/images/tcrc.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  {{--
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet"> --}}
  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/font/font.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">



  <!-- Include jQuery -->
  <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>  


  <!-- Include Owl Carousel CSS and JS files -->
  <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/vue/vue.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/axios/axios.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



  <style>
    #header {
      display: flex;
      justify-content: center;
      align-items: center;
      list-style: none;


    }

    .navbar>ul>li {
      white-space: nowrap;
      padding: 10px 0px 5px 5px !important;

    }

    .navbar a,
    .navbar a:focus {
      font-size: 16px !important;
      text-align: center;

    }

    .top-logo img {
      /* margin-left:50px; */
      width: 80px;
      height: 70px;
    }

    @media only screen and (min-width: 990px) and (max-width: 1099px) {

      .navbar a,
      .navbar a:focus {
        font-size: 13px !important;

      }

      .top-logo img {
        width: 70px;
        height: 50px;
      }

      .navbar>ul>li {
        padding: 10px 0px 5px 5px !important;
      }
     
    }

    @media only screen and (min-width: 1100px) and (max-width: 1199px) {

      .navbar a,
      .navbar a:focus {
        font-size: 13px !important;

      }

      .navbar>ul>li {
        white-space: nowrap;
        padding: 10px 0px 5px 5px !important;
      }

      .top-logo img {
        width: 70px
      }
      
    }

    @media only screen and (min-width: 1200px) and (max-width: 1490px) {

      .navbar a,
      .navbar a:focus {
        font-size: 14px !important;

      }

      .navbar>ul>li {
        padding: 10px 0px 6px 6px !important;
      }

      .top-logo img {
        width: 100px;
      }
    
     
    }
   
    @media only screen and (min-width: 380px) and (max-width: 480px) {
      .mobile-nav-toggle {
        margin-left: 100px;

      }
    }

    @media only screen and (min-width: 481px) and (max-width: 580px) {
      .mobile-nav-toggle {
        margin-left: 200px;

      }
    }

    @media only screen and (min-width: 581px) and (max-width: 780px) {
      .mobile-nav-toggle {
        margin-left: 300px;

      }
    }

    @media only screen and (min-width: 781px) and (max-width: 980px) {
      .mobile-nav-toggle {
        margin-left: 500px;

      }
    }

    .footer-top {
      background: #093C34 !important;
      /* background: linear-gradient(to right, #008080, #135C51) !important;
  /* Replace #008080 and #135C51 with your desired gradient colors */
      color: #fff !important;
    }

    .footer-contact p {
      color: #fff !important;
    }

    .footer-links ul li a,
    i {
      color: #fff !important;
    }

    .footer-links h4 {
      color: #fff !important;
    }

    #footer {
      background: #135C51 !important;
    }

    .copyright {
      height: 30px;
    }

    .copyright p {
      color: #fff;
      padding-top: 15px;
    }

    .head-border {
      margin-bottom: 10px;
      border-bottom: 1px solid gray !important;
    }

    .btn-title:hover {
      color: #FDC106 !important;
    }

    .btn-title {
      color: #fff !important;
    }

    .publication-img img {
      object-fit: cover;
      object-position: top;
    }

    .library-img {
      float: left;
      width: 300px;
      height: 400px;
      margin-right: 30px;
      margin-bottom: 20px;
      border-radius: 5px;
      object-fit: cover;
    }

    .article-img {
      float: left;
      width: 400px;
      height: 300px;
      margin-right: 30px;
      margin-bottom: 20px;
      border-radius: 5px;
      object-fit: cover;
    }

    .clearfix::after {
      content: "";
      display: table;
      clear: both;
    }

    .content-desc {
      text-align: justify;

    }
    .library-img:hover {
        transform: scale(1.05);
    }   
    .image-modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        align-items: center;
        justify-content: center;
    }
    .image-modal img {
    width: 100%;  
    max-width: 90vw;  
    height: auto;  
    object-fit: contain; 
    display: block;
    margin: auto; 
}


    /* Fullscreen Image */
    .modal-content {
        max-width: 90%;
        max-height: 90%;
        display: block;
        margin: auto;
    }

    /* Close Button */
    .close-btn {
        position: absolute;
        top: 15px;
        right: 30px;
        color: white;
        font-size: 30px;
        cursor: pointer;
    }

    @media (max-width: 768px) {
      .article-img {
        float: none;
        width: 100%;
        margin-bottom: 15px;
      }
    }
  </style>



</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com"
            style="color: #fff">infotcrcdiu@gmail.com </a></i>
        {{-- <i class="bi bi-phone d-flex align-items-center ms-4"><span style="color: #fff"> +88 016 80097627 &
            +880171 8200 985</span></i> --}}
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://www.facebook.com/TCRCDIU/" class="btn-title">
          <h6 class="pt-2 color-white">Tobacco Control and Research Cell (TCRC)-Dhaka International University
          </h6>
        </a>

      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/tcrcdiu" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/TCRCDIU/" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="https://www.youtube.com/@tobaccocontrolresearchcell1467" class="instagram" target="_blank"><i
            class="bi bi-youtube"></i></a>
        <a href="https://www.linkedin.com/company/90463493" class="linkedin" target="_blank"><i
            class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>



  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class=" d-flex align-items-center justify-content-between">
      <a href="{{ route('home') }}" class="top-logo"><img src="{{ asset('assets/images/toplogo.png') }}"
          alt="TCRC Logo"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto{{ Request::is('/') ? ' active' : '' }}" href="{{ route('home') }}">Home</a>
          </li>
          <li class="dropdown"><a href="#"> <span>About Us</span> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1" height='10px'>
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg></i></a>
            <ul>
              <li><a href="{{ route('about.history') }}">History</a></li>
              <li class="dropdown"> <a href="#"><span>Our Team</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ route('about.executive') }}">Executive Body</a></li>
                  <li><a href="{{ route('about.team') }}">Resource Team</a></li>
                </ul>
              </li>
              <li><a href="{{ route('about.fctc_5.3_policy') }}">FCTC 5.3 Policy</a></li>
              <li><a href="{{ route('about.our_recognition') }}"> Our Recognition</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Our Expertise</span> <svg xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1"
                height='10px'>
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg></a>
            <ul>

              <li><a href="{{ route('recent_activies') }}">Recent Activites</a></li>
              <li><a href="{{ route('graphical_health') }}">Graphical Health Warnings</a></li>
              <li><a href="{{ route('standard_packaging') }}">Standard Packaging</a></li>
              <li><a href="{{ route('emerging_tobacco') }}">Emerging Tobacco Products</a></li>
              <li><a href="{{ route('tobacco_taxation') }}">Tobacco Taxation</a></li>
              <li><a href="{{ route('law_amendment') }}">Law Amendment</a></li>
              <li><a href="{{ route('public_health') }}">Public Health</a></li>
              <li><a href="{{ route('mayor_alliance') }}">Mayor Alliance for Healthy Cities</a></li>
              <li><a href="{{ route('other_activities') }}">Other Activities</a></li>


            </ul>
          </li>
          <li class="dropdown"><a href="#"><span> ​Library</span> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1" height='10px'>
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg></a>
            <ul>
              <li><a href="{{ route('research') }}">Research</a></li>
              <li class="dropdown"> <a href="#"><span>Article</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ route('journal_article') }}">Journal Article</a></li>
                  <li><a href="{{ route('newspaper_article') }}">Newspaper Article</a></li>
                </ul>
              </li>
              <li><a href="{{ route('factsheet') }}">Factsheet</a></li>
              <li><a href="{{ route('policy_brief') }}">Policy Brief</a></li>
              <li><a href="{{ route('publication') }}">Publications</a></li>


            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Projects</span> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1" height='10px'>
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg></a>
            <ul>
              <li><a href="{{ route('ongoing_project') }}">Ongoing Projects</a></li>
              <li><a href="{{ route('completed_project') }}">Completed Projects</a></li>

            </ul>
          </li>



          <li><a class="nav-link scrollto{{ Request::is('achivement') ? ' active' : '' }}"
              href="{{ route('achivement') }}">Achievement</a></li>

          <li class="dropdown"><a href="#"><span>Networks</span> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1" height='10px'>
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg></a>
            <ul>
              <li><a href="{{ route('national_partner') }}">National Partners</a></li>
              <li><a href="{{ route('international_partner') }}">International Partners</a></li>

            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Media Center</span> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1" height='10px'>
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg></a>
            <ul>
              <li><a href="{{ route('mainstream_media') }}">Mainstream Media News</a></li>
              <li><a href="{{ route('electronic_media') }}">Electronic Media News</a></li>
              <li><a href="{{ route('photo') }}">Photos</a></li>
              <li><a href="{{ route('video') }}">Videos</a></li>

            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>KnowledgeHub</span> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1" height='10px'>
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg></a>
            <ul>

              <li><a href="{{ route('graphical_health') }}">Graphical Health Warnings</a></li>
              <li><a href="{{ route('standard_packaging') }}">Standard Packaging</a></li>
              <li><a href="{{ route('emerging_tobacco') }}">Emerging Tobacco Products</a></li>
              <li><a href="{{ route('tobacco_taxation') }}">Tobacco Taxation</a></li>
              <li><a href="{{ route('law_amendment') }}">Law Amendment</a></li>
              <li><a href="{{ route('public_health') }}">Public Health</a></li>


            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ route('bd_tpack') }}">BD-Tpack</a></li>
          <li><a class="nav-link scrollto{{ Request::is('contact') ? ' active' : '' }}"
              href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
        {{-- <i class="bi bi-list mobile-nav-toggle"></i> --}}

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-6 h-6 mobile-nav-toggle" style="height: 30px">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>




      </nav><!-- .navbar -->

      {{-- <img src="assets/img/list.png" alt=""> --}}
    </div>
  </header><!-- End Header -->
  <div class="head-border">

  </div>



  <main>
    @yield('content')
  </main>


  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="{{ route('home') }}" class=""><img src="{{ asset('assets/images/logo.png') }}" alt=""
                style="margin-bottom:10px;"></a>
            <p>
              House# 04, Road# 01, Block# F,<br>
              Banani, Dhaka 1213, Bangladesh.<br>
              <br>
              <strong>Phone:</strong> +88 016 80097627<br>
              <strong>Phone:</strong> +880171 8200 985<br>
              <strong>Email:</strong> infotcrcdiu@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about.executive') }}" target="_blank">About
                  us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#activities">Recent Activities</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#publication">Publications</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}" target="_blank">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#team" target="_blank">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#network" target="_blank">Networks</a>
              </li>
              <li><i class="bx bx-chevron-right"></i> <a href="#achivement" target="_blank">Achievement</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('mainstream_media') }}" target="_blank">Media
                  Center</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Get in touch our social network for more information.</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/TCRCDIU" class="twitter" target="_blank"><i
                  class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/BCGD.DIU" class="facebook" target="_blank"><i
                  class="bx bxl-facebook"></i></a>
              <a href="https://www.youtube.com/@tobaccocontrolresearchcell1467" class="instagram" target="_blank"><i
                  class="bi bi-youtube"></i></a>
              {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
              <a href="https://www.linkedin.com/company/90463493" class="linkedin" target="_blank"><i
                  class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-flex justify-content-center">
      <div class="copyright">
        <p class=""> © 2023 <strong>DIU</strong>. All rights Reserved. | Developed & Powered by:
          <strong>IT-Team, DIU</strong>
        </p>

        {{-- &copy; Copyright <strong><span></span></strong>. All Rights Reserved --}}
      </div>

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>



  @yield('script')

</body>

</html>
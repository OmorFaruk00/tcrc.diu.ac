<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title', 'app')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/bcgd.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/pages.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
 <!-- Add this to the head of your HTML file -->
<!-- Add this to the head of your HTML file -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">




 
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">bcgd.diu@gmail.com & infobcgddiu@gmail.com </a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>01718200985 </span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/BCGD.DIU" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      {{-- <h1 class="logo"><a href="index.html" >BCGD<span>.</span></a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="#" class="logo"><img src="assets/img/bcgd.jpg" alt="" style="width:100px;margin-top:15px"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('home')}}">Home</a></li>          
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('about.history')}}">History</a></li>
              <li class="dropdown"><a href="#"><span>Our Team</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{route('about.executive')}}">Executive Body</a></li>
                  <li><a href="{{route('about.team')}}">Working Team</a></li>                  
                </ul>
              </li>              
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Our Approach</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
                <li class="dropdown"><a href="#"><span>Research</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="{{route('research')}}">Bcgd</a></li>
                    <li><a href="{{route('other.research')}}">Others</a></li>                  
                  </ul>
                </li>    
              <li><a href="{{route('advocacy')}}">Advocacy</a></li>
              <li><a href="{{route('capacity')}}">Capacity Building</a></li>
              <li><a href="{{route('public.awereness')}}">Public Awereness</a></li>
                         
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Area of Expertise</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('road.safety')}}">Road Safety</a></li>
              <li><a href="{{route('climate_change')}}">Climate Change</a></li>
              <li><a href="{{route('migration')}}">Migration</a></li>
              <li><a href="{{route('public.health')}}">Public Health</a></li>
                         
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{route('recent.activities')}}">Recent Activities</a></li>
          <li><a class="nav-link scrollto" href="{{route('publication')}}">Publication</a></li>
          <li><a class="nav-link scrollto" href="{{route('achivement')}}">Achievement</a></li>
          <li><a class="nav-link scrollto" href="{{route('network')}}">Our Network</a></li>
          <li class="dropdown"><a href="#"><span>News & Media</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('social.media')}}">Social Media</a></li>
              <li><a href="{{route('mainstream.media')}}">Mainstream Media</a></li>
              <li><a href="{{route('electronic.media')}}">Electronic Media</a></li>
                         
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{route('contact')}}">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



  <main>
    @yield('content')
   </main>


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Sign Up to Our Newsletter to Get Latest Updates & Services</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="#" class=""><img src="assets/img/footer-logo.jpg" alt="" style="width:250px;margin-top:-25px;margin-left:-25px"></a>
            <p>
              04, Road# 01, Block# F,<br>
              Banani, Dhaka 1213, <br>
              Bangladesh. <br><br>
              <strong>Phone:</strong>  01718200985<br>
              <strong>Email:</strong> bcgd.diu@gmail.com  & infobcgddiu@gmail.com <br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('recent.activities')}}">Future Course Plan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('recent.activities')}}">Short Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('recent.activities')}}">Research and dialogue</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('recent.activities')}}">Dialogue partners</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('recent.activities')}}">Partnership beyond the country</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Get in touch our social network for more information.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/BCGD.DIU" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        <div class="">
          <p class=""> © 2023 <strong>DIU</strong>. All rights Reserved. | Developed & Powered by: <strong>IT-Team, DIU</strong></p>
        </div>
      
        {{-- &copy; Copyright <strong><span></span></strong>. All Rights Reserved --}}
      </div>
    
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
  <script src="assets/js/main.js"></script>

</body>

</html>
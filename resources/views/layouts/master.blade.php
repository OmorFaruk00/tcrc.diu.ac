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
  {{-- <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet"> --}}
 <!-- Add this to the head of your HTML file -->
<!-- Add this to the head of your HTML file -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



<style>
  #header {
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
   
    
}
/* .head-bottom{
  margin-bottom: 10px;
  margin-top: 20px;
  border-bottom: 1px solid gray !important;

} */

  .navbar>ul>li {
  white-space: nowrap;
  padding: 10px 0px 10px 11px !important;
  
}
.navbar a,
.navbar a:focus {  
  font-size: 18px !important;
  text-align: center;

}
.top-logo img{
  /* margin-left:50px; */
  width:200px
}
@media only screen and (min-width: 990px) and (max-width: 1099px) { 
 
  .navbar a,
.navbar a:focus {  
  font-size: 14px !important;

}
.top-logo img{
  width:70px
}
.navbar>ul>li {
  padding: 10px 0px 10px 6px !important;
}
}
@media only screen and (min-width: 1100px) and (max-width: 1199px) { 
 
 .navbar a,
.navbar a:focus {  
 font-size: 14px !important;

}
.navbar>ul>li {
  white-space: nowrap;
  padding: 10px 0px 10px 14px !important;
}
.top-logo img{
 width:70px
}
}
@media only screen and (min-width: 1200px) and (max-width: 1490px) {  
 
  .navbar a,
.navbar a:focus {  
  font-size: 16px !important;

}
.navbar>ul>li {
  padding: 10px 0px 10px 10px !important;
}
.top-logo img{
  width:100px
}
}
@media only screen and (min-width: 380px) and (max-width: 480px) { 
  .mobile-nav-toggle{
    margin-left: 100px;

  }
}
@media only screen and (min-width: 481px) and (max-width: 580px) { 
  .mobile-nav-toggle{
    margin-left: 200px;

  }
}
@media only screen and (min-width: 581px) and (max-width: 780px) { 
  .mobile-nav-toggle{
    margin-left: 300px;

  }
}
@media only screen and (min-width: 781px) and (max-width: 980px) { 
  .mobile-nav-toggle{
    margin-left: 500px;

  }
}
.footer-top{
  background: #063c34 !important;
  /* background: linear-gradient(to right, #008080, #135C51) !important;
  /* Replace #008080 and #135C51 with your desired gradient colors */
  color: #fff !important; 
}
.footer-contact p{
  color: #fff !important;
}
.footer-links ul li a,i{
  color: #fff !important;
}
.footer-links h4{
  color: #fff !important;
}
#footer{
  background: #135C51 !important;
}
.copyright {
 height: 30px;
}
.copyright p{
  color: #fff;
  padding-top: 15px;
}
.head-border{
  margin-bottom: 10px;
  border-bottom: 1px solid gray !important;
}
.btn-title:hover{
  color: #FDC106 !important;
}
.btn-title{
  color: #fff !important;
}






</style>


 
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">info@bcgddiu.org</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+8801718200985 </span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://www.facebook.com/BCGD.DIU" class="btn-title"><h5 class="pt-2 color-white">Bangladesh Center for Governance and Development-DIU</h5></a>
       
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/BCGD.DIU" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="https://www.youtube.com/channel/UCZfqywsI1mP1wPJ4xA6esyg" class="instagram" target="_blank"><i class="bi bi-youtube"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

   

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class=" d-flex align-items-center justify-content-between">      
      <a href="{{route('home')}}" class="top-logo"><img src="assets/img/logo.jpg" alt="" style=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto{{ Request::is('/') ? ' active' : '' }}" href="{{route('home')}}">Home</a></li>          
          <li class="dropdown"><a href="#"> <span>About Us</span>  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1" height='10px'>
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg></i></a>
            <ul>
              <li><a href="{{route('about.history')}}">History</a></li>
              <li class="dropdown"> <a href="#"><span>Our Team</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{route('about.executive')}}">Executive Body</a></li>
                  <li><a href="{{route('about.team')}}">Resource Team</a></li>                  
                </ul>
              </li>              
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Our Approach</span>  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1" height='10px'>
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg></a>
            <ul>             
                
              <li><a href="{{route('research')}}">Research</a></li>
              <li><a href="{{route('advocacy')}}">Advocacy</a></li>
              <li><a href="{{route('capacity')}}">Capacity Building</a></li>
              <li><a href="{{route('communication')}}">Communication</a></li>
              <li><a href="{{route('publication')}}">Publication</a></li>
              <li><a href="{{route('consultancy')}}"> Consultancy</a></li>
                         
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Area of Expertise</span>  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1" height='10px'>
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg></a>
            <ul>
              <li><a href="{{route('road.safety')}}">Road Safety</a></li>
              <li><a href="{{route('climate_change')}}">Climate Change</a></li>
              <li><a href="{{route('migration')}}">Climate Migration</a></li>
              <li><a href="{{route('public.health')}}">Public Health</a></li>
                         
            </ul>
          </li>
          {{-- <li><a class="nav-link scrollto" href="{{route('recent.activities')}}">Recent Activities</a></li> --}}

          <li><a class="nav-link scrollto{{ Request::is('recent_activities') ? ' active' : '' }}" href="{{ route('recent.activities') }}">Recent Activities</a></li>

          {{-- <li><a class="nav-link scrollto{{ Request::is('publication') ? ' active' : '' }}" href="{{route('publication')}}">Publication</a></li> --}}
          <li><a class="nav-link scrollto{{ Request::is('achivement') ? ' active' : '' }}" href="{{route('achivement')}}">Achievement</a></li>
          <li><a class="nav-link scrollto{{ Request::is('our_network') ? ' active' : '' }}" href="{{route('network')}}">Network</a></li>
          <li class="dropdown"><a href="#"><span>Newsroom</span>  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1" height='10px'>
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg></a>
            <ul>
              {{-- <li><a href="{{route('social.media')}}">Social Media</a></li> --}}
              <li><a href="{{route('mainstream.media')}}">Mainstream Media</a></li>
              <li><a href="{{route('electronic.media')}}">Electronic Media</a></li>
                         
            </ul>
          </li>
          <li><a class="nav-link scrollto{{ Request::is('contact') ? ' active' : '' }}"  href="{{route('contact')}}">Contact Us</a></li>
        </ul>
        {{-- <i class="bi bi-list mobile-nav-toggle"></i> --}}

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mobile-nav-toggle" style="height: 30px">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        

      
        
      </nav><!-- .navbar -->
      
      {{-- <img src="assets/img/list.png" alt="" > --}}
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
            <a href="{{route('home')}}" class=""><img src="assets/img/logo.jpg" alt="" style="width:150px;margin-bottom:10px;height:50px"></a>
            <p>
              House# 04, Road# 01, Block# F,<br>
              Banani, Dhaka 1213, Bangladesh.<br>
               <br>
              <strong>Phone:</strong>  +8801718200985<br>
              <strong>Email:</strong> info@bcgddiu.org<br>
              <strong>Email:</strong> bcgd.diu@gmail.com<br>
              <strong>Email:</strong>  infobcgddiu@gmail.com <br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('about.executive')}}" target="_blank">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#area-of-expertice">Area of Expertise</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('contact')}}" target="_blank">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('recent.activities')}}" target="_blank">Recent Activities</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('publication')}}" target="_blank">Publication</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('achivement')}}" target="_blank">Achievement</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('network')}}" target="_blank">Network</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('mainstream.media')}}" target="_blank">Newsroom</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Get in touch our social network for more information.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/BCGD.DIU" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.youtube.com/channel/UCZfqywsI1mP1wPJ4xA6esyg" class="instagram" target="_blank"><i class="bi bi-youtube"></i></a>
              {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-flex justify-content-center">
      <div class="copyright">
          <p class=""> © 2023 <strong>DIU</strong>. All rights Reserved. | Developed & Powered by: <strong>IT-Team, DIU</strong></p>
      
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
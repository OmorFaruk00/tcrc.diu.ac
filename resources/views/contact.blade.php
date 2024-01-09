@extends('layouts.master')

@section('title', 'contact')

@section('content')
<style>
   .info-box i{
    color: #000 !important;
  }
  .fas {
    color: #000 !important;
    margin: 0px 5px;
  }
</style>
<section class="page-bg">
  <div class="container">
        <div class="" data-aos="fade-up" data-aos-delay="200">
          <h1 class="page-title">Contact Us</h1>
          <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU.</p>
          <button class="page-btn"> <a href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> Contact</button>         
        </div>        
    </div>
</section>
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact" >
    
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <h3 class="title-header">Contact Us</h3>
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
@endsection
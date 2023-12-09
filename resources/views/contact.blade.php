@extends('layouts.master')

@section('title', 'contact')

@section('content')
<section class="page-bg">
  <div class="container">
        <div class="" data-aos="fade-up" data-aos-delay="200">
          <h1 class="page-title">Contact Us</h1>
          <p class="page-desc">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
          <button class="page-btn"> <a href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> Contact</button>         
        </div>        
    </div>
</section>
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

   

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-6">
        <div class="info-box mb-4">
          <i class="bx bx-map"></i>
          <h3>Our Address</h3>
          <p class="mb-3">House# 04, Road# 01, Block# F, Banani, Dhaka 1213, Bangladesh.</p>
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
          <p class="mb-3">01718200985</p>
        </div>
      </div>

    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">

      <div class="">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14604.974079688413!2d90.40454096594159!3d23.774341155794485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sHouse%23%2004%2C%20Road%23%2001%2C%20Block%23%20F%2C%20Banani%2C%20Dhaka%201213%2C!5e0!3m2!1sen!2sbd!4v1702109721397!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

     

    </div>

  </div>
</section><!-- End Contact Section -->
@endsection
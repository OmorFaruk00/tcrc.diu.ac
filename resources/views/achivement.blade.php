@extends('layouts.master')

@section('title', 'Achivement')

@section('content')
<style>
  .activitie {
    /* border: 3px solid #f5f5f5; */
    padding: 10px;
    border-radius: 20px
  }

  .activitie-img img {
    height: 200px;
    width: 100%;
    /* border-radius: 20px; */
    margin-bottom: 20px;


  }

  .activitie-info {
    margin-bottom: 20px;
  }

  .activitie-info h4 {
    margin-top: 20px;
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
</style>
<section class="page-bg">
  <div class="container">
    <div class="" data-aos="fade-up" data-aos-delay="200">
      <h1 class="page-title">Our Achivement</h1>
      <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU</p>
      <button class="page-btn"> <a href="{{ route('home') }}">Home</a> <i class="fas fa-arrow-right"></i> 
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
                <img src="assets/img/united.png" alt="">
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
              <a href="{{ route('achivement1') }}" target="_blank">
                <div class="activitie-info">
                  <h4>DIU received Observer Status on United Nations Framework Convention on
                    Climate Change (UNFCCC).
                  </h4>
                  <p>Dhaka International University has received an international recognition (Observer Status) from the
                    United Nations Framework Convention on Climate Change (UNFCCC). Countries who have attained the
                    status can join the UNFCCC meet to measure progress and negotiate multilateral responses to climate
                    change.</p>
                    <p><i class="fas fa-calendar" style="margin-right: 10px"></i>11 November 2023</p>

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
                <img src="assets/img/sanpa.jpg" alt="">

              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
              <a href="{{ route('achivement2') }}" target="_blank">
                <div class="activitie-info">
                  <h4>MOU with DIU and SANPA
                  </h4>
                  <p>This Memorandum of Understanding (MoU) is made and entered into on 18 November 2023 by
                    the South Asian Network for Public Administration, hereinafter referred to as “SANPA” and the
                    Bangladesh Center for Governance and Development (BCGD) of Dhaka International University,
                    hereinafter referred to as “BCGD-DIU.</p>
                  <p><i class="fas fa-calendar" style="margin-right: 10px"></i>18 November 2023</p>

                </div>
              </a>
            </div>
          </div>
        </div>   

          
              

              
       


    </div>
</section><!-- End Services Section -->
@endsection
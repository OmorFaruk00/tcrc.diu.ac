@extends('layouts.master')

@section('content')
<style>
  .portfolio-item img {
    height: 200px;
    width: 100%
  }  
  .area-read {
    background: #36CFD1;
    color: #000;
    padding: 5px 10px;
    border-radius: 5px;
  }

 

  .icon-box {
    background: #093C34 !important;
  }

  .icon-box h4 {
    color: #fff;
  }

  .service-read {
    color: #36CFD1 !important;
    font-size: 16px
  }

  .service-read i {
    color: #36CFD1 !important;
  }

  .icon-box:hover {
    background: #36CFD1 !important;
  }

  .icon-box:hover h4 {
    color: #000 !important;
  }

  .icon-box:hover .area-read {
    background: #093C34;
    color: #fff !important;
  }

  /* .icon-box:hover a, a i{
    color: #36CFD1 !important;
  } */
  .info-box i {
    color: #000 !important;
  }

  .info-box {
    height: 200px;
  }

  .arow {
    color: #000 !important;
  }

  .section-title {
    font-size: 36px !important;
    color: #080D41;
    text-transform: capitalize;


  }

  .area-icon {
    width: 80px;
    height: 80px;
    background: #135C51;
    border-radius: 50%;
    border: 1px solid;
    margin-bottom: 20px;

  }

  .fb {
    margin-left: 180px;
  }

  .fb-mobile {
    display: none;
  }

  @media only screen and (min-width: 380px) and (max-width: 780px) {
    .slider-img {
      height: 30vh;
    }

  }

  @media only screen and (min-width: 380px) and (max-width: 1380px) {
    .fb-btn {
      /* margin-top:30px; */
    }

    .fb-post {
      height: 400px;
    }

  }

  @media only screen and (min-width: 1200px) and (max-width: 1490px) {
    .fb {
      margin-left: 110px;
      margin-top: 30px;
    }

  }

  @media only screen and (min-width: 900px) and (max-width: 1190px) {
    .fb {
      margin-left: 30px;
      margin-top: 30px;
    }

  }

  @media only screen and (max-width: 767px) {
    .fb {
      display: none;
      /* Hide the div on smaller screens */
    }

    .fb-mobile {
      display: block;
    }
  }

  .slider-img {

    width: 100%;
    height: 60vh;
    object-fit: cover;
  }
</style>

<!-- ======= Header Section ======= -->
<div class="container">
  <!-- Slider section -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    @if ($sliders)
        <div class="carousel-indicators">
            @foreach ($sliders as $index => $item)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}"
                    class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>

        <div class="carousel-inner">
            @foreach ($sliders as $index => $item)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ $item->image_path ?? null }}" class="d-block w-100 slider-img" alt="...">
                    <div class="carousel-caption">
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- End Slider section -->
</div>



<main id="main">


  <!-- ======= About Section ======= -->
  <section id="about" class="about about-bg">
    <div class="container">

      <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-12">
          <h2>About DIU and TCRC</h2>
          <p style="text-align:justify">Dhaka International University (DIU) is one of the leading, familiar and
            note-worthy private universities in Bangladesh which was established on 7th April 1995. It is a
            non-profitable institution having strict academic discipline. This university was founded by Late Alhaj
            Professor Dr. A. B. M. Mafizul Islam Patwari, Former Chairman of the Department of Law, University of Dhaka,
            Bangladesh. It is recognized that Dhaka International University is such a private university, which was
            founded by a person who was a renowned humanist and academician. He established this university with high
            hopes and aspirations to disseminate knowledge and thus to extend the horizon of knowledge. That is why, the
            motto of DIU is the universal adage, &quot;Knowledge is Power&quot;. DIU generates this power of Knowledge
            in an individual through teaching-learning, training, research and guidance by using modern, pragmatic and
            well-designed curriculum and syllabi.&nbsp;&nbsp;</p>

          <p style="text-align:justify">Tobacco Control and Research Cell (TCRC) is a research and advocacy cell of
            Dhaka International University which was established in 2012. The mission of the cell are to carry out the
            research and advocacy for effective tobacco control movement and to create awareness as well as act as a
            pressure group to enforce, implement, and modify tobacco control law. <strong>&nbsp;</strong>The vision of
            the cell is to same with the Honorable Prime Minister of Bangladesh is to create country tobacco free by
            2040. </p>
          <a href="{{route('about.history')}}" target="_blank" class="btn-get-started scrollto mb-3">Read More <i
              class="fas fa-arrow-right arow"></i></a>

        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 ">

          <div class="fb">
            <iframe
              src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTCRCDIU%2F&tabs=timeline&width=340&height=370&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
              width="340" height="410" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
              allowfullscreen="true"
              allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
          </div>
          <div class=" mt-4 fb">
            <a href="https://www.facebook.com/TCRCDIU/" target="_blank" class="btn-get-started scrollto fb-btn"
              style="">Latest Facebook Post <i class="fas fa-arrow-right arow"></i></a>

          </div>

          <div class="fb-mobile">
            <iframe
              src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBCGD.DIU&tabs=timeline&width=350&height=370&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
              width="350" height="370" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
              allowfullscreen="true"
              allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
          </div>
          <div class=" mt-4 fb-mobile">
            <a href="https://www.facebook.com/BCGD.DIU " target="_blank" class="btn-get-started scrollto fb-btn"
              style="">Latest Facebook Post <i class="fas fa-arrow-right arow"></i></a>

          </div>
        </div>

      </div>
  </section><!-- End About Section -->


  <!-- Recent Activities -->
  @if(!empty($activities))
  <x-activities :activities="$activities"></x-activities>
  @endif
  <!-- End Recent Activities -->


  <!--  Start Publication Section -->
  <x-publication></x-publication>
  <!-- End Publication  Section-->

  <!--  Start Achivement Section -->
  <x-achivement></x-achivement>
  <!--  End Achivement Section -->


  <!-- ======= Team Section ======= -->
  @if(!empty($teams))
  <x-team :teams="$teams"></x-team>
  @endif
  <!-- ======= End Team Section ======= -->


  <!-- ======= Network Section ======= -->
  @if(!empty($partners))
  <x-network :partners="$partners"></x-network>
  @endif
  <!-- End Network Section -->

  <!-- ======= Counter Section ======= -->
  <x-Counter></x-Counter>
  <!-- ======= End Counter Section ======= -->

  <!-- ======= Contact Section ======= -->
  <x-contact></x-contact>
  <!-- ======= End Contact Section ======= -->

</main><!-- End #main -->



@endsection
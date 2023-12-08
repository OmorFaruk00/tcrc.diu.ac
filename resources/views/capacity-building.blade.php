@extends('layouts.master')

@section('title', 'capacity')

@section('content')
<section class="page-bg">
    <div class="container">
          <div class="" data-aos="fade-up" data-aos-delay="200">
            <h1 class="page-title">Capacity Building</h1>
            <p class="page-desc">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> Capacity</button>         
          </div>        
      </div>
</section>
<section>
  <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 mb-5" data-aos="fade-up"   data-aos-delay="100">
            <div class="capacityBox">
                <i class="capacity-icon fas fa-book"></i>
                <h3 class="title">Knowlegge</h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare neque ut felis dignissim, id pretium enim auctor. Curabitur maximus.
                </p>
            </div>
        </div>
        <div class=" col-lg-4 col-md-4 col-sm-12 mb-5" data-aos="fade-up"   data-aos-delay="100">
            <div class="capacityBox">
                <i class="capacity-icon fas fa-graduation-cap"></i>
                <h3 class="title">Training</h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare neque ut felis dignissim, id pretium enim auctor. Curabitur maximus.
                </p>
            </div>
        </div>
        <div class=" col-lg-4 col-md-4 col-sm-12 mb-5" data-aos="fade-up"   data-aos-delay="100">
          <div class="capacityBox">
              <i class="capacity-icon fas fa-code"></i>
              <h3 class="title">Development</h3>
              <p class="description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare neque ut felis dignissim, id pretium enim auctor. Curabitur maximus.
              </p>
          </div>
      </div>
      <div class=" col-lg-4 col-md-4 col-sm-12 mb-5" data-aos="fade-up"   data-aos-delay="100">
        <div class="capacityBox">
            <i class="capacity-icon fas fa-users"></i>
            <h3 class="title">Coaching</h3>
            <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare neque ut felis dignissim, id pretium enim auctor. Curabitur maximus.
            </p>
        </div>
    </div>
    <div class=" col-lg-4 col-md-4 col-sm-12" data-aos="fade-up"   data-aos-delay="100">
      <div class="capacityBox">
          <i class="capacity-icon fas fa-graduation-cap"></i>
          <h3 class="title">Learning</h3>
          <p class="description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare neque ut felis dignissim, id pretium enim auctor. Curabitur maximus.
          </p>
      </div>
  </div>
  <div class=" col-lg-4 col-md-4 col-sm-12" data-aos="fade-up"   data-aos-delay="100">
    <div class="capacityBox">
        <i class="capacity-icon fa  fa-chart-bar"></i>
        <h3 class="title">Skils</h3>
        <p class="description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare neque ut felis dignissim, id pretium enim auctor. Curabitur maximus.
        </p>
    </div>
</div>
    </div>
</div>
    

</section>

 
 
@endsection
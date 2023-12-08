@extends('layouts.master')

@section('title', 'research')

@section('content')
<section class="page-bg">
    <div class="container">
          <div class="" data-aos="fade-up" data-aos-delay="200">
            <h1 class="page-title">Our Research</h1>
            <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU.</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> Research</button>         
          </div>        
      </div>
</section>



<section>
  <div class="container" data-aos="fade-up">
    <div class="row ">  
        
      <div class="col-lg-7  px-5" data-aos="fade-up" data-aos-delay="100">
          <h3 class="title-section">Bangladesh Center for Governance and Development ( BCGD)  </h3>
           <p>
            Bangladesh looks forward to becoming an advanced economy by 2041, and it requires that the country have professionals with an adequate understanding of the evolving governance and development dynamics. Therefore, there is always an overarching need for critical research on governance and development issues such as nationwide fast mobility and communication for accelerated economic growth, climate change, river erosion, reduced upstream flow of the rivers, salinity, migration, displacement, increased inequality, unemployment, social disintegration, and so on. Within this context and formalization with the community engagement, the university has established the Bangladesh Center for Governance and Development (BCGD). BCGD's vission is to become a think tank and academic hub on public policy, climate change and migration studies across the globe. To create evidences for strengthening the public policies on governance and development through conducting research on policy matters and academic areas at local, national and regional levels. BCGD's mission is to analyze public policies, governance and development issues, national and regional development priorities, challenges posed by the 41R, climate change, migration and displacement. Establish networks and partnerships with national, regional and international agencies and institutes for both generation and dissemination of knowledge, sharing of experiences and capacity building. 
           
           </p>

      </div>
      <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
        <img src="assets/img/bcgd.png" class="page_img" alt="" style="height: 500px">
      </div>  
      
      </div>
    </div>
  </div>
</section>






 
 
@endsection
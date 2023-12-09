@extends('layouts.master')

@section('title', 'about_history')

@section('content')
<section class="page-bg">
  <div class="container">
        <div class="" data-aos="fade-up" data-aos-delay="200">
          <h1 class="page-title"> About History</h1>
          <p class="text-white">Welcome to Bangladesh Center for Governance and Development, DIU.</p>
          <button class="page-btn"> <a href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> History</button>         
        </div>        
    </div>
</section>


<section class="container">
  <h2>About DIU and BCGD</h2>
  <p style="text-align: justify">“A commitment to excellence in teaching and research will increasingly depend on a university’s capacity to partner as much it does on its ability to create and disseminate knowledge. Put another way, effective engagement that is central to university strategy may provide the most powerful driver of the agility required to thrive in the uncertain environment to which universities are subject worldwide.” said by Gaskell, S. & A. Collette. (The Benefits of Engagement. Times Higher Ed Feature Article; Dec 8, 2016.)</p>

  <p style="text-align:justify"><strong>Dhaka International University (DIU)</strong> is one of the leading private universities in Bangladesh. It is a non-profitable institution which maintains strict academic rules and provides quality educations in 10 disciplines. The mission of DIU is to produce able leaders in the respective field of study who can meet the challenges of present dynamic world. It provides multidisciplinary knowledge, improves communication and interpersonal skills at the highest level of excellence among the students, which will make them honest, sincere and dedicated in their thoughts and deeds. The vision of this university is ‘to see an educated and healthy generation’. </p>

  <p style="text-align:justify">To meet successfully the above vision and missions, the university is continuously working on various governance, and development issues including climate change, human migration due to climate change, public health, human rights and so on.</p>

  <p style="text-align:justify">As Bangladesh looks forward to becoming an advanced economy by 2041, the country needs professionals with an adequate understanding of the evolving governance and development dynamics. Therefore, there is always an overarching need for critical research on governance and development issues such as nationwide fast mobility and communication for fast economic growth, climate change, river erosion, reduced upstream flow of the rivers, salinity, migration, displacement, increased inequality, unemployment, social disintegration, and so on. Within this context and formalization with the community engagement, the university has established the <strong> Bangladesh Center for Governance and Development (BCGD). </strong></p>

</section>
{{-- <section>
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="main-network">
                  <div class="network" data-aos="fade-left"   data-aos-delay="100">
                      <a href="#" class="network-content">
                          <div class="network-icon"><i class="fas fa-rocket"></i></div>
                          <h3 class="title">our Mission</h3>
                          <p class="description">
                            <i class="bi bi-check-circle-fill"></i> Analyze public policies, governance and development issues, national and regional development priorities, challenges posed by the 4IR, climate change, migration and displacement.
                          </p>
                          <p class="description">
                            <i class="bi bi-check-circle-fill"></i>
                            Advocate for the development and implementation of the pro-poor public policies through the mobilization of experts, professionals and academia.
                          </p>
                          <p class="description">
                            <i class="bi bi-check-circle-fill"></i>
                            Establish networks and partnerships with national, regional and international agencies and institutes for both generation and dissemination of knowledge, sharing of experiences and capacity building. 
                          </p>
                      </a>
                  </div>
                  <div class="network" data-aos="fade-right"   data-aos-delay="100">
                      <a href="#" class="network-content">
                          <div class="network-icon"><i class="fas fa-eye"></i></div>
                          <h3 class="title">Our Vission</h3>
                          <p class="description">
                            The visions of BCGD are to become a think tank and academic hub on public policy, climate change and migration studies across the globe.

                          </p>
                      </a>
                  </div>
                  <div class="network" data-aos="fade-left"   data-aos-delay="100">
                      <a href="#" class="network-content">
                          <div class="network-icon"><i class="fa fa-globe"></i></div>
                          <h3 class="title">Our Goals</h3>
                          <p class="description">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo
                          </p>
                      </a>
                  </div>
                 
              </div>
          </div>
      </div>
  </div>
</section> --}}
   <!-- ======= History Section ======= -->
   

  <section id="mission" class="mission">
    <div class="container" data-aos="fade-up">
      <div class="row ">        
        <div class="col-lg-6  p-5" data-aos="fade-up" data-aos-delay="100">
            <h2 class="title-section">Our Mission</h2>
            <p class="description" style="text-align:justify">
              <i class="bi bi-check-circle-fill"></i> Analyze public policies, governance and development issues, national and regional development priorities, challenges posed by the 4IR, climate change, migration and displacement.
            </p>

            <p class="description" style="text-align:justify">
              <i class="bi bi-check-circle-fill"></i>
              Advocate for the development and implementation of the pro-poor public policies through the mobilization of experts, professionals and academia.
            </p>

            <p class="description" style="text-align:justify">
              <i class="bi bi-check-circle-fill"></i>
              Establish networks and partnerships with national, regional and international agencies and institutes for both generation and dissemination of knowledge, sharing of experiences and capacity building. 
            </p>
        </div>
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
          <img src="assets/img/slider1.jpg" class="page_img" alt="" style="height: 400px">
        </div> 
        </div>
      </div>
    </div>
  </section>

  <section id="vission" class="vission">
    <div class="container" data-aos="fade-up">
      <div class="row "> 
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
          <img src="assets/img/slider2.jpg" class="page_img" alt="" style="height: 300px">
        </div>        
        <div class="col-lg-6  p-5" data-aos="fade-up" data-aos-delay="100">
            <h2 class="title-section">Our Vission</h2>
            <p class="fst-italic my-4" class="desc-section">
              The visions of BCGD are to become a think tank and academic hub on public policy, climate change and migration studies across the globe.
            </p>        

        </div>
      
        </div>
      </div>
    </div>
  </section>

  <section id="history" class="history">
    <div class="container" data-aos="fade-up">

      <div class="row "> 
        
        <div class="col-lg-6  p-5" data-aos="fade-up" data-aos-delay="100">
            <h2 class="title-section">Our Goals</h2>
            <p class="description" style="text-align:justify">
              <i class="bi bi-check-circle-fill"></i> Develop a pool of professionals, academicians and researchers in the fields of public policy, governance and development, public health, disasters, climate change, migration, and displacement.
            </p>   
            <p class="description" style="text-align:justify">
              <i class="bi bi-check-circle-fill"></i> Create evidences for strengthening the public policies on governance and development through conducting research on policy matters and academic areas at local, national and regional levels and disseminate the results for public awareness and mobilizing the support of the members of the public and the policy makers. 
            </p>   
            <p class="description" style="text-align:justify">
              <i class="bi bi-check-circle-fill"></i> Offer a open platform for dialogue, debate and discourse on public policies, governance, development, public health, climate change, migration and displacement, and social inclusion. 
            </p>    

        </div>
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
          <img src="assets/img/slider3.jpg" class="page_img" alt="" style="height: 400px">
        </div> 
        </div>
      </div>
    </div>
  </section>


@endsection
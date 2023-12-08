@extends('layouts.master')

@section('title', 'Activities')

@section('content')
<section class="page-bg">
    <div class="container">
          <div class="" data-aos="fade-up" data-aos-delay="200">
            <h1 class="page-title">Our Activities</h1>
            <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> Activities</button>         
          </div>        
      </div>
</section>

 <!-- ======= Services Section ======= -->
 <section id="services" class="services">
    <div class="container mt-4" data-aos="fade-up">

     {{-- <h2 class="mb-4">Our Activities</h2> --}}

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 d-flex align-items-stretch mb-5" data-aos="zoom-in"   data-aos-delay="100">
          <div class="icon-box">
              <div class="d-flex justify-content-between px-4 pt-4">
                  <div class="icon "><i class="bx bx-file"></i></div>
                  <div class="">
                      <p class="servece-serial">01</p>
                  </div>                    
              </div>              
            <div class="px-4">
              <h4><a href="">Future Course Plan</a></h4>
            <p class="pb-5">BCGD has plan to offer several courses on the basis of below concepts- Governance and development: different theories; Public sector governance in Bangladesh: administrative and policy architecture; Legislature and governance and policy perspective in developing countries; The evolving features of governance and the role of the non-state actors; Financial sector governance; Propose mechanisms of nationwide fast mobility and communication system for fast economic growth; Bangladesh's development trajectory: Future outlook; Sustainable development goals and developing countries: issues of governance and financing; Climate change and challenges of development for South Asia; Trade integration in South Asia and the future scenario; International aid donors and their influence on governance and development/ Global policy architecture and its impact on developing countries; The 4IR and the opportunities and challenges for developing countries; Education and health in the changing context: access, quality, and relevance; Rediscovering the moral paradigm of the current model of development </p>
            </div>          
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-stretch mb-5" data-aos="zoom-in"   data-aos-delay="100">
          <div class="icon-box w-100">
              <div class="d-flex justify-content-between px-4 pt-4">
                  <div class="icon "><i class="bx bx-file"></i></div>
                  <div class="">
                      <p class="servece-serial">02</p>
                  </div>                    
              </div>              
            <div class="px-4">
              <h4><a href="">Short Courses</a></h4>
            <p>BCGD currecntly offering Short Certificate Course on Migration Governance. </p>
            </div>           
          </div>
        </div>
      
        <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-stretch mb-5" data-aos="zoom-in"   data-aos-delay="100">
          <div class="icon-box">
              <div class="d-flex justify-content-between px-4 pt-4">
                  <div class="icon "><i class="fas fa-search"></i></div>
                  <div class="">
                      <p class="servece-serial">03</p>
                  </div>                    
              </div>              
            <div class="px-4">
              <h4><a href="">Research and dialogue</a></h4>
            <p class="pb-5"> Apart from the executive courses, BCGD expresses a strong interest in undertaking research in different areas. The research outputs disseminate among different stakeholder groups to inform the policy community and influence decision-making to promote people's perspectives and strengthen policy outcomes.</p>
            </div>           
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-stretch mb-5" data-aos="zoom-in"   data-aos-delay="100">
          <div class="icon-box">
              <div class="d-flex justify-content-between px-4 pt-4">
                  <div class="icon "><i class="fas fa-comments"></i></div>
                  <div class="">
                      <p class="servece-serial">04</p>
                  </div>                    
              </div>              
            <div class="px-4">
              <h4><a href="">Dialogue partners</a></h4>
            <p class="pb-5">BCGD partners with different stakeholders to spread the research findings and inform the policy community. Following are the potential partners in dialogues: the private sector, policymakers, parliamentarians, regional networks, and platform..</p>
            </div>
            
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-stretch mb-5" data-aos="zoom-in"   data-aos-delay="100">
          <div class="icon-box">
              <div class="d-flex justify-content-between px-4 pt-4">
                  <div class="icon "><i class="fas fa-handshake"></i></div>
                  <div class="">
                      <p class="servece-serial">05</p>
                  </div>                    
              </div>              
            <div class="px-4">
              <h4><a href="">Partnership beyond the country</a></h4>
            <p class="pb-5">BCGD’s foremost objectives are to be a credible platform for ideas to promote excellence in governance and development work for the people. Therefore, CGDB partners with national, regional, and international think tanks. This partnership offers the opportunity to take dialogue and collaboration to a broader level.  </p>
            </div>
            
          </div>
        </div>
      

       

      </div>

    </div>
  </section><!-- End Services Section -->
@endsection
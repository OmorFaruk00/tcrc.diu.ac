@extends('layouts.master')

@section('title', 'climate_change')

@section('content')
<section class="page-bg">
    <div class="container">
          <div class="" data-aos="fade-up" data-aos-delay="200">
            <h1 class="page-title">Climate Change</h1>
            <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU.</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> Climate</button>         
          </div>        
      </div>
</section>

<section id="publication" class="publication">
  <div class="container" data-aos="fade-up">

    <ul class="nav nav-tabs row gy-4 d-flex">

      <li class="nav-item col-lg-4 col-md-4 col-sm-12">
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
          <i class="fas fa-calendar mb-2"></i>
          <h4>P11th September Program</h4>
        </a>
      </li><!-- End Tab 1 Nav -->

      <li class="nav-item col-lg-4 col-md-4 col-sm-12">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
          <i class="fas fa-calendar mb-2"></i>
          <h4>COP-27 Debriefing Program</h4>
        </a>
      </li><!-- End Tab 2 Nav -->

      <li class="nav-item col-lg-4 col-md-4 col-sm-12">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
          <i class="fas fa-calendar mb-2"></i>
          <h4>UNFCCC Program</h4>
        </a>
      </li><!-- End Tab 3 Nav -->   

    </ul>

    <div class="tab-content">

      <div class="tab-pane active show" id="tab-1">
        <div class="row gy-4">
          <div class="col-lg-8 order-2 order-lg-1 mt-5" data-aos="fade-up" data-aos-delay="100">
           <div >
            <h3>11th September Program Details</h3>
            <p>
              The Multi-stakeholder Preparatory Workshop on "COP28 Influencing Arbitrations" jointly organized by Dhaka International University, CANSA, and OXFAM at Hotel Intercontinental, Dhaka today (11 November 2023). 
            </p>
            <p>
              Dr. Shariful Alam, Associate Professor, Department of Political Science; Md Bazlur Rahman, Associate Professor, Department of Business Administration; Mr. Fazlul Palash , Associate Professor and Chairman, Department of Political Science; Mrs. Sunita Rani Biswas, Assistant Professor, Department of Law; and Mr. Saikat Pande have joined the workshop on behalf of Dhaka International University.
            </p>
           </div>
          </div>
          <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/climate1.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div><!-- End Tab Content 1 -->

      <div class="tab-pane" id="tab-2">
        <div class="row gy-4">
          <div class="col-lg-8 order-2 order-lg-1 mt-5">
            <h3>COP-27 Debriefing Program</h3>
            <p>
              Team Dhaka International University is at COP 27-Climate Change Debriefing Program at Parliament Members Club, Bangladesh National Parliament, Dhaka.
            </p>
            <p>
              COP 27 (Conference on Climate Change) debriefing is going on at Parliament Members Club today. Climate Parliament Bangladesh has organized the program in partnership with The Earth, British High Commission Dhaka and Dhaka International University, and Media Partner Daily Ittefaq. 
            </p>
            <p>
              Ministers, Members of Parliament, High Commissioners, and Ambassadors of different European countries, Professors, and Experts on Climate Change attended the program.
            </p>
          </div>
          <div class="col-lg-4 order-1 order-lg-2 text-center mt-5">
            <img src="assets/img/climate2.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div><!-- End Tab Content 2 -->

      <div class="tab-pane" id="tab-3">
        <div class="row gy-4">
          <div class="col-lg-8 order-2 order-lg-1 mt-5">
            <h3>United Nations Framework Convention on Climate Change</h3>
            <p>
              DIU received Observer Status on the United Nations Framework Convention on Climate Change (UNFCCC)
            </p>
            <p>
              Dhaka International University has received international recognition (Observer Status) from the United Nations Framework Convention on Climate Change (UNFCCC). Countries that have attained the status can join the UNFCCC meeting to measure progress and negotiate multilateral responses to climate change.
            </p>
            
          </div>
          <div class="col-lg-4 order-1 order-lg-2 text-center mt-5">
            <img src="assets/img/united.png" alt="" class="img-fluid">
          </div>
        </div>
      </div><!-- End Tab Content 3 -->

      

     

     

    </div>

  </div>
</section>
 
 
@endsection
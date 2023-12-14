@extends('layouts.master')

@section('title', 'Activities')

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
  .fas {
    color: #000 !important;
    margin: 0px 5px;
  }
</style>
<section class="page-bg">
  <div class="container">
    <div class="" data-aos="fade-up" data-aos-delay="200">
      <h1 class="page-title">Our Activities</h1>
      <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU</p>
      <button class="page-btn"> <a href="{{ route('home') }}">Home</a> <i class="fas fa-arrow-right"></i>
        Activities</button>
    </div>
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
                <img src="assets/img/activity/activity1.png" alt="">
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
              <a href="{{ route('activity1') }}" target="_blank">
                <div class="activitie-info">
                  <h4>Program Report: Roundtable Meeting on Road Safety Law - Bangladesh Perspective
                  </h4>
                  <p>The roundtable meeting on "Road Safety Law: Bangladesh Perspective" was organized
                    by the Road Safety Coalition Bangladesh at Hotel Intercontinental, Dhaka. The
                    discussion aimed to address the pressing issue of road safety in Bangladesh and
                    the need for comprehensive road safety legislation. The meeting brought together
                    experts, stakeholders, and policymakers to deliberate on strategies to enhance
                    road safety in the country. </p>
                  <p><i class="fas fa-calendar" style="margin-right: 10px"></i>21st October, 2023</p>

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
                <img src="assets/img/activity/activity2.png" alt="">

              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
              <a href="{{ route('activity2') }}" target="_blank">
                <div class="activitie-info">
                  <h4>The Multi-stakeholder Preparatory Workshop on "COP28 Influencing Arbitrations"
                  </h4>
                  <p>The Multi-stakeholder Preparatory Workshop on "COP28 Influencing Arbitrations"
                    jointly organized by Dhaka International University, CANSA, and OXFAM at Hotel
                    Intercontinental, Dhaka today (11 November 2023).
                    Dr. Shariful Alam, Associate Professor, Department of Political Science; Md
                    Bazlur Rahman, Associate Professor, Department of Business Administration; Mr.
                    Fazlul Palash , Associate Professor and Chairman, Department of Political
                    Science; Mrs. Sunita Rani Biswas, Assistant Professor, Department of Law; and
                    Mr. Saikat Pande have joined the workshop on behalf of Dhaka International
                    University. </p>
                  <p><i class="fas fa-calendar" style="margin-right: 10px"></i>11 November 2023</p>

                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
          <div class="activitie">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="activitie-img">
                  <img src="assets/img/activity/activity3.png" alt="">

                </div>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-12">
                <a href="{{ route('activity3') }}" target="_blank">
                  <div class="activitie-info">
                    <h4>COP 27-Climate Change Debriefing Program at Parliament Members Club</h4>

                    <p>Team Dhaka International University is at COP 27-Climate Change Debriefing
                      Program at Parliament Members Club, Bangladesh National Parliament, Dhaka.
                      COP 27 (Conference on Climate Change) debriefing is going on at Parliament
                      Members Club today. Climate Parliament Bangladesh has organized the  </p>
                    <p><i class="fas fa-calendar" style="margin-right: 10px"></i>08 Feb 2023</p>

                  </div>
                </a>
              </div>
            </div>
          </div>


          
              <div class="mb-4 mt-4" data-aos="fade-up" data-aos-delay="100">
                <div class="activitie">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="activitie-img">
                        <img src="assets/img/activity/activity4.png"  alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                      <a href="{{ route('activity4') }}" target="_blank">
                      <div class="activitie-info">
                        <h4>22 organizations demand ban on e-cigarette in Bangladesh</h4>
                        
                        <p>The organisations argued that the activities of tobacco companies in
                          the production and expansion of e-cigarettes in the country may
                          cause a serious threat to public health. </p>
                        <p>
                          <p><i class="fas fa-calendar" style="margin-right: 10px"></i>November
                            25, 2023</p>
                      </div>
                      </a>
                    </div>
                  </div>

                </div>
                <div class="mb-4" data-aos="fade-up" data-aos-delay="100">
                  <div class="activitie">
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="activitie-img">
                          <img src="assets/img/activity/activity5.png"  alt="">
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <a href="{{ route('activity5') }}" target="_blank">
                        <div class="activitie-info">
                          <h4>Health Ministry’s Proposal to Ban E-Cigarettes is Commendable
                          </h4>                         
                          <p>Recently, the drafting amendment of the Smoking and Tobacco
                            Products Usage (Control) Act-2005 (amendment 2013) has included
                            a provision banning the production and marketing of
                            E-Cigarettes, which is truly commendable. Health experts’
                            opinion is E-Cigarettes are more harmful than conventional
                            cigarettes. </p>    
                            <p><i class="fas fa-calendar" style="margin-right: 10px"></i>January 30, 2023</p>
                        </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="activitie">
                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="activitie-img">
                            <img src="assets/img/activity/activity6.png" alt="">
                          </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                          <a href="{{ route('activity6') }}" target="_blank">
                          <div class="activitie-info">
                            <h4>Seminar on "Importance of Standard Packaging Model to
                              Protect Tobacco Tax Evasion in Bangladesh"</h4>                            
                            <p>Speakers at a seminar said that it has become necessary to
                              introduce the standard packaging for tobacco products as
                              well the plain packaging in order to prevent revenue
                              evasion.</p>
                              <p><i class="fas fa-calendar" style="margin-right: 10px"></i>October 5 2023</p>
                         

                          </div>
                        </a>
                        </div>
                      </div>
                    </div>
                    <div class="mb-4" data-aos="fade-up" data-aos-delay="100">
                      <div class="activitie">
                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="activitie-img">
                              <img src="assets/img/activity/activity7.png"  alt="">
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-12">
                            <a href="{{ route('activity7') }}" target="_blank">
                            <div class="activitie-info">
                              <h4>Textiles and Jute Minister's support for strengthening
                                and amendment Tobacco Control Act- TCRC team met with
                                the Minister</h4>
                             
                              <p>Tobacco seriously threatens public health, social
                                degradation, the economy, and the environment. According
                                to a study by the Bangladesh Cancer Society in 2018, the
                                government's revenue from tobacco in the fiscal year
                                2017-18 was about Tk 22,000 crore, while the cost of
                                treating tobacco-related diseases was Tk 30,570 crore in
                              </p>
                              <p><i class="fas fa-calendar" style="margin-right: 10px"></i> 12 February 2023
                              </p>

                            </div>
                            </a>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="mb-4" data-aos="fade-up" data-aos-delay="100">
                      <div class="activitie">
                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="activitie-img">
                              <img src="assets/img/activity/activity8.png" alt="">
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-12">
                            <a href="{{ route('activity8') }}" target="_blank">
                            <div class="activitie-info">
                              <h4>Tobacco Tax Policy Reformation for Protecting Public Health</h4>
                             
                              <p>The lawmakers called upon the government to impose specific taxes on cigarettes and other tobacco products in the upcoming budget to protect public health and increase revenue income. Tobacco taxes need to be increased to prevent new tobacco users. There is no alternative to formulating a national tax policy to build a tobacco-free country added by the tobacco control experts.
                              </p>
                              <p><i class="fas fa-calendar" style="margin-right: 10px"></i> 12 February 2023
                              </p>

                            </div>
                            </a>
                          </div>
                        </div>
                      </div>

                    </div>


                  </div>
</section><!-- End Services Section -->
@endsection
@extends('/layouts.master')


@section('title', 'executive')

@section('content')
<style>
  .team-info{
    padding: 20px 20px 0px;
    height: 130px;
  }
  .team-info h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 18px;
  color: #222222;
}
.team-info p {
  font-style: italic;
  font-size: 14px;
  line-height: 26px;
  color: #777777;
}
/* .team .member .member-img {
  position: relative;
  overflow: hidden;
  height: 300px;
  width: 100%
} */
.member-img:after{
  content: "";
  width: 100%;
  height: 100%;
  background: linear-gradient(60deg,#dde4e5,#e4e6e1);
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0.8;
  transform: scale(0);
  transition: all 0.5s ease 0s;
}
/* .member-img:hover:after{
  transform: scale(1);
} */
.member-img img{
  border-radius: 20px 20px 0px 0px;
  height: 300px !important;
  width: 100% !important

}
.fas{
  color: #000 !important;
  margin: 0px 5px;
}

</style>
<section class="page-bg">
    <div class="container">
          <div class="" >
            <h1 class="page-title"> Executive Body</h1>
            <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU.</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> Executive</button>         
          </div>        
      </div>
</section>

<section id="team" class="team section-bg">
    <div class="container">
        <h1 class="test">Governance</h1>
        <p style="text-align: justify"><strong> BCGD</strong> is an official entity of the DIU. However, it has a different type of governance to ensure autonomy in its work. <strong> BCGD</strong> management is accountable to the <strong> BCGD</strong> executive committee comprising some DIU Trustees (selected), renowned professionals, and academics. A Director oversees the regular activities and leads the organization. Faculty members and researchers are recruited based on a hybrid approach: full-time and adjunct. <strong> BCGD</strong> creates opportunities for Bangladeshi expatriate academics and professionals to be part of its education and research initiatives. </p>

        <div>
            <h6 class="mb-5">The centre is operating under the university through Advisory Panel and Executive Committee.</h6>
        </div>

        <section id="team" >
          <div class="container">
                 <div class="mb-4">
                    <h3 class="content-section"> Advisory Panel</h3>
                </div>
             
              </div>
    
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12 " >
                <a href="https://profile.diu.ac/sislamk">
                  <div class="member" >
                    <div class="member-img">
                      <img src="assets/img/team/Prof. Dr. Saiful Islam-VCsir.jpg"  alt="">
                    </div>
                    <div class="team-info" >
                      <h4 >Prof. Dr. Saiful Islam, Vice-Chancellor, DIU</h4>
                      <p>Chief Adviser</p>
                    </div>
                  </div>
                </a>
              </div>
    
              <div class="col-lg-4 col-md-6 col-sm-12 " >
                <a href="https://profile.diu.ac/prof.dr.ganeshchandrasaha">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Prof. Dr. Ganesh Chandra Saha, Pro- VC.jpg" alt="">
                    
                  </div>
                  <div class="team-info">
                    <h4>Prof. Dr. Ganesh Chandra Saha, Pro- VC, DIU</h4>
                    <p>Adviser</p>
                  </div>
                </div>
                </a>
              </div>
    
              <div class="col-lg-4 col-md-6 col-sm-12 " >
                <a href="https://profile.diu.ac/patwari">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Dr. S. Quadir Patwari, Vice Chairman, BOT.jpg"  alt="">
                   
                  </div>
                  <div class="team-info">
                    <h4>Dr. S. Quadir Patwari, Vice Chairman, BOT</h4>
                    <p>Adviser</p>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 " >
                <a href="">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Touhid Hossain, Former Foreign Secretary.jpg"  alt="" style="">
                    
                  </div>
                  <div class="team-info">
                    <h4>Touhid Hossain, Former Foreign Secretary</h4>
                    <p>Adviser</p>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 " >
                <a href="">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Dr. Nurul Quader, Former, Additional Secretary.jpg"  alt="" style="">
                    
                  </div>
                  <div class="team-info">
                    <h4>Dr. Nurul Quader, Former, Additional Secretary
                    </h4>
                    <p>Adviser</p>
                  </div>
                </div>
                </a>
              </div>     
              <div class="col-lg-4 col-md-6 col-sm-12 " >
                <a href="">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Kamal Uddin, Former Diplomat.jpg"  alt="" style="">                    
                  </div>
                  <div class="team-info">
                    <h4>Kamal Uddin, Former Diplomat</h4>
                    <p>Adviser</p>
                  </div>
                </div>
                </a>
              </div>
   
            </div>
    
          </div>
       
          <div class="container">
              <div class="col-lg-9 col-md-6 col-sm-12 col-sm-12">
                <div class="mb-4">
                    <h3 class="content-section">Executive Committee</h3>
                </div>
              </div>            
             
    
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12 " >
                <a href="https://profile.diu.ac/patwary">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Barrister Shameem Haider Patwary MP, Chairman, BoT,Dhaka International University.jpg" class="img-fluid" alt="">
                    
                  </div>
                  <div class="team-info">
                    <h4>Barrister Shameem Haider Patwary MP, Chairman, BoT,</h4>
                    <p>Chairman</p>
                  </div>
                </div>
              </a>
              </div> 
              <div class="col-lg-3 col-md-6 col-sm-12 " >
                <a href="https://profile.diu.ac/md.rofiqul.islam">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Chairman, Department of Economics, Md. Rofiqul Islam.jpg" class="img-fluid" alt="">
                    
                  </div>
                  <div class="team-info">
                    <h4>Md. Rofiqul Islam, Chairman, Department of Economics</h4>
                    <p>Member</p>
                  </div>
                </div>
              </a>
              </div> 
              <div class="col-lg-3 col-md-6 col-sm-12 " >
                <a href="https://profile.diu.ac/professor.farida.begum">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Chairman, Department of Pharmacy, Professor Farida Begum.jpg" class="img-fluid" alt="">
                    
                  </div>
                  <div class="team-info">
                    <h4>Professor Farida Begum, Chairman, Department of Pharmacy</h4>
                    <p>Member</p>
                  </div>
                </div>
              </a>
              </div>  
              <div class="col-lg-3 col-md-6 col-sm-12 " >
                <a href="https://profile.diu.ac/dr.md.sharifulislam">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Dr. Md. Shariful Alam, Associate Professor, Department of Political Science, DIU.jpg" class="img-fluid" alt="">
                    
                  </div>
                  <div class="team-info">
                    <h4>Shariful Alam, Associate Professor, Department of Political Science, DIU</h4>
                    <p>Member</p>
                  </div>
                </div>
              </a>
              </div>    
              <div class="col-lg-3 col-md-6 col-sm-12 " >
                <a href="https://profile.diu.ac/prof.dr.a.t.mmahbuburrahmansarker">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Chairman, Department of CSE, Dr. A.T.M. Mahbubur Rahman Sarker.jpg" class="img-fluid" alt="">
                    
                  </div>
                  <div class="team-info">
                    <h4>Dr. A.T.M. Mahbubur Rahman Sarker, Chairman, Department of CSE</h4>
                    <p>Member</p>
                  </div>
                </div>
              </a>
              </div>    
              <div class="col-lg-3 col-md-6 col-sm-12 " >
                <a href="https://profile.diu.ac/md.bazlur.rahman">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Md. Bazlur Rahman, Associate Professor, Department of Business Administration, DIU.jpg" class="img-fluid" alt="">
                    
                  </div>
                  <div class="team-info">
                    <h4>Md. Bazlur Rahman, Associate Professor, Department of Business Administration, DIU</h4>
                    <p>Member</p>
                  </div>
                </div>
              </a>
              </div>   
              <div class="col-lg-3 col-md-6 col-sm-12 " >
                <a href="https://profile.diu.ac/md.fazlul.haque?fbclid=IwAR1iEwFPwxfdXkekbVN7KCVuDdedCtxb0ib3EC_h-UrWAUCLUQadAJoYRoM">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Chairman, Department of Political Science, Md. Fazlul Haque.jpg" class="img-fluid" alt="">
                    
                  </div>
                  <div class="team-info">
                    <h4>Md. Fazlul Haque, Chairman, Department of Political Science</h4>
                    <p>Member</p>
                  </div>
                </div>
              </a>
              </div>  
              <div class="col-lg-3 col-md-6 col-sm-12 " >
                <a href="https://profile.diu.ac/s.jubair.al.ahmed">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Chairman, Department of English, S. Jubair Al Ahmed.jpg" class="img-fluid" alt="">
                    
                  </div>
                  <div class="team-info">
                    <h4>S. Jubair Al Ahmed,Chairman, Department of English</h4>
                    <p>Member</p>
                  </div>
                </div>
              </a>
              </div> 

              <div class="col-lg-3 col-md-6 col-sm-12 " >
                <a href="https://profile.diu.ac/md.azmir.hossain">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Chairman, Department of Business Administration-Md Azmir Hossain.jpg" class="img-fluid" alt="">
                    
                  </div>
                  <div class="team-info">
                    <h4>Md. Azmir Hossain, Chairman, Department of Business Administration</h4>
                    <p>Member</p>
                  </div>
                </div>
              </a>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 " >
                <a href="https://profile.diu.ac/jamsedur.rahman?fbclid=IwAR2mX4t0V4Qkk9aly9uMbv_bnAa_h2VheqDcPx4qf9S7Ny2rMxxQxINjvN4">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Chairman, Department of Sociology, Jamsedur Rahman.jpg" class="img-fluid" alt="">
                    
                  </div>
                  <div class="team-info">
                    <h4>Jamsedur Rahman, Chairman, Department of Sociology</h4>
                    <p>Member</p>
                  </div>
                </div>
              </a>
              </div>  
              <div class="col-lg-3 col-md-6 col-sm-12 " >
                <a href="https://profile.diu.ac/mohammad.tareq">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Chairman, Department of EEE, Mohammad Tareq.jpg" class="img-fluid" alt="">
                    
                  </div>
                  <div class="team-info">
                    <h4>Mohammad Tareq, Chairman, Department of EEE</h4>
                    <p>Member</p>
                  </div>
                </div>
              </a>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 " >
                <a href="https://profile.diu.ac/md.raisul.islam.sourav">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Chairman, Department of Law, Md Raisul Islam Sourav.jpg" class="img-fluid" alt="">
                    
                  </div>
                  <div class="team-info">
                    <h4>Md. Raisul Islam Sourav, Chairman, Department of Law
                    </h4>
                    <p>Member</p>
                  </div>
                </div>
              </a>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 " >
                <a href="">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Sunita Rani Biswas, Assistant Professor, Department of Law.jpg" class="img-fluid" alt="">
                    
                  </div>
                  <div class="team-info">
                    <h4>Sunita Rani Biswas, Assistant Professor, Department of Law</h4>
                    <p>Member</p>
                  </div>
                </div>
              </a>
              </div>
             
             
              <div class="col-lg-3 col-md-6 col-sm-12 " >
                <a href="https://profile.diu.ac/shovon">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Chairman, Department of Civil Engineering, S M SAZZAD AHMED SHOVON.jpg" class="img-fluid" alt="">
                    
                  </div>
                  <div class="team-info">
                    <h4>S M SAZZAD AHMED SHOVON, Chairman, Department of Civil Engineering</h4>
                    <p>Member</p>
                  </div>
                </div>
              </a>
              </div>
             
                       
                      
              
              <div class="col-lg-3 col-md-6 col-sm-12 " >
                <a href="https://profile.diu.ac/farhana.zaman">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/Farhana Zaman Liza.jpg" class="img-fluid" alt="">
                    
                  </div>
                  <div class="team-info">
                    <h4>Farhana Zaman Liza</h4>
                    <p>Member</p>
                  </div>
                </div>
              </a>
              </div>
                       
             
    
    
            </div>
    
          </div>
        </div><!-- End Team Section -->
    
    
   
</section>

{{-- <section>
    <div class="container my-5">
        <h1 class="mb-3">Executive Person</h1>
        <div class="testimonials-slider swiper" >
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12 mb-5" >
                        <div class="email-signature">
                            <div class="signature-img">
                                <img src="assets/img/team/team-1.jpg" alt="">
                            </div>
                            <div class="signature-details">
                                <h2 class="title">Steve Thomas</h2>
                                <span class="post">web developer</span>
                            </div>
                            <ul class="signature-content">
                                <li><span class="fa fa-mobile-alt"></span> 0987654321</li>
                                <li><span class="fa fa-map-marker-alt"></span> #2021, Lorem Ipsum</li>
                                <li><span class="fa fa-envelope"></span> mail@example.com</li>
                            </ul>
                            <ul class="icon">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <span class="signature-website">www.yourwebsite.com</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12 mb-5" data-aos="fade-left" >
                        <div class="email-signature">
                            <div class="signature-img">
                                <img src="assets/img/team/team-2.jpg" alt="">
                            </div>
                            <div class="signature-details">
                                <h2 class="title">Steve Thomas</h2>
                                <span class="post">web developer</span>
                            </div>
                            <ul class="signature-content">
                                <li><span class="fa fa-mobile-alt"></span> 0987654321</li>
                                <li><span class="fa fa-map-marker-alt"></span> #2021, Lorem Ipsum</li>
                                <li><span class="fa fa-envelope"></span> mail@example.com</li>
                            </ul>
                            <ul class="icon">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <span class="signature-website">www.yourwebsite.com</span>
                        </div>
                    </div>
                    
                   
                </div>
                
              </div>
              <div class="swiper-slide">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12 mb-5" >
                        <div class="email-signature">
                            <div class="signature-img">
                                <img src="assets/img/team/team-3.jpg" alt="">
                            </div>
                            <div class="signature-details">
                                <h2 class="title">Steve Thomas</h2>
                                <span class="post">web developer</span>
                            </div>
                            <ul class="signature-content">
                                <li><span class="fa fa-mobile-alt"></span> 0987654321</li>
                                <li><span class="fa fa-map-marker-alt"></span> #2021, Lorem Ipsum</li>
                                <li><span class="fa fa-envelope"></span> mail@example.com</li>
                            </ul>
                            <ul class="icon">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <span class="signature-website">www.yourwebsite.com</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12 mb-5" data-aos="fade-left" >
                        <div class="email-signature">
                            <div class="signature-img">
                                <img src="assets/img/team/team-4.jpg" alt="">
                            </div>
                            <div class="signature-details">
                                <h2 class="title">Steve Thomas</h2>
                                <span class="post">web developer</span>
                            </div>
                            <ul class="signature-content">
                                <li><span class="fa fa-mobile-alt"></span> 0987654321</li>
                                <li><span class="fa fa-map-marker-alt"></span> #2021, Lorem Ipsum</li>
                                <li><span class="fa fa-envelope"></span> mail@example.com</li>
                            </ul>
                            <ul class="icon">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <span class="signature-website">www.yourwebsite.com</span>
                        </div>
                    </div>
                    
                   
                </div>
                
              </div>
            </div>
            <div class="swiper-pagination mt-5"></div>
        </div>
    </div>
</section> --}}
@endsection
@extends('/layouts.master')

@section('title', 'executive')

@section('content')
<section class="page-bg">
    <div class="container">
          <div class="" data-aos="fade-up" data-aos-delay="200">
            <h1 class="page-title"> Executive Body</h1>
            <p class="page-desc">Welcome to Bangladesh Center for Governance and Development, DIU.</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> Executive</button>         
          </div>        
      </div>
</section>

<section>
    <div class="container">
        <h1 >Governance</h1>
        <p><strong> BCGD</strong> is an official entity of the DIU. However, it has a different type of governance to ensure autonomy in its work. <strong> BCGD</strong> management is accountable to the <strong> BCGD</strong> executive committee comprising some DIU Trustees (selected), renowned professionals, and academics. A Director oversees the regular activities and leads the organization. Faculty members and researchers are recruited based on a hybrid approach: full-time and adjunct. <strong> BCGD</strong> creates opportunities for Bangladeshi expatriate academics and professionals to be part of its education and research initiatives. </p>

        <div>
            <h6 class="mb-5">The centre is operating under the university through Advisory Panel and Executive Committee.</h6>
        </div>

    
    <div class="table-responsive " data-aos="fade-up" data-aos-delay="100">
        <h2>BCGD Advisory Panel</h2>
        <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">Sl. No</th>
            <th scope="col">Name and Designation</th>
            <th scope="col">Organizational Affiliation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Prof. Dr. Saiful Islam, Vice-Chancellor, DIU</td>
            <td>Chief Adviser</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Prof. Dr. Ganesh Chandra Saha, Pro- VC, DIU</td>
            <td>Adviser</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Dr. S. Quadir Patwari, Vice Chairman, BOT</td>
            <td>Adviser</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Kamal Uddin, Former Diplomat</td>
            <td>Adviser</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Touhid Hossain, Former Foreign Secretary</td>
            <td>Adviser</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Dr. Nurul Quader, Former, Additional Secretary</td>            
            <td>Adviser</td>
          </tr>
          
         
        </tbody>
      </table>

      <div class="table-responsive mt-5" data-aos="fade-left" data-aos-delay="100">
        <h2>BCGD Executive Committee</h2>
        <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">Sl. No</th>
            <th scope="col">Name </th>
            <th scope="col">Designation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Barrister Shameem Haider Patwary MP, Chairman, BoT,Dhaka International University</td>
            <td>Chairman</td>
          </tr> 
          <tr>
            <th scope="row">2</th>
            <td>Md. Bazlur Rahman, Associate Professor, Department of Business Administration, DIU</td>
            <td>Member</td>
          </tr> 
          <tr>
            <th scope="row">3</th>
            <td>Chairman, Department of Business Administration
            </td>
            <td>Member</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Chairman, Department of Law
            </td>
            <td>Member</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Chairman, Department of CSE</td>
            <td>Member</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Chairman, Department of EEE</td>
            <td>Member</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Chairman, Department of Civil Engineering</td>
            <td>Member</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Chairman, Department of English</td>
            <td>Member</td>
          </tr>  
          <tr>
            <th scope="row">9</th>
            <td>Chairman, Department of Sociology</td>
            <td>Member</td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>Chairman, Department of Pharmacy</td>
            <td>Member</td>
          </tr>
          <tr>
            <th scope="row">11</th>
            <td>Chairman, Department of Political Science</td>
            <td>Member</td>
          </tr>
          <tr>
            <th scope="row">12</th>
            <td>Chairman, Department of Economics</td>
            <td>Member</td>
          </tr>   
          <tr>
            <th scope="row">13</th>
            <td>Sunita Rani Biswas, Assistant Professor, Department of Law
            </td>
            <td>Member</td>
          </tr> 
          <tr>
            <th scope="row">14</th>
            <td>Farhana Zaman Liza
            </td>
            <td>Member</td>
          </tr> 
          <tr>
            <th scope="row">15</th>
            <td>Dr. Md. Shariful Alam, Associate Professor, Department of Political Science, DIU</td>
            <td>Member Secretary</td>
          </tr> 
        </tbody>
      </table>
      </div>


      
    </div>
</section>

{{-- <section>
    <div class="container my-5">
        <h1 class="mb-3">Executive Person</h1>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-5" >
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
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="fade-left" data-aos-delay="100">
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
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-5" >
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
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="fade-left" data-aos-delay="100">
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
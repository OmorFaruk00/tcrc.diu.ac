@extends('layouts.master')
@section('title', 'BD-TPack')
@section('content')
<style>



#project{
  background: #F4F4F4;

}

.publication{
  text-align: center;
  margin-bottom: 50px;
  position: relative;
}
.publication:after{
  content: "";
  width: 100%;
  height: 100%;
  background: linear-gradient(60deg,#4da1a9,#99c24d);
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0.8;
  transform: scale(0);
  transition: all 0.5s ease 0s;
}
.publication:hover:after{
  transform: scale(1);
}
.publication img{
  width: 100%;
  height: auto;
}
.publication .team-content{
  width: 75%;
  background: #fff;
  padding: 30px 0;
  margin: 0 auto;
  border: 1px solid #eee;
  position: absolute;
  bottom: -60px;
  left: 0;
  right: 0;
  z-index: 1;
  transition: all 0.3s ease 0s;
}
.publication .title{
  font-size: 16px;
  font-weight: 700;
  color: #444;
  text-transform: uppercase;
  margin: 0 0 10px 0;
}
.publication .post{
  display: block;
  font-size: 13px;
  color: #999;
  text-transform: capitalize;
}


@media only screen and (max-width:990px){
  .publication{ margin-bottom: 80px; }
}



</style>
<section class="page-bg">
    <div class="container">
        <div class="" data-aos="fade-up" data-aos-delay="200">
            <h1 class="page-title"> BD-TPack</h1>
            <p class="page-desc">Welcome to Tobacco Control and Research Cell (TCRC), DIU.</p>
            <button class="page-btn"> <a href="{{ route('home') }}">Home</a> <i class="fas fa-arrow-right"></i>
                BD-TPack</button>
        </div>
    </div>
</section>

<div style="background:#F6F9FE">
    <div class="container">
        <div >
            <div class="container">
              <h2 class="section-title text-center mt-4">Publications</h2>     
        
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                  <a href="{{route('research')}}" target="_blank">
                    <div class="publication">
                      <img src="assets/img/publication/publication88.png" style="height: 200px">
                      <div class="team-content">
                        <span class="title">Research</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                  <a href="{{route('journal_article')}}" target="_blank">
                    <div class="publication">
                      <img src="assets/img/activity/activity4.png" style="height: 200px">
                      <div class="team-content">
                        <span class="title">Journal Article</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                  <a href="{{route('newspaper_article')}}" target="_blank">
                    <div class="publication">
                      <img src="assets/img/migration1.png" style="height: 200px">
                      <div class="team-content">
                        <span class="title">Newspaper Article</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                  <a href="{{route('factsheet')}}" target="_blank">
                    <div class="publication">
                      <img src="assets/img/climate2.png" style="height: 200px">
                      <div class="team-content">
                        <span class="title">Factsheet</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                  <a href="{{route('policy_brief')}}" target="_blank">
                    <div class="publication">
                      <img src="assets/img/publication/publication111.jpg" style="height: 200px">
                      <div class="team-content">
                        <span class="title">Policy Brief</span>
                      </div>
                    </div>
                  </a>
                </div>
               
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                  <a href="{{route('completed_project')}}" target="_blank">
                    <div class="publication">
                      <img src="assets/img/consultancy.webp" style="height: 200px">
                      <div class="team-content">
                        <span class="title">Completed Projects</span>
                      </div>
                    </div>
                  </a>
                </div>
        
        
              </div>
        
        
            </div>
        
          </div>
    </div>
</div>




@endsection
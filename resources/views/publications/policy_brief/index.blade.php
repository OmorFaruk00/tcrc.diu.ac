@extends('layouts.master')

@section('title', 'Policy Brief')

@section('content')
<section class="page-bg">
  <div class="container">
        <div class="" data-aos="fade-up" data-aos-delay="200">
          <h1 class="page-title"> Policy Brief</h1>
          <p class="page-desc">Welcome to Tobacco Control and Research Cell (TCRC), DIU.</p>
          <button class="page-btn"> <a  href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> Policy Brief</button>         
        </div>        
    </div>
</section>

<section>
  <div class="container mt-4" data-aos="fade-up">

    <div class="">
      <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
        <div class="">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="publication-img">
                <img src="https://media.istockphoto.com/id/1443384686/photo/man-walking-in-crowds-of-people.webp?b=1&s=612x612&w=0&k=20&c=Mf6kUMF5uDelh7w-ekwHZifXBBu9QdUhk2x4hotoZDM=" alt="">
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
             <div class="publication">
              <a href="{{ route('policy_brief_details',['id'=>1]) }}" target="_blank">
                <div class="publication-info">
                  <h4>TOBACCO CONTROL LAWS OF BANGLADESH:
                    ANALYSIS OF GAPS AND PROPOSED REFORMS
                  </h4>
                  <p>The materials presented and the opinions expressed
                    in this publication are those of the researchers and
                    do not necessary reﬂect those of DIU. </p>
                  <p><i class="fas fa-calendar" style="margin-right: 10px"></i>December 2021</p>
                  <a class="btn_read" style="margin-left:10px" href="pdf/publication1.pdf" download="downloaded_file.pdf">Download</a>

                </div>
              </a>
             </div>
            </div>
          </div>

        </div>
      </div>

      <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
        <div class="publication">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="publication-img">
                <img src="https://media.istockphoto.com/id/1443384686/photo/man-walking-in-crowds-of-people.webp?b=1&s=612x612&w=0&k=20&c=Mf6kUMF5uDelh7w-ekwHZifXBBu9QdUhk2x4hotoZDM=" alt="">
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
             <div class="publication">
              <a href="{{ route('policy_brief_details',['id'=>1]) }}" target="_blank">
                <div class="publication-info">
                  <h4>TOBACCO CONTROL LAWS OF BANGLADESH:
                    ANALYSIS OF GAPS AND PROPOSED REFORMS
                  </h4>
                  <p>The materials presented and the opinions expressed
                    in this publication are those of the researchers and
                    do not necessary reﬂect those of DIU. </p>
                  <p><i class="fas fa-calendar" style="margin-right: 10px"></i>December 2021</p>
                  <a class="btn_read" style="margin-left:10px" href="pdf/publication1.pdf" download="downloaded_file.pdf">Download</a>

                </div>
              </a>
             </div>
            </div>
          </div>
        </div>

        


          
           

               
</section><!-- End Services Section -->
@endsection
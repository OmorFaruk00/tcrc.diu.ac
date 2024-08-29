@extends('layouts.master')
@section('title', 'Journal Article')
@section('content')
<section class="page-bg">
  <div class="container">
    <div class="" data-aos="fade-up" data-aos-delay="200">
      <h1 class="page-title"> Journal Article</h1>
      <p class="page-desc">Welcome to Tobacco Control and Research Cell (TCRC), DIU.</p>
      <button class="page-btn"> <a href="{{route('home')}}">Home</a> <i class="fas fa-arrow-right"></i> Journal
        Article</button>
    </div>
  </div>
</section>
<section>
  <div class="container mt-4" data-aos="fade-up">
    <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
      <div class="publication">
        @if($data)
        @foreach ($data as $index => $item)
        <div class="row mb-4">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="publication-img">
              <img src="{{$item->file_path}}" alt="">
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="publication">
              <a href="{{ route('journal_article_details',['id'=>$item->id]) }}" target="_blank">
                <div class="publication-info">
                  <h4>{{$item->title}}
                  </h4>
                  <span class="description">{!! $item->description !!} </span>
                  <a class="btn_read" style="margin-left:10px" target="_blank" href="{{$item->file_link}}"
                    download="downloaded_file.pdf">Download</a>

                </div>
              </a>
            </div>
          </div>
        </div>
        @endforeach
        @endif
      </div>
    </div>
</section>
@endsection
@extends('layouts.master')

@section('title', 'publication')

@section('content')
<section class="page-bg">
    <div class="container">
          <div class="" data-aos="fade-up" data-aos-delay="200">
            <h1 class="page-title">Our Publications</h1>
            <p class="page-desc">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> Publication</button>         
          </div>        
      </div>
</section>

<section id="publication" class="publication">
    <div class="container" data-aos="fade-up">

      <ul class="nav nav-tabs row gy-4 d-flex">

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
            <i class="bi bi-binoculars color-cyan"></i>
            <h4>Publication1</h4>
          </a>
        </li><!-- End Tab 1 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <i class="bi bi-box-seam color-indigo"></i>
            <h4>Publication 2</h4>
          </a>
        </li><!-- End Tab 2 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
            <i class="bi bi-brightness-high color-teal"></i>
            <h4>Publication 3</h4>
          </a>
        </li><!-- End Tab 3 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
            <i class="bi bi-command color-red"></i>
            <h4>Publication 4</h4>
          </a>
        </li><!-- End Tab 4 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
            <i class="bi bi-easel color-blue"></i>
            <h4>Publication 5</h4>
          </a>
        </li><!-- End Tab 5 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
            <i class="bi bi-map color-orange"></i>
            <h4>Publication 6</h4>
          </a>
        </li><!-- End Tab 6 Nav -->

      </ul>

      <div class="tab-content">

        <div class="tab-pane active show" id="tab-1">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
              <h3>Publication1</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur Publication 5 elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla Publication 3.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla Publication 3. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/features-1.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 1 -->

        <div class="tab-pane" id="tab-2">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Publication2</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla Publication 3. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur Publication 5 elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla Publication 3.</li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/features-2.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 2 -->

        <div class="tab-pane" id="tab-3">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Publication 3</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla Publication 3. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
              </ul>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur Publication 5 elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/features-3.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 3 -->

        <div class="tab-pane" id="tab-4">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Publication 3</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla Publication 3. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur Publication 5 elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla Publication 3.</li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/features-4.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 4 -->

        <div class="tab-pane" id="tab-5">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Publication 5</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla Publication 3. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur Publication 5 elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla Publication 3.</li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/features-5.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 5 -->

        <div class="tab-pane" id="tab-6">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Publication 6</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla Publication 3. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur Publication 5 elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla Publication 3.</li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/features-6.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 6 -->

      </div>

    </div>
  </section>
 
 
@endsection
<section id="network" class="clients mb-5 py-5 my-5" style="background: #F6F9FE">
    <div class="container" >
      <h2 class="section-title">OUR NETWORKS</h2>

      <div class="owl-carousel owl-theme" id="partner">
        @if($partners)
            @foreach ($partners as $index =>$item )
        <div class="item">
          <a href="{{$item->url}}" target="_blank">
            <img src="{{$item->image_path}}" class="" alt=""
              style="height: 100px;width:140px;margin-bottom:20px">
            </a>

        </div>
        @endforeach
        @endif

      </div>

      {{-- <div class="testimonials-slider swiper"  data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="row">
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="https://www.adb.org/" target="_blank">
                <img src="assets/img/network/international/Asian_Development_Bank_logo.svg.png" class="" alt=""
                  style="height: 60px;width:140px">
                </a>
              </div>            
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="https://www.oxfam.org/en" target="_blank">
                <img
                  src="assets/img/network/international/png-clipart-green-oxfam-logo-oxfam-logo-icons-logos-emojis-shop-logos-thumbnail.png"
                  class="img-fluid" alt="">
                </a>
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="https://www.vitalstrategies.org/" target="_blank">
                <img src="assets/img/network/international/download.png" class="img-fluid" alt="">
                </a>
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="https://theunion.org/" target="_blank">
                <img src="assets/img/network/international/The Union.png" class="img-fluid" alt="">
                </a>
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="https://www.roadsafetyngos.org/" target="_blank">
                <img src="assets/img/network/national/alliance_logo_464x200.png" class="img-fluid" alt="">
                </a>
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="https://www.brac.net/" target="_blank">
                <img src="assets/img/network/national/BRAC_logo.svg.png" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="row mb-4">             
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="https://clpatrust.org/" target="_blank">
                <img src="assets/img/network/national/clpa_logo_wt.png" class="img-fluid" alt="">
                </a>
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="https://diu.ac/" target="_blank">
                <img src="assets/img/network/national/DIU Logo High.png" class="img-fluid" alt="">
                </a>
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="http://www.brta.gov.bd/" target="_blank">
                <img src="assets/img/network/national/Emblem_of_Bangladesh_Road_Transport_Authority_(BRTA).svg.png"
                  class="img-fluid" alt="" style="height: 90px;width:140px">
                </a>
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="https://www.iphrc.org/" target="_blank">
                <img src="assets/img/network/national/IPHRC Logo.jpeg" class="img-fluid" alt="">
                </a>
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="https://interpressnetwork.org/" target="_blank">
                <img src="assets/img/network/national/IPNLogoo.png" class="img-fluid" alt="">
                </a>
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="https://www.iom.int/" target="_blank">
                <img src="assets/img/network/national/iom.png" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="row mb-4">
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="https://www.nirapadsarakchai.org/" target="_blank">
                <img src="assets/img/network/national/Nirapad Sorok CHai.png" class="img-fluid" alt="">
                </a>
              </div>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/network/national/zzz.jpg" class="img-fluid" alt="" style="height: 90px">
              </div>

            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div> --}}

    </div>
  </section>
  <script>
    var owl = $('#partner');
    owl.owlCarousel({
        margin: 20
        , dots: true
        , nav: true
        , navText: [
            "<i class='fa fa-chevron-left'></i>"
            , "<i class='fa fa-chevron-right'></i>"
        ]
        , autoplay: true
        , autoplayHoverPause: true
        , loop: true
        , responsive: {
            0: {
                items: 1
            }
            , 600: {
                items: 1
            }
            , 1000: {
                items: 4
            }
            , 1200: {
                items: 6
            }
        }
    });

</script>
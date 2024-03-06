<div id="" style="background: #F4F4F4" class="py-4">
    <div class="container">

        <h2 class="section-title">Executive Team</h2>
        <div class=" d-flex justify-content-end mb-2" style="margin-top: -40px">
            <a href="{{route('about.executive')}}" class="btn-get-started scrollto" target="_blank">View All<i class="fas fa-arrow-right arow"></i> </a>
        </div>

        <div class="owl-carousel owl-theme" id="team">
            @if($teams)
            @foreach ($teams->data as $index =>$item )
            <div class="item">
                <a href="{{$item->profile_link}}" target="_blank">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{$item->profile_image}}" alt="">

                        </div>
                        <div class="team-info">
                            <h4>{{$item->name}}  </h4>
                            <p>{{$item->designation}}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @endif
        </div>




    </div>
</div>
<script>
    var owl = $('#team');
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
                items: 3
            }
            , 1200: {
                items: 4
            }
        }
    });

</script>

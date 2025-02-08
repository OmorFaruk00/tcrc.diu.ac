<section id="network" class="clients mb-5 py-5 my-5" style="background: #F6F9FE">
    <div class="container">
        <h2 class="section-title">Our Networks</h2>

        {{-- <div class="owl-carousel owl-theme" id="partner">
        @if ($partners)
            @foreach ($partners as $index => $item)
        <div class="item">
          <a href="{{$item->url}}" target="_blank">
            <img src="{{$item->image_path}}" class="" alt=""
              style="height: 100px;width:140px;margin-bottom:20px">
            </a>

        </div>
        @endforeach
        @endif

      </div> --}}

        <div id="partnerData">
            <div class="owl-carousel owl-theme" id="partner">

                <div class="item" v-for="(rows, index) in items" :key="index">
                    <a :href="rows.url" target="_blank">
                        <img :src="rows.image_path" class="" alt=""
                            style="height: 100px;width:140px;margin-bottom:20px">
                    </a>

                </div>


            </div>
        </div>



    </div>
</section>

<script>
    $(document).ready(function() {
        var vue = new Vue({
            el: '#partnerData',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                items: [],
            },
            methods: {
                getData() {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/partner`)
                        .then((response) => {
                            vm.items = response.data;
                            setTimeout(function() {
                                var owl = $('#partner');
                                owl.owlCarousel({
                                    margin: 20,
                                    dots: true,
                                    nav: true,
                                    navText: [
                                        "<i class='fa fa-chevron-left'></i>",
                                        "<i class='fa fa-chevron-right'></i>"
                                    ],
                                    autoplay: true,
                                    autoplayHoverPause: true,
                                    loop: true,
                                    responsive: {
                                        0: {
                                            items: 1
                                        },
                                        600: {
                                            items: 1
                                        },
                                        1000: {
                                            items: 4
                                        },
                                        1200: {
                                            items: 5
                                        }
                                    }
                                });
                            }, 100);


                        }).catch((error) => {
                            console.log(error.response);
                        });
                }
            },
            created() {
                this.getData();




            }
        });
    });
</script>


{{-- <script>
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

</script> --}}

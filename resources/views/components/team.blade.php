<style>
    .team-info {
    height: 115px;
}
</style>

<div id="" style="background: #F4F4F4" class="py-4">
    <div class="container">
        <h2 class="section-title">Executive Team</h2>
        <div class=" d-flex justify-content-end mb-2" style="margin-top: -40px">
            <a href="{{route('about.executive')}}" class="btn-get-started scrollto" target="_blank">View All<i class="fas fa-arrow-right arow"></i> </a>
        </div>

    <div id="teamData">
        <div class="owl-carousel owl-theme" id="team">
            
            <div class="item" v-for="(rows, index) in items" :key="index">
                <a :href="rows.profile_link" target="_blank">
                    <div class="member">
                        <div class="member-img">
                            <img :src="rows.profile_image" alt="">

                        </div>
                        <div class="team-info">
                            {{-- <h4 style="font-size: 18px" v-text="`${rows.name} (${rows.designation})`"> </h4> --}}
                            <h4 style="font-size: 18px" v-text="`${rows.name}`"> </h4>
                            <p class="pb-3" v-html="rows.tcrc"></p>
                        </div>
                    </div>
                </a>
            </div>

        
           
        </div>
    </div>

{{--         
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
                            <h4 style="font-size: 18px">{{$item->name}},{{$item->designation}}  </h4>
                            <p class="pb-3">{{$item->tcrc ?? null}}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @endif --}}
        </div>




    </div>
</div>

<script>
    $(document).ready(function() {
        var vue = new Vue({
            el: '#teamData',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                items: [],
            },
            methods: {
                getData() {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/teams/executive_team`)
                        .then((response) => {
                            vm.items = response.data.data;
                            setTimeout(function() {
                                var owl = $('#team');
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
                                            items: 3
                                        },
                                        1200: {
                                            items: 4
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

</script> --}}

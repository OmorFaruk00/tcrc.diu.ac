<div id="recent_activities">
  <div class="container">
    <h2 class="section-title text-center">Recent Activities</h2>

    

      <div id="activitiesData">
        <div class="owl-carousel owl-theme" id="activities">
                   
            
              <div class="item" v-for="(rows,index) in items" :key="index">
                  <div class="activitie mb-4">
                      <div class="activitie-img">
                          <img :src="rows.image_path" class="img-fluid" alt="">
                      </div>
                      <div class="activitie-info">
                          <h4 v-html="rows.title">
                          </h4>
                          <h6 class="description" v-html="rows.description"> </h6>
                          <p v-text="rows.created_at"> </p>
                          <a :href="`/recent_activies/${rows.id}`" target="_blank" class="read_more mb-4">Read More</a>
                      </div>
                  </div>
              </div>
                 
             
          </div>  
      </div>


        {{-- <div class="owl-carousel owl-theme" id="activities">
        @if($activities)
        @foreach ($activities->data as $index =>$item )          
        
          <div class="item">
              <div class="activitie mb-4">
                  <div class="activitie-img">
                      <img src="{{$item->image_path}}" class="img-fluid" alt="">
                  </div>
                  <div class="activitie-info">
                      <h4>{{$item->title}}
                      </h4>
                      <h6 class="description">{!! $item->description !!} </h6>
                      <p>{{ $item->created_at}} </p>
                      <a href="{{ route('recent_activities_details',['id'=>$item->id]) }}" target="_blank" class="read_more mb-4">Read More</a>
                  </div>
              </div>
          </div>
          @endforeach          
        @endif       
         
      </div>   --}}
      
      
  </div>
  </div>
  </div>
</section>

<script>
    $(document).ready(function() {
        var vue = new Vue({
            el: '#activitiesData',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                items: [],
            },
            methods: {
                getData() {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/news-activities/activities`)
                        .then((response) => {
                            vm.items = response.data.data;
                            setTimeout(function() {
                                var owl = $('#activities');
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
  var owl = $('#activities');
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
</script> --}}
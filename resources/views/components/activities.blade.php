<style>
    
    .activity {
  border: 3px solid #f5f5f5;
  /* border: 1px solid #36CFD1; */
  padding: 10px;
  border-radius: 20px;
}
.activity-img img {
  height: 150px;
  border-radius: 20px;
  width: 100%;
  margin-bottom: 20px;


}

.activity-info {
  margin-bottom: 20px;
  height: 170px;
}

.activity-info h4 {
  font-size: 20px;
  line-height: 26px;
  color: #000;
  padding: 0px 10px;
  margin-bottom: 10px;
  text-align: justify;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.activity-info p {
  color: #6D747F;
  padding: 0px 10px;
  text-align: justify;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.activity-info .description {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;

  max-height: 3.6em;
} 
</style>


<div id="recent_activitys">
  <div class="container">
    <h2 class="section-title text-center">Recent activitys</h2>    

      <div id="activitysData">
        <div class="owl-carousel owl-theme" id="activitys">
                   
            
              <div class="item" v-for="(rows,index) in items" :key="index">
                  <div class="activity mb-5">
                      <div class="activity-img">
                          <img :src="rows.image_path" class="img-fluid" alt="">
                      </div>
                      <div class="activity-info">
                          <h4 v-html="rows.title">
                          </h4>
                          <h6 class="description" v-html="rows.description"> </h6>
                          <p v-text=""> </p>
                          <a :href="`/recent_activies/${rows.id}`" target="_blank" class="read_more mb-4">Read More</a>
                      </div>
                  </div>
              </div>
                 
             
          </div>  
      </div>


        {{-- <div class="owl-carousel owl-theme" id="activitys">
        @if($activitys)
        @foreach ($activitys->data as $index =>$item )          
        
          <div class="item">
              <div class="activity mb-4">
                  <div class="activity-img">
                      <img src="{{$item->image_path}}" class="img-fluid" alt="">
                  </div>
                  <div class="activity-info">
                      <h4>{{$item->title}}
                      </h4>
                      <h6 class="description">{!! $item->description !!} </h6>
                      <p>{{ $item->created_at}} </p>
                      <a href="{{ route('recent_activitys_details',['id'=>$item->id]) }}" target="_blank" class="read_more mb-4">Read More</a>
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
            el: '#activitysData',
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
                                var owl = $('#activitys');
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
  var owl = $('#activitys');
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
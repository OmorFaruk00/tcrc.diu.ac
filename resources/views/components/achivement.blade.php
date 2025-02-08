<style>
  .activitie {
  border: 3px solid #f5f5f5;
  /* border: 1px solid #36CFD1; */
  padding: 10px;
  border-radius: 20px;
}

.activitie-img img {
  height: 150px;
  border-radius: 20px;
  width: 100%;
  margin-bottom: 20px;
  /* object-fit: cover; */


}

.achivement-info {
  margin-bottom: 20px;
  height: 130px;
}

.achivement-info h4 {
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

.achivement-info h4 {
  color: #000;
  padding: 0px 10px;
  text-align: justify;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
  margin-bottom: 25px;
}

.achivement-info .description {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;

  max-height: 3.6em;
}


</style>

<div id="recent_activities">
  <div class="container">
    <h2 class="section-title text-center mt-5">Achievements</h2>

    

      <div id="achivementData">
        <div class="owl-carousel owl-theme" id="achivement">
                   
            
              <div class="item" v-for="(rows,index) in items" :key="index">
                  <div class="activitie mb-5">
                      <div class="activitie-img">
                          <img :src="rows.file_path" class="img-fluid" alt="">
                      </div>
                      <div class="achivement-info">
                          <h4 v-html="rows.title">
                          </h4>
                          {{-- <h6 class="description" v-html="rows.description"> </h6> --}}
                          <a :href="`/achivement/${rows.id}`" target="_blank" class="read_more mb-4">Read More</a>
                      </div>
                  </div>
              </div>
                 
             
          </div>  
      </div>


    
      
      
  </div>
  </div>
  </div>
</section>

<script>
    $(document).ready(function() {
        var vue = new Vue({
            el: '#achivementData',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                items: [],
            },
            methods: {
                getData() {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/research-publication/Achivements`)
                        .then((response) => {
                            vm.items = response.data.data;
                            setTimeout(function() {
                                var owl = $('#achivement');
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


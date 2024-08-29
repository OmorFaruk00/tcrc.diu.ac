@extends('layouts.master')

@section('title', 'National Partners')

@section('content')
<style>
    .clients{
  text-align: left
}

.clients img {
    max-width: 50% !important;
    
}
.fas{
  color: #000 !important;
  margin: 0px 5px;
}

.image-wrapper {
    width: 90%; /* Or a fixed width like 200px */
    height: 100px; /* Fixed height */
    overflow: hidden; /* Hide overflow */
    display: flex;
    align-items: center;
    justify-content: center;
}

.image-wrapper img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover; /* This ensures the image covers the entire area without distortion */
}

</style>
<section class="page-bg">
    <div class="container">
      <div class="" data-aos="fade-up" data-aos-delay="200">
        <h1 class="page-title">Our National Partners</h1>
        <p class="page-desc">Welcome to Welcome to Tobacco Control and Research Cell (TCRC), DIU.</p>
        <button class="page-btn"> <a href="{{ route('home') }}">Home</a> <i class="fas fa-arrow-right"></i>Networks<i class="fas fa-arrow-right"></i>
            National Partners</button>
      </div>
    </div>
  </section>

<section id="National" class="publication">
  <div class="container" data-aos="fade-up">   

    <div class="tab-content py-5">
      <div class="tab-pane active show">
        <div class="row"> 
  
          <div v-for="(rows, index) in items" :key="index" class="col-lg-3 col-md-4 col-6 mb-5 d-flex align-items-center justify-content-center">
            <a :href="rows.url" target="_blank">
                <div class="image-wrapper">
                    <img :src="rows.image_path" class="" alt="">
                </div>
            </a>
        </div>       
        
      </div>     

    </div>

  </div>
</section>

<script>
  $(document).ready(function () {
      var app = new Vue({
          el: '#National',
          data: {
              config: {
                  base_path: "{{ env('API_URL') }}", 
              },
              items: [],
          },
          methods: {
              getData() {
                  axios.get(`${this.config.base_path}/partner/National`)
                      .then((response) => {
                          this.items = response.data;
                          console.log(response.data);
                      })
                      .catch((error) => {
                          console.error(error); 
                      });
              },
          },
          created() {
              this.getData();
          },
      });
  });
  </script>
  



 
 
@endsection
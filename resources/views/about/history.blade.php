@extends('layouts.master')
@section('title', 'About History')
@section('content')
<section class="page-bg">
  <div class="container">
        <div class="" data-aos="fade-up" data-aos-delay="200">
          <h1 class="page-title"> About History</h1>
          <p class="page-desc">Welcome to Tobacco Control and Research Cell (TCRC), DIU.</p>
          <button class="page-btn"> <a  href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> History</button>         
        </div>        
    </div>
</section>

<div id="Setting">

  <div class="container pt-4">  
    <div class="d-flex justify-content-center">
      <iframe width="50%" height="300" :src="`https://www.youtube.com/embed/${setting.video.code}`"></iframe>
    </div>
  </div>

  <div >
    <div class="container pt-4 pb-5">
      {{-- <h2>About DIU and TCRC</h2> --}}

      <div style="text-align:justify" v-html="setting.about_diu"></div>
      <div style="text-align:justify" v-html="setting.about_tcrc"></div>
    </div>

    

    <div class="container" data-aos="fade-up">   
             
        <div class=" mb-5 p-2" data-aos="fade-up" data-aos-delay="100">
            <h2 class="title-section">Our Mission</h2>
            <div class="description" style="text-align:justify" v-html="setting.mission"></div>             

        </div>      
        
      </div>
    </div>

    <div class="container" data-aos="fade-up">
      <div class="mb-5">                 
        <div class=" px-2" data-aos="fade-up" data-aos-delay="100">
            <h2 class="title-section">Our Vission</h2>
            <div class="description" style="text-align:justify" v-html="setting.vission"></div>

        </div>
      
        </div>
      </div>
    

   

    
  

</div>

</div>



  <script>
    $(document).ready(function() {
        var vue = new Vue({
            el: '#Setting',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                setting: '',
            },
            methods: {
                getData() {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/setting`)
                        .then((response) => {
                            vm.setting = response.data;                   


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
   


@endsection
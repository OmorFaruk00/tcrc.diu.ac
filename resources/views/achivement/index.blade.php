@extends('layouts.master')
@section('title', 'Achivements')
@section('content')
<section class="page-bg">
  <div class="container">
        <div class="" data-aos="fade-up" data-aos-delay="200">
          <h1 class="page-title"> Achivements</h1>
          <p class="page-desc">Welcome to Tobacco Control and Research Cell (TCRC), DIU.</p>
          <button class="page-btn"> <a  href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> Achivements</button>         
        </div>        
    </div>
</section>
<section>
  <div class="container mt-4" id="vue_app">
    <div v-for="(rows,index) in items.data" :key="index">
      <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12" >
              <div class="publication-img">
                <img :src="rows.file_path" alt="">
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
             <div class="publication">
              <a  :href="`/achivement/${rows.id}`" target="_blank">
                <div class="publication-info">
                  <h4 v-text="rows.title">
                  </h4>
                  <p v-html="rows.description"> </p>                  
                  <a class="btn_read" style="margin-left:10px" :href="rows.file_link" download="downloaded_file.pdf" target="_blank">Download</a>

                </div>
              </a>
             </div>
            </div>
          </div>
      </div>
    </div>
    <div class="col-12" v-if="this.last_page >1">
      <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12">
              Showing <span v-html="this.items.from ?? 0"></span> to <span v-html="this.items.to ?? 0"></span>
              of
              <span v-html="this.items.total"></span> entries
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12">
              <nav aria-label="Page navigation example" class="my-3 mx-2">
                  <ul class="pagination pagination-sm justify-content-end">
                      <li class="page-item" :class="this.current_page > 1 ? '' : 'disabled'">
                          <a class="page-link" href="javaScript:void(0)" @click="paginatePreview"
                              aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                          </a>
                      </li>
                      <li class="page-item" v-for="(row,index) in this.last_page" :key="index"
                          :class="row == this.current_page ? 'active' : ''">
                          <a class="page-link" href="javaScript:void(0)" @click="paginatePageWise(row)"
                              v-text="row"></a>
                      </li>
                      <li class="page-item" :class="this.last_page > this.current_page ? '' : 'disabled'">
                          <a class="page-link" href="javaScript:void(0)" @click="paginateNext" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                          </a>
                      </li>
                  </ul>
              </nav>
          </div>
      </div>
  </div>

        
   </div>  

        


          
           

               
</section>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var vue = new Vue({
                el: '#vue_app',
                data: {
                    config: {
                        base_path: "{{ env('API_URL') }}",
                    },
                    items: [],
                    current_page: '',
                    last_page: '',
                },

                methods: {

                    fetchData(page = 1) {
                        axios.get(`${this.config.base_path}/research-publication/Achivements?page=${page}`).then((
                            response) => {
                            this.items = response.data;
                            this.current_page = response.data.current_page;
                            this.last_page = response.data.last_page;

                        }).catch((error) => {
                            toastr.error("Something went to wrong");
                        });
                    },
                    paginatePreview() {
                        let page_number = parseInt(this.current_page - 1);
                        this.fetchData(page_number);
                    },
                    paginateNext() {
                        let page_number = parseInt(this.current_page + 1);
                        this.fetchData(page_number);

                    },
                    paginatePageWise(page) {
                        this.fetchData(page);
                    },

                },

                created() {
                    this.fetchData();
                },

            });

        });
    </script>
@endsection
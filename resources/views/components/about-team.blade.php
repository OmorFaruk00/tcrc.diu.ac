<style>
    .team-info {
    height: 115px;
}
/* .member-img img {
    width: 100%;         
    height: 100%;        
    object-fit: cover;    
    object-position: center top;
} */
</style>
<div id="" style="background: #F4F4F4" class="py-4">
    <div class="container">      
            <div class="row">
                @if($teams)
                @foreach ($teams->data as $index =>$item )
                <div class="col-xl-3">
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
                @endif

                {{-- <div class="col-xl-3">
                        <div class="member">
                            <div class="member-img">
                                <img src="https://api.diu.ac/images/Tcrc_Rahat_Rahman.jpeg" alt="">
                            </div>
                            <div class="team-info">
                                <h4 style="font-size: 18px">Md Rahat Rahman</h4>
                                <p class="pb-3">Administrative Assistant</p>
                            </div>
                        </div>
                </div> --}}
            </div>

        </div>
    </div>
</div>


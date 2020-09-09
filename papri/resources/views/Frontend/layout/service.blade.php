<section class="choose-class-area bg-white">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-xl-12">
                <h2 class="area-heading font-orange">Our Services<img src="{{asset('frontend/img/icon/pen-orange.png')}}" alt=""></h2>
                <!-- <div class="col-xl-6">dfsadfsadfsadf</div>
                <div class="col-xl-6">dfsadfsadfffdsdfsdfsadfsadf</div> -->
            </div>
        </div>
        <div class="inner-container">
            <div class=" row">
                <!--Single class start-->
                @foreach($services as $service)
                    <div class="col-sm-6 col-xl-3">
                    <div class="single-class  wow fadeInUp" data-wow-delay=".4s">
                        <img src="{{asset('uploads/service/'.$service->photo)}}" alt="">

                        <div class="intro">
                            <div class="intro-left">
                                <h3><a href="">{{$service->title}}</a></h3>
                            </div>
                        </div>
                        <div class="details">
                            <p>{{Str::limit($service->details,180)}}</p>
                            <a href="{{route('serviceDetails',$service->id)}}" class="kids-care-btn bgc-orange">Details </a>
                        </div>
                    </div>
                </div>
               @endforeach

            </div>
        </div>

    </div>
</section>

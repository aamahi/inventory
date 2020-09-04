<section class="staff-full">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="staff-full-inner wow fadeInUp" data-wow-delay=".3s">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-4 col-xl-3 ">
                            <div class="image-side">
                                <img src="{{asset('uploads/logo/'.$ceo->photo)}}" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-md-8 col-xl-9 ">
                            <div class="content-side">
                                <h5><i class="fa fa-user" ></i>{{$ceo->name}}</h5>
                                <span>CEO at <span class="font-red">Papri IT</span></span>
                                <p>{{$ceo->message}}</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

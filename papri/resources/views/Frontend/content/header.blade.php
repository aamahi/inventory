<!--Top bar area start-->
<header class="top-bar ">
    <div class="container-fluid">
        @php
            $setting = \App\Model\Setting::find(1);
        @endphp
        <div class="row">
            <div class="col-md-4 font-weight-bold" style="margin-bottom: 10px;">
                <span class="first-span"><i class="fa fa-map-marker"></i> {{$setting->address}}</span>
            </div>
            <div class="col-md-4 font-weight-bold" style="margin-bottom: 10px;">
                <span class="first-span"><i class="fa fa-phone"></i>{{$setting->primaryPhone}} , {{$setting->otherPhone}} </span>
            </div>
            <div class="col-md-4 font-weight-bold" style="margin-bottom: 10px;">
                <span class="first-span"><i class="fa fa-envelope"></i>{{$setting->primaryEmail}} , {{$setting->otherEmail}}</span>

            </div>
        </div>
    </div>
</header>
<!--Top bar area end-->
<!--Main menu area start-->
<section class="main-menu-area red-grass">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-2">
                <div class="logo">
                    <a href="{{route('frontendHome')}}">
                        <img src="{{asset('uploads/logo/'.$setting->logo)}}" alt="">
                    </a>
                </div>
                <div class="accordion-wrapper hide-sm-up">
                    <a href="#" class="mobile-open"><i class="fa fa-bars" ></i></a>
                    <!--Mobile Menu start-->

                    <ul id="mobilemenu" class="accordion">
                        <li class="mob-logo"><a href="{{route('frontendHome')}}">
                                <img src="{{asset('uploads/logo/'.$setting->logo)}}" alt="">
                            </a></li>
                        <li ><a class="closeme" href="#"><i class="fa fa-times" ></i></a></li>
                        <li class="fc-red out-link"><a class="" href="{{route('frontendHome')}}">Home</a></li>
                        <li class="fc-sky out-link"><a class="" href="{{route('frontendAbout')}}">About</a></li>
                        <li>
                            <div class="link font-orange">Service<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu font-orange">
                                <!--  <li><h4>Nursery</h4></li>-->
                                @foreach(\App\Model\Service::all() as $service)
                                    <li><a href="{{route('serviceDetails',$service->id)}}">{{$service->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li>
                            <div class="link font-per">Course<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu font-per">
                                @foreach(\App\Model\Course::all() as $course)
                                    <li><a href="{{route('courseDetails',$course->id)}}">{{$course->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <div class="link font-per"><a href="about-us.html">Our Clint</a></div>

                        </li>
                        <li class="fc-red out-link"><a class="" href="{{route('frontendContact')}}">Contact</a></li>
                        <li>
                            <div class="top-contact-btn">
                                <a href="{{route('frontendContact')}}" class="kids-care-btn bg-sky">Get Startd</a>
                            </div>
                        </li>

                    </ul>
                    <!--Mobile Menu end-->

                </div>
            </div>


            <!--Main menu start-->

            <div class="col-md-9 col-lg-9 col-xl-8">
                <div class="mainmenu float-right">
                    <ul id="navigation">
                        <li class="fc-orange hav-sub"><a href="{{route('frontendHome')}}">Home</a></li>

                        <li class="fc-sky hav-sub"><a href="{{route('frontendAbout')}}">About us</a></li>
                        <li class="fc-green"><a href="{{route('frontendHome')}}">Service<i class="fa fa-angle-down" ></i> </a>
                            <ul class="sub-menu">
                                @foreach(\App\Model\Service::all() as $service)
                                    <li><a href="{{route('serviceDetails',$service->id)}}">{{$service->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="fc-red"><a href="{{route('frontendHome')}}">Course<i class="fa fa-angle-down" ></i> </a>
                            <ul class="sub-menu">
                                @foreach(\App\Model\Course::all() as $course)
                                    <li><a href="{{route('courseDetails',$course->id)}}">{{$course->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="fc-per hav-sub"><a href="{{route('frontendContact')}}">Our Clint</a></li>
                        <li class="fc-sky hav-sub"><a href="{{route('frontendContact')}}">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <!--Main menu end-->
            <div class="col-lg-3 col-xl-2">
                <div class="serch-wrapper float-right hide-sm">
                    <div class="top-contact-btn align-middle">
                        <a href="{{route('frontendContact')}}" class="kids-care-btn bg-sky">Get Start</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Main menu area end-->

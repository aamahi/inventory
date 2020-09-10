<section class="kids-care-event-area">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-xl-12">
                <h2 class="area-heading font-red">Our Course<img src="{{asset('frontend/img/icon/pen-green.png')}}" alt=""></h2>
            </div>
        </div>
        <div class="inner-container">
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-sm-6 col-xl-3">
                    <div class="sin-upc-event-two">
                        <!-- <div class="sp-age bg-green">
                            <p>AGE: 2-5 Years</p>
                        </div> -->
                        <img src="{{asset('uploads/course/'.$course->photo)}}" alt="">

                        <div class="sin-up-content">
                            <!-- <div class="price red-drop">
                                <p>$15</p>
                            </div> -->
                            <h6>{{$course->title}}</h6>
                            <p>{{Str::limit($course->details,169)}}</p>
                            <a class="bg-green" href="{{route('courseDetails',$course->id)}}">Course Details</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
{{--            <div class="row">--}}
{{--                <div class="col-xl-5">--}}
{{--                    <button class="area-heading">All Course</button>--}}
{{--                    <h2 class="area-heading font-red">Our Course<img src="{{asset('frontend/img/icon/pen-green.png')}}" alt=""></h2>--}}
{{--                </div>--}}
{{--                <div class="col-xl-2">--}}
{{--                                        <button class="area-heading">All Course</button>--}}
{{--                    --}}{{--                    <h2 class="area-heading font-red">Our Course<img src="{{asset('frontend/img/icon/pen-green.png')}}" alt=""></h2>--}}
{{--                </div>--}}
{{--                <div class="col-xl-5">--}}
{{--                    <button class="area-heading">All Course</button>--}}
{{--                    <h2 class="area-heading font-red">Our Course<img src="{{asset('frontend/img/icon/pen-green.png')}}" alt=""></h2>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>

     <!--Teachers area end-->

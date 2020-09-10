@extends('Frontend.index')

@section('content')
    <!--Breadcrumb area start-->

    <div class="text-bread-crumb d-flex align-items-center style-six">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{$course->title}}</h2>
                    <!-- <div class="bread-crumb-line"><span><a href="">About us / </a></span>Our Staff</div> -->
                </div>

            </div>
        </div>
    </div>

    <!--Kindergarten top content area start-->
    <section class="kindergarten-top-content wow fadeInUp" data-wow-delay=".3s">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="kin-top-con">
{{--                        <p><span class="lar-car"> {{$course->details}}</p>--}}
                        <div class="kin-top-info">
                            <h6>Prerequirment</h6>
                            <p><i class="fa fa-check-square-o" ></i>{{$course->pre}}</p>
                        </div>
                        <div class="kin-top-info">
                            @php
                            $explode = explode("</li>",$course->module);
                            $join = join(' ',$explode);
                            @endphp
                            <h6>Course Module</h6>
                            <ul>
                                <li>{!! $course->module !!}</li>
                            </ul>

{{--                            <p><i class="fa fa-share" ></i>{!! "Hello ".$course->module !!}</p>--}}
{{--                            <span><i class="fa fa-share" ></i>{{$course->module}}</span>--}}
{{--                            <span><i class="fa fa-share" ></i>{{$join}}</span>--}}
{{--                            <p><i class="fa fa-check-square-o" ></i>Winter Session</p>--}}
{{--                            <span><i class="fa fa-share" ></i>February - March 31</span>--}}
{{--                            <span><i class="fa fa-share" ></i>Morning and day shift available</span>--}}
                        </div>
                        <div class="kin-top-info">
                            <h6>Duration</h6>
                            <p><i class="fa fa-check-square-o" ></i>6 Month</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="kin-top-con-right">
                        <img src="{{asset('uploads/course/'.$course->photo)}}" alt="">
                        <p>{{$course->details}}</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

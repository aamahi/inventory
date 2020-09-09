@extends('Frontend.index')

@section('content')
    <!--Breadcrumb area start-->

    <div class="text-bread-crumb d-flex align-items-center style-six">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{$service->title}}</h2>
                    <!-- <div class="bread-crumb-line"><span><a href="">About us / </a></span>Our Staff</div> -->
                </div>

            </div>
        </div>
    </div>

    <!--Breadcrumb area end-->

    <section class="kindergarten-top-content wow fadeInUp" data-wow-delay=".3s">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="kin-top-con">
                        <p>{{$service->details}}</p>

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="kin-top-con-right">
                        <img src="{{asset('uploads/service/'.$service->photo)}}" alt="">
                        <!-- <p> <strong>Purposeful play guided by experienced faculty.</strong> Using play as a vehicle for learning and cognitive development, our students build language, fine motor and gross motor skills, as well as social and emotional skills.</p> -->
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

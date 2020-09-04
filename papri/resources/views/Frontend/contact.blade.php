@extends('Frontend.index')

@section('content')
    <!--Breadcrumb area start-->

    <div class="text-bread-crumb d-flex align-items-center style-six">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Contract US</h2>
                    <!-- <div class="bread-crumb-line"><span><a href="">About us / </a></span>Our Staff</div> -->
                </div>

            </div>
        </div>
    </div>

    <!--Breadcrumb area end-->
    <section class="caontact-page">
        <div class="container-fluid">
            <div class="row justify-content-center no-gutters">
                <div class="col-lg-12 col-xl-10">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-page-form">
                                <h3 class="font-green">Have Questions.</h3>
                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{$error}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endforeach
                                @endif

                                <form action="{{route('frontendContact')}}" id="contact-form" method="post">
                                    @csrf
                                    <input type="text"  name="name" placeholder="Your name.." value="{{old('name')}}">
                                    <input type="text" name="email" placeholder="Your Email.." value="{{old('email')}}">
                                    <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>
{{--                                    <input type="text"  name="email" placeholder="Your Email..">--}}
                                    <button class="btn submit-btn" type="submit" >Send Message</button>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="con-page-info">
                                <h3>Contact Information.</h3>
                                <div class="con-page-right">
                                    <div class="sin-line">
                                        <div class="sin-line-left">
                                            <h6>ADDRESS</h6>
                                        </div>
                                        <div class="sin-line-right">
                                            <p><i class="fa fa-map-marker" ></i>{{$info->address}}</p>
                                        </div>
                                    </div>
                                    <div class="sin-line">
                                        <div class="sin-line-left">
                                            <h6>24/7 SUPPORT</h6>
                                        </div>
                                        <div class="sin-line-right">
                                            <p><i class="fa fa-phone" ></i>{{$info->primaryPhone}}</p>
                                            <p><i class="fa fa-envelope" ></i>{{$info->primaryEmail}}</p>
                                        </div>
                                    </div>
                                    <div class="sin-line">
                                        <div class="sin-line-left">
                                            <h6>OPENING HOURS</h6>
                                        </div>
                                        <div class="sin-line-right">
                                            <p><i class="fa fa-map-marker" ></i> Monday – Friday 7.00 am – 9.00 pm (Closed on Weekends)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

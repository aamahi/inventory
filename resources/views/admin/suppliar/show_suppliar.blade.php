@extends('index')
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!--widget start-->
                    <aside class="profile-nav alt green-border">
                        <section class="card">
                            <div class="user-heading alt bg-secondary">
                                <a href="#">
                                    <img alt="" src="{{asset('Uploads/suppliar/'.$suppliar->photo)}}">
                                </a>
                                <br>
                                <h1>{{$suppliar->suppliar_name}}</h1>
                                <p>{{$suppliar->company_name}}</p>
                            </div>

                            <ul class="nav nav-pills nav-stacked">
                                <li class="nav-item"><a class="nav-link" href="javascript:;"> <i class="fa fa-envelope-o"></i> {{$suppliar->email}}</a></li>
                                <li class="nav-item"><a class="nav-link" href="javascript:;"> <i class="fa fa-phone-square"></i> {{$suppliar->phone}}</a></li>
                                <li class="nav-item"><a class="nav-link" href="javascript:;"> <i class="fa fa-briefcase"></i> {{$suppliar->created_at->format("jS M, Y")}}</a></li>
                                <li class="nav-item"><a class="nav-link" href="javascript:;"> <i class="fa fa-home"></i> {{$suppliar->address}}</a></li>
                            </ul>
                            <a href="{{route('suppliar')}}" class="btn btn-primary align-items-center"> <i class="fa fa-reply"></i> Back</a>

                        </section>
                    </aside>
                </div>

            </div>
            <!-- page end-->
        </section>
    </section>

@endsection

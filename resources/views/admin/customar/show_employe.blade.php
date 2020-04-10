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
                                    <img alt="" src="{{asset('Uploads/employe/'.$employe_info->image)}}">
                                </a>
                                <h1>{{$employe_info->name}}</h1>
                                <p>{{$employe_info->position}}</p>
                            </div>

                            <ul class="nav nav-pills nav-stacked">
                                <li class="nav-item"><a class="nav-link" href="javascript:;"> <i class="fa fa-envelope-o"></i> {{$employe_info->email}}</a></li>
                                <li class="nav-item"><a class="nav-link" href="javascript:;"> <i class="fa fa-phone-square"></i> {{$employe_info->phone}}</a></li>
                                <li class="nav-item"><a class="nav-link" href="javascript:;"> <i class="fa fa-dollar"></i> {{$employe_info->salary}} (BDT) </a></li>
                                <li class="nav-item"><a class="nav-link" href="javascript:;"> <i class="fa fa-briefcase"></i> {{$employe_info->created_at->format("jS M, Y")}}</a></li>
                                <li class="nav-item"><a class="nav-link" href="javascript:;"> <i class="fa fa-home"></i> {{$employe_info->address}}</a></li>
                            </ul>
                            <a href="{{route('all_employe')}}" class="btn btn-primary align-items-center"> <i class="fa fa-reply"></i> Back</a>

                        </section>
                    </aside>
                </div>

            </div>
            <!-- page end-->
        </section>
    </section>

@endsection

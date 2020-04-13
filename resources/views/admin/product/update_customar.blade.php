@extends('index')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!--state overview start-->
            <section class="card">

                <header class="card-header text-center bg-info text-light">
                    Update Employe
                </header>
                <br>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show col-md-10 offset-md-1" role="alert">
                            {{$error}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                @endif
                <div class="card-body">
                    <form class="form-horizontal tasi-form" action="{{URL('update/customar/{id}')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="name">Customar Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="name" name="name" type="text"  value="{{$customar->customar_name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="position">Customar Group Name</label>
                            <div class="col-sm-10">
                                <select name="customar_group_id" class="form-control">
                                    @foreach($customar_group as $customar_group_name)
                                        <option value="{{$customar_group_name->id}}">{{$customar_group_name->customar_group_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="email">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="email" name="email" type="email" placeholder="Email Address" value="{{$customar->email}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="phone">Phone</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="phone" name="phone" type="number" placeholder="Phone number" value="0{{$customar->phone}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="address">Address</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="address" name="address" type="text" placeholder="Address" value="{{$customar->address}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="image">Old Image</label>
                            <div class="col-sm-10">
                                <img width="200" src="{{asset('Uploads/customar/'.$customar->photo)}}" alt="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="image">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="image" name="image" type="file">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label"></label>
                            <div class="col-sm-3">
                                <input class="btn btn-info btn-md" type="submit" value="Update Customar">
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <!--state overview end-->

        </section>
    </section>
@endsection

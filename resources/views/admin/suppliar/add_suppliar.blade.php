@extends('index')
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <!--state overview start-->
            <section class="card">

                <header class="card-header text-center bg-info text-light">
                    Add Suppliar
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
                    <form class="form-horizontal tasi-form" action="{{route('add_suppliar')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="name">Suppliar Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="name" name="suppliar_name" type="text" placeholder="Suppliar Name" value="{{old('suppliar_name')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="position">Company Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="position" name="company_name" type="text" placeholder="Company Name" value="{{old('company_name')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="email">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="email" name="email" type="email" placeholder="Email Address" value="{{old('email')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="phone">Phone</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="phone" name="phone" type="number" placeholder="Phone number" value="{{old('phone')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="address">Address</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="address" name="address" type="text" placeholder="Address" value="{{old('address')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="image">photo</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="image" name="photo" type="file">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label"></label>
                            <div class="col-sm-3">
                                <input class="btn btn-info btn-md" type="submit" value="Add Suppliar">
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <!--state overview end-->

        </section>
    </section>
@endsection

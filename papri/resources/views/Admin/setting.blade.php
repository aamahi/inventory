@extends('Admin.index')

@section('adminContent')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-lg-12">
                    <section class="card">
                        <header class="text-center card-header bg-success text-white font-weight-bold">
                            Add Basic Information
                        </header>
                        <div class="card-body">
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

                            <form method="post" action="{{route('setting')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="primaryEmail" class="font-weight-bold">Primary Email Address</label>
                                        <input type="text" class="form-control" id="primaryEmail" name="primaryEmail" value="{{$setting->primaryEmail}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="otherEmail" class="font-weight-bold">Other Email Address</label>
                                        <input type="text" class="form-control" id="otherEmail" name="otherEmail" value="{{$setting->otherEmail}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="primaryPhone" class="font-weight-bold">Primary Phone Numner</label>
                                        <input type="text" class="form-control" id="primaryPhone" name="primaryPhone" value="{{$setting->primaryPhone}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="otherPhone" class="font-weight-bold">Other Phone Number</label>
                                        <input type="text" class="form-control" id="otherPhone" name="otherPhone" value="{{$setting->otherPhone}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="font-weight-bold">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{$setting->address}}">
                                </div>
                                <div class="form-group">
                                    <label for="logo" class="font-weight-bold">Logo</label><br/>
                                    <img src="{{asset('uploads/logo/'.$setting->logo)}}"/>
                                    <input type="file" class="form-control" id="logo" name="logo">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>

                        </div>
                    </section>
                </div>
            </div>

        </section>
    </section>
@endsection

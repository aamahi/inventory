@extends('Admin.index')

@section('adminContent')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-lg-12">
                    <section class="card">
                        <header class="text-center card-header bg-success text-white font-weight-bold">
                            About Information
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

                            <form method="post" action="{{route('about')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="message" class="font-weight-bold">About Description</label>
                                    <textarea class="form-control" name="message" style="height: 129px;">{{$about->message}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="photo" class="font-weight-bold">Picture </label><br/>
                                    <img src="{{asset('uploads/logo/'.$about->photo)}}"/>
                                    <input type="file" class="form-control" id="photo" name="photo">
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

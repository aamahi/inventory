@extends('Admin.index')

@section('adminContent')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-lg-12">
                    <section class="card">
                        <header class="text-center card-header bg-success text-white font-weight-bold">
                            CEO Message
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

                            <form method="post" action="{{route('ceo')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="font-weight-bold">Name of CEO</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$ceo->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="message" class="font-weight-bold">Message of CEO</label>
                                    <textarea class="form-control" name="message" style="height: 129px;">{{$ceo->message}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="photo" class="font-weight-bold">Picture </label><br/>
                                    <img src="{{asset('uploads/logo/'.$ceo->photo)}}"/>
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

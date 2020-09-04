@extends('Admin.index')

@section('adminContent')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-lg-7">
                    <section class="card">
                        <header class="text-center card-header bg-success text-white font-weight-bold">
                            Clints
                        </header>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Banner</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clints as $clint)
                                    <tr>
                                        <td> <img src="{{asset('uploads/clint/'.$clint->banner)}}" width="150"> </td>
                                        <td>{{$clint->title}}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('deleteClint',$clint->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
                <div class="col-lg-5">
                    <section class="card">
                        <header class="text-center card-header bg-info text-white font-weight-bold">
                            Add New Clint
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

                            <form method="post" action="{{route('clint')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="title" class="font-weight-bold">Clint Name </label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                                </div>
                                <div class="form-group">
                                    <label for="banner" class="font-weight-bold">Logo</label><br/>
                                    <input type="file" class="form-control" id="banner" name="banner">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </section>
                </div>
            </div>

        </section>
    </section>
@endsection

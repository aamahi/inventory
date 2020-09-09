@extends('Admin.index')

@section('adminContent')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-lg-12">
                    <section class="card">
                        <header class="text-center card-header bg-success text-white font-weight-bold">
                            Add New Course
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

                            <form method="post" action="{{route('addCourse')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 col-form-label font-weight-bold">Course Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Course Title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="details" class="col-sm-2 col-form-label font-weight-bold">Course Details</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="details" style="height: 129px;"> Course Details....... </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label font-weight-bold">Course Module</label>
                                    <div class="col-sm-10">
                                        <div class="card-body">
                                            <div class="summernote" name="module">
                                                <input name="hello" type="text"
                                                 <ul>
                                                    <li>Hello one </li>
                                                    <li>Hello two</li>
                                                    <li>Hello three</li>
                                                </ul>
                                                >

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pre" class="col-sm-2 col-form-label font-weight-bold">Pre Requirment</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="pre" name="pre" placeholder="Pre Requirment">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label font-weight-bold">Photo</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="photo" name="photo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Add Course</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </section>
                </div>

            </div>

        </section>
    </section>
@endsection

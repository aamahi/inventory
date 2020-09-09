@extends('Admin.index')

@section('adminContent')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-lg-12">
                    <section class="card">
                        <header class="text-center card-header bg-success text-white font-weight-bold">
                            Service
                        </header>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <td> <img src="{{asset('uploads/service/'.$service->photo)}}" width="150"> </td>
                                        <td>{{$service->title}}</td>
                                        <td>{{$service->details}}</td>
                                        <td>
                                            <a href="{{route('editService',$service->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('deleteService',$service->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>

        </section>
    </section>
@endsection

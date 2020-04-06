@extends('index')
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <section class="card">
                <header class="card-header bg-info text-center text-light">
                   Employe Information
                </header>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employes as $employe)
                            <tr>
                                <th><img src="{{asset('Uploads/employe/'.$employe->image)}}" width="65px;" alt=""></th>
                                <th>{{$employe->name}}</th>
                                <th>{{$employe->position}}</th>
                                <th>{{$employe->email}}</th>
                                <th>
                                    <a href=""  class="btn btn-md btn-success" data-toggle="modal" data-target="#myModal2" data-email="{{$employe->email }}" data-username="{{ $employe->name }}"> <i class="fa fa-eye"> </i> </a>
                                    <a href="{{route('update_employe',$employe->id)}}" class="btn btn-md btn-info"> <i class="fa fa-pencil-square-o"> </i> </a>
                                    <a href="{{route('delete_update',$employe->id)}}" class="btn btn-md btn-danger"> <i class="fa fa-trash-o"> </i> </a>
                                </th>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </section>

        </section>
    </section>
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModal2">Employe Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
{{--                   {{$employes}}--}}
                    Bal hosse na

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection

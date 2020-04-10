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
                            @forelse($employes as $employe)
                            <tr>
                                <th><img src="{{asset('Uploads/employe/'.$employe->image)}}" width="65px;" alt=""></th>
                                <th>{{$employe->name}}</th>
                                <th>{{$employe->position}}</th>
                                <th>{{$employe->email}}</th>
                                <th>
                                    <a href="{{route('show_employe',$employe->id)}}"  class="btn btn-md btn-success" > <i class="fa fa-eye"> </i> </a>
                                    <a href="{{route('update_employe',$employe->id)}}" class="btn btn-md btn-info"> <i class="fa fa-pencil-square-o"> </i> </a>
                                    <a href="{{route('delete_update',$employe->id)}}" class="btn btn-md btn-danger delete"> <i class="fa fa-trash-o"> </i> </a>
                                </th>
                            </tr>
                                @empty
                                <tr class="bg-light">
                                    <td colspan="50" class="text-center text-dark"> No Employe Found !</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </section>

        </section>
    </section>

@endsection

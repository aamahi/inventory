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
                                <th>Deleted</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($deleted_employes as $employe)
                            <tr>
                                <th><img src="{{asset('Uploads/employe/'.$employe->image)}}" width="65px;" alt=""></th>
                                <th>{{$employe->name}}</th>
                                <th>{{$employe->position}}</th>
                                <th>{{$employe->email}}</th>
                                <th>{{$employe->deleted_at->format("jS M, Y")}}</th>
                                <th>
                                    <a href="{{route('restore',$employe->id)}}"  class="btn btn-md btn-primary"> <i class="fa fa-reply"> </i> Restore </a>
                                    <a href="{{route('deleteF',$employe->id)}}" class="btn btn-md btn-danger delete"> <i class="fa fa-trash-o"> </i> Delete </a>
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

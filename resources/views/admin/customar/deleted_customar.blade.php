@extends('index')
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <section class="card">
                <header class="card-header bg-info text-center text-light">
                   Deleted Customar Information
                </header>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Deleted</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($deleted_customar as $customar)
                            <tr>
                                <th><img src="{{asset('Uploads/customar/'.$customar->photo)}}" width="65px;" alt=""></th>
                                <th>{{$customar->customar_name}}</th>
                                <th>0{{$customar->phone}}</th>
                                <th>{{$customar->address}}</th>
                                <th>{{$customar->deleted_at->format("jS M, Y")}}</th>
                                <th>
                                    <a href="{{route('restore_customar',$customar->id)}}"  class="btn btn-md btn-primary"> <i class="fa fa-reply"> </i> Restore </a>
                                    <a href="{{route('customar_delete_h',$customar->id)}}" class="btn btn-md btn-danger delete"> <i class="fa fa-trash-o"> </i> Delete </a>
                                </th>
                            </tr>
                                @empty
                                <tr class="bg-light">
                                    <td colspan="50" class="text-center text-dark"> No customar Found !</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </section>

        </section>
    </section>
@endsection

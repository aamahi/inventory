@extends('index')
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <section class="card">
                <header class="card-header bg-info text-center text-light">
                   suppliar Information
                </header>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Company Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($suppliars as $suppliar)
                            <tr>
                                <th><img src="{{asset('Uploads/suppliar/'.$suppliar->photo)}}" width="65px;" alt=""></th>
                                <th>{{$suppliar->suppliar_name}}</th>
                                <th>{{$suppliar->company_name}}</th>
                                <th>{{$suppliar->email}}</th>
                                <th>
{{--                                    <a href="{{route('show_suppliar',$suppliar->id)}}"  class="btn btn-md btn-success" > <i class="fa fa-eye"> </i> </a>--}}
{{--                                    <a href="{{route('update_suppliar',$suppliar->id)}}" class="btn btn-md btn-info"> <i class="fa fa-pencil-square-o"> </i> </a>--}}
{{--                                    <a href="{{route('delete_update',$suppliar->id)}}" class="btn btn-md btn-danger delete"> <i class="fa fa-trash-o"> </i> </a>--}}
                                </th>
                            </tr>
                                @empty
                                <tr class="bg-light">
                                    <td colspan="50" class="text-center text-dark"> No suppliar Found !</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </section>

        </section>
    </section>

@endsection

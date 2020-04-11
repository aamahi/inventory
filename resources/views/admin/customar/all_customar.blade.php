@extends('index')
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <section class="card">
                <header class="card-header bg-info text-center text-light">
                   Customar Information
                </header>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="myTable">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Balance</th>
                                <th>Due</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($customars as $customar)
                            <tr>
                                <th><img src="{{asset('Uploads/customar/'.$customar->photo)}}" width="65px;" alt=""></th>
                                <th>{{$customar->customar_name}}</th>
                                <th>{{$customar->phone}}</th>
                                <th>@if($customar->balance==0)0.00 @else {{$customar->balance}} @endif Taka</th>
                                <th>@if($customar->due==0)0.00 @else {{$customar->due}} @endif Taka</th>
                                <th>{{$customar->address}}</th>
                                <th>
{{--                                    {{route('update_customar',$customar->id)}}--}}
                                    <a href="{{route('show_customar',$customar->id)}}"  class="btn btn-md btn-success" > <i class="fa fa-money"> </i> </a>
                                    <a href="" class="btn btn-md btn-info"> <i class="fa fa-pencil-square-o"> </i> </a>
                                    <a href="{{route('delete_customar',$customar->id)}}" class="btn btn-md btn-danger delete"> <i class="fa fa-trash-o"> </i> </a>
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

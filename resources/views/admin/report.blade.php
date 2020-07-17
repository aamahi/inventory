@extends('index')
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <section class="card">
                <header class="card-header bg-info text-center text-light">
                   ALL Report
                </header>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="myTable">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Customar Name</th>
                                <th>User</th>
                                <th>Pay</th>
                                <th>Due</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($invoices as $invoice)
                            <tr>
                                <th>{{$invoice->created_at->format('d/m/Y')}}</th>
                                <th>{{($invoice->customar)->customar_name}}</th>
                                <th>{{Auth::user()->name}}</th>
                                 <th>@if($invoice->pay==0)0.00 @else {{$invoice->pay}} @endif Taka</th>
                                 <th>@if($invoice->due==0)0.00 @else {{$invoice->due}} @endif Taka</th>
                                <th>{{$invoice->total}} taka</th>
                                <th>
                                    <a href=""  class="btn btn-md btn-info" data-toggle="modal" data-toggle="modal" data-target="#exampleModalLong"> <i class="fa fa-eye"> </i> </a>
{{--                                    <a href="{{route('show_customar',$invoice->id)}}"  class="btn btn-md btn-success" > <i class="fa fa-money"> </i> </a>--}}
{{--                                    <a href="{{route('update_customar',$invoice->id)}}" class="btn btn-md btn-info"> <i class="fa fa-pencil-square-o"> </i> </a>--}}
{{--                                    <a href="{{route('delete_customar',$invoice->id)}}" class="btn btn-md btn-danger delete"> <i class="fa fa-trash-o"> </i> </a>--}}
                                </th>
                            </tr>
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful conten
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @empty
                                <tr class="bg-light">
                                    <td colspan="50" class="text-center text-dark"> No Report Found !</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </section>

        </section>
    </section>

@endsection

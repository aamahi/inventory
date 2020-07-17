@extends('index')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <section class="card">
                <header class="card-header text-center bg-success text-white font-weight-bold">
                    Bkash
                </header>
                <div class="card-body">
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                {{$error}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endforeach
                    @endif
                    <form class="form-horizontal tasi-form" method="post" action="{{route('bkash')}}">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-4 col-lg-4 control-label font-weight-bold" style="font-size:20px;">Customar Bkash Number : </label>
                            <div class="col-lg-8">
                                <input type="number" name="number" value="{{old('number')}}" class="form-control-lg" style="font-size:20px; width: 100%" placeholder="Enter Customar Bkash Number...(11 digit or 4 digit)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-lg-4 control-label font-weight-bold" style="font-size:20px;">Amount :</label>
                            <div class="col-lg-8">
                                <input type="number" name="amount" value="{{old('amount')}}"class="form-control-lg" style="font-size:20px; width: 100%" placeholder="Enter Amount... ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-lg-4 control-label font-weight-bold" style="font-size:20px;">Recive by Customar :</label>
                            <div class="col-lg-8">
                                <input type="number" name="recive" value="{{old('recive')}}" class="form-control-lg" style="font-size:20px; width: 100%" placeholder="Enter Recive by Customar Amount... ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-lg-4 control-label font-weight-bold" style="font-size:20px;">Sent to Customar :</label>
                            <div class="col-lg-8">
                                <input type="number" name="send" value="{{old('send')}}" class="form-control-lg" style="font-size:20px; width: 100%" placeholder="Enter Send to Customar Amount... ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4 col-lg-4"></div>
                            <div class="col-lg-4">
                                <input type="submit" class="btn btn-success btn-lg" value="Bkash Compleate">
                            </div>
                            <div class="col-lg-4 col-lg-4"></div>
                        </div>

                    </form>
                </div>
            </section>
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
                                <th>Number</th>
                                <th>Amout</th>
                                <th>Recive Customar</th>
                                <th>Send Customar</th>
                                <th>User</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bkashInfo as $bkash)
                            <tr>
                                <th>{{$bkash->created_at->format('d/m/Y (h:i)')}}</th>
                                <th>{{$bkash->number}}</th>
                                <th>{{$bkash->amount}}</th>
                                <th>@if($bkash->recive=='')<a href="{{route('reciveBkash',$bkash->id)}}" class="btn btn-sm btn-danger">Not Recive</a> @else {{$bkash->recive}} @endif</th>
                                <th>@if($bkash->send=='')<a href="{{route('sendBkash',$bkash->id)}}" class="btn btn-sm btn-warning">Not Send</a> @else {{$bkash->send}} @endif</th>
                                <th>{{Auth::User()->name}}</th>
                                <th>
                                    <a href=""  class="btn btn-md btn-info" data-toggle="modal" data-toggle="modal" data-target="#exampleModalLong"> <i class="fa fa-eye"> </i> </a>
                                    <a href="{{route('show_customar',$bkash->id)}}"  class="btn btn-md btn-success" > <i class="fa fa-money"> </i> </a>
                                    <a href="{{route('update_customar',$bkash->id)}}" class="btn btn-md btn-info"> <i class="fa fa-pencil-square-o"> </i> </a>
                                    <a href="{{route('delete_customar',$bkash->id)}}" class="btn btn-md btn-danger delete"> <i class="fa fa-trash-o"> </i> </a>
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

                            @endforeach
                        </table>
                    </div>
                </div>
            </section>

        </section>
    </section>

@endsection

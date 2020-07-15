@extends('index')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- invoice start-->
            <section>
                <div class="card card-primary">
                    <!--<div class="card-heading navyblue"> INVOICE</div>-->
                    <div class="card-body">
                        <div class="row invoice-list">
                            <div class="col-md-12 text-center corporate-id">
                                <img src="{{asset('Uploads/customar/'.$customar->photo)}}" width="76px;" alt="">
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <h4>CUSTOMAR ADDRESS</h4>
                                <p>{{$customar->customar_name}} <br>
                                    {{$customar->address}}<br>
                                    Phone: {{$customar->phone}}
                                </p>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <h4>INVOICE INFO</h4>
                                <ul class="unstyled">
                                    <li>Invoice Number		: <strong>{{$customar->id}}</strong></li>
                                    <li>Total Due Amount			: <strong>{{$customar->due}} taka</strong> </li>
                                </ul>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered" id="dynamic-table">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Pay</th>
                                <th>Due</th>
                                <th>User</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($invoices as $invoice)
                                <tr>
                                    <td>{{$invoice->created_at->format("jS M, Y")}}</td>
                                    <td>{{$invoice->total}}</td>
                                    <td>@if($invoice->pay==0)0.00 @else {{$invoice->pay}} @endif Taka</td>
                                    <td>@if($invoice->due==0)0.00 @else {{$invoice->due}} @endif Taka</td>
                                    <td >{{Auth::user()->name}}</td>
                                    <td><a href="" class="btn btn-info" data-toggle="modal" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-eye"></i></a></td>
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
                            </tbody>
                        </table>
                        <div class="row justify-content-end">
                            <div class="col-lg-4 invoice-block ">
                                <ul class="unstyled amounts">
                                    <li><strong>Sub - Total amount :</strong> $6820</li>
                                    <li><strong>Discount :</strong> 10%</li>
                                    <li><strong>VAT :</strong> -----</li>
                                    <li><strong>Grand Total :</strong> $6138</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center invoice-btn">
                            <a href="{{route('all_customar')}}" class="btn btn-info"><i class="fa fa-reply"></i>
                                Back
                            </a>
                            <a class="btn btn-danger text-light"><i class="fa fa-check"></i> Submit Invoice </a>
                            <a class="btn btn-info text-light" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- invoice end-->
        </section>
    </section>
@endsection

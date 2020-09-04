@extends('Admin.index')

@section('adminContent')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-lg-12">
                    <section class="card">
                        <header class="text-center card-header bg-success text-white font-weight-bold">
                            Contract Information
                        </header>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contract)
                                    <tr>
                                        <td>{{$contract->name}}</td>
                                        <td>{{$contract->email}}</td>
                                        <td>{{$contract->message}}</td>
                                        <td>{{$contract->created_at->format('h:i (a) , d/m/Y')}}</td>
                                        <td>
                                            @if($contract->status==0)
                                                <a href="{{route('contactSeen',$contract->id)}}" class="btn btn-info btn-sm text-white">New</a>
                                            @endif
                                            <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
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

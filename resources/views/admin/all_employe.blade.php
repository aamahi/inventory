@extends('index')
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <section class="card">
                <header class="card-header bg-info text-center">
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
                                <th>Phone</th>
                                <th>Salary</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employes as $employe)
                            <tr>
                                <th>{{$employe->image}}</th>
                                <th>{{$employe->name}}</th>
                                <th>{{$employe->position}}</th>
                                <th>{{$employe->email}}</th>
                                <th>{{$employe->phone}}</th>
                                <th>{{$employe->salary}}</th>
                                <th>{{$employe->address}}</th>
                                <th>
                                    <a href="" class="btn btn-sm btn-danger">Hi</a> <hr>
                                    <a href="" class="btn btn-sm btn-danger">Hi</a><hr>
                                    <a href="" class="btn btn-sm btn-danger">Hi</a>
                                </th>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </section>

        </section>
    </section>
@endsection

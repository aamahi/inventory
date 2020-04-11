@extends('index')
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-md-8">
                    <section class="card">

                        <header class="card-header bg-info  text-light">
                            Customar Group
                        </header>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Group Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($customar_group as $group)
                                <tr>
                                    <td>{{$group->id}}</td>
                                    <td>{{$group->customar_group_name}}</td>
                                    <td>
                                        <a href="{{route('delete_customar_group',$group->id)}}" class="btn btn-danger"> Delete </a>
                                    </td>
                                </tr>
                                    @empty
                                        <tr>
                                            <td colspan="30" class="text-center text-dark">No Customar Group found</td>
                                        </tr>

                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
                <div class="col-md-4">
                    <section class="card">

                        <header class="card-header text-center bg-info text-light">
                            Add Customar Group
                        </header>

                        <div class="card-body">
                            <form action="{{route('customar_group')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Customar Group name</label>
                                    <input type="text"  name="customar_group_name" class="form-control" id="exampleInputPassword1" placeholder="Customar group name">
                                </div>
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
                                <button type="submit" class="btn btn-primary">Add Group name</button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>

        </section>
    </section>
@endsection

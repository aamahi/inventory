@extends('index')
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!--widget start-->
                        <section class="card">
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
                            <div class="card-header bg-info text-center">
                                Update Customar Group
                            </div>
                            <div class="card-body">
                                <form action="{{url('update_customar_group/'.$customar_group->id)}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label >Customar Group Name</label>
                                        <input type="text" class="form-control" name="customar_group_name"  value="{{$customar_group->customar_group_name}}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </section>
                </div>

            </div>
            <!-- page end-->
        </section>
    </section>

@endsection

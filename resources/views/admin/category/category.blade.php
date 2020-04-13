@extends('index')
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-md-8">
                    <section class="card">

                        <header class="card-header text-center bg-info  text-light">
                            Category Name
                        </header>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->category_name}}</td>
                                    <td>
                                        <a href="{{route('update_category',$category->id)}}" class="btn btn-warning"> Update </a>
                                        <a href="{{route('delete_category_temporary',$category->id)}}" class="btn btn-danger delete"> Delete </a>
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
                            Add Category
                        </header>

                        <div class="card-body">
                            <form action="{{route('category')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="category">Category Name</label>
                                    <input type="text"  name="category_name" class="form-control" id="category" placeholder="Categoy name">
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
                                <button type="submit" class="btn btn-primary">Add Category</button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>

        </section>
    </section>
@endsection

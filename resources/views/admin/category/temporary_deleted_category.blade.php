@extends('index')
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <section class="card col-md-10 offset-md-1">
                <header class="card-header bg-info text-center text-light">
                    Temporary Deleted Category
                </header>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Deleted</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($temporary_deleted_category as $deleted_category)
                                <tr>
                                    <th>{{$deleted_category->id}}</th>
                                    <th>{{$deleted_category->category_name}}</th>
                                    <th>{{$deleted_category->deleted_at->format("jS M, Y")}}</th>
                                    <th>
                                        <a href="{{route('restore_deleted_category',$deleted_category->id)}}"  class="btn btn-md btn-primary"> <i class="fa fa-reply"> </i> Restore </a>
                                        <a href="{{route('delete_category',$deleted_category->id)}}" class="btn btn-md btn-danger delete"> <i class="fa fa-trash-o"> </i> Delete </a>
                                    </th>
                                </tr>
                                    @empty
                                    <tr class="bg-light">
                                        <td colspan="50" class="text-center text-dark"> No Temporary Deleted Category Found !</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

        </section>
    </section>
@endsection

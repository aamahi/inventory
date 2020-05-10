@extends('index')
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <section class="card">
                <header class="card-header bg-info text-center text-light">
                   Deleted Product list
                </header>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Deleted</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($products as $product)
                            <tr>
                                <th><img src="{{asset('Uploads/product/'.$product->photo)}}" width="65px;" alt=""></th>
                                <th>{{$product->product_name}}</th>
                                <th>{{$product->quantity}}</th>
                                <th>{{$product->product_price}}.00 taka</th>
                                <th>{{$product->deleted_at->format("jS M, Y")}}</th>
                                <th>
                                    <a href="{{route('restore_customar',$product->id)}}"  class="btn btn-md btn-primary"> <i class="fa fa-reply"> </i> Restore </a>
                                    <a href="{{route('product_harddelete',$product->id)}}" class="btn btn-md btn-danger delete"> <i class="fa fa-trash-o"> </i> Delete </a>
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

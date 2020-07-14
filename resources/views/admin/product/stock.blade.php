@extends('index')
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <section class="card">
                <header class="card-header bg-info text-center text-light">
                   Stock Information
                </header>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="myTable">
                            <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($products as $product)
                            <tr>
                                <th><img src="{{asset('Uploads/product/'.$product->photo)}}" width="65px;" alt=""></th>
                                <th>{{$product->product_name}}</th>
                                <th>{{($product->category)->category_name}}</th>
                                <th>{{$product->product_price}}</th>
                                <th>{{$product->quantity}}</th>
                                <th>
                                    <a href="{{route('show_customar',$product->id)}}"  class="btn btn-md btn-success" > <i class="fa fa-money"> </i> </a>
                                    <a href="{{route('update_customar',$product->id)}}" class="btn btn-md btn-info"> <i class="fa fa-pencil-square-o"> </i> </a>
                                    <a href="{{route('delete_customar',$product->id)}}" class="btn btn-md btn-danger delete"> <i class="fa fa-trash-o"> </i> </a>
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

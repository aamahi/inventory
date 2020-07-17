@extends('index')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-md-5">
                    <section class="card">
                        <header class="card-header">
                            Cart
                        </header>

                        <form action="{{route('invoice')}}" method="post">

                            @csrf
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
                            <select id='selUser' name="customar_id" style='width: 200px;'>
                                <option selected disabled>Select Customar</option>
                                <option value='{{$unknown_customar->id}}'>Unknown Customar</option>

                            @foreach($customars as $customar)
                                    <option value='{{$customar->id}}'>{{$customar->customar_name}}({{$customar->phone}})</option>
                                @endforeach
                            </select>
                            <br>
                            <br>
                            <table class="table table-bordered table-striped table-advance table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>price</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                $total =0;
                                @endphp

                                @foreach($carts as $cart)
                                <tr>
                                    <td><a href="#">{{($cart->product)->product_name}}</a></td>
                                    <td>
                                        <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                                          <i class="fa fa-minus"></i>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="{{$cart->quantity}}" min="1" max="100">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                    </td>
                                    @php
                                        $quantity=$cart->quantity;
                                        $unit_price = ($cart->product)->product_price;
                                        $price_total = $quantity*$unit_price;
                                        $total= $total+$price_total;
                                    @endphp
                                    <td><a href="#">{{$price_total}}</a></td>
                                    <td><a class="btn btn-danger" href="{{route('deleteCart',$cart->id)}}"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                @endforeach
                                <tr class=" text-center">
                                    <td colspan="2"> Total </td>
                                    <td colspan="2">{{ $total}}</td>
                                </tr>
                                <tr class=" text-center">
                                    <td colspan="2"> Pay </td>
                                    <td colspan="2"><input type="number" width="100%" name="pay" value="{{$total}}"></td>
                                </tr>
                                <tr class=" text-center">
                                    <td colspan="2"> Due </td>
                                    <td colspan="2"><input type="number" width="100%" name="due"></td>
                                </tr>
                                </tbody>
                            </table>
                                <input type="hidden" name="total" value="{{$total}}">
                            <a href="{{route('cancelCart')}}" class="btn btn-info">Cancel</a>
                            <button type="submit" class="btn btn-success float-right">Confirm Order</button>
                        </div>
                        </form>
                    </section>
                </div>
                <div class="col-md-7">
                    <section class="card">
                        <div class="card-body">
                            <form action="{{route('search')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-10">
                                        <input type="text" placeholder="Search Product" name="product_name" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-success">Search</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </section>

                    <div class="row product-list">
                        @foreach($products as $product)
                            <div class="col-md-3">
                            <section class="card">
                                <div class="pro-img-box">
                                    <img src="{{asset('Uploads/product/'.$product->photo)}}" alt=""/>
{{--                                    <a href="{{route('product_details',$product->id)}}" class="adtocart">--}}
{{--                                        <i class="fa fa-shopping-cart"></i>--}}
{{--                                    </a>--}}
                                    <a href="{{route('addCart',$product->id)}}" class="adtocart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>

                                <div class="card-body text-center">
                                    <h4>
                                        <a href="#" class="pro-title">
                                            {{$product->product_name}}
                                        </a>
                                    </h4>
                                    <p class="price"> {{$product->product_price}} taka</p>
                                </div>
                            </section>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
@endsection

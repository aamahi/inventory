@extends('index')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-md-3">
                    <section class="card">
                        <div class="card-body">
                            <input type="text" placeholder="Keyword Search" class="form-control">
                        </div>
                    </section>
                    <section class="card">
                        <header class="card-header">
                            Category
                        </header>
                        <div class="card-body">
                            <ul class="nav flex-column prod-cat">
                                @foreach($categories as $category)
                                    <li class="nav-item"><a href="#" class="nav-link"><i class=" fa fa-angle-right"></i> {{$category->category_name}} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </section>
                    <section class="card">
                        <header class="card-header">
                            Filter
                        </header>
                        <div class="card-body">
                            <form role="form product-form">
                                <div class="form-group">
                                    <label>Brand</label>
                                    <select class="form-control">
                                        <option>Wallmart</option>
                                        <option>Catseye</option>
                                        <option>Moonsoon</option>
                                        <option>Textmart</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Color</label>
                                    <select class="form-control">
                                        <option>White</option>
                                        <option>Black</option>
                                        <option>Red</option>
                                        <option>Green</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-control">
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Large</option>
                                        <option>Extra Large</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary" type="submit">Filter</button>
                            </form>
                        </div>
                    </section>
                </div>
                <div class="col-md-9">

                    <section class="card ">
                        <div class="card-body row">
                            <div class="col-md-6">
                                <div class="pro-img-details">
                                    <img class="img-fluid" src="{{asset('Uploads/product/'.$product_details->photo)}}" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="pro-d-title">
                                    <a href="#" class="">
                                        {{$product_details->product_name}}
                                    </a>
                                </h4>
                                <p>
                                    {{$product_details->product_details}}
                                </p>
                                <div class="product_meta">
                                    <span class="posted_in"> <strong>Categories:</strong> <a rel="tag" href="#"> {{($product_details->category)->category_name}} </a>.</span>
                                    <span class="tagged_as"><strong>Available Product:</strong>  {{$product_details->quantity}} </span>
                                </div>
                                <div class="m-bot15"> <strong>Price : </strong> <span class="pro-price"> {{$product_details->product_price}} .00 taka</span></div>
                                <p>
                                    <a href="{{route('product_edit',$product_details->id)}}" class="btn btn-round btn-success" type="button"><i class="fa fa-pencil"></i> Edit </a>
                                    <a href="{{route('product_delete',$product_details->id)}}" class="btn btn-round btn-danger" type="button"><i class="fa fa-trash-o"></i> Delete</a>
                                    <a href="{{route('product_list')}}" class="btn btn-round btn-primary" type="button"><i class="fa fa-reply"></i> Back</a>
                                </p>
                            </div>
                        </div>
                    </section>

                    <section class="card">
                        <header class="card-header tab-bg-dark-navy-blue p-0">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link"> Related Product</a>
                                </li>
                            </ul>
                        </header>
                    </section>
                    <div class="row product-list">
                        @foreach($related_product as $product)
                        <div class="col-md-4">
                            <section class="card">
                                <div class="pro-img-box">
                                    <img src="{{asset('Uploads/product/'.$product->photo)}}" alt=""/>
                                    <a href="{{route('product_details',$product->id)}}" class="adtocart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>

                                <div class="card-body text-center">
                                    <h4>
                                        <a href="#" class="pro-title">
                                            {{$product->product_name}}
                                        </a>
                                    </h4>
                                    <p class="price">{{$product->product_price}} .00 taka</p>
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
    <!--main content end-->
@endsection

@extends('index')
@section('content')
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

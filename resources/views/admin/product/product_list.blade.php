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
                            <div class="pro-sort">
                                <label class="pro-lab">Sort By</label>
                                <select class="styled" >
                                    <option>Default Sorting</option>
                                    <option>Popularity</option>
                                    <option>Average Rating</option>
                                    <option>Newness</option>
                                    <option>Price Low to High</option>
                                    <option>Price High to Low</option>
                                </select>
                            </div>
                            <div class="pro-sort">
                                <label class="pro-lab">Show</label>
                                <select class="styled" >
                                    <option>Result Per Page</option>
                                    <option>2 Per Page</option>
                                    <option>4 Per Page</option>
                                    <option>6 Per Page</option>
                                    <option>8 Per Page</option>
                                    <option>10 Per Page</option>
                                </select>
                            </div>

                            <div class="float-right">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination pagination-sm mb-0">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>

                    <div class="row product-list">
                        @foreach($products as $product)
                            <div class="col-md-4">
                            <section class="card">
                                <div class="pro-img-box">
                                    <img src="{{asset('Uploads/product/'.$product->photo)}}" alt=""/>
                                    <a href="#" class="adtocart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>

                                <div class="card-body text-center">
                                    <h4>
                                        <a href="#" class="pro-title">
                                            {{$product->product_name}}
                                        </a>
                                    </h4>
                                    <p class="price"> {{$product->price}} taka</p>
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

@extends('index')
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <!--state overview start-->
            <section class="card">

                <header class="card-header text-center bg-info text-light d-flex justify-content-between align-items-center">
                    Add Prodtuct
                    <a href="{{route('category')}}" class="btn btn-success"> Add Category </a>
                </header>
                <br>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show col-md-10 offset-md-1" role="alert">
                       {{$error}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endforeach
                @endif
                <div class="card-body">
                    <form class="form-horizontal tasi-form" action="{{route('add_product')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="position">Category Name</label>
                            <div class="col-sm-10">
                                <select name="category_id" class="form-control">
                                    <option selected disabled>Select Category</option>
                                    @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="name">Product Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="name" name="product_name" type="text" placeholder="Product Name" value="{{old('product_name')}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="product_price">Product Price</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="product_price" name="product_price" type="number" placeholder="Product Price" value="{{old('product_price')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="quantity">Quantity</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="quantity" name="quantity" type="number" placeholder="Product Quantity" value="{{old('quantity')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="product_details">Product Details</label>
                            <div class="col-sm-10">
                                <textarea name="product_details" id="product_details" cols="108" rows="3.5">  product Details...
                                </textarea>
{{--                                <input class="form-control" id="address" name="address" type="text" placeholder="Address" value="{{old('address')}}">--}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label" for="image">Photo</label>
                            <div class="col-sm-10">
                                <img id="blah" src="#" alt=""/> <br/> <br>
                                <input class="form-control" name="photo" type='file' onchange="readURL(this);" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label"></label>
                            <div class="col-sm-3">
                                <input class="btn btn-info btn-md" type="submit" value="Add Customar">
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <!--state overview end-->

        </section>
    </section>
@endsection

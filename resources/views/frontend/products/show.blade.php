@extends('layouts.front')

@section('title', $products->name)


@section('content')

    <div class="py-4 mb-4 shadow-sm border-top">
        <div class="container">
            <h6 class="mb-0">
                <a class="link-dark" href="{{ url('category')}}">
                    Collections
                </a> /
                <a class="link-dark" href="{{ url('category/'. $products->category->slug )}}">
                    {{ $products->category->name }}
                </a> /
                <a class="link-dark" href="{{ url('category/'. $products->category->slug.'/'.$products->slig )}}">
                {{ $products->name }} 
                </a>
            </h6>
        </div>
    </div>

<div class="container-fluid con2 py-5">
    <div class="container ">
        <div class="card shadow product_data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right mb-3">
                        <img src="{{ asset('assets/uploads/products/'.$products->image) }}" class="w-100" alt="...">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-8">
                            {{$products->name}}
                        @if ($products->trending == '1')
                            <label style="font-size: 16px;" class="float-end badge bg-danger trending_tag">Trending</label>
                        @endif
                        </h2>
                        <hr>
                        @if ($products->original_price > '0')
                        <label class="me-3 ">Original Price : <s> {{$products->original_price}} kip</s></label> 
                        @endif

                        <label class="fw-bold">Selling Price :  {{$products->selling_price}} kip</label>
                        <p class="mt-3">
                            {!! $products->small_description !!}
                        </p>
                        <hr>
                        @if($products->qty > '0')
                            <label class="badge bg-success">In stock</label>
                        @else
                            <label class="badge bg-danger">Out of stock</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-lg-3">
                                <input type="hidden" value="{{ $products->id }}" class="prod_id">
                                <label for="Quantity">Quantity</label>
                                <div class="input-group text-center ">
                                    <button class=" input-group-text decrement-btn">-</button>
                                    <input type="text" name="quantity" value="1" class="form-control text-center qty-input " />
                                    <button class=" input-group-text increment-btn">+</button>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <br/>
                                @if ($products->qty > '0')
                                    <button type="button" class="btn btn-success addToCartBtn me-3 float-start">Add to cart <i class="fa-solid fa-cart-shopping"></i></button>
                                @endif
                                <button type="button" class="btn btn-primary me-3 float-start">Add to wishist <i class="fa fa-heart"></i></button>
                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <h3>Description</h3>
                <p>{{ $products->description }}</p>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.front')

@section('title')
        My cart
@endsection

@section('content')

<div class="py-4 mb-4 shadow-sm border-top">
    <div class="container">
        <h6 class="mb-0">
            <a class="link-dark" href="{{ url('/')}}">
                Home
            </a> /
            <a class="link-dark" href="{{ url('cart')}}">
                Cart
            </a> 
        </h6>
    </div>
</div>

<div class="container-fluid con2 p-5 py-3">
    <div class="container my-5 py-3 ">
        <div class="card shadow">
            
            <div class="card-body">
                @php $total = 0; @endphp

                @foreach ($cartItem as $item)
                    <div class="row product_data">
                        <div class="col-md-3 ps-5">
                            <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" alt="..." height="150px" width="150px">
                        </div>
                        <div class="col-md-2 py-5">
                            <h5>{{ $item->products->name }}</h5>
                        </div>
                        <div class="col-md-2 py-5">
                            <h6>Price : {{$item->products->selling_price}} kip</h6>
                        </div>
                        <div class="col-md-3 py-5">
                            <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                            @if ($item->products->qty > $item->prod_qty )
                                <h6 for="Quantity" class="mb-1 float-start me-3">Quantity : </h6>
                               <div class="input-group text-center" style="width: 50%">
                                   <button class=" input-group-text change-qty decrement-btn">-</button>
                                   <input type="text" name="quantity" value="{{ $item->prod_qty }}" class="form-control text-center qty-input " />
                                   <button class=" input-group-text change-qty increment-btn">+</button>
                               </div>
                               @php $total += $item->products->selling_price * $item->prod_qty; @endphp
                            @else
                                <h6 class="text-decoration-underline text-danger">Out of Stock</h6>
                            @endif
                        </div>
                        <div class="col-md-2 py-5">
                            <button class="btn btn-danger delete-item" onclick="return confirm('are you sure you want to Delete !')"><i class="fa fa-trash"></i> Remove </button>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="card-footer p-3 px-5">
                <h5>
                    Total Price : {{ $total }}.000 kip
                <a href="{{ url('checkout') }}" class="btn btn-success float-end">Proceed to Checkout</a>
                </h5>
            </div>
            <!--
                <div class="card-body text-center">
                    <h2>Your <i class="fa fa-shopping-cart"></i> cart is empty </h2>
                    <a href="{{ url('category') }}" class="btn btn-outline-primary float-end">Continue Shopping</a>
                </div>
            -->

        </div>
    </div>
</div>
@endsection
@extends('layouts.front')

@section('title')
    Checkout 
@endsection

@section('content')

<div class="py-4 mb-4 shadow-sm border-top">
    <div class="container">
        <h6 class="mb-0">
            <a class="link-dark" href="{{ url('/')}}">
                Home
            </a> /
            <a class="link-dark" href="{{ url('checkout')}}">
                Checkout
            </a> 
        </h6>
    </div>
</div>

<div class="container-fluid con2 p-5">
    <div class="container">
        <form action="{{ url('place-order') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h6>Basic Details</h6>
                            <hr>
                            <div class="row checkout-from">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First Name</label>
                                    <input type="text" value="{{ Auth::user()->name }}" name="fname" class="form-control" placeholder="Enter First Name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Last Name</label>
                                    <input type="text" value="{{ Auth::user()->lname }}" name="lname" class="form-control" placeholder="Enter Last Name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Email</label>
                                    <input type="text" value="{{ Auth::user()->email }}" name="email" class="form-control" placeholder="Enter Email">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Phone Number</label>
                                    <input type="text" value="{{ Auth::user()->phone }}" name="phone" class="form-control" placeholder="Enter phone Number">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Village</label>
                                    <input type="text" value="{{ Auth::user()->village }}" name="village" class="form-control" placeholder="Enter Village">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">City</label>
                                    <input type="text" value="{{ Auth::user()->city }}" name="city" class="form-control" placeholder="Enter City">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Province</label>
                                    <input type="text" value="{{ Auth::user()->province }}" name="province" class="form-control" placeholder="Enter Province">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Pin Code</label>
                                    <input type="text" value="{{ Auth::user()->pincode }}" name="pincode" class="form-control" placeholder="Enter Pin Code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h6>Order Details</h6>
                            <hr>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Qty</th>
                                        <th>Price/item</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($cartitems as $item)
                                        <tr>
                                            <td>{{ $item->products->name }}</td>
                                            <td >{{ $item->prod_qty }}</td>
                                            <td >{{ $item->products->selling_price }} kip</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr>
                            <button type="submit" class="btn btn-success form-control">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
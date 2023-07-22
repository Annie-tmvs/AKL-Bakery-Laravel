@extends('layouts.front')

@section('title')
        My Orders
@endsection

@section('content')
<div class="container-fluid con2 py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-light con1">
                        <h4>Order view <a href="{{ url('my-orders') }}" class="btn  text-white float-end"><u>Back</u></a></h4>
                        
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h4>Shipping Datails</h4>
                                <hr>
                                <label for="">First Name</label>
                                <div class="border "> {{ $orders->fname }} </div>
                                <label for="">Last Name</label>
                                <div class="border "> {{ $orders->lname }} </div>
                                <label for="">Email</label>
                                <div class="border "> {{ $orders->email }} </div>
                                <label for="">Contact No.</label>
                                <div class="border "> {{ $orders->phone}} </div>
                                <label for="">Shipping Address</label>
                                <div class="border ">
                                    {{ $orders->village }}, <br>
                                    {{ $orders->city }}, <br>
                                    {{ $orders->province }},
                                </div>
                                <label for="">Zip Code</label>
                                <div class="border "> {{ $orders->pincode}} </div>
                            </div>
                            <div class="col md-6 ">
                                <h4>Order Datails</h4>
                                <hr>
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <body>
                                        @foreach ($orders->orderitems as $item)
                                            <tr>
                                                <td>{{ $item->products->name }}</td>
                                                <td>{{ $item->prod_qty }}</td>
                                                <td>{{ $item->price}}</td>
                                                <td>
                                                    <img src="{{ asset('assets/uploads/products/'.$item->products->image ) }}" width="50px" alt="...">
                                                </td>

                                            </tr>
                                        @endforeach
                                    </body>
                                </table> 
                                <h4 class="px-2">Grand Total: <span class="float-end"> {{ $orders->total_price }} </span></h4>
                            </div>
                        </div>                       
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
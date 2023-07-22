@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header ">
            <h3 class="fw-bold">Products Page</h3>
        </div>
        <div class="card-body text-start">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Category</th>
                        <th scope="col">Name</th>
                        <th scope="col">Selling Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody >
                    <thead>
                        @foreach ($products as $item)
                        
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->category->name }}</td>
                                <td>{{$item->name }}</td>
                                <td class="w-0">{{$item->selling_price }}</td>
                                <td>
                                    <img src="{{asset('assets/uploads/products/'.$item->image)}}" class="cate-image" alt="Image here">
                                </td>
                                <td class="w-0">
                                    <a href="{{ url('edit-product/'.$item->id)}}" class="btn btn-primary btn-sm me-3"><i class="fa fa-edit me-2 fs-5"></i> Edit</a>
                                    <a href="{{ url('delete-product/'.$item->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('are you sure you want to Delete !')"><i class="fa fa-trash me-2 fs-5"></i> Delete</a>
                                </td>
                            </tr>
                        
                        @endforeach
                    </thead>
                </tbody>
            </table>
        </div>
    </div>
@endsection
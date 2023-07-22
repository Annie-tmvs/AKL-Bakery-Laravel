@extends('layouts.admin')

@section('content')
    <div class="contianer">
        <div class="card">
            <div class="card-header ">
                <h3 class="fw-bold">Category Page</h3>
            </div>
            <div class="card-body text-start">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody >
                            <thead>
                                @foreach ($category as $item)
                                
                                    <tr>
                                        <th scope="row">{{$item->id}}</th>
                                        <td class="text-nowrap">{{$item->name }}</td>
                                        <td class="text-nowrap "><p class="">{{$item->description }}</p></td>
                                        <td class="text-nowrap">
                                            <img src="{{asset('assets/uploads/category/'.$item->image)}}" class="cate-image" alt="Image here">
                                        </td>
                                        <td class="w-0" >
                                            <a href="{{ url('edit-category/'.$item->id)}}" class="btn btn-primary me-3 "><i class="fa fa-edit me-2 fs-5"></i> Edit</a>
                                            <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-danger" onclick="return confirm('are you sure you want to Delete !')"><i class="fa fa-trash me-2 fs-5"></i> Delete</a>
                                        </td>
                                    </tr>
                                
                                @endforeach
                            </thead>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
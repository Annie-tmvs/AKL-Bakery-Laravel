@extends('layouts.admin')

@section('content')
    <div class="card card-bg-dark " >
        <div class="card-header">
            <h3 class="fw-bold">Edit/Update Category</h3>
        </div>
        <div class="card-body">
            <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" value="{{ $category->name }}" class="form-control bg-light text-center" name="name"  >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" value="{{ $category->slug }}" class="form-control bg-light text-center " name="slug" bg-light>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                       <textarea name="description" rows="3" class="form-control bg-light" >{{ $category->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox"  name="status" {{ $category->status == "1" ? 'checked':'' }} >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox"  name="popular" {{ $category->popular == "1" ? 'checked':'' }} >
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" rows="3" class="form-control bg-light" value="{{ $category->meta_title }}" >
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" rows="3" class="form-control bg-light" >{{ $category->meta_keywords }}</textarea>
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" rows="3" class="form-control bg-light" >{{ $category->meta_descrip}}</textarea>
                     </div>
                     @if ($category->image)
                         <img class="w-25" src="{{ asset('assets/uploads/category/'.$category->image)}}" alt="Category image">
                     @endif
                     <div class="col-md-12 mb-5">
                        <input type="file" name="image" rows="3" id="formFile" class="form-control bg-light"  >
                     </div>
                     <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary" >Update</button>
                     </div>
                </div>
            </form>
        </div>
    </div>
@endsection
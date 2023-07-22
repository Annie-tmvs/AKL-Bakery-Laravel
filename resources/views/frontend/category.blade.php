@extends('layouts.front')

@section('title')
    category
@endsection

@section('content')
<div class="py-5 con2 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="pb-3">All Categories :</h4>
                <div class="row">
                    @foreach ($category as $cate)
                    <div class="col-md-3 mb-3">
                        
                        <a class="link-dark" href="{{ url('view-category/'.$cate->slug)}}">
                        <div class="card m">
                            <img class="img-t" src="{{ asset('assets/uploads/category/'.$cate->image)}}" alt="category image">
                            <div class="card-body">
                                <h5>{{ $cate->name }}</h5>
                                <p>
                                    {{ $cate->description }}
                                </p>
                            </div>
                        </div>
                        </a>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
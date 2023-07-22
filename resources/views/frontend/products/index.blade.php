@extends('layouts.front')

@section('title')
    {{$category->name}}
@endsection

@section('content')

<div class="py-4 mb-4 shadow-sm border-top">
    <div class="container">
        <h6 class="mb-0">Collections / {{ $category->name }} </h6>
    </div>
</div>
     
<div class="py-5 con2">
    <div class="container">
        <div class="row">
            <h4 class="mb-4">{{$category->name}} :</h4>

                @foreach ($products as $prod)
                <div class="col-md-3 mb-5 pb-5">
                    <a class="link-dark" href="{{url('category/'.$category->slug.'/'.$prod->slug)}}">
                        <div class="card">
                            <img class="img-t" src="{{ asset('assets/uploads/products/'.$prod->image)}}" class="w-100" alt="product image">
                            <div class="card-body">
                                <h5>{{ $prod->name }}</h5>
                                <span class="float-start"> {{$prod->selling_price}} kip</span>
                                <span class="float-end"><s></s></span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

        </div>
    </div>
</div>


@endsection
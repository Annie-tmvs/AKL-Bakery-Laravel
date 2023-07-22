@extends('layouts.front')

@section('title')
    wellcome to AKL-Bakerey 
@endsection

@section('content')
                <div class="con1">
                    <div class="container">

                            <div class="col-md-12">
                                <img class="img float-start rounded-1 m-5" src="{{ asset('assets/images/cafe.jpg')}}" alt="..." >
                                <div class="py-5">
                                    <h1>Welcome</h1>
                                    <h6 class="fw-lighter"> to <strong>AKL BAKERY </strong><label class="fst-italic"> /ˈbeɪk(ə)ri/ </label></h6>
                                    <h5 class="">
                                        New Collections
                                    </h5>
                                
                                <di class="mb-5">
                                    <a href="{{ url('category')}}" class="link-dark"> <u class="fs-5">Order</u> >></a>
                                </di>
                                </div>
                            </div>
        
                    </div>
                </div>         

            <!--page1-->
            <div class="pb-5 mb-5">
                <div class="contaainer-fluid">
                    <div class="container py-5">
                        <hr>
                        <p><strong>GREEN TEA /</strong><label class="fst-italic">matcha latte</label></p>
                        <p>
                            Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process used to make oolong teas and black teas.
                        </p>

                    </div>
                </div>
            </div>
                    <!--page2-->
    <div class="py-5 con2 text-center">
        <div class="container ">
            <div class="row text-center">
                <h4 class="mb-5">Featured Products</h4>
                    <p class="px-5">
                        A featured product is a way to mark any product in the WooCommerce website. One can mark multiple products as featured products. These featured products can be displayed anywhere. You can mark the featured product from the product page itself.
                    </p>
                <div class="pt-3 ">
                    <div class="featured-carousel owl-carousel owl-theme">
                        @foreach ($featured_products as $prod)
                        <div class="item py-5">
                            <div class="me-3">
                                <img class="img-s rounded" src="{{ asset('assets/uploads/products/'.$prod->image)}}" alt="product image">
                                <div class="text-start">
                                    <h6> {{$prod->name}}</h6>
                                    <p> {{$prod->selling_price}} kip</p>
                                <!--    <span class="float-end"><s></s></span> -->
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
            <!--page3-->
            <div class="pt-5 con2 ">
                <div class="container">
                    <div class="row">
                        <h4 class="text-center">Trending Category</h4>
                        <p class="px-5 text-center">
                        A trending topic is a subject that experiences a surge.
                        </p>
                        <div class="pt-3">
                        <div class="featured-carousel owl-carousel owl-theme">
                        @foreach ($trending_category as $tcate)
                        <div class="item py-5">
                            <a class="link-dark" href="{{ url('view-category/'.$tcate->slug)}}">
                            <div class="">
                                <img class="img-s" src="{{ asset('assets/uploads/category/'.$tcate->image)}}" alt="product image">
                                <div class=" ">
                                    <h6>{{ $tcate->name }}</h6>
                                    <p>
                                        {{ $tcate->description }}
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

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
            loop:true,
            margin:25,
            nav:true,
            dots:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:5
                },
                1000:{
                    items:5
                }
            }
        })

    </script>
@endsection
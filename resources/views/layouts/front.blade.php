<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    
    <!-- jquery -->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}" ></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}" ></script>
    <script src="{{ asset('frontend/js/custom.js') }}"  defer></script>


    <title>
        @yield('title')
    </title>


    <!-- Styles -->
    <link href="{{ asset('frontend/css/bootstrap5.0.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet">
    
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/468819adeb.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <style>
        a{
            text-decoration: none ! important;
        }
    </style>

</head>
<body >
    @include('layouts.inc.frontnav')
    <div class="content">
        @yield('content')
    </div>
    @include('layouts.inc.frontfooter')
</body>
</html>
    <!-- Scripts -->

    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>

        <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    @if (session('status'))
      <script>
        swal("{{ session('status') }}");
      </script>
    @endif

    @yield('scripts')

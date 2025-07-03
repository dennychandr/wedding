<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
    <link rel="shortcut icon" href="{{ asset('') }}assets/img/logo.png" />
    <title>Denny & Fisia Nikahh</title>

    <link href="{{ asset('') }}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/css/bootstrap-utilities.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/css/aos.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/css/sweetalert2.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/css/swiper-bundle.min.css" rel="stylesheet">

    <link href="{{ asset('') }}assets/css/custom.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/css/custom_phone.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/css/custom_animation.css" rel="stylesheet">

    @include('fe.layouts.fonts')
    <!-- Animate on Scroll CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Bootstrap Icons (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    {{-- <!-- CSS for this page only --> --}}
    @stack('css')
    {{-- <!-- End CSS  --> --}}
</head>

<body>
    <div class="wrapper">
        {{-- @include('layouts.sidebar') --}}

        <div class="main">
            {{-- @include('layouts.nav') --}}
            @yield('container')
            @include('fe.layouts.footer')
        </div>
    </div>

    <script src="{{ asset('') }}assets/js/aos.js"></script>
    <script src="{{ asset('') }}assets/js/sweetalert2.js"></script>
    <script src="{{ asset('') }}assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('') }}assets/js/swiper-bundle.min.js"></script>
    <script>
        AOS.init();
    </script>

    {{-- <!-- js for this page only --> --}}
    @stack('js')
    {{-- <!-- ======= --> --}}

</body>

</html>

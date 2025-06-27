<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"> {{-- menambahkan csrf token di meta agar dapat digunakan pada ajax post --}}
    <link rel="shortcut icon" href="{{ asset('') }}assets/img/icons/icon-48x48.png" />

    <title>ADMIN</title>
    {{-- Loads IBM Plex Mono --}}
    {{-- @googlefonts('inter') --}}

    <link href="{{ asset('') }}assets/be/css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/be/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('') }}assets/be/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/be/vendor/perfect-scrollbar/css/perfect-scrollbar.css">
    <link href="{{ asset('') }}assets/be/css/style.css" rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet"> --}}

    {{-- <!-- CSS for this page only --> --}}
    @stack('css')
    {{-- <!-- End CSS  --> --}}
</head>

<body>

    <div class="wrapper">
        @include('be.layouts.sidebar')

        <div class="main">
            @include('be.layouts.nav')

            @yield('container')
            {{-- @include('layouts.footer') --}}
        </div>
    </div>

    <script src="{{ asset('') }}assets/be/js/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('') }}assets/be/js/app.js"></script>
    <script src="{{ asset('') }}assets/be/vendor/jquery/dist/jquery.min.js"></script>

    {{-- <!-- js for this page only --> --}}
    @stack('js')
    {{-- <!-- ======= --> --}}

</body>

</html>

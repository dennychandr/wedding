<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}">  --}}
    {{-- menambahkan csrf token di meta agar dapat digunakan pada ajax post --}}
    {{-- <link rel="shortcut icon" href="{{ asset('') }}assets/img/icons/icon-48x48.png" /> --}}

    <title>Denny & Fisia Nikahh</title>

    <!-- ==================================== -->
    <!-- ✅ Bootstrap 5 -->
    <!-- ==================================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- ==================================== -->
    <!-- ✅ Font Awesome (Icons) -->
    <!-- ==================================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-RXf+QSDCUQs6rXh/j5eFf5xKHfnOk3HDZdkdFJ5gZQk+wRS6MCK+0H2r5Gc+1p1PiY4Z4R84SHC1n6Q+Zq0i1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ==================================== -->
    <!-- ✅ AOS (Animate On Scroll) -->
    <!-- ==================================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />

    <!-- ==================================== -->
    <!-- ✅ SwiperJS (Carousel) -->
    <!-- ==================================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- ==================================== -->
    <!-- ✅ Google Fonts (Poppins) -->
    <!-- ==================================== -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- ==================================== -->
    <!-- ✅ Lightbox2 (Image Viewer) -->
    <!-- ==================================== -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">

    <!-- ==================================== -->
    <!-- ✅ SweetAlert2 (Alert Dialogs) -->
    <!-- ==================================== -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- ==================================== -->
    <!-- ✅ Custom CSS -->
    <!-- ==================================== -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .masonry {
            columns: 3;
            column-gap: 1rem;
        }

        .masonry img {
            width: 100%;
            margin-bottom: 1rem;
            border-radius: 8px;
        }

        .parallax-section {
            background-image: url('/assets/img/mansory/4.jpg');
            background-attachment: fixed;
            background-size: cover;
            background-position: 50% 70%;
            height: 200vh;
            color: white;
        }
    </style>


    {{-- <link href="{{ asset('') }}assets/css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('') }}vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('') }}vendor/perfect-scrollbar/css/perfect-scrollbar.css">
    <link href="{{ asset('') }}assets/css/style.css" rel="stylesheet"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet"> --}}

    <link href="{{ asset('') }}assets/css/custom.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/css/test.css" rel="stylesheet">
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

    {{-- <script src="{{ asset('') }}assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('') }}assets/js/app.js"></script>
    <script src="{{ asset('') }}vendor/jquery/dist/jquery.min.js"></script> --}}



    <!-- ==================================== -->
    <!-- ✅ Bootstrap JS Bundle -->
    <!-- ==================================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HoA0lH+F4FJzrYkkW0D3ewZRH1kLkqEw3V8jWZSc3zzxzFZlWyjXImQ22D7zM3zv" crossorigin="anonymous">
    </script>

    <!-- ==================================== -->
    <!-- ✅ AOS JS -->
    <!-- ==================================== -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- ==================================== -->
    <!-- ✅ SwiperJS -->
    <!-- ==================================== -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 2500
            },
            pagination: {
                el: ".swiper-pagination"
            },
        });
    </script>

    <!-- ==================================== -->
    <!-- ✅ Lightbox2 -->
    <!-- ==================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

    <!-- ==================================== -->
    <!-- ✅ SweetAlert2 -->
    <!-- ==================================== -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showAlert() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Ini contoh alert dari SweetAlert2',
                icon: 'success',
                confirmButtonText: 'Oke'
            });
        }
    </script>

    {{-- <!-- js for this page only --> --}}
    @stack('js')
    {{-- <!-- ======= --> --}}

</body>

</html>

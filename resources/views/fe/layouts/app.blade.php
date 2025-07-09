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

    <style>
        #loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: white;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #ccc;
            border-top-color: #3490dc;
            border-radius: 50%;
            animation: spin 1s infinite linear;
        }

        .progress-text {
            font-size: 24px;
            margin-bottom: 10px;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <div id="loader">
        <div class="spinner"></div>
        <br>
        <div>Just wait a moment ❤️</div>
        <div class="progress-text" id="progress-text">Unwrapping a lovely surprise... 0%</div>
    </div>
    <!-- Start Screen -->
    <div id="start-screen">
        @include('fe.home.section99')
    </div>
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
    {{-- <script src="{{ asset('') }}assets/js/swiper-bundle.min.js"></script> --}}
    <script src="{{ asset('') }}assets/js/dayjs.min.js"></script>
    <script src="{{ asset('') }}assets/js/duration.js"></script>
    <script src="{{ asset('') }}assets/js/relativeTime.js"></script>


    {{-- <!-- js for this page only --> --}}
    @stack('js')
    {{-- <!-- ======= --> --}}

    <!-- Scripts -->
    <script>
        window.addEventListener('load', function() {
            document.getElementById('loader').style.display = 'none';
            // document.getElementById('app').style.display = 'block';
        });

        document.addEventListener("DOMContentLoaded", function() {
            const images = document.querySelectorAll("img");
            const total = 70 / 100 * images.length;

            let loaded = 0;

            const progressText = document.getElementById("progress-text");

            images.forEach(img => {
                // If image is already loaded (from cache), count it
                if (img.complete) {
                    incrementProgress();
                } else {
                    img.addEventListener('load', incrementProgress);
                    img.addEventListener('error', incrementProgress); // Count error too
                }
            });

            function incrementProgress() {
                loaded++;
                let percent = Math.round((loaded / total) * 100);
                if (percent > 100) {
                    percent = 100;
                }
                progressText.textContent = `Unwrapping a lovely surprise... ${percent}%`;
                if (percent == 100) {
                    setTimeout(() => {
                        document.getElementById("loader").style.display = "none";
                        // document.getElementById("app").style.display = "block";
                    }, 500);
                }
            }
        });

        // Handle Start button
        document.getElementById('start-button').addEventListener('click', function() {
            audio.play();
            toggleBtn.textContent = '❚❚';
            document.getElementById('start-screen').classList.add('hidden');
            AOS.refreshHard();
        });
    </script>
    <script>
        AOS.init();
    </script>

</body>

</html>

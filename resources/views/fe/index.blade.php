<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Template Web dengan Library Lengkap</title>

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
            background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            height: 300px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>

    <div class="container py-5">
        <h1 class="text-center mb-5" data-aos="fade-down">Template Web Interaktif</h1>

        <!-- ==================================== -->
        <!-- ✅ Font Awesome Icon -->
        <!-- ==================================== -->
        <div class="text-center mb-5">
            <i class="fa-solid fa-star fa-3x text-warning"></i>
            <p class="mt-2">Contoh Ikon Font Awesome</p>
        </div>

        <!-- ==================================== -->
        <!-- ✅ AOS Example -->
        <!-- ==================================== -->
        <div class="text-center mb-5" data-aos="fade-up">
            <p>Animasi saat discroll (AOS)</p>
        </div>

        <!-- ==================================== -->
        <!-- ✅ SwiperJS Carousel -->
        <!-- ==================================== -->
        <div class="swiper mySwiper mb-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="https://picsum.photos/600/300?1" class="img-fluid"></div>
                <div class="swiper-slide"><img src="https://picsum.photos/600/300?2" class="img-fluid"></div>
                <div class="swiper-slide"><img src="https://picsum.photos/600/300?3" class="img-fluid"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <!-- ==================================== -->
        <!-- ✅ Parallax Effect -->
        <!-- ==================================== -->
        <div class="parallax-section mb-5">
            <h2 data-aos="zoom-in">Efek Parallax</h2>
        </div>

        <!-- ==================================== -->
        <!-- ✅ Masonry Grid -->
        <!-- ==================================== -->
        <div class="masonry mb-5">
            <img src="https://picsum.photos/300/200?1" alt="">
            <img src="https://picsum.photos/300/250?2" alt="">
            <img src="https://picsum.photos/300/300?3" alt="">
            <img src="https://picsum.photos/300/220?4" alt="">
            <img src="https://picsum.photos/300/280?5" alt="">
            <img src="https://picsum.photos/300/280?6" alt="">
            <img src="https://picsum.photos/300/280?7" alt="">
            <img src="https://picsum.photos/300/280?8" alt="">

        </div>
        `
        <div class="text-center mb-5" data-aos="fade-up">
            <p>Animasi saat discroll (AOS)</p>
        </div>
        <div class="text-center mb-5" data-aos="fade-up">
            <p>Animasi saat discroll (AOS)</p>
        </div>

        <!-- ==================================== -->
        <!-- ✅ Lightbox Gallery -->
        <!-- ==================================== -->
        <div class="text-center mb-5">
            <a href="https://picsum.photos/800/600?1" data-lightbox="gallery"><img src="https://picsum.photos/200/150?1"
                    class="me-2"></a>
            <a href="https://picsum.photos/800/600?2" data-lightbox="gallery"><img src="https://picsum.photos/200/150?2"
                    class="me-2"></a>
            <a href="https://picsum.photos/800/600?3" data-lightbox="gallery"><img src="https://picsum.photos/200/150?3"
                    class="me-2"></a>
            <p class="mt-2">Klik untuk melihat gambar dengan Lightbox</p>
        </div>

        <!-- ==================================== -->
        <!-- ✅ SweetAlert2 -->
        <!-- ==================================== -->
        <div class="text-center">
            <button onclick="showAlert()" class="btn btn-primary">Tampilkan Alert</button>
        </div>
    </div>

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
</body>

</html>

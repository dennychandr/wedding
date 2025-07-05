@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css" />
@endpush
<div class="section4 mx-5">
    <h1>Our Love Gallery </h1>
    <h2>It's always been you. When I look at you, I see past, present and future 🤍</h2>
    <div class="masonry mb-5" id="gallery">
        <a href="{{ asset('') }}assets/img/mansory/1.jpg">
            <img src="{{ asset('') }}assets/img/mansory/1.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/mansory/2.jpg">
            <img src="{{ asset('') }}assets/img/mansory/2.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/mansory/3.jpg">
            <img src="{{ asset('') }}assets/img/mansory/3.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/mansory/4.jpg">
            <img src="{{ asset('') }}assets/img/mansory/4.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/mansory/5.jpg">
            <img src="{{ asset('') }}assets/img/mansory/5.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/mansory/6.jpg">
            <img src="{{ asset('') }}assets/img/mansory/6.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/mansory/7.jpg">
            <img src="{{ asset('') }}assets/img/mansory/7.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/mansory/8.jpg">
            <img src="{{ asset('') }}assets/img/mansory/8.jpg" alt="">
        </a>
    </div>

</div>

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"></script>

    <!-- Init LightGallery -->
    <script>
        lightGallery(document.getElementById('gallery'), {
            plugins: [lgZoom],
            zoom: false,
            download: false,
        });
    </script>
@endpush

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css" />
@endpush
<div class="section4">
    <h1 class="title">Our Love Gallery </h1>
    <h2 class="sub-title">It's always been you. When I look at you, I see past, present and future 🤍</h2>
    <div class="masonry mb-5" id="gallery">
        <a href="{{ asset('') }}assets/img/section4/1.jpg">
            <img src="{{ asset('') }}assets/img/section4/1.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/section4/2.jpg">
            <img src="{{ asset('') }}assets/img/section4/2.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/section4/3.jpg">
            <img src="{{ asset('') }}assets/img/section4/3.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/section4/4.jpg">
            <img src="{{ asset('') }}assets/img/section4/4.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/section4/5.jpg">
            <img src="{{ asset('') }}assets/img/section4/5.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/section4/6.jpg">
            <img src="{{ asset('') }}assets/img/section4/6.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/section4/7.jpg">
            <img src="{{ asset('') }}assets/img/section4/7.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/section4/8.jpg">
            <img src="{{ asset('') }}assets/img/section4/8.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/section4/9.jpg">
            <img src="{{ asset('') }}assets/img/section4/9.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/section4/10.jpg">
            <img src="{{ asset('') }}assets/img/section4/10.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/section4/11.jpg">
            <img src="{{ asset('') }}assets/img/section4/11.jpg" alt="">
        </a>
        <a href="{{ asset('') }}assets/img/section4/12.jpg">
            <img src="{{ asset('') }}assets/img/section4/12.jpg" alt="">
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
    <script>
        const gallery = document.getElementById('gallery');

        gallery.addEventListener('click', () => {
            $.ajax({
                type: 'POST',
                url: "{{ route('home.a_b') }}",
                data: {
                    id: "{{ $guest->id }}"
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            });
        });
    </script>
@endpush

{{-- Full Image --}}
<div class="section99">
    <div class="full-screen-image">
        <picture>
            <source srcset="{{ asset('') }}assets/img/section1/1.jpg" media="(max-width: 768px)">
            <img src="{{ asset('') }}assets/img/section1/1.jpg" alt="Full Image" class="background-img" />
        </picture>
        <div class="centered-text">
            <div class="text-container">
                <p class="text-2" data-aos="zoom-in-up" data-aos-duration="2000">Denny & Fisia</p>
                <p class="text-1" data-aos="zoom-in-up" data-aos-duration="2000">Dear</p>
                <p class="text-3">{{ $guest->nama }}</p>
            </div>
            <button class="start-button" id="start-button">Open Invitation</button>
        </div>
    </div>
</div>


@push('js')
    <script>
        const openInvitation = document.getElementById('start-button');

        openInvitation.addEventListener('click', () => {
            $.ajax({
                type: 'POST',
                url: "{{ route('home.a_a') }}",
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

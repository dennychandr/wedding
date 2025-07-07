<div class="section8">
    <div class="desktop-only">
        <div class="row">
            <div class="col-6">
                <img src="{{ asset('') }}assets/img/background/4.png" alt="">
            </div>
            <div class="col-6">
                <img src="{{ asset('') }}assets/img/background/4.png" alt="">
            </div>
        </div>
        <div class="row h-0 m-0">
            <div class="box">
                <img src="{{ asset('') }}assets/img/section8/1.png" alt="" class="bunga1">
                <img src="{{ asset('') }}assets/img/section8/1.png" alt="" class="bunga2">
                <img src="{{ asset('') }}assets/img/section8/2.png" alt="" class="couple">
                <div class="layer">
                    <div>
                        <h1 class="title">RSVP</h1>
                        <h5 class="sub-title">Please help us prepare everything better by confirming your attendance at
                            our
                            real wedding event
                            with the following RSVP form:</h5>
                    </div>
                    <form id="rsvp-form" class="card-form">
                        @csrf
                        <input type="hidden" name="guest_id" value="{{ $guest->id }}">

                        <div class="input">
                            <input type="text" class="input-field" name="nama" value="{{ $guest->nama }}"
                                readonly />
                            <label class="input-label">Nama</label>
                        </div>

                        <div class="input">
                            <input type="text" class="input-field" name="jumlah_pax" value="{{ $guest->jumlah_pax }}"
                                readonly />
                            <label class="input-label">Jumlah Pax</label>
                        </div>

                        <div class="input">
                            <input type="text" class="input-field" name="status" value="{{ $guest->status }}"
                                readonly />
                            <label class="input-label">Status</label>
                        </div>

                        <div class="mt-5 box-radio">
                            <h5 class="sub-title">Pastikan data di atas sudah benar, dan mohon untuk melakukan RSVP
                                dengan
                                memilih pada
                                pilihan di bawah ini. Jawaban dapat diubah maksimal tanggal 15 Juli 2025</h5>
                            <label class="labelRadio">
                                <input type="radio" name="jawaban" value="Hadir Pemberkatan dan Resepsi">
                                <span class="truncate">Ya, saya akan hadir pada Pemberkatan dan Resepsi</span>
                            </label>
                            <label class="labelRadio">
                                <input type="radio" name="jawaban" value="Hadir Resepsi">
                                <span class="truncate">Ya, saya akan hadir pada Resepsi saja</span>
                            </label>
                            <label class="labelRadio">
                                <input type="radio" name="jawaban" value="Tidak Hadir">
                                <span class="truncate">Tidak, saya tidak dapat hadir</span>
                            </label>
                        </div>
                        <div class="d-grid gap-2">
                            <button id="submit-rsvp-btn" type="submit">RSVP Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-only">
        <div class="row m-0">
            <div class="col-6 p-0">
                <img src="{{ asset('') }}assets/img/background/4.png" alt="">
            </div>
            <div class="col-6 p-0">
                <img src="{{ asset('') }}assets/img/background/4.png" alt="">
            </div>
        </div>
        <div class="row h-0 m-0">
            <div class="box">
                <img src="{{ asset('') }}assets/img/section8/1.png" alt="" class="bunga1">
                <img src="{{ asset('') }}assets/img/section8/1.png" alt="" class="bunga2">
                <img src="{{ asset('') }}assets/img/section8/2.png" alt="" class="couple">
                <div class="layer">
                    <div>
                        <h1 class="title">RSVP</h1>
                        <h5 class="sub-title">Please help us prepare everything better by confirming your attendance at
                            our
                            real wedding event
                            with the following RSVP form:</h5>
                    </div>
                    <form id="rsvp-form-mobile" class="card-form">
                        @csrf
                        <input type="hidden" name="guest_id" value="{{ $guest->id }}">

                        <div class="input">
                            <input type="text" class="input-field" name="nama" value="{{ $guest->nama }}"
                                readonly />
                            <label class="input-label">Nama</label>
                        </div>

                        <div class="input">
                            <input type="text" class="input-field" name="jumlah_pax"
                                value="{{ $guest->jumlah_pax }}" readonly />
                            <label class="input-label">Jumlah Pax</label>
                        </div>

                        <div class="input">
                            <input type="text" class="input-field" name="status" value="{{ $guest->status }}"
                                readonly />
                            <label class="input-label">Status</label>
                        </div>

                        <div class="mt-3 box-radio">
                            <h5 class="sub-title">Pastikan data di atas sudah benar, dan mohon untuk melakukan RSVP
                                dengan
                                memilih pada
                                pilihan di bawah ini. Jawaban dapat diubah maksimal tanggal 15 Juli 2025</h5>
                            <label class="labelRadio">
                                <input type="radio" name="jawaban" value="Hadir Pemberkatan dan Resepsi">
                                <span class="truncate">Ya, saya akan hadir pada Pemberkatan dan Resepsi</span>
                            </label>
                            <label class="labelRadio">
                                <input type="radio" name="jawaban" value="Hadir Resepsi">
                                <span class="truncate">Ya, saya akan hadir pada Resepsi saja</span>
                            </label>
                            <label class="labelRadio">
                                <input type="radio" name="jawaban" value="Tidak Hadir">
                                <span class="truncate">Tidak, saya tidak dapat hadir</span>
                            </label>
                        </div>
                        <div class="d-grid gap-2">
                            <button id="submit-rsvp-btn" type="submit">RSVP Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script src="{{ asset('') }}assets/be/vendor/jquery/dist/jquery.min.js"></script>

    <script>
        $('#rsvp-form').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: "{{ route('home.simpan_status') }}",
                data: $(this).serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    Swal.fire(
                        'Berhasil!',
                        'Terima kasih sudah melakukan konfirmasi RSVP',
                        'success'
                    );
                    $('#rsvp-form input[name="status"]').val(response.status);
                },
                error: function(xhr) {
                    Swal.fire(
                        'Peringatan!',
                        'Harap memilih jawaban konfirmasi.',
                        'warning'
                    );
                    // alert('Harap pilih jawaban konfirmasi.');
                }
            });
        });
        $('#rsvp-form-mobile').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: "{{ route('home.simpan_status') }}",
                data: $(this).serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    Swal.fire(
                        'Berhasil!',
                        'Terima kasih sudah melakukan konfirmasi RSVP',
                        'success'
                    );
                    $('#rsvp-form-mobile input[name="status"]').val(response.status);
                },
                error: function(xhr) {
                    Swal.fire(
                        'Peringatan!',
                        'Harap memilih jawaban konfirmasi.',
                        'warning'
                    );
                    // alert('Harap pilih jawaban konfirmasi.');
                }
            });
        });
    </script>
@endpush

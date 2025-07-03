<div class="section7 my-5">
    <div class="container bg-secondary">
        <div class="row mb-3 p-3">
            <div class="col-6">
                <div>
                    <h1>RSVP</h1>
                </div>
                <form id="rsvp-form">
                    @csrf
                    <input type="hidden" name="guest_id" value="{{ $guest->id }}">
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 150px;">Nama</span>
                        <input type="text" class="form-control" name="nama" placeholder="Nama"
                            value="{{ $guest->nama }}" readonly>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 150px;">Jumlah Pax</span>
                        <input type="text" class="form-control" name="jumlah_pax" placeholder="Jumlah Pax"
                            value="{{ $guest->jumlah_pax }}" readonly>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 150px;">Status</span>
                        <input type="text"
                            class="form-control text-white
                            @if ($guest->status == 'Hadir') bg-success
                            @elseif ($guest->status == 'Tidak Hadir') bg-danger 
                            @else bg-secondary @endif
                        "
                            name="status" placeholder="Status" value="{{ $guest->status }}" readonly>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">Konfirmasi Kehadiran</div>
                        <div class="card-body text-start">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban" value="Hadir"
                                    id="jawabanYa">
                                <label class="form-check-label" for="jawabanYa">
                                    Ya, saya akan hadir
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban" value="Tidak Hadir"
                                    id="jawabanTidak">
                                <label class="form-check-label" for="jawabanTidak">
                                    Tidak, saya tidak dapat hadir
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Reservasi Sekarang</button>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <div>
                    <h1>WEDDING GIFT</h1>
                </div>
                Tanpa Mengurangi Rasa Hormat,

                Bagi Anda Yang Ingin Memberikan Tanda Kasih

                Untuk Mempelai, Dapat Melalui Virtual Account / E-Wallet
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
                    // Reset textarea
                    $('#rsvp-form input[name="status"]').val(response.status);
                    if (response.status == "Hadir") {
                        $('#rsvp-form input[name="status"]').removeClass('bg-danger').addClass(
                            'bg-success');
                    } else if (response.status == "Tidak Hadir") {
                        $('#rsvp-form input[name="status"]').removeClass('bg-success').addClass(
                            'bg-danger');
                    }
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

<div class="section7">
    <div class="card card-outer">
        <div class="container">
            <div class="wish-section">
                <div class="form-section p-3">
                    <h2 class="title">Drop Your Sweet Wishes Here!</h2>
                    <h3>You can send more than one wish</h3>
                    <ul class="no-bullet">
                        <form id="guest-form">
                            @csrf
                            <input type="hidden" name="guest_id" value="{{ $guest->id }}">

                            <li>
                                <label for="nama"></label>
                                <input type="text" class="input-fields" id="nama" name="nama"
                                    placeholder="Nama" value="{{ $guest->nama }}" readonly />
                            </li>

                            <li>
                                <label for="isi_pesan"></label>
                                <textarea class="input-fields" id="isi_pesan" name="isi_pesan"
                                    placeholder="Got a message for the happy couple? Write it here!" rows="5"></textarea>
                            </li>

                            <li id="center-btn">
                                <input type="submit" id="submit-wish-btn" alt="Send Your Wish!"
                                    value="Send Your Wish!">
                            </li>
                        </form>
                    </ul>
                </div>
            </div>
            <div class="wish-section mt-3 list-wish">
                <h2 class="title mt-3">Your Kind Wishes</h2>
                <ul class="cards" id="guest-messages">
                    @foreach ($guestMessages as $guestMessage)
                        <li>
                            <div class="card">
                                <div class="card__description h-100">
                                    <p class="card__text">{!! nl2br(e($guestMessage->isi_pesan)) !!}</p>
                                </div>
                                <div class="card__overlay">
                                    <div class="card__header">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                        <img class="card__thumb"
                                            src="{{ asset('') }}assets/img/guest/{{ $guestMessage->guest->jenis_tamu }}.png"
                                            alt="" />
                                        <div class="card__header-text">
                                            <h3 class="card__title text-start">{{ $guestMessage->guest->nama }}
                                            </h3>
                                            <span class="card__status">
                                                {{ \Carbon\Carbon::parse($guestMessage->created_at)->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script src="{{ asset('') }}assets/be/vendor/jquery/dist/jquery.min.js"></script>
    <script>
        $('#guest-form').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: "{{ route('home.simpan_pesan') }}",
                data: $(this).serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // Append to the list
                    $('#guest-messages').prepend(`

                        <li>
                            <div class="card">
                                <div class="card__description h-100">
                                    <p class="card__text">${response.pesan.replace(/\n/g, '<br>')}</p>
                                </div>
                                <div class="card__overlay">
                                    <div class="card__header">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                        <img class="card__thumb" src="/assets/img/guest/${response.jenis_tamu}.png" alt="" />
                                        <div class="card__header-text">
                                            <h3 class="card__title text-start">${response.nama} </h3>
                                            <span class="card__status">a few seconds ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                `);

                    // Reset textarea
                    $('#guest-form textarea[name="isi_pesan"]').val('');
                },
                error: function(xhr) {
                    alert(xhr.responseJSON?.message || 'Terjadi kesalahan.');
                    console.error(xhr);
                }
            });
        });
    </script>
@endpush

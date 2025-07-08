<div class="section9">
    <div class="card9 card-outer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="gift-section h-100">
                        <div class="p-3">
                            <h2 class="title">Wedding Gift</h2>
                            <h3>Tanpa mengurangi rasa hormat, bagi Anda yang berhalangan hadir namun tetap ingin
                                memberikan tanda kasih untuk kami,
                                dapat disampaikan melalui rekening yang telah kami sediakan.</h3>
                        </div>
                        <div class="card m-3">
                            <div class="card-body rekenings">
                                <h2>Mempelai Pria</h2>
                                <div class="bank">BCA (Bank Central Asia)</div>
                                <div class="account">
                                    <span id="rekeningD">1200338011</span>
                                    <i class="fa fa-files-o" onclick="copyRekeningD()" title="Salin"></i>
                                </div>
                                <div class="copied" id="copiedTextD">Nomor rekening disalin!</div>
                                <div class="name">Denny Chandra Wijaya</div>
                            </div>
                        </div>
                        <div class="card m-3">
                            <div class="card-body rekenings">
                                <h2>Mempelai Wanita</h2>
                                <div class="bank">BCA (Bank Central Asia)</div>
                                <div class="account">
                                    <span id="rekeningF">1200338011</span>
                                    <i class="fa fa-files-o" onclick="copyRekeningF()" title="Salin"></i>
                                </div>
                                <div class="copied" id="copiedTextF">Nomor rekening disalin!</div>
                                <div class="name">Fisia Niti Atmadja</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="drive-section h-100">
                        <div class="p-3">
                            <h2 class="title">Google Drive Link</h2>
                            <h3 class="mt-3 ms-3 text-start">Kami sangat senang atas kehadiran Anda.
                                <br>Jika berkenan, kami ingin mengajak Anda untuk ikut merekam momen acara dari sudut
                                pandang kamera HP masing-masing.
                                <br>Hasil rekamannya bisa diunggah ke Google Drive yang telah kami sediakan.
                                <br>Dengan begitu, kami bisa mengenang momen spesial ini dari berbagai sudut pandang
                                yang
                                berbeda.
                                <br>
                            </h3>

                            <div class="card m-3">
                                <div class="card-body">
                                    <h5><a href="{{ $guest->link_drive }}" target="_blank">{{ $guest->link_drive }}</a>
                                    </h5>
                                </div>
                            </div>
                            <h3 class="mt-3 ms-3 text-start">
                                Satu link hanya untuk satu undangan, sehingga video yang Anda unggah hanya dapat
                                dilihat oleh kami, mempelai.
                                <br>
                                Kami sangat menghargai setiap momen yang Anda abadikan, karena itu akan menjadi kenangan
                                berharga dari sudut pandang Anda.
                                <br><br>
                                Terima kasih banyak atas partisipasinya!
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script>
        function copyRekeningD() {
            const rekening = document.getElementById("rekeningD").innerText;
            navigator.clipboard.writeText(rekening).then(() => {
                const copied = document.getElementById("copiedTextD");
                copied.style.display = 'block';
                setTimeout(() => {
                    copied.style.display = 'none';
                }, 2000);
            });
        }

        function copyRekeningF() {
            const rekening = document.getElementById("rekeningF").innerText;
            navigator.clipboard.writeText(rekening).then(() => {
                const copied = document.getElementById("copiedTextF");
                copied.style.display = 'block';
                setTimeout(() => {
                    copied.style.display = 'none';
                }, 2000);
            });
        }
    </script>
@endpush

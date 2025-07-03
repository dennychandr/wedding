<div class="section3">
    <section class="timeline3">
        <div class="container">
            <!--     ITEM 1  -->
            <div class="timeline3-item">
                <div class="timeline3-img"></div>
                <div class="timeline3-content js--fadeInLeft timeline3-card">
                    <div class="timeline3-img-header d-flex justify-content-center">
                        <img src="{{ asset('') }}assets/img/section3/1.jpg" class="timeline-img" alt="Step 1" />
                    </div>
                    {{-- <div class="date">Chapter 1 - First Meet</div> --}}
                    <blockquote class="pb-3">
                        <h5>First Meet</h5>
                        <p>Once upon a time, there was a girl and a boy. Awalnya mereka cuma temen biasa, temen pernah
                            satu
                            bangku, pernah satu kelompok buat kerja tugas, dan cuma temen sekelas. Tapi itu semua
                            berubah, dari
                            temenan ternyata Denny jatuh cinta sama Fisia hehehe Awalnya cuma chat2an, terus lanjut
                            ngajak kerja
                            PR bareng, and long short story, they are together wkwkwkwk It was a very beautiful time,
                            love story
                            in high school never gets wrong</p>
                    </blockquote>
                </div>
            </div>

            <!--     ITEM 2  -->
            <div class="timeline3-item">
                <div class="timeline3-img"></div>
                <div class="timeline3-content js--fadeInRight timeline3-card">
                    <div class="timeline3-img-header d-flex justify-content-center">
                        <img src="{{ asset('') }}assets/img/section3/2.jpg" class="timeline-img" alt="Step 2" />
                    </div>
                    {{-- <div class="date">Chapter 2 - Growing Together</div> --}}
                    <blockquote class="pb-3">
                        <h5>Growing Together</h5>
                        <p>Then, they grow together. Dari SMA, terus masuk kuliah. Yang dulunya childish, makin lama
                            makin wise.
                            Hold each other in facing the world, mulai dari saling bantu kerjain tugas (mostly Denny sih
                            yg
                            bantuin tugas kuliah farmasi fisia yg seabrek wkwk), exploring many places, and more
                            importantly,
                            growing more in Jesus. Through every storm and rainbow, their commitment grows stronger.</p>
                    </blockquote>
                </div>
            </div>
            <!--     ITEM 3  -->
            <div class="timeline3-item">
                <div class="timeline3-img"></div>
                <div class="timeline3-content js--fadeInLeft timeline3-card">
                    <div class="timeline3-img-header d-flex justify-content-center">
                        <img src="{{ asset('') }}assets/img/section3/3.jpg" class="timeline-img" alt="Step 3" />
                    </div>
                    {{-- <div class="date">Chapter 1 - First Meet</div> --}}
                    <blockquote class="pb-3">
                        <h5>Proposed & Enganged</h5>
                        <p>Will the story continue? Yes, after 9 years together, finally Denny propose Fisia with a very
                            beautiful way, under the beautiful sky of Bali and eventually they got enganged.</p>
                    </blockquote>
                </div>
            </div>

            <!--     ITEM 2  -->
            <div class="timeline3-item">
                <div class="timeline3-img"></div>
                <div class="timeline3-content js--fadeInRight timeline3-card">
                    <div class="timeline3-img-header d-flex justify-content-center">
                        <img src="{{ asset('') }}assets/img/section3/2.jpg" class="timeline-img" alt="Step 4" />
                    </div>
                    {{-- <div class="date">Chapter 2 - Growing Together</div> --}}
                    <blockquote class="pb-3">
                        <h5>Welcoming New Journey Forever</h5>
                        <p>Time flies so fast. Ngga terasa uda 10 tahun mereka bareng. And now they are ready to enter
                            the next
                            chapter of their life, which is Holy Marriage, to love one another more and their marriage
                            may
                            become a blessing.</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
</div>

@push('js')
    <script>
        $(function() {

            window.sr = ScrollReveal();

            if ($(window).width() < 768) {

                if ($('.timeline3-content').hasClass('js--fadeInLeft')) {
                    $('.timeline3-content').removeClass('js--fadeInLeft').addClass('js--fadeInRight');
                }

                sr.reveal('.js--fadeInRight', {
                    origin: 'right',
                    distance: '300px',
                    easing: 'ease-in-out',
                    duration: 800,
                });

            } else {

                sr.reveal('.js--fadeInLeft', {
                    origin: 'left',
                    distance: '300px',
                    easing: 'ease-in-out',
                    duration: 800,
                });

                sr.reveal('.js--fadeInRight', {
                    origin: 'right',
                    distance: '300px',
                    easing: 'ease-in-out',
                    duration: 800,
                });

            }

            sr.reveal('.js--fadeInLeft', {
                origin: 'left',
                distance: '300px',
                easing: 'ease-in-out',
                duration: 800,
            });

            sr.reveal('.js--fadeInRight', {
                origin: 'right',
                distance: '300px',
                easing: 'ease-in-out',
                duration: 800,
            });


        });
    </script>
@endpush

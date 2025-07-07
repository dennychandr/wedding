{{-- <div class="scroll-progress" id="scrollProgress">0%</div> --}}
{{-- Full Image --}}
<div class="section3">
    <h1 class="title">Story of Our Journey</h1>
    <div class="timeline-container" id="timeline">
        <div class="timeline-line" id="timelineLine"></div>

        <!-- Reusable items -->
        <div class="timeline-item px-3" data-aos="fade-up">
            <div class="timeline-item-left">
                <img src="{{ asset('') }}assets/img/section3/1.jpg" class="timeline-img" alt="Step 1" />
            </div>
            <div class="timeline-dot" data-dot></div>
            <div class="timeline-date">Chapter 1
            </div>
            <div class="timeline-item-right">
                <div class="timeline-content">
                    <h5>First Meet</h5>
                    <p>Once upon a time, there was a girl and a boy. Awalnya mereka cuma temen biasa, temen pernah satu
                        bangku, pernah satu kelompok buat kerja tugas, dan cuma temen sekelas. Tapi itu semua berubah,
                        dari
                        temenan ternyata Denny jatuh cinta sama Fisia hehehe Awalnya cuma chat2an, terus lanjut ngajak
                        kerja
                        PR bareng, and long short story, they are together wkwkwkwk It was a very beautiful time, love
                        story
                        in high school never gets wrong</p>
                </div>
            </div>
        </div>

        <div class="timeline-item flex-row-reverse px-3" data-aos="fade-up">
            <div class="timeline-item-left d-flex justify-content-end">
                <img src="{{ asset('') }}assets/img/section3/2.jpg" class="timeline-img" alt="Step 2" />
            </div>
            <div class="timeline-dot" data-dot></div>
            <div class="timeline-date">Chapter 2</div>
            <div class="timeline-item-right">
                <div class="timeline-content">
                    <h5>Growing Together</h5>
                    <p>Then, they grow together. Dari SMA, terus masuk kuliah. Yang dulunya childish, makin lama makin
                        wise.
                        Hold each other in facing the world, mulai dari saling bantu kerjain tugas (mostly Denny sih yg
                        bantuin tugas kuliah farmasi fisia yg seabrek wkwk), exploring many places, and more
                        importantly,
                        growing more in Jesus. Through every storm and rainbow, their commitment grows stronger.</p>
                </div>
            </div>
        </div>

        <div class="timeline-item px-3" data-aos="fade-up">
            <div class="timeline-item-left">
                <img src="{{ asset('') }}assets/img/section3/3.jpg" class="timeline-img" alt="Step 3" />
            </div>
            <div class="timeline-dot" data-dot></div>
            <div class="timeline-date">Chapter 3</div>
            <div class="timeline-item-right">
                <div class="timeline-content">
                    <h5>Proposed & Enganged</h5>
                    <p>Will the story continue? Yes, after 9 years together, finally Denny propose Fisia with a very
                        beautiful way, under the beautiful sky of Bali and eventually they got enganged.</p>
                </div>
            </div>
        </div>

        <div class="timeline-item flex-row-reverse px-3" data-aos="fade-up">
            <div class="timeline-item-left d-flex justify-content-end">
                <img src="{{ asset('') }}assets/img/mansory/4.jpg" class="timeline-img" alt="Step 4" />
            </div>
            <div class="timeline-dot" data-dot></div>
            <div class="timeline-date">Chapter 4</div>
            <div class="timeline-item-right">
                <div class="timeline-content">
                    <h5>Welcoming New Journey Forever</h5>
                    <p>Time flies so fast. Ngga terasa uda 10 tahun mereka bareng. And now they are ready to enter the
                        next
                        chapter of their life, which is Holy Marriage, to love one another more and their marriage may
                        become a blessing.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        // AOS.init();

        const line = document.getElementById('timelineLine');
        const dots = document.querySelectorAll('[data-dot]');
        // const scrollProgress = document.getElementById('scrollProgress');
        const timeline = document.getElementById('timeline');

        function updateTimelineLine() {
            const timelineTop = timeline.offsetTop;
            const scrollY = window.scrollY + window.innerHeight / 2;
            const timelineHeight = timeline.scrollHeight;

            const maxHeight = Math.min(scrollY - timelineTop, timelineHeight);
            line.style.height = Math.max(0, maxHeight) + 'px';

            const percent = Math.min(100, Math.max(0, Math.round((maxHeight / timelineHeight) * 100)));
            // scrollProgress.innerText = percent + '%';
        }

        window.addEventListener('scroll', updateTimelineLine);
        window.addEventListener('load', updateTimelineLine);
    </script>
@endpush

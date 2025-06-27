{{-- <div class="scroll-progress" id="scrollProgress">0%</div> --}}
{{-- Full Image --}}
<div class="section3 timeline-container" id="timeline">
    <div class="timeline-line" id="timelineLine"></div>

    <!-- Reusable items -->
    <div class="timeline-item" data-aos="fade-up">
        <div class="timeline-item-left">
            <img src="{{ asset('') }}assets/img/denny/banner.jpg" class="timeline-img" alt="Step 1" />
        </div>
        <div class="timeline-dot" data-dot></div>
        <div class="timeline-date">January
            <br>
            2025
        </div>
        <div class="timeline-item-right">
            <div class="timeline-content">
                <h5>Planning</h5>
                <p>Kick-off and define objectives clearly.</p>
            </div>
        </div>
    </div>

    <div class="timeline-item flex-row-reverse" data-aos="fade-up">
        <div class="timeline-item-left">
            <img src="{{ asset('') }}assets/img/denny/banner.jpg" class="timeline-img" alt="Step 2" />
        </div>
        <div class="timeline-dot" data-dot></div>
        <div class="timeline-date">Step 2</div>
        <div class="timeline-item-right">
            <div class="timeline-content">
                <h5>Design</h5>
                <p>Create mockups and UI flows.</p>
            </div>
        </div>
    </div>

    <div class="timeline-item" data-aos="fade-up">
        <div class="timeline-item-left">
            <img src="{{ asset('') }}assets/img/denny/banner.jpg" class="timeline-img" alt="Step 3" />
        </div>
        <div class="timeline-dot" data-dot></div>
        <div class="timeline-date">Step 3</div>
        <div class="timeline-item-right">
            <div class="timeline-content">
                <h5>Development</h5>
                <p>Write and test the codebase.</p>
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

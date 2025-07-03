<div class="section6">
    <div class="parallax-section mb-5">
        <div class="row mx-5">
            <div class=" text-white d-flex justify-content-center gap-3 p-3">
                <div class="d-flex flex-column align-items-center">
                    <div id="countdown-day" class="fs-1 fw-bold">00</div>
                    <div class="fs-5">D</div>
                </div>

                <div class="d-flex flex-column align-items-center">
                    <div id="countdown-hour" class="fs-1 fw-bold">00</div>
                    <div class="fs-5">H</div>
                </div>

                <div class="d-flex flex-column align-items-center">
                    <div id="countdown-minute" class="fs-1 fw-bold">00</div>
                    <div class="fs-5">M</div>
                </div>

                <div class="d-flex flex-column align-items-center">
                    <div id="countdown-second" class="fs-1 fw-bold">00</div>
                    <div class="fs-5">S</div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/dayjs@1/dayjs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dayjs@1/plugin/duration.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dayjs@1/plugin/relativeTime.js"></script>
    <script>
        // Extend with duration plugin
        dayjs.extend(dayjs_plugin_duration);

        const targetTime = dayjs('2025-08-02T00:00:00'); // Target date
        const countdownDay = document.getElementById('countdown-day');
        const countdownHour = document.getElementById('countdown-hour');
        const countdownMinute = document.getElementById('countdown-minute');
        const countdownSecond = document.getElementById('countdown-second');

        function updateCountdown() {
            const now = dayjs();
            const diff = targetTime.diff(now);

            if (diff <= 0) {
                countdownEl.textContent = '00 D 00 H 00 M 00 S';
                clearInterval(interval);
                return;
            }

            const duration = dayjs.duration(diff);
            const days = String(Math.floor(duration.asDays())).padStart(2, '0');
            const hours = String(duration.hours()).padStart(2, '0');
            const minutes = String(duration.minutes()).padStart(2, '0');
            const seconds = String(duration.seconds()).padStart(2, '0');

            countdownDay.textContent = `${days}`;
            countdownHour.textContent = `${hours}`;
            countdownMinute.textContent = `${minutes}`;
            countdownSecond.textContent = `${seconds}`;
        }

        const interval = setInterval(updateCountdown, 1000);
        updateCountdown(); // Run once on load
    </script>
@endpush

<div class="section10">
    <div class="pb-5 countdown-section">
        <h1>Counting down to foverer begins now!</h1>
        <h2>02 Agustus 2025</h2>
        <div class="text-white d-flex justify-content-center">
            <div class="d-flex flex-column justify-content-center align-items-center cd-margin cd-days">
                <div id="countdown-day" class="cd-text-angka">00</div>
                <div class="cd-text-huruf">DAYS</div>
            </div>

            <div class="d-flex flex-column justify-content-center align-items-center cd-margin cd-hours">
                <div id="countdown-hour" class="cd-text-angka">00</div>
                <div class="cd-text-huruf">HOURS</div>
            </div>

            <div class="d-flex flex-column justify-content-center align-items-center cd-margin cd-minutes">
                <div id="countdown-minute" class="cd-text-angka">00</div>
                <div class="cd-text-huruf">MINUTES</div>
            </div>

            <div class="d-flex flex-column justify-content-center align-items-center cd-margin cd-seconds">
                <div id="countdown-second" class="cd-text-angka">00</div>
                <div class="cd-text-huruf">SECONDS</div>
            </div>
        </div>
    </div>
</div>
@push('js')
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

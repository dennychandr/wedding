<div class="divider-top-section10">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100">
        <path
            d="M0 0v47.6l5-2c1 0 11 3 12 0 2 3 6-3 6 0 0-4 12 3 12 0 0 3 15-1 17 0 2-2 5-1 6 0 0-2 6 2 6 0s2 4 4 0c5 2 12-3 16 0 2-2 4-3 4 0 0 2 6-1 6 0 1 4 15-2 17 0h7c0 1 3-3 6 0h17c2 2 3 1 6 0h6c1-2 21-1 24 0 2 1 4 2 6 0 0-1 22 4 24 0 0 0 5-3 5 0 2-2 10 2 12 0 2 2 6 1 6 0 2 3 4-2 6 0 1 0 25-2 25 1l10-1c3 1 6 6 7 0 1 5 4-2 6 0 2-2 4 3 5 0h12c6 1 36 2 36 0 0 2 3 0 6 0h6c5-2 7 4 11 0 2 0 15 2 17 0h13c3-4 5 1 7 0h29c0-3 6 0 6 0h5c0 2 16-1 18 0 1 4 9-1 12 0s6-2 6 0c8-2 3 4 13 0h10c3 4 19 1 19 0 2 0 21 1 23-1 1 4 3-1 6 1 1 2 11-1 12-1 3 3 9 0 12 1 3-4 6 1 6 0h6c0-3 5 1 6-1 0 3 2 1 4 1 3 4 10-1 13 0 3-2 6-1 6 0 2 2 2 0 6 0 1-2 6 2 6 0 2 0 4 5 6 0h18c2 3 4 1 6 0l6-1c3 2 12 3 17 1 14 3 18 1 24 0 2-1 3 3 5 0 6 2 10-1 16 0 1 3 6 0 9 0 0-2 3 2 5 0 6-6 8 7 13 0 0-2 5 2 5 0 3 3 10 0 10 0 1 2 5-2 8 0 3-1 8 3 12 0h6c2 1 10 4 12 0h6c1-1 5 2 6 0 1 2 4-1 6 0 0-2 5 3 6-1 2 1 6 5 5 1 1 1 3-2 6 0 2-1 5 3 6 0 0 1 6 2 6 0 2 3 4-4 6 0 0-2 3 2 6 0 3 0 6 3 6 0 5 3 8-1 13 0 3-4 6 1 6 0h5c0-1 9 2 12 0 1-1 9 3 11 0h6c2 2 4 4 7 0 3 2 5-4 5-1 10 4 15-2 18 2 0-1 6 2 6-2 0 0 6-2 6 1 1 6 12 2 12 0 1 3 4-3 7 2 2-2 5 2 5 0 1 5 4-5 6 0 2-1 4 2 6 0 1 3 1 0 5 0V0H0Z"
            fill="#D7BDCA"></path>
    </svg>
</div>
<div class="section10">
    <div class="pb-5 countdown-section">
        <h1>Counting Down to Foverer Begins Now!</h1>
        <h2>02 Agustus 2025</h2>
        <div class="text-white d-flex justify-content-center timer">
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
<div class="divider-bottom-section10">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100">
        <g fill="#D7BDCA">
            <path d="M0 0v100l500-48 500 48V0H0z" opacity=".5"></path>
            <path d="M0 0h1000v52H0z" opacity=".5"></path>
            <path d="M0 0v4l500 48 500-48V0H0z" opacity=".5"></path>
            <path d="M0 0v4l500 48 500-48V0H0z"></path>
        </g>
    </svg>
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

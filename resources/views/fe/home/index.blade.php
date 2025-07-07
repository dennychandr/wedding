@extends('fe.layouts.app')


@section('container')
    <audio id="backgroundMusic" loop>
        <source src="{{ asset('') }}assets/audio/music.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <div>
        @include('fe.home.section1')
        @include('fe.home.section2')
        @include('fe.home.section5')
        @include('fe.home.section3')
        @include('fe.home.section10')
        @include('fe.home.section6')
        @include('fe.home.section4')
        @include('fe.home.section7')
        @include('fe.home.section8')
        @include('fe.home.section11')
        @include('fe.home.section12')
    </div>
    <div id="music-control">
        <button id="music-toggle">►</button>
    </div>
@endsection

@push('js')
    <script>
        const audio = document.getElementById('backgroundMusic');
        const toggleBtn = document.getElementById('music-toggle');

        let isPlaying = false;

        toggleBtn.addEventListener('click', () => {
            if (isPlaying) {
                audio.pause();
                toggleBtn.textContent = '►';
            } else {
                audio.play();
                toggleBtn.textContent = '❚❚';
            }
            isPlaying = !isPlaying;
        });
    </script>
@endpush

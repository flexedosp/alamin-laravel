@extends('layouts.main')

@section('Styles')
    <link rel="stylesheet" href="{{ asset('css/user/platform.css') }}">
@endsection

@section('Scripts')
    <script src="{{ asset('js/user/platform.js') }}"></script>
@endsection

@section('content')
    <div class="mt-5">
        <div class="headerImg">
            <img src="{{ asset('assets/images/header~1.png') }}" alt="">
            <p data-aos="fade-left">Platform</p>
        </div>
        <div class="container py-5" data-aos="fade-up">
            <p class="fs-1 fw-bold mb-4">Platform - Platform Masjid Al-Amin</p>
            <div class="d-flex justify-content-center">
                <div id="platformMasjidCardGroup">
                    <div class="platformMasjidCard" data-aos="flip-right" data-aos-delay="900">
                        <div class="d-flex flex-column align-items-center">
                            <div class="platformMasjidIcon">
                                <img src="{{ asset('assets/icons/quran.svg') }}" alt="Icon Platform Masjid">
                            </div>
                            <p class="platformMasjidTitleCard">Al-Quran</p>
                            <p class="platformMasjidTextCard">Pelajari Kitab Suci Umat Islam</p>
                        </div>
                        <a href="{{ route('platform.quran') }}" class="btn-alamin mt-3 mt-lg-0 platformMasjidButton">
                            Akses Aplikasi
                        </a>
                    </div>
                    <div class="platformMasjidCard" data-aos="flip-right" data-aos-delay="900">
                        <div class="d-flex flex-column align-items-center">
                            <div class="platformMasjidIcon">
                                <img src="{{ asset('assets/icons/hadith.svg') }}" alt="Icon Platform Masjid">
                            </div>
                            <p class="platformMasjidTitleCard">Hadits</p>
                            <p class="platformMasjidTextCard">Pelajari Sunnah-Sunnah yang diajarkan Nabi</p>
                        </div>
                        <a href="{{ route('platform.hadits') }}" class="btn-alamin mt-3 mt-lg-0 platformMasjidButton">
                            Akses Aplikasi
                        </a>
                    </div>
                    <div class="platformMasjidCard" data-aos="flip-right" data-aos-delay="900">
                        <div class="d-flex flex-column align-items-center">
                            <div class="platformMasjidIcon">
                                <img src="{{ asset('assets/icons/mosque_tower.svg') }}" alt="Icon Platform Masjid">
                            </div>
                            <p class="platformMasjidTitleCard">Jadwal Shalat</p>
                            <p class="platformMasjidTextCard">Ketahui waktu ibadah umat islam <br> (Khusus Jakarta &
                                Sekitar)
                            </p>
                        </div>
                        <button class="btn btn-alamin underDevBtn mt-3 mt-lg-0 platformMasjidButton">
                            Akses Aplikasi
                        </button>
                        {{-- <a href="{{ route('platform.quran') }}" class="btn-alamin platformMasjidButton">
                            Akses Aplikasi
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
            <img src="{{ asset('assets/images/quran-header.jpg') }}" alt="Header Image">
            <p data-aos="fade-left">{{ $haditsData['data']['name'] }}</p>
        </div>

        <div class="container py-5">
            <div class="d-flex justify-content-center">
                <a href="{{ route('platform.hadits') }}" class="btn-alamin mb-4" data-aos="fade-up"> Kembali ke Daftar
                    Hadits</a>
            </div>
            <div id="navUpHadits" class="d-flex justify-content-between w-100" data-aos="fade-up">
                <a href="{{ $hasPrev == 'true' ? route('platform.listHadits', ['id' => $haditsData['data']['id'], 'number1' => $prevStart, 'number2' => $prevEnd]) : 'javascript:void(0)' }}"
                    class="btn-alamin {{ $hasPrev == 'true' ? '' : 'navPageLimit' }}"><span
                        class="d-none d-lg-block">Sebelumnya</span><span class="d-lg-none d-block fs-6"><i
                            class="bi bi-arrow-left-circle-fill"></i></span></a>
                <div class="middleInfoPage d-flex flex-lg-row flex-column align-items-center">
                    <span>Total : {{ $haditsData['data']['available'] }}
                    </span>
                    <span class="mx-2 d-lg-flex d-none">
                        |
                    </span>
                    <span>
                        Halaman :
                        {{ $currentPage }} / {{ $totalPages }}
                    </span>
                    <span class="mx-2 d-lg-flex d-none">
                        |
                    </span>
                    <span>
                        Jumlah Hadits Per Halaman :
                        {{ $haditsData['data']['requested'] }}
                    </span>
                </div>
                <a href="{{ $hasNext == 'true' ? route('platform.listHadits', ['id' => $haditsData['data']['id'], 'number1' => $nextStart, 'number2' => $nextEnd]) : 'javascript:void(0)' }}"
                    class="btn-alamin {{ $hasNext == 'true' ? '' : 'navPageLimit' }}"><span
                        class="d-none d-lg-block">Berikutnya</span><span class="d-lg-none d-block fs-6"><i
                            class="bi bi-arrow-right-circle-fill"></i></a>
            </div>
            <div class="cardHaditsGroup mt-4" data-aos="fade-up">
                @if ($haditsData && isset($haditsData['data']))
                    @foreach ($haditsData['data']['hadiths'] as $hadits)
                        <div id="hadits{{ $hadits['number'] }}" class="cardHaditsDetail">
                            <div class="cardHaditsBg"></div>
                            <div class="cardHaditsContent">
                                <p class="noHadits">{{ '{  ' . $hadits['number'] . '  }' }}</p>
                                <p class="arabHadits">{{ $hadits['arab'] }}</p>
                                <p class="arabId">{{ $hadits['id'] }}</p>
                            </div>
                        </div>
                    @endforeach
            </div>
            <div id="navDownHadits" class="d-flex justify-content-between w-100 mt-5" data-aos="fade-up">
                <a href="{{ $hasPrev == 'true' ? route('platform.listHadits', ['id' => $haditsData['data']['id'], 'number1' => $prevStart, 'number2' => $prevEnd]) : 'javascript:void(0)' }}"
                    class="btn-alamin {{ $hasPrev == 'true' ? '' : 'navPageLimit' }}"><span
                        class="d-none d-lg-block">Sebelumnya</span><span class="d-lg-none d-block fs-6"><i
                            class="bi bi-arrow-left-circle-fill"></i></span></a>
                <div class="middleInfoPage d-flex flex-lg-row flex-column align-items-center">
                    <span>Total : {{ $haditsData['data']['available'] }}
                    </span>
                    <span class="mx-2 d-lg-flex d-none">
                        |
                    </span>
                    <span>
                        Halaman :
                        {{ $currentPage }} / {{ $totalPages }}
                    </span>
                    <span class="mx-2 d-lg-flex d-none">
                        |
                    </span>
                    <span>
                        Jumlah Hadits Per Halaman :
                        {{ $haditsData['data']['requested'] }}
                    </span>
                </div>
                <a href="{{ $hasNext == 'true' ? route('platform.listHadits', ['id' => $haditsData['data']['id'], 'number1' => $nextStart, 'number2' => $nextEnd]) : 'javascript:void(0)' }}"
                    class="btn-alamin {{ $hasNext == 'true' ? '' : 'navPageLimit' }}"><span
                        class="d-none d-lg-block">Berikutnya</span><span class="d-lg-none d-block fs-6"><i
                            class="bi bi-arrow-right-circle-fill"></i></a>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('platform.hadits') }}" class="btn-alamin mt-4" data-aos="fade-up"> Kembali ke Daftar
                    Hadits</a>
            </div>
        </div>
    </div>
@else
    <div class="alert alert-danger">
        <strong>❌ Gagal Mengambil Data Al-Qur'an:</strong>
        @if ($haditsData === null)
            API tidak merespons atau koneksi terputus.
        @else
            Format respons tidak sesuai atau data kosong.
        @endif
    </div>
    @endif
    </div>
    </div>
@endsection

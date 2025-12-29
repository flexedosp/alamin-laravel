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
            <p data-aos="fade-left">Hadits Nabi</p>
        </div>

        <div class="container py-5">
            {{-- <div id="searchForm" data-aos="fade-up">
                <p class="fs-5 fw-semibold">Pencarian Nama Surat</p>
                <input type="text" id="searchInput" class="form-control mb-3"
                    placeholder="Cari surat (contoh: Bukhari)">
            </div> --}}
            <div class="cardSuratGroup" data-aos="fade-up">
                @if ($haditsData && isset($haditsData['data']))
                    @foreach ($haditsData['data'] as $hadits)
                        <div id="{{ $hadits['id'] }}" class="cardSurat">
                            <div class="cardSuratText">
                                {{-- <p lang="ar" class="titleArab">{{ $hadits['nama'] }}</p>
                                <p class="titleLatin">{{ $hadits['namaLatin'] }}</p> --}}
                                <p class="titleArti">{{ $hadits['name'] }}</p>
                            </div>
                            <div class="cardSuratButton">
                                <a class="btn-alamin"
                                    href="{{ route('platform.listHadits.first', ['id' => $hadits['id']]) }}">Baca</a>
                            </div>
                        </div>
                    @endforeach
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

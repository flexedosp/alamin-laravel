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
            <p data-aos="fade-left">Al-Qur'anul Karim</p>
        </div>

        <div class="container py-5">
            <div class="toast fade show align-items-center text-bg-warning border-0 w-100" data-aos="fade-up" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        Perhatian! Fitur ini masih dalam pengembangan.
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
            <div id="searchForm" class="mt-5" data-aos="fade-up">
                <p class="fs-5 fw-semibold">Pencarian Nama Surat</p>
                <input type="text" id="searchInput" class="form-control mb-3"
                    placeholder="Cari surat (contoh: al-baqarah)">
            </div>
            <div class="cardSuratGroup" data-aos="fade-up">
                @if ($quranData && isset($quranData['data']))
                    @foreach ($quranData['data'] as $surat)
                        <div id="{{ $surat['namaLatin'] }}" class="cardSurat">
                            <div class="cardSuratText">
                                <p lang="ar" class="titleArab">{{ $surat['nama'] }}</p>
                                <p class="titleLatin">{{ $surat['namaLatin'] }}</p>
                                <p class="titleArti">{{ $surat['arti'] }}</p>
                            </div>
                            <div class="cardSuratButton">
                                <a class="btn-alamin"
                                    href="{{ route('platform.quranDetail', ['id' => $surat['nomor']]) }}">Baca</a>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
@else
    <div class="alert alert-danger">
        <strong>❌ Gagal Mengambil Data Al-Qur'an:</strong>
        @if ($quranData === null)
            API tidak merespons atau koneksi terputus.
        @else
            Format respons tidak sesuai atau data kosong.
        @endif
    </div>
    @endif
    </div>
    </div>
@endsection

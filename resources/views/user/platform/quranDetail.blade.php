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
            <p lang="ar" data-aos="fade-left">{{ $quranData['nama'] }} - {{ $quranData['namaLatin'] }} -
                {{ $quranData['arti'] }}</p>
        </div>

        <div class="container py-5">
            @if ($quranData)
                <div class="suratTextInfo">
                    {{-- <p lang="ar" class="titleSuratArab">{{ $quranData['nama'] }}</p> --}}
                    <p lang="ar" class="titleSurat"> Nama Surah : {{ $quranData['nama'] }} -
                        {{ $quranData['namaLatin'] }}</p>
                    <p class="artiSurat">Arti Surah : {{ $quranData['arti'] }}</p>
                    <p class="totalAyat"> Jumlah Ayat :{{ $quranData['jumlahAyat'] }}</p>
                    <p class="tempatSuratTurun"> Diturunkan di
                        {{ $quranData['tempatTurun'] }}
                    </p>
                    <p class="deskripsiSurat">{!! $quranData['deskripsi'] !!}</p>
                </div>
                <div class="suratAyat">
                    @if ($quranData['nomor'] == 1)
                        <div class="ayatSurat">
                            <p lang="ar" class="ayatArab">أَعُوذُ بِاللّٰهِ مِنَ الشَّيْطَانِ الرَّجِيمِ
                            </p>
                            <p class="ayatLatin">A'ūdzu billāhi minasy syaithānir rajīm(i).</p>
                            <p class="ayatIndonesia">Aku berlindung kepada Allah dari godaan setan yang terkutuk</p>
                        </div>
                    @else
                        <div class="ayatSurat">
                            <p lang="ar" class="ayatArab">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</p>
                            <p class="ayatLatin">Bismillāhir-raḥmānir-raḥīm(i).</p>
                            <p class="ayatIndonesia">Dengan menyebut nama Allah yang Maha Pengasih lagi Maha Penyayang</p>
                        </div>
                    @endif
                    @foreach ($quranData['ayat'] as $ayat)
                        <div class="ayatSurat">
                            <p lang="ar" class="ayatArab">{{ $ayat['teksArab'] }} -
                                {{ '( ' . $ayat['nomorAyat'] . ' )' }}
                            </p>
                            <p class="ayatLatin">{{ $ayat['teksLatin'] }}</p>
                            <p class="ayatIndonesia">{{ $ayat['teksIndonesia'] }}</p>
                        </div>
                    @endforeach
                    <div class="ayatSurat">
                        <p lang="ar" class="ayatArab">صَدَقَ اللّٰهُ العَظِيْمُ</p>
                        <p class="ayatLatin">Shodaqallāhul A'dzīm(u).</p>
                        <p class="ayatIndonesia">Maha Benarlah Allah Yang Maha Agung</p>
                    </div>
                </div>

                <div class="tafsirAyat">
                    <p class="fs-1">Tafsir Per Ayat</p>
                    <div class="accordion accordion-flush" id="accordionTafsir">
                        @foreach ($tafsirData['tafsir'] as $tafsir)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse{{ $tafsir['ayat'] }}" aria-expanded="false"
                                        aria-controls="flush-collapse{{ $tafsir['ayat'] }}">
                                        Ayat ke {{ $tafsir['ayat'] }}
                                    </button>
                                </h2>
                                <div id="flush-collapse{{ $tafsir['ayat'] }}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionTafsir">
                                    <div class="accordion-body">
                                        {!! nl2br(e($tafsir['teks'])) !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    {{-- <ol>
                        @foreach ($tafsirData['tafsir'] as $tafsir)
                            <li class="mb-3">{!! $tafsir['teks'] !!}</li>
                        @endforeach
                    </ol> --}}
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
    @endsection

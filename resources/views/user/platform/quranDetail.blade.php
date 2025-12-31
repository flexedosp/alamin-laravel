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
            <p lang="ar" class="fs-2" data-aos="fade-left">{{ $quranData['nama'] }} - {{ $quranData['namaLatin'] }} -
                {{ $quranData['arti'] }}</p>
        </div>

        <div class="container py-5">
            <div id="navUpQuran" class="d-flex justify-content-between align-items-center w-100 mb-4" data-aos="fade-up">
                @if ($prevNomorSurat)
                    <a translate="no"
                        href="{{ isset($prevNomorSurat) ? route('platform.quranDetail', ['id' => $prevNomorSurat]) : 'javascript:void(0)' }}"
                        class="btn-alamin text-center {{ isset($prevNomorSurat) ? '' : 'navPageLimit' }}"><span
                            class="d-none d-lg-block">Sebelumnya : </span><span>{{ $prevNamaSurat }}</span><span
                            class="d-lg-none d-block fs-6"><i class="bi bi-arrow-left-circle-fill"></i></span></a>
                @endif
                <a class="btn-alamin text-center d-flex align-items-center mx-3 mx-lg-auto"
                    href="{{ route('platform.quran') }}">Kembali Ke
                    Daftar Surah</a>
                @if ($nextNomorSurat)
                    <a translate="no"
                        href="{{ isset($nextNomorSurat) ? route('platform.quranDetail', ['id' => $nextNomorSurat]) : 'javascript:void(0)' }}"
                        class="btn-alamin text-center {{ isset($nextNomorSurat) ? '' : 'navPageLimit' }}"><span
                            class="d-none d-lg-block">Berikutnya : </span><span>{{ $nextNamaSurat }}</span><span
                            class="d-lg-none d-block fs-6"><i class="bi bi-arrow-right-circle-fill"></i></a>
                @endif
            </div>
            @if ($quranData)
                <div class="suratTextInfo" data-aos="fade-up">
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
                <div class="suratAyat" data-aos="fade-up">
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
                <div class="tafsirAyat" data-aos="fade-up">
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
                <div class="alert alert-danger" data-aos="fade-up">
                    <strong>❌ Gagal Mengambil Data Al-Qur'an:</strong>
                    @if ($quranData === null)
                        API tidak merespons atau koneksi terputus.
                    @else
                        Format respons tidak sesuai atau data kosong.
                    @endif
                </div>
            @endif
            <div id="navDownQuran" class="d-flex justify-content-between align-items-center w-100 mt-4" data-aos="fade-up">
                @if ($prevNomorSurat)
                    <a translate="no"
                        href="{{ isset($prevNomorSurat) ? route('platform.quranDetail', ['id' => $prevNomorSurat]) : 'javascript:void(0)' }}"
                        class="btn-alamin text-center {{ isset($prevNomorSurat) ? '' : 'navPageLimit' }}"><span
                            class="d-none d-lg-block">Sebelumnya : </span><span>{{ $prevNamaSurat }}</span><span
                            class="d-lg-none d-block fs-6"><i class="bi bi-arrow-left-circle-fill"></i></span></a>
                @endif
                <a class="btn-alamin text-center d-flex align-items-center mx-3 mx-lg-auto"
                    href="{{ route('platform.quran') }}">Kembali Ke
                    Daftar Surah</a>
                @if ($nextNomorSurat)
                    <a translate="no"
                        href="{{ isset($nextNomorSurat) ? route('platform.quranDetail', ['id' => $nextNomorSurat]) : 'javascript:void(0)' }}"
                        class="btn-alamin text-center {{ isset($nextNomorSurat) ? '' : 'navPageLimit' }}"><span
                            class="d-none d-lg-block">Berikutnya : </span><span>{{ $nextNamaSurat }}</span><span
                            class="d-lg-none d-block fs-6"><i class="bi bi-arrow-right-circle-fill"></i></a>
                @endif
            </div>
        </div>
    @endsection

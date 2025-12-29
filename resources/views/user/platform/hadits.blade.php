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
            <div id="searchFormHadits" data-aos="fade-up">
                <p class="fs-5 text-center fw-semibold">Pencarian Nama Hadits</p>
                <input type="text" id="searchInputHadits" class="form-control mb-3"
                    placeholder="Cari surat (contoh: Bukhari)">
            </div>
            <div class="cardHaditsGroup mt-4" data-aos="fade-up">
                {{-- <div class="page-wrapper">
                    <!-- Diagonal Fade Grid Background - Top Right -->
                    <div class="diagonal-fade-grid"></div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit sequi esse explicabo animi
                        obcaecati molestiae eaque officiis libero temporibus molestias.</p>
                    <!-- Your Content / Components -->
                </div> --}}

                @if ($haditsData && isset($haditsData['data']))
                    @foreach ($haditsData['data'] as $hadits)
                        <div id="{{ $hadits['id'] }}" class="cardHadits">
                            <div class="cardHaditsBg"></div>

                            <div class="cardHaditsContent">
                                <!-- DIV 1 (Top) -->
                                <div class="cardTop">
                                    <p class="titleHadits">{{ substr($hadits['name'], 3) }}</p>
                                    <p class="titleArti">{{ $hadits['name'] }}</p>
                                    <div class="lineBlack"></div>
                                </div>

                                <!-- DIV 2 (Bottom) -->
                                <div class="cardBottom">
                                    <a class="btn-alamin"
                                        href="{{ route('platform.listHadits.first', ['id' => $hadits['id']]) }}">
                                        Baca
                                    </a>
                                </div>
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

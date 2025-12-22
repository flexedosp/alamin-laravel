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
            <img src="{{ asset('assets/images/header~1.png') }}" alt="Header Image">
            <p data-aos="fade-left">Hadits Nabi</p>
        </div>

        <div class="container py-5" data-aos="fade-up">
            @if ($hadithData && is_array($hadithData) && !empty($hadithData))
                <div class="row">
                    <div class="col-12 mb-4">
                        <h3>Daftar Hadits Terbaru</h3>
                        <p><strong>Total Hadits:</strong> {{ count($hadithData) }}</p>
                    </div>

                    <div class="col-12">
                        <div class="accordion" id="haditsAccordion">
                            @foreach (array_slice($hadithData, 0, 5) as $index => $hadithItem)
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="heading{{ $index }}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $index }}" aria-expanded="true"
                                            aria-controls="collapse{{ $index }}">
                                            Hadits {{ $index + 1 }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $index }}" class="accordion-collapse collapse show"
                                        aria-labelledby="heading{{ $index }}" data-bs-parent="#haditsAccordion">
                                        <div class="accordion-body">
                                            <p><strong>Nama Hadits:</strong> {{ $hadithItem['title'] ?? 'Tidak tersedia' }}
                                            </p>
                                            <p><strong>Kategori:</strong> {{ $hadithItem['category'] ?? 'Tidak tersedia' }}
                                            </p>
                                            <p><strong>Isi Hadits (Arab):</strong></p>
                                            <p class="bg-light p-2 rounded">{{ $hadithItem['arabic'] ?? 'Tidak tersedia' }}
                                            </p>
                                            <p><strong>Terjemah:</strong></p>
                                            <p class="bg-light p-2 rounded">
                                                {{ $hadithItem['translation'] ?? 'Tidak tersedia' }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    @if (count($hadith) > 5)
                        <div class="col-12 text-center mt-3">
                            <small class="text-muted">... dan masih banyak lagi hadits tersedia.</small>
                        </div>
                    @endif
                </div>
            @else
                <div class="alert alert-danger">
                    <strong>❌ Gagal Mengambil Data Hadits:</strong>
                    @if ($hadithData === null)
                        API tidak merespons atau koneksi terputus.
                    @else
                        Data hadits tidak tersedia atau format tidak valid.
                    @endif
                </div>
            @endif
        </div>
    </div>
@endsection

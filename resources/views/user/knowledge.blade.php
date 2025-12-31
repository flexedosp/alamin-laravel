@extends('layouts.main')

@section('Styles')
    <link rel="stylesheet" href="{{ asset('lib/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/knowledge.css') }}">
@endsection

@section('Scripts')
    <script src="{{ asset('lib/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/user/knowledge.js') }}"></script>
@endsection


@section('content')
    <div class="mt-5">
        <div class="headerImg">
            <img src="{{ asset('assets/images/wawasan-header.jpg') }}" alt="Header Image">
            <p data-aos="fade-left">Wawasan</p>
        </div>

        <div class="container py-5">
            <div id="searchFormKnowledge" class="mt-5" data-aos="fade-up">
                <p class="fs-5 fw-semibold">Pencarian Nama Konten</p>
                <form class="d-flex justify-content-center align-items-center w-100">
                    <input type="text" id="searchInput" class="form-control py-2" placeholder="Cari Info Konten...">
                    <div class="mx-2"></div>
                    <select class="form-select w-25 py-2 btn-alamin" aria-label="Default select">
                        <option selected hidden>Filter</option>
                        <option value="semua">Semua</option>
                        <option value="artikel">Artikel</option>
                        <option value="berita">Berita</option>
                    </select>
                    {{-- <div class="dropdown">
                        <button class="py-2 px-3 btn btn-alamin dropdown-toggle " type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Filter
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Semua</a></li>
                            <li><a class="dropdown-item" href="#">Berita</a></li>
                            <li><a class="dropdown-item" href="#">Artikel</a></li>
                        </ul>
                    </div> --}}
                </form>
            </div>

            <div id="knowledgeContainer" class="" data-aos="fade-up">
                <div class="content-card" data-category="artikel" data-title="Contoh Judul Konten">
                    <div class="imgContentCard">
                        <img src="{{ asset('assets/images/newspaper.jpg') }}" alt="Gambar Berita">
                        <div class="frost-layer"></div>
                    </div>
                    <div class="textInfoContent">
                        <span class="categoryContent">Artikel</span>
                        <span class="titleContent">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel,
                            dolor!</span>
                        <span class="dateContent">Tgl Terbit : 12/12/2025</span>
                        <a class="linkContent" href="#">Selengkapnya</a>
                    </div>
                </div>
                <div class="content-card" data-category="artikel" data-title="Contoh Judul Konten">
                    <div class="imgContentCard">
                        <img src="{{ asset('assets/images/newspaper.jpg') }}" alt="Gambar Berita">
                        <div class="frost-layer"></div>
                    </div>
                    <div class="textInfoContent">
                        <span class="categoryContent">Artikel</span>
                        <span class="titleContent">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel,
                            dolor!</span>
                        <span class="dateContent">Tgl Terbit : 12/12/2025</span>
                        <a class="linkContent" href="#">Selengkapnya</a>
                    </div>
                </div>
                <div class="content-card" data-category="artikel" data-title="Contoh Judul Konten">
                    <div class="imgContentCard">
                        <img src="{{ asset('assets/images/newspaper.jpg') }}" alt="Gambar Berita">
                        <div class="frost-layer"></div>
                    </div>
                    <div class="textInfoContent">
                        <span class="categoryContent">Artikel</span>
                        <span class="titleContent">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel,
                            dolor!</span>
                        <span class="dateContent">Tgl Terbit : 12/12/2025</span>
                        <a class="linkContent" href="#">Selengkapnya</a>
                    </div>
                </div>

                <div class="content-card" data-category="berita" data-title="Contoh Judul Konten">
                    <div class="imgContentCard">
                        <img src="{{ asset('assets/images/newspaper.jpg') }}" alt="Gambar Berita">
                        <div class="frost-layer"></div>
                    </div>
                    <div class="textInfoContent">
                        <span class="categoryContent">Berita</span>
                        <span class="titleContent">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel,
                            dolor!</span>
                        <span class="dateContent">Tgl Terbit : 12/12/2025</span>
                        <a class="linkContent" href="#">Selengkapnya</a>
                    </div>
                </div>
                <div class="content-card" data-category="berita" data-title="Contoh Judul Konten">
                    <div class="imgContentCard">
                        <img src="{{ asset('assets/images/newspaper.jpg') }}" alt="Gambar Berita">
                        <div class="frost-layer"></div>
                    </div>
                    <div class="textInfoContent">
                        <span class="categoryContent">Berita</span>
                        <span class="titleContent">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel,
                            dolor!</span>
                        <span class="dateContent">Tgl Terbit : 12/12/2025</span>
                        <a class="linkContent" href="#">Selengkapnya</a>
                    </div>
                </div>
                <div class="content-card" data-category="berita" data-title="Contoh Judul Konten">
                    <div class="imgContentCard">
                        <img src="{{ asset('assets/images/newspaper.jpg') }}" alt="Gambar Berita">
                        <div class="frost-layer"></div>
                    </div>
                    <div class="textInfoContent">
                        <span class="categoryContent">Berita</span>
                        <span class="titleContent">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel,
                            dolor!</span>
                        <span class="dateContent">Tgl Terbit : 12/12/2025</span>
                        <a class="linkContent" href="#">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection

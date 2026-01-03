@extends('layouts.main')

@section('Styles')
    {{-- <link rel="stylesheet" href="{{ asset('lib/swiper/swiper-bundle.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/user/home.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/user/infoCenter.css') }}">
@endsection

@section('Scripts')
    {{-- <script src="{{ asset('lib/sweetalert2/sweetalert2.all.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/user/home.js') }}"></script> --}}
    <script src="{{ asset('js/user/infoCenter.js') }}"></script>
@endsection

@section('content')
    <div class="mt-5">
        <div class="headerImg">
            <img src="{{ asset('assets/images/infocenter-header-2.png') }}" alt="">
            <p data-aos="fade-left">Pusat Informasi</p>
        </div>
        <div class="container py-5" data-aos="fade-up">
            {{-- <p class="fs-1 fw-bold mb-3">Peta </p> --}}
            <div
                class="d-flex justify-content-lg-between flex-column flex-lg-row align-items-center align-items-lg-start mb-0 mb-lg-4">
                <div class="mapEmbedAlamin mb-4 mb-lg-0">
                    <p class="fs-2 fw-semibold text-lg-start text-center">Lokasi Masjid</p>

                    <div class="embed-map-responsive">
                        <div class="embed-map-container"><iframe class="embed-map-frame" frameborder="0" scrolling="no"
                                marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=500&height=400&hl=en&q=Masjid%20Al-Amin%20Petukangan&t=&z=18&ie=UTF8&iwloc=B&output=embed"></iframe>
                        </div>
                    </div>
                </div>
                <div class="contactAlamin mb-4 mb-lg-0">
                    <p class="fs-2 fw-semibold text-lg-start text-center">Alamat & Kontak</p>
                    <table class="table table-borderless">
                        <tr>
                            <th scope="row">Alamat</th>
                            <td>:</td>
                            <td>Jl. Pesanggrahan I Blk. B No.1, RT.1/RW.4, Petukangan Sel., Kec. Pesanggrahan, Kota
                                Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12270</td>
                        </tr>
                        <tr>
                            <th scope="row">Telepon</th>
                            <td>:</td>
                            <td>0856-7154-114 (Alfin)</td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>:</td>
                            <td>sekretariat@masjidalamin.or.id</td>
                        </tr>
                    </table>
                    {{-- <ul>
                        <li>Alamat : Jl. Pesanggrahan I Blk. B No.1, RT.1/RW.4, Petukangan Sel., Kec. Pesanggrahan, Kota
                            Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12270</li>
                        <li>Telepon : </li>
                    </ul> --}}
                </div>
            </div>
            <div class="mb-4 mb-lg-0">
                <p class="fs-2 fw-semibold text-lg-start text-center">QnA</p>
                <div class="accordion accordion-flush" id="accordionInfo">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Apa saja layanan & fasilitas yang tersedia di Masjid Al-Amin?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    Kami menyediakan layanan ZISWAF (Zakat, Infaq, Sedekah, dan Wakaf) untuk membantu
                                    masyarakat
                                    dalam rangka mensejahterakan umat.
                                </p>
                                <p>
                                    Kami juga menyediakan layanan konsultasi keagamaan bagi jamaah yang membutuhkan
                                    bimbingan
                                    spiritual.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Program apa saja yang diadakan oleh Masjid Al-Amin?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Kami mengadakan berbagai kegiatan keagamaan, seperti kajian majelis ilmu, BASABASU
                                    (Belanja
                                    Sayur Bayar Suka-Suka), Bazar Baju Murah Layak Pakai, dan kegiatan lainnya</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Apakah saya dapat berpartisipasi dalam kegiatan di Masjid Al-Amin?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Tentu saja. Kami sangat terbuka bagi siapa saja yang ingin berpartisipasi dalam kegiatan
                                keagamaan dan sosial yang kami adakan. Silakan hubungi pengurus masjid untuk informasi lebih
                                lanjut.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

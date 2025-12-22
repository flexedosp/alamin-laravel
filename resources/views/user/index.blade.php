@extends('layouts.main')

@section('Styles')
    <link rel="stylesheet" href="{{ asset('lib/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/home.css') }}">
@endsection

@section('Scripts')
    <script src="{{ asset('lib/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/user/home.js') }}"></script>
@endsection

@section('content')
    <section class="main-content">
        <div class="slider-home">
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide text-white">
                        <div class="text-content" data-aos="fade-up">
                            <p class="fs-1 lh-1 fw-bold mb-0">Ahlan Wa Sahlan</p>
                            <p class="fs-3 mb-4">Di Website Masjid Al-Amin</p>
                            <a class="btn-alamin" href="#sekilasMasjid">Klik Untuk Lanjut</a>
                        </div>
                        <img src="{{ asset('assets/images/header.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide text-white">Slide 2</div>
                    <div class="swiper-slide text-white">Slide 3</div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div id="sekilasMasjid" class="home-div">
            <div id="sekilasMasjidContent" data-aos="fade-left">
                <div id="imgSekilasMasjid">
                    <img src="{{ asset('assets/images/DSC_5877.JPG') }}" alt="Menara Al-Amin">
                </div>
                <div id="sekilasMasjidText">
                    <div>
                        <p class="fs-2 mb-0 fw-bold">Sekilas Masjid Al-Amin</p>
                        <p>
                            Dari sebuah musholla kecil di Komplek Pesanggrahan Permai, lahirlah semangat besar untuk
                            membangun masyarakat madani. Seiring perjalanan waktu, tempat ini berkembang menjadi ruang yang
                            memberdayakan dan menyejahterakan umat.
                        </p>
                    </div>
                    <a class="btn-alamin" href="{{ route('tentang-kami') }}">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
        <div id="fasilitasMasjid" class="home-div">
            <div id="fasilitasMasjidContent" data-aos="fade-up">
                <p class="fs-1 fw-bold">Fasilitas Masjid</p>
                <div id="fasilitasMasjidCardGroup">
                    <div class="fasilitasMasjidCard" data-aos="flip-right" data-aos-delay="900">
                        <div class="fasilitasMasjidIcon">
                            <img src="{{ asset('assets/icons/ac.svg') }}" alt="Icon Fasilitas Masjid">
                        </div>
                        <p class="fasilitasMasjidTitleCard">Ruang Ber-AC</p>
                        <p class="fasilitasMasjidTextCard">Sejuk dan nyaman, shalat atau kajian jadi lebih fokus.</p>
                    </div>
                    <div class="fasilitasMasjidCard" data-aos="flip-right" data-aos-delay="900">
                        <div class="fasilitasMasjidIcon">
                            <img src="{{ asset('assets/icons/disability.svg') }}" alt="Icon Fasilitas Masjid">
                        </div>
                        <p class="fasilitasMasjidTitleCard">Ramah Disabilitas</p>
                        <p class="fasilitasMasjidTextCard">Akses mudah & nyaman untuk semua jamaah, termasuk penyandang
                            disabilitas.</p>
                    </div>
                    <div class="fasilitasMasjidCard" data-aos="flip-right" data-aos-delay="900">
                        <div class="fasilitasMasjidIcon">
                            <img src="{{ asset('assets/icons/park-nature.svg') }}" alt="Icon Fasilitas Masjid">
                        </div>
                        <p class="fasilitasMasjidTitleCard">Dekat Taman</p>
                        <p class="fasilitasMasjidTextCard">Hijau & tenang — sempurna untuk relaksasi setelah ibadah.</p>
                    </div>
                    <div class="fasilitasMasjidCard" data-aos="flip-right" data-aos-delay="900">
                        <div class="fasilitasMasjidIcon">
                            <img src="{{ asset('assets/icons/park-sign.svg') }}" alt="Icon Fasilitas Masjid">
                        </div>
                        <p class="fasilitasMasjidTitleCard">Parkiran Luas</p>
                        <p class="fasilitasMasjidTextCard">Parkir lega, gak perlu pusing cari tempat — bahkan saat ramai.
                        </p>
                    </div>
                    <div class="fasilitasMasjidCard" data-aos="flip-right" data-aos-delay="900">
                        <div class="fasilitasMasjidIcon">
                            <img src="{{ asset('assets/icons/field-sport.svg') }}" alt="Icon Fasilitas Masjid">
                        </div>
                        <p class="fasilitasMasjidTitleCard">Lapangan Olahraga</p>
                        <p class="fasilitasMasjidTextCard">Bugar sambil beribadah — olahraga jadi bagian dari gaya hidup
                            islami.</p>
                    </div>
                    <div class="fasilitasMasjidCard" data-aos="flip-right" data-aos-delay="900">
                        <div class="fasilitasMasjidIcon">
                            <img src="{{ asset('assets/icons/wifi.svg') }}" alt="Icon Fasilitas Masjid">
                        </div>
                        <p class="fasilitasMasjidTitleCard">Fasilitas Internet</p>
                        <p class="fasilitasMasjidTextCard">Wi-Fi gratis, akses informasi & live kajian kapan saja.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="beritaTerkini" class="home-div">
            <div id="beritaTerkiniContent" data-aos="fade-up">
                <p class="fs-1 fw-bold mb-4 text-center">Berita Terkini</p>
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide first">
                            <div class="content-card">
                                <div class="d-flex flex-column">
                                    <p class="fs-1 fw-bold mb-1">Cek Berita Terkini</p>
                                    <p class="fs-1"><i class="bi bi-arrow-right-circle-fill"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-card">
                                <div class="imgContentCard">
                                    <img src="{{ asset('assets/images/newspaper.jpg') }}" alt="Gambar Berita">
                                    <div class="frost-layer"></div>
                                </div>
                                <div class="textInfoContent">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, dolor!</p>
                                    <a href="#">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-card">
                                <div class="imgContentCard">
                                    <img src="{{ asset('assets/images/newspaper.jpg') }}" alt="Gambar Berita">
                                    <div class="frost-layer"></div>
                                </div>
                                <div class="textInfoContent">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, dolor!</p>
                                    <a href="#">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-card">
                                <div class="imgContentCard">
                                    <img src="{{ asset('assets/images/newspaper.jpg') }}" alt="Gambar Berita">
                                    <div class="frost-layer"></div>
                                </div>
                                <div class="textInfoContent">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, dolor!</p>
                                    <a href="#">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide last">
                            <div class="content-card">
                                <div class="d-flex flex-column w-50">
                                    <p class="fs-5 fw-bold">Berita Selengkapnya</p>
                                    <a class="btn-alamin" href="{{ route('wawasan') }}">Wawasan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination swiper-pagination-content"></div>
                </div>
            </div>
        </div>
        <div id="artikelTerkini" class="home-div">
            <div id="artikelTerkiniContent" data-aos="fade-up">
                <p class="fs-1 fw-bold mb-4 text-center">Artikel Terkini</p>
                <div class="swiper mySwiper3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide first">
                            <div class="content-card">
                                <div class="d-flex flex-column">
                                    <p class="fs-1 fw-bold mb-1">Cek Artikel Terkini</p>
                                    <p class="fs-1"><i class="bi bi-arrow-right-circle-fill"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-card">
                                <div class="imgContentCard">
                                    <img src="{{ asset('assets/images/newspaper.jpg') }}" alt="Gambar Berita">
                                    <div class="frost-layer"></div>
                                </div>
                                <div class="textInfoContent">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, dolor!</p>
                                    <a href="#">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-card">
                                <div class="imgContentCard">
                                    <img src="{{ asset('assets/images/newspaper.jpg') }}" alt="Gambar Berita">
                                    <div class="frost-layer"></div>
                                </div>
                                <div class="textInfoContent">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, dolor!</p>
                                    <a href="#">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-card">
                                <div class="imgContentCard">
                                    <img src="{{ asset('assets/images/newspaper.jpg') }}" alt="Gambar Berita">
                                    <div class="frost-layer"></div>
                                </div>
                                <div class="textInfoContent">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, dolor!</p>
                                    <a href="#">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide last">
                            <div class="content-card">
                                <div class="d-flex flex-column w-50">
                                    <p class="fs-5 fw-bold">Artikel Selengkapnya</p>
                                    <a class="btn-alamin" href="{{ route('wawasan') }}">Wawasan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination swiper-pagination-content"></div>
                </div>
            </div>
        </div>
        <div id="infoLanjut" class="home-div">
            <div id="infoLanjutContent" data-aos="fade-up">
                <p class="fs-1 fw-bold mb-0 text-center">Butuh Informasi Lebih Lanjut?</p>
                <p class="fs-5 fw-semibold mb-4 text-center">Silahkan klik tombol di bawah ini</p>
                <div class="d-flex justify-content-center">
                    <a class="btn-alamin" href="{{ route('info-center') }}">Pusat Informasi</a>
                </div>
            </div>
    </section>
@endsection

<nav class="navbar navbar-expand-lg bg-white shadow-sm navbar-landing-page">
    <div class="container">
        <a class="navbar-brand" href="/"><img class="logo-navbar" src="{{ asset('assets/images/Logo_Alamin.svg') }}"
                alt="Logo Al-Amin"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
                <li class="nav-item mx-2">
                    <a class="nav-link {{ $pageNameNav == 'Beranda' ? 'active' : '' }}" aria-current="page"
                        href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ $pageNameNav == 'Tentang Kami' ? 'active' : '' }}"
                        href="{{ route('tentang-kami') }}">Tentang
                        Kami</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ $pageNameNav == 'Wawasan' ? 'active' : '' }}"
                        href="{{ route('wawasan') }}">Wawasan</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ $pageNameNav == 'Platform' ? 'active' : '' }}"
                        href="{{ route('platform') }}">Platform</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ $pageNameNav == 'Pusat Informasi' ? 'active' : '' }}"
                        href="{{ route('info-center') }}">Pusat
                        Informasi</a>
                </li>
                <li class="nav-item mx-2 d-lg-none d-flex flex-row">
                    <button class="btn-translate-id active">ID</button>
                    <button class="btn-translate-en">EN</button>
                </li>
        </div>
        <div class="d-none d-lg-flex flex-lg-row">
            <button class="btn-translate-id active">ID</button>
            <button class="btn-translate-en">EN</button>
        </div>
    </div>
</nav>

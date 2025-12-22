<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/images/Logo_Alamin_bg_white.svg') }}" type="image/svg">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap-icons/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    @yield('Styles')
    <title>{{ $title }}</title>
</head>

<body>
    {{-- Header --}}
    @include('partials.header')
    {{-- Content --}}
    @yield('content')
    {{-- Footer --}}
    @include('partials.footer')

    {{-- Javascrfipt --}}
    <script src="{{ asset('lib/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/aos/aos.js') }}"></script>
    <script src="{{ asset('lib/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('lib/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/site.js') }}"></script>
    @yield('Scripts')
</body>

</html>

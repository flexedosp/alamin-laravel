<!DOCTYPE html>
{{-- <html lang="{{ $lang }}"> --}}
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/images/Logo_Alamin_bg_white.svg') }}" type="image/svg">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap-icons/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    @yield('Styles')

    <style>
        /* sembunyikan banner/iframe Google Translate yang kadang muncul */
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        body {
            top: 0 !important;
        }

        /* opsional: sembunyikan teks "Translate" tampilan default */
        .goog-te-gadget-icon {
            display: none !important;
        }
    </style>
    <title>{{ $title }}</title>
</head>

<body>
    <div id="google_translate_element" style="position:absolute; left:-9999px; top:0;"></div>
    {{-- Header --}}
    @include('partials.header')
    {{-- Content --}}
    @yield('content')
    {{-- Footer --}}
    @include('partials.footer')

    {{-- Javascrfipt --}}
    <script src="{{ asset('lib/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('lib/aos/aos.js') }}"></script>
    <script src="{{ asset('lib/swiper/swiper-bundle.min.js') }}"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'id',
                includedLanguages: 'en,id',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }

        /* helper: polling untuk menunggu munculnya select .goog-te-combo */
        function triggerTranslate(lang) {
            var attempts = 0;
            var maxAttempts = 30;
            var getBtnEn = document.getElementByClass('btn-translate-en');
            var getBtnId = document.getElementByClass('btn-translate-id');
            var timer = setInterval(function() {
                var combo = document.querySelector('.goog-te-combo');
                if (combo) {
                    combo.value = lang;
                    // dispatch event change agar Google Translate bereaksi
                    combo.dispatchEvent(new Event('change'));
                    clearInterval(timer);
                    console.log('Terjemahkan ke: ' + lang);
                    if (lang == 'en') {
                        getBtnId.classList.remove('active');
                        getBtnEn.classList.add('active');
                    } else {
                        getBtnEn.classList.remove('active');
                        getBtnId.classList.add('active');
                    }
                    return;
                }
                attempts++;
                if (attempts >= maxAttempts) {
                    clearInterval(timer);
                    console.warn('Elemen Google Translate tidak ditemukan. Cek CSP atau pemuatan skrip.');
                }
            }, 200); // cek setiap 200ms
        }

        document.addEventListener('DOMContentLoaded', function() {
            // tombol Anda: .btn-translate-en / .btn-translate-id
            var getBtnEn = document.getElementByClass('btn-translate-en');
            var getBtnId = document.getElementByClass('btn-translate-id');
            var lang = "";

            document.querySelectorAll('.btn-translate-en').forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    triggerTranslate('en');
                    console.log("Bahasa Inggris");
                    lang = "en";
                });
            });
            document.querySelectorAll('.btn-translate-id').forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    triggerTranslate('id');
                    console.log("Bahasa Indonesia");
                    lang = "id";
                });
            });

            if (lang == 'en') {
                getBtnId.classList.remove('active');
                getBtnEn.classList.add('active');
                console.log("EN");
            } else {
                getBtnEn.classList.remove('active');
                getBtnId.classList.add('active');
                console.log("ID");
            }
        });
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="{{ asset('js/site.js') }}"></script>
    @yield('Scripts')
</body>

</html>

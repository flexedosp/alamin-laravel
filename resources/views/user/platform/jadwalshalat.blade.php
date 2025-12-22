@extends('layouts.main')

@section('Styles')
    {{-- <link rel="stylesheet" href="{{ asset('css/user/platform.css') }}"> --}}
@endsection

@section('Scripts')
    {{-- <script src="{{ asset('js/user/platform.js') }}"></script> --}}
@endsection

@section('content')
    <div class="mt-5">
        <div class="headerImg">
            <img src="{{ asset('assets/images/header~1.png') }}" alt="">
            <p data-aos="fade-left">Jadwal Shalat</p>
        </div>
        <div class="container py-5" data-aos="fade-up">
            Sedang dalam pengembangan...
        </div>
    </div>
@endsection

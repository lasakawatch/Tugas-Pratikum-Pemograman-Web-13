@extends('layouts.app')

@section('title', 'Home - Portofolio')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Selamat Datang di Portofolio Saya</h1>
            <p class="col-md-8 fs-4">Halo! Saya Naufal, seorang Web Developer yang antusias. Ini adalah halaman utama portofolio saya yang dibuat menggunakan Laravel.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('about') }}" role="button">Tentang Saya</a>
        </div>
    </div>
@endsection

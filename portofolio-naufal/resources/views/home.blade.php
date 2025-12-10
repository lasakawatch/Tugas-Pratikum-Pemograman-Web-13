@extends('layouts.app')

@section('title', 'Home - Markas Naufal')

@section('content')
<div class="p-5 mb-4 rounded-3 text-white position-relative overflow-hidden" style="background: linear-gradient(135deg, #800000 0%, #b30000 100%); box-shadow: 0 10px 20px rgba(0,0,0,0.2);">
    <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: rgba(255,255,255,0.1); border-radius: 50%;"></div>
    <div style="position: absolute; bottom: -30px; left: -30px; width: 150px; height: 150px; background: rgba(255,255,255,0.1); border-radius: 50%;"></div>

    <div class="container-fluid py-5 text-center position-relative" style="z-index: 1;">
        <h1 class="display-4 fw-bold mb-3">Yo, What's Up! Naufal Here! </h1>
        <p class="col-md-8 fs-4 mx-auto mb-4">
            Selamat datang di <i>Digital Playground</i> gue! <br>
            Bukan cuma sekadar ngoding, tapi gue merakit pixel jadi karya seni yang <b>kece badai</b>.
            Error? Itu sih sarapan pagi. Solusi? Itu baru gaya gue!
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a class="btn btn-light btn-lg fw-bold text-danger shadow-sm px-4 py-2" href="{{ route('about') }}" role="button">
                Kepoin Gue Yuk!
            </a>
            <a class="btn btn-outline-light btn-lg fw-bold shadow-sm px-4 py-2" href="{{ route('contact') }}" role="button">
                Ngobrol Sini
            </a>
        </div>
    </div>
</div>

<div class="row align-items-md-stretch g-4">
    <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3 shadow-sm" style="background: linear-gradient(to right, #2c3e50, #4ca1af);">
            <h2 class="fw-bold"><i class="bi bi-bullseye"></i> Visi Misi Gue </h2>
            <p class="fs-5 mt-3">Menjadi developer yang gak cuma jago syntax, tapi juga jago bikin user senyum-senyum sendiri pas pake aplikasinya. <i>User friendly</i> is my middle name!</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="h-100 p-5 bg-white border rounded-3 shadow-sm">
            <h2 class="fw-bold text-danger"><i class="bi bi-tools"></i> Skill Set </h2>
            <p class="fs-5 mt-3">Laravel? Sikat. Bootstrap? Makanan. Kopi? Bahan bakar utama! Siap mengubah ide gila lo jadi realita digital yang <i>smooth</i> abis.</p>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'About - Data Mahasiswa')

@section('content')
<div class="container bg-white p-4 shadow-sm rounded mt-3">
    <h2 class="mb-4 text-danger fw-bold">Exercise</h2>

    <div class="row">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card shadow-sm" style="width: 300px; border: 1px solid #ddd;">
                <div class="card-header bg-white text-center border-0 pt-3">
                    <img src="{{ asset('3.png') }}" alt="Telkom Logo" style="width: 50px;">
                    <h5 class="fw-bold mt-2 mb-0" style="color: #333;">Telkom</h5>
                    <h5 class="fw-bold" style="color: #333;">University</h5>
                </div>

                <div class="card-body p-0 text-center bg-danger position-relative">
                    <div style="background-color: #dc3545; height: 100%; width: 100%; position: absolute; top: 0; left: 0; z-index: 0;"></div>

                    <!-- Photo -->
                    <div class="bg-white p-1 d-inline-block mt-3 mb-3 position-relative" style="z-index: 1;">
                        <img src="{{ asset('5.png') }}" alt="Student Photo" style="width: 120px; height: 160px; object-fit: cover;">
                    </div>

                    <!-- Name & ID -->
                    <div class="text-white pb-3 position-relative" style="z-index: 1;">
                        <h5 class="fw-bold mb-0 text-uppercase">NAUFAL SAIFULLAH</h5>
                        <h4 class="fw-bold mb-0">103062300091</h4>
                        <p class="mb-0 small">S1 Teknologi Informasi</p>
                        <p class="mb-0 small">Kampus Jakarta</p>
                    </div>
                </div>

                <div class="card-footer bg-white text-center border-0 py-3">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=103062300091" alt="QR Code" style="width: 80px;">
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <h4 class="fw-bold mb-4">Data Mahasiswa</h4>
            <div class="row mb-3">
                <div class="col-sm-3 fw-bold">NIM :</div>
                <div class="col-sm-9">103062300091</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 fw-bold">Nama :</div>
                <div class="col-sm-9">Naufal Saifullah Yusuf</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 fw-bold">Tgl Lahir :</div>
                <div class="col-sm-9">09/11/2005</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 fw-bold">Jenis Kelamin :</div>
                <div class="col-sm-9">Laki-Laki</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 fw-bold">Alamat :</div>
                <div class="col-sm-9">Jl. Kyai H. Syahdan No.2, RT.2/RW.11, Palmerah, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 fw-bold">Tinggal di :</div>
                <div class="col-sm-9">Rumah orang tua</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 fw-bold">Hobi :</div>
                <div class="col-sm-9">Technology, Sport</div>
            </div>
        </div>
    </div>
</div>
@endsection

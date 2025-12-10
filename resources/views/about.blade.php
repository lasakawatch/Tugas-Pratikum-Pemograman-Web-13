@extends('layouts.app')

@section('title', 'About - Data Mahasiswa')

@section('content')
<div class="container bg-white p-4 shadow-sm rounded mt-3">
    <h2 class="mb-4 text-danger fw-bold">Exercise</h2>
    
    <div class="row">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card shadow-sm" style="width: 300px; border: 1px solid #ddd;">
                <div class="card-header bg-white text-center border-0 pt-3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Telkom_University_Logo.png" alt="Telkom Logo" style="width: 50px;">
                    <h5 class="fw-bold mt-2 mb-0" style="color: #333;">Telkom</h5>
                    <h5 class="fw-bold" style="color: #333;">University</h5>
                </div>
                <div class="card-body p-0 text-center bg-danger position-relative">
                    <div style="background-color: #dc3545; height: 100%; width: 100%; position: absolute; top: 0; left: 0; z-index: 0;"></div>
                    <div class="bg-white p-1 d-inline-block mt-3 mb-3 position-relative" style="z-index: 1;">
                        <img src="https://via.placeholder.com/150x200?text=Photo" alt="Student Photo" style="width: 120px; height: 160px; object-fit: cover;">
                    </div>
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
            
            <form>
                <!-- NIM -->
                <div class="mb-3 row">
                    <label for="nim" class="col-sm-3 col-form-label fw-bold">NIM :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nim" value="103062300091" readonly>
                    </div>
                </div>

                <!-- Nama -->
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-3 col-form-label fw-bold">Nama :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" value="Naufal Saifullah Yusuf">
                    </div>
                </div>

                <!-- Tgl Lahir -->
                <div class="mb-3 row">
                    <label for="tgl_lahir" class="col-sm-3 col-form-label fw-bold">Tgl Lahir (dd-mm-yyyy) :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tgl_lahir" value="09/11/2005">
                    </div>
                </div>

                <!-- Jenis Kelamin -->
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label fw-bold">Jenis Kelamin :</label>
                    <div class="col-sm-9 d-flex align-items-center">
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Laki-Laki" checked>
                            <label class="form-check-label" for="male">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Perempuan">
                            <label class="form-check-label" for="female">Perempuan</label>
                        </div>
                    </div>
                </div>

                <!-- Alamat -->
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-3 col-form-label fw-bold">Alamat :</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="alamat" rows="3">Jl. Kyai H. Syahdan No.2, RT.2/RW.11, Palmerah, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480</textarea>
                    </div>
                </div>

                <!-- Tinggal di -->
                <div class="mb-3 row">
                    <label for="tinggal_di" class="col-sm-3 col-form-label fw-bold">Tinggal di :</label>
                    <div class="col-sm-9">
                        <select class="form-select" id="tinggal_di">
                            <option value="Rumah orang tua" selected>Rumah orang tua</option>
                            <option value="Kost">Kost</option>
                            <option value="Asrama">Asrama</option>
                        </select>
                    </div>
                </div>

                <!-- Hobi -->
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label fw-bold">Pilih 2 hobi yang paling disukai :</label>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="science">
                            <label class="form-check-label" for="science">Science</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="technology" checked>
                            <label class="form-check-label" for="technology">Technology</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="art">
                            <label class="form-check-label" for="art">Art</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sport" checked>
                            <label class="form-check-label" for="sport">Sport</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-9 offset-sm-3">
                        <button type="submit" class="btn btn-danger" style="background-color: #800000; border-color: #800000;">Submit</button>
                        <button type="reset" class="btn btn-light border">Reset</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection


@extends('layouts.app')

@section('title', 'Contact - Portofolio')

@section('content')
    <h1>Hubungi Saya</h1>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan nama anda">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
        <div class="col-md-6">
            <h3>Kontak Info</h3>
            <p>Email: naufal@example.com</p>
            <p>Telepon: +62 812 3456 7890</p>
            <p>Alamat: Jakarta, Indonesia</p>
            <p><i class="bi bi-github"></i> GitHub: <a href="https://github.com/lasakawatch" target="_blank">https://github.com/lasakawatch</a></p>
        </div>
    </div>
@endsection

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body {
            background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .navbar-custom {
            background: linear-gradient(135deg, #800000, #b30000);
            color: white;
            padding: 20px 30px;
            font-size: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 15px rgba(128, 0, 0, 0.3);
            animation: slideDown 0.5s ease;
        }

        .navbar-custom h2 {
            margin: 0;
            font-weight: 700;
            font-size: 28px;
        }

        .navbar-custom a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .navbar-custom a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .container {
            max-width: 700px;
            margin: 50px auto;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            animation: fadeInUp 0.6s ease;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #800000;
            font-weight: 700;
            font-size: 32px;
        }

        label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        input, textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #ddd;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #800000;
            box-shadow: 0 0 0 3px rgba(128, 0, 0, 0.1);
        }

        button {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #800000, #b30000);
            border: none;
            color: white;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        button:hover {
            background: linear-gradient(135deg, #600000, #900000);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(128, 0, 0, 0.3);
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            color: #800000;
            font-weight: 600;
            padding: 10px 20px;
            border: 2px solid #800000;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background: #800000;
            color: white;
            transform: translateX(-5px);
        }

        @keyframes slideDown {
            from { transform: translateY(-100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<div class="navbar-custom">
    <h2><i class="bi bi-plus-circle me-2"></i>Tambah Produk</h2>
    <div>
        <a href="/products"><i class="bi bi-arrow-left me-1"></i>Kembali</a>
        <a href="/logout"><i class="bi bi-box-arrow-right me-1"></i>Logout</a>
    </div>
</div>

<div class="container">
    <h2><i class="bi bi-plus-square me-2"></i>Tambah Produk Baru</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <label><i class="bi bi-tag me-2"></i>Nama Produk</label>
        <input type="text" name="name" placeholder="Masukkan nama produk" required>

        <label><i class="bi bi-cash me-2"></i>Harga Produk</label>
        <input type="number" name="price" placeholder="Masukkan harga" required>

        <label><i class="bi bi-box me-2"></i>Stok</label>
        <input type="number" name="stock" placeholder="Jumlah stok" required>

        <label><i class="bi bi-shop me-2"></i>Toko</label>
        <input type="text" name="store" placeholder="Nama toko" required>

        <label><i class="bi bi-file-text me-2"></i>Deskripsi</label>
        <textarea name="description" rows="4" placeholder="Deskripsi produk" required></textarea>

        <button type="submit">
            <i class="bi bi-save me-2"></i>Simpan Produk
        </button>
    </form>

    <a href="{{ route('products.index') }}" class="back-btn">
        <i class="bi bi-arrow-left me-2"></i>Kembali ke Daftar Produk
    </a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

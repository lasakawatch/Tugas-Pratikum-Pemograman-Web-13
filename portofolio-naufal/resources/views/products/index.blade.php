<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk - Commercial</title>
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

        /* NAVBAR */
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
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .navbar-custom h2 i {
            margin-right: 10px;
        }

        .nav-links a {
            color: white;
            margin-left: 25px;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        /* CONTAINER */
        .main-container {
            width: 95%;
            max-width: 1400px;
            margin: 40px auto;
            animation: fadeInUp 0.6s ease;
        }

        .header-section {
            background: linear-gradient(135deg, #800000, #b30000);
            color: white;
            padding: 30px 40px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 8px 25px rgba(128, 0, 0, 0.3);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-section h2 {
            margin: 0;
            font-size: 32px;
            font-weight: 700;
        }

        .btn-add {
            background: white;
            color: #800000;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 700;
            transition: all 0.3s ease;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-add:hover {
            background: #f0f0f0;
            color: #800000;
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* PRODUCTS GRID */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: all 0.4s ease;
            border: 2px solid transparent;
            animation: fadeIn 0.8s ease;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(128, 0, 0, 0.15);
            border-color: #800000;
        }

        .product-header {
            display: flex;
            justify-content: space-between;
            align-items: start;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0f0f0;
        }

        .product-id {
            background: linear-gradient(135deg, #800000, #b30000);
            color: white;
            padding: 5px 12px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 14px;
        }

        .product-stock {
            background: #28a745;
            color: white;
            padding: 5px 12px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 13px;
        }

        .product-stock.low {
            background: #ffc107;
            color: #000;
        }

        .product-stock.out {
            background: #dc3545;
        }

        .product-name {
            font-size: 22px;
            font-weight: 700;
            color: #800000;
            margin-bottom: 10px;
        }

        .product-store {
            color: #666;
            font-size: 14px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .product-description {
            color: #555;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 15px;
            min-height: 40px;
        }

        .product-price {
            font-size: 28px;
            font-weight: 800;
            color: #800000;
            margin: 15px 0;
        }

        .product-actions {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }

        .order-section {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .quantity-input {
            width: 70px;
            padding: 8px;
            border: 2px solid #ddd;
            border-radius: 8px;
            text-align: center;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .quantity-input:focus {
            outline: none;
            border-color: #800000;
        }

        .btn-order {
            flex: 1;
            background: linear-gradient(135deg, #28a745, #20c997);
            padding: 10px 20px;
            border: none;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 700;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-order:hover {
            background: linear-gradient(135deg, #218838, #1aa179);
            transform: scale(1.02);
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .btn-edit {
            flex: 1;
            background: #ffc107;
            padding: 10px 20px;
            text-decoration: none;
            color: #000;
            border-radius: 8px;
            font-weight: 700;
            text-align: center;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        .btn-edit:hover {
            background: #e0a800;
            color: #000;
            transform: scale(1.02);
        }

        .btn-delete {
            flex: 1;
            background: #dc3545;
            padding: 10px 20px;
            border: none;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 700;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        .btn-delete:hover {
            background: #c82333;
            transform: scale(1.02);
        }

        /* ANIMATIONS */
        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* EMPTY STATE */
        .empty-state {
            text-align: center;
            padding: 80px 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .empty-state i {
            font-size: 80px;
            color: #ccc;
            margin-bottom: 20px;
        }

        .empty-state h3 {
            color: #666;
            margin-bottom: 10px;
        }

        .empty-state p {
            color: #999;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar-custom">
    <h2><i class="bi bi-box-seam"></i>Dashboard Produk</h2>
    <div class="nav-links">
        <a href="/dashboard"><i class="bi bi-house-door me-1"></i>Home</a>
        <a href="/orders"><i class="bi bi-bag-check me-1"></i>Pesanan Saya</a>
        <a href="/logout"><i class="bi bi-box-arrow-right me-1"></i>Logout</a>
    </div>
</div>

<!-- MAIN CONTAINER -->
<div class="main-container">
    <!-- Header Section -->
    <div class="header-section">
        <h2><i class="bi bi-boxes me-2"></i>Katalog Produk</h2>
        <a href="{{ route('products.create') }}" class="btn-add">
            <i class="bi bi-plus-circle"></i> Tambah Produk
        </a>
    </div>

    @if($products->count() > 0)
    <!-- Products Grid -->
    <div class="products-grid">
        @foreach ($products as $p)
        <div class="product-card">
            <div class="product-header">
                <span class="product-id">#{{ $p->id }}</span>
                <span class="product-stock {{ $p->stock < 10 ? 'low' : '' }} {{ $p->stock == 0 ? 'out' : '' }}">
                    <i class="bi bi-box"></i> {{ $p->stock }} stok
                </span>
            </div>

            <div class="product-name">{{ $p->name }}</div>
            
            <div class="product-store">
                <i class="bi bi-shop text-danger"></i>
                <strong>{{ $p->store }}</strong>
            </div>

            <div class="product-description">{{ $p->description }}</div>

            <div class="product-price">
                Rp {{ number_format($p->price, 0, ',', '.') }}
            </div>

            <div class="product-actions">
                @if($p->stock > 0)
                <form action="/orders" method="POST" class="order-section">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $p->id }}">
                    <input type="number" name="quantity" value="1" min="1" max="{{ $p->stock }}" class="quantity-input">
                    <button class="btn-order" onclick="return confirm('Pesan produk ini?')">
                        <i class="bi bi-cart-plus"></i> Pesan
                    </button>
                </form>
                @else
                <div class="alert alert-danger mb-0" role="alert">
                    <i class="bi bi-exclamation-triangle me-1"></i> Stok Habis
                </div>
                @endif

                <div class="action-buttons">
                    <a href="{{ route('products.edit', $p->id) }}" class="btn-edit">
                        <i class="bi bi-pencil"></i> Edit
                    </a>

                    <form action="{{ route('products.destroy', $p->id) }}" method="POST" style="flex: 1; margin: 0;">
                        @csrf
                        @method('DELETE')
                        <button class="btn-delete" style="width: 100%;" onclick="return confirm('Yakin mau hapus?')">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="empty-state">
        <i class="bi bi-inbox"></i>
        <h3>Belum Ada Produk</h3>
        <p>Mulai tambahkan produk pertama Anda!</p>
        <a href="{{ route('products.create') }}" class="btn-add mt-3">
            <i class="bi bi-plus-circle"></i> Tambah Produk
        </a>
    </div>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

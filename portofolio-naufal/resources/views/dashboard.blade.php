<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commercial Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }

        /* NAVBAR */
        .navbar-custom {
            background: linear-gradient(135deg, #800000, #b30000);
            padding: 20px 30px;
            box-shadow: 0 4px 15px rgba(128, 0, 0, 0.3);
            animation: slideDown 0.5s ease;
        }

        .navbar-custom h2 {
            margin: 0;
            color: white;
            font-weight: 700;
            font-size: 28px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .nav-links a {
            margin-left: 25px;
            color: white;
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

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: white;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-links a:hover::after {
            width: 80%;
        }

        /* CONTAINER */
        .main-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
            animation: fadeInUp 0.6s ease;
        }

        .welcome-card {
            background: linear-gradient(135deg, #800000, #b30000);
            color: white;
            padding: 50px 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(128, 0, 0, 0.3);
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
        }

        .welcome-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        .welcome-card h2 {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
        }

        .welcome-card p {
            font-size: 20px;
            margin-bottom: 0;
            position: relative;
            z-index: 1;
        }

        /* FEATURES GRID */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .feature-card {
            background: white;
            padding: 35px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
            cursor: pointer;
            border: 2px solid transparent;
            animation: fadeIn 0.8s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(128, 0, 0, 0.2);
            border-color: #800000;
        }

        .feature-icon {
            font-size: 60px;
            color: #800000;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.2) rotate(10deg);
        }

        .feature-card h3 {
            color: #800000;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .feature-card p {
            color: #666;
            font-size: 15px;
            margin-bottom: 20px;
        }

        .btn-feature {
            background: linear-gradient(135deg, #800000, #b30000);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .btn-feature:hover {
            background: linear-gradient(135deg, #600000, #900000);
            color: white;
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(128, 0, 0, 0.3);
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

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* STATS SECTION */
        .stats-section {
            margin-top: 40px;
            animation: fadeInUp 0.8s ease;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .stat-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            border-left: 5px solid #800000;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateX(5px);
            box-shadow: 0 6px 20px rgba(128, 0, 0, 0.15);
        }

        .stat-value {
            font-size: 36px;
            font-weight: 800;
            color: #800000;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #666;
            font-size: 14px;
            font-weight: 500;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <div class="navbar-custom d-flex justify-content-between align-items-center">
        <h2><i class="bi bi-shop me-2"></i>Commercial Dashboard</h2>
        <div class="nav-links">
            <a href="/"><i class="bi bi-house-door me-1"></i>Portfolio</a>
            <a href="/dashboard"><i class="bi bi-speedometer2 me-1"></i>Dashboard</a>
            <a href="/products"><i class="bi bi-box-seam me-1"></i>Produk</a>
            <a href="/orders"><i class="bi bi-bag-check me-1"></i>Pesanan</a>
            <a href="/logout"><i class="bi bi-box-arrow-right me-1"></i>Logout</a>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="main-container">
        <!-- Welcome Section -->
        <div class="welcome-card">
            <h2><i class="bi bi-emoji-smile me-3"></i>Selamat Datang!</h2>
            <p>Halo, <strong>{{ session('user')->name ?? 'User' }}</strong> 🎉</p>
        </div>

        <!-- Features Grid -->
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="bi bi-box-seam"></i>
                </div>
                <h3>Kelola Produk</h3>
                <p>Tambah, edit, dan hapus produk dengan mudah</p>
                <a href="/products" class="btn-feature">
                    <i class="bi bi-arrow-right-circle me-2"></i>Lihat Produk
                </a>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="bi bi-bag-check"></i>
                </div>
                <h3>Pesanan Saya</h3>
                <p>Pantau semua pesanan yang telah dibuat</p>
                <a href="/orders" class="btn-feature">
                    <i class="bi bi-arrow-right-circle me-2"></i>Lihat Pesanan
                </a>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="bi bi-person-circle"></i>
                </div>
                <h3>Profil Portfolio</h3>
                <p>Kembali ke halaman portfolio pribadi</p>
                <a href="/" class="btn-feature">
                    <i class="bi bi-arrow-right-circle me-2"></i>Ke Portfolio
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

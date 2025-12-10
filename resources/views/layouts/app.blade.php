<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portofolio Saya')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        main {
            flex: 1;
        }
        .navbar {
            background-color: #800000 !important; /* Telkom Red */
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .nav-link.active {
            font-weight: bold;
            text-decoration: underline;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }
        .telkom-header {
            display: flex;
            align-items: center;
        }
        .telkom-logo {
            height: 50px;
            margin-right: 15px;
            background-color: white; /* Placeholder for logo visibility */
            padding: 5px;
            border-radius: 5px;
        }
        .telkom-text h5, .telkom-text p {
            margin: 0;
            line-height: 1.2;
        }
        .telkom-text h5 {
            font-weight: bold;
            font-size: 1.2rem;
        }
        .telkom-text p {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <!-- Header / Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand telkom-header" href="{{ route('home') }}">
                <!-- Placeholder Logo -->
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Telkom_University_Logo.png" alt="Logo" class="telkom-logo">
                <div class="telkom-text">
                    <h5>Fakultas Informatika</h5>
                    <p>School of Computing</p>
                    <p>Telkom University</p>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} Portofolio Naufal. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

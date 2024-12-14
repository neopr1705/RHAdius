<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHAdius</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

</head>
<body>
    <!-- Header -->
    <header class="main-header">
        <div class="container">
            <h1 class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-img">
            </h1>
            <nav>
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#news">Materi Terkini!</a></li>
                    <li><a href="{{ route('login') }}" class="btn-login">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <p>&copy; 2024 RHAdius. All rights reserved.</p>
        </div>
    </footer>
</body>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</html>

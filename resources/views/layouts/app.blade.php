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
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-img">
            </a>
            <nav>
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#materi">Materi Terkini!</a></li>
                    <li><a href="#login" class="btn-login">Login</a></li>
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
    <!-- Scroll to Top Button -->
<button id="scrollToTopBtn" onclick="scrollToTop()" class="scroll-btn" style="display:none;">
    ↑
</button>
</body>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    // Get the button
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");

    // When the user scrolls down 100px from the top of the document, show the button
    window.onscroll = function() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            scrollToTopBtn.style.display = "block"; // Show the button
        } else {
            scrollToTopBtn.style.display = "none"; // Hide the button
        }
    };

    // Scroll the page back to the top
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth" // Smooth scroll
        });
    }
</script>
</html>

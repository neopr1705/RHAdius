<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHAdius</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
        <!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

</head>
<body>
    <!-- Header -->
    <header class="main-header">
        <div class="container">
            <a href="{{ route('home') }}" class="logo" style="display: flex; align-items: center; text-decoration: none;">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-img" style="height: 40px; width:40px; margin-right: 8px;">RHAdius
            </a>
            
            <nav>
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}#welcome">Home</a></li>
                    <li><a href="{{ route('home') }}#materi">Materi Terkini!</a></li>
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

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    // Import SweetAlert2 dan Toastr jika diperlukan
// Pastikan CDN SweetAlert2 sudah ada di layout atau di file blade.

document.addEventListener('DOMContentLoaded', function () {
    // Scroll to Top dan Sticky Header
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");
    const header = document.querySelector(".main-header");
    const sticky = header.offsetTop;

    // Menampilkan tombol scroll ke atas jika scroll lebih dari 100px
    window.onscroll = function () {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            scrollToTopBtn.style.display = "block"; // Tampilkan tombol
        } else {
            scrollToTopBtn.style.display = "none"; // Sembunyikan tombol
        }

        // Efek Sticky Header
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    };

    // Scroll ke atas dengan smooth scroll
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }

    scrollToTopBtn.addEventListener('click', scrollToTop);

    // Fade-in efek untuk gambar
    var elements = document.querySelectorAll('.fade-in-img');
    elements.forEach(function (element) {
        element.style.opacity = '1';
        element.style.transition = 'opacity 2s ease-in';
    });

    // Efek hover pada tombol
    var button = document.getElementById('backButton');
    if (button) {
        button.addEventListener('mouseover', function () {
            button.style.backgroundColor = '#383d63';
        });

        button.addEventListener('mouseout', function () {
            button.style.backgroundColor = '#66a9ff';
        });
    }

    // SweetAlert untuk login sukses
    if(session('login_success'))
        Swal.fire({
            icon: 'success',
            title: 'Login Berhasil',
            text: '{{ session("login_success") }}',
            showConfirmButton: false,
            timer: 1500
        });
    endif
});

</script>
</body>
</html>

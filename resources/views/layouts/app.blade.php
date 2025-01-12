<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHAdius</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
</body>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    // Get the button
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");

    // When the user scrolls down 100px from the top of the document, show the button
    window.onscroll = function () {
    // Sticky Header
    stickyHeader();

    // Scroll to Top Button
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
<script>

const header = document.querySelector(".main-header");
const sticky = header.offsetTop;

function stickyHeader() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky"); // Tambahkan kelas sticky
    } else {
        header.classList.remove("sticky"); // Hapus kelas sticky
    }
}
</script>
<script>
    //Script potensi.blade.php
    // Fungsi untuk memberi efek fade-in saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function () {
        var elements = document.querySelectorAll('.fade-in-img');
        elements.forEach(function (element) {
            element.style.opacity = '1'; // Mengubah opacity gambar menjadi 1 untuk fade-in
        });
    });

     // Tombol hover effect
     var button = document.getElementById('backButton');
        button.addEventListener('mouseover', function () {
            button.style.backgroundColor = '#383d63'; // Ganti warna tombol saat hover
        });

        button.addEventListener('mouseout', function () {
            button.style.backgroundColor = '#66a9ff'; // Kembalikan warna tombol saat mouse keluar
        });
</script>
</html>

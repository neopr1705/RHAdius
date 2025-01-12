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

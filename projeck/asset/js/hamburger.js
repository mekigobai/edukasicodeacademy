// hamburger.js
document.addEventListener("DOMContentLoaded", function () {
    const hamburgerBtn = document.getElementById("hamburger-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    const hamburgerIcon = document.getElementById("hamburger-icon");
    const hamburgerPath = document.getElementById("hamburger-path");

    // Toggle menu ketika tombol hamburger di klik
    hamburgerBtn.addEventListener("click", function () {
        mobileMenu.classList.toggle("open");

        // Ubah ikon hamburger menjadi simbol X dan sebaliknya
        if (mobileMenu.classList.contains("open")) {
            hamburgerPath.setAttribute("d", "M6 18L18 6M6 6l12 12"); // Ganti ke simbol X
        } else {
            hamburgerPath.setAttribute("d", "M4 6h16M4 12h16M4 18h16"); // Ganti kembali ke hamburger
        }
    });
});

<?php 
// header.php
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edukasicodeacademy</title>

    <!-- Link ke Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.7/dist/tailwind.min.css" rel="stylesheet">

    <!-- Link ke Custom Stylesheets -->
    <link rel="stylesheet" href="asset/styles.css">
    <link rel="stylesheet" href="src/input.css">
    <link rel="stylesheet" href="asset/hamburger.css">
    <link rel="stylesheet" href="src/output.css">

    <!-- Link ke TailwindCSS CDN (Jika Diperlukan) -->
    <script src="https://cdn.tailwindcss.com" defer></script>

    <!-- Link ke Custom JavaScript -->
    <script src="asset/js/hamburger.js" defer></script>
</head>

<body class="bg-gray-50">

    <!-- Header Section -->
    <header class="bg-blue-600 shadow-lg fixed w-full top-0 z-10">

        <!-- Navigasi Utama -->
        <nav class="container mx-auto flex justify-between items-center p-2">
            <!-- Mengurangi padding di sini -->

            <!-- Logo dan Nama (Desktop) -->
            <div class="flex items-center space-x-4">
                <div class="shrink-0">
                    <img src="asset/logo.png" alt="Logo Edukasi Code Academy" class="h-8 w-auto" />
                </div>
                <!-- Nama Logo di Desktop -->
                <div class="text-white font-bold text-xl hidden md:block">
                    Edukasi Code Academy
                </div>
                <!-- Nama Logo di Mobile (Tampilan Mobile) -->
                <div class="text-white font-bold text-xl md:hidden">
                    Edukasi Code Academy
                </div>
            </div>

            <!-- Menu Desktop (Menampilkan di layar besar) -->
            <div class="hidden md:flex space-x-6">
                <a href="index.php" class="text-white hover:text-blue-300 transition duration-300">Home</a>
                <a href="about.php" class="text-white hover:text-blue-300 transition duration-300">About</a>
                <a href="services.php" class="text-white hover:text-blue-300 transition duration-300">Services</a>
                <a href="portfolio.php" class="text-white hover:text-blue-300 transition duration-300">Portfolio</a>
                <a href="blog.php" class="text-white hover:text-blue-300 transition duration-300">Blog</a>
                <a href="contact.php" class="text-white hover:text-blue-300 transition duration-300">Contact</a>
                <a href="login.php" class="text-white hover:text-blue-300 transition duration-300">Login</a>
            </div>

            <!-- Tombol Hamburger (Mobile) -->
            <div class="md:hidden flex items-center opacity-[0.1] hover:opacity-100 transition duration-800">
                <button id="hamburger-btn" class="text-white focus:outline-none">
                    <svg id="hamburger-icon" class="h-6 w-6 opacity-100" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path id="hamburger-path" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

        </nav>

        <!-- Menu Dropdown untuk Mobile (Tampil saat Hamburger diklik) -->
        <div id="mobile-menu"
            class="md:hidden p-4 rounded-lg bg-opacity-0 hidden transition-all duration-300 ease-in-out transform">
            <ul class="space-y-4">
                <li><a href="index.php" class="block text-black hover:text-blue-500 transition">Home</a></li>
                <li><a href="about.php" class="block text-black hover:text-blue-500 transition">About</a></li>
                <li><a href="services.php" class="block text-black hover:text-blue-500 transition">Services</a></li>
                <li><a href="portfolio.php" class="block text-black hover:text-blue-500 transition">Portfolio</a></li>
                <li><a href="blog.php" class="block text-black hover:text-blue-500 transition">Blog</a></li>
                <li><a href="contact.php" class="block text-black hover:text-blue-500 transition">Contact</a></li>
                <li><a href="login.php" class="block text-black hover:text-blue-500 transition">Login</a></li>
            </ul>
        </div>

    </header>


    <style>
    /* Transisi untuk menu hamburger pada perangkat mobile */
    #mobile-menu {
        display: none;
    }

    #mobile-menu.open {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    #mobile-menu {
        opacity: 0;
        transform: translateY(-20px);
        transition: all 0.3s ease-in-out;
    }
    </style>

</body>

</html>
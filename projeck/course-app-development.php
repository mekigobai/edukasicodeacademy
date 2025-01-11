<?php include('header.php'); ?>

<!-- Link ke Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Hero Section -->
<section class="hero bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 text-white py-24">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-extrabold mb-4">Kursus Pengembangan Aplikasi</h1>
        <p class="text-xl font-medium mb-8">Pelajari cara membuat aplikasi mobile dan desktop menggunakan berbagai framework dan bahasa pemrograman terkini.</p>
        <a href="register.php" class="bg-white text-indigo-600 px-8 py-3 rounded-md hover:bg-gray-200 transition ease-in-out">Daftar Sekarang</a>
    </div>
</section>

<!-- Course Details -->
<section class="bg-gray-50 py-24">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-semibold text-gray-800 mb-12">Deskripsi Kursus</h2>
        <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
            Kursus Pengembangan Aplikasi ini dirancang untuk memberi Anda keterampilan praktis dalam mengembangkan aplikasi mobile dan desktop. Anda akan belajar menggunakan framework dan alat modern seperti React Native, Flutter, dan lainnya untuk membuat aplikasi yang responsif dan fungsional.
        </p>
    </div>
</section>

<!-- Course Modules -->
<section class="bg-white py-24">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-semibold text-gray-800 mb-12">Modul Kursus</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Modul 1 -->
            <div class="bg-indigo-600 text-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold mb-4">Modul 1: Pengenalan Pengembangan Aplikasi</h3>
                <p class="text-lg mb-4">Pelajari konsep dasar pengembangan aplikasi mobile dan desktop serta alat dan framework yang digunakan oleh pengembang profesional.</p>
            </div>

            <!-- Modul 2 -->
            <div class="bg-indigo-600 text-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold mb-4">Modul 2: Pengembangan Aplikasi dengan React Native</h3>
                <p class="text-lg mb-4">Pelajari bagaimana menggunakan React Native untuk membuat aplikasi mobile yang dapat dijalankan di platform Android dan iOS.</p>
            </div>

            <!-- Modul 3 -->
            <div class="bg-indigo-600 text-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold mb-4">Modul 3: Pengembangan Aplikasi dengan Flutter</h3>
                <p class="text-lg mb-4">Flutter memungkinkan Anda membuat aplikasi yang cepat dan responsif dengan satu kode dasar untuk berbagai platform.</p>
            </div>

            <!-- Modul 4 -->
            <div class="bg-indigo-600 text-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold mb-4">Modul 4: Backend untuk Aplikasi Mobile</h3>
                <p class="text-lg mb-4">Pelajari cara membuat backend aplikasi yang solid untuk mendukung aplikasi mobile Anda menggunakan berbagai alat dan framework backend.</p>
            </div>

            <!-- Modul 5 -->
            <div class="bg-indigo-600 text-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold mb-4">Modul 5: Penyelesaian Proyek Akhir</h3>
                <p class="text-lg mb-4">Bangun aplikasi akhir yang memanfaatkan keterampilan yang telah Anda pelajari selama kursus ini.</p>
            </div>
        </div>
    </div>
</section>

<!-- Meet The Instructor Section -->
<section class="bg-gray-50 py-24">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-semibold text-gray-800 mb-12">Instruktur Kursus</h2>
        <div class="flex justify-center">
            <div class="w-1/3">
                <img src="images/tutor-app-development.jpg" alt="Instruktur Kursus" class="rounded-full w-32 h-32 mx-auto mb-4">
                <h3 class="text-2xl font-semibold text-gray-800">Steve Johnson</h3>
                <p class="text-gray-600">Steve adalah seorang pengembang aplikasi berpengalaman dengan keahlian dalam membangun aplikasi mobile dan desktop menggunakan berbagai framework dan bahasa pemrograman.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="bg-white py-24">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-semibold text-gray-800 mb-12">Apa Kata Peserta Kami</h2>
        <div class="flex justify-center space-x-8">
            <!-- Testimonial 1 -->
            <div class="bg-gray-200 rounded-lg p-6 w-80">
                <p class="text-lg text-gray-600 mb-4">"Kursus ini membantu saya membangun aplikasi mobile pertama saya! Materinya sangat lengkap dan aplikatif."</p>
                <p class="font-semibold text-indigo-600">- Rachel K.</p>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-gray-200 rounded-lg p-6 w-80">
                <p class="text-lg text-gray-600 mb-4">"Instruktur sangat berpengalaman, dan saya belajar banyak tentang pengembangan aplikasi menggunakan React Native dan Flutter."</p>
                <p class="font-semibold text-indigo-600">- David W.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 text-white py-24">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-semibold mb-4">Bangun Aplikasi Hebat Anda Sekarang!</h2>
        <p class="text-lg mb-8">Daftar sekarang dan pelajari bagaimana membuat aplikasi mobile dan desktop menggunakan teknologi terkini!</p>
        <a href="register.php" class="bg-white text-indigo-600 px-8 py-3 rounded-md hover:bg-gray-200 transition ease-in-out">Daftar Sekarang</a>
    </div>
</section>

<?php include('footer.php'); ?>
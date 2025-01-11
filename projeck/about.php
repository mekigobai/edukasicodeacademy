<?php include('header.php'); ?>

<!-- Link ke Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css"></script>

<!-- Hero Section dengan Posisi Teks di Kiri, Gambar di Kanan -->
<section id="hero"
    class="py-12 bg-gradient-to-r from-teal-300 to-indigo-600 min-h-screen flex items-center justify-center">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
        <!-- Left Section: Image -->
        <div class="md:w-1/2 mb-8 md:mb-0">
            <img src="asset/desain.svg" alt="Edukasi Code Academy Platform Pembelajaran Teknologi"
                class="w-full h-auto rounded-lg shadow-xl">
        </div>

        <!-- Right Section: Text -->
        <div class="text-left md:w-1/2 mb-8 md:mb-0">
            <!-- Teks dengan dua warna -->
            <h1
                class="text-5xl sm:text-6xl font-extrabold leading-tight mb-6 animate__animated animate__fadeIn animate__delay-0.5s">
                <span class="text-blue-900">Edukasi CO</span> <span class="text-white">DE AcaDemy</span>
            </h1>
            <p
                class="text-xl sm:text-2xl text-gray-200 max-w-3xl mx-auto animate__animated animate__fadeIn animate__delay-1s">
                Edukasi Code Academy adalah platform kursus online terkemuka yang mempersiapkan individu dengan
                keterampilan praktis untuk sukses di dunia teknologi.
            </p>
        </div>
    </div>
</section>

<!-- About Section with Visi & Misi -->
<section class="about py-16 bg-gray-100 relative overflow-hidden">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-12">Visi & Misi Kami</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-12">
            <!-- Visi -->
            <div class="p-8 bg-white rounded-lg shadow-xl transform hover:scale-105 transition duration-300">
                <h3 class="text-2xl font-semibold text-indigo-600 mb-4">Visi</h3>
                <p class="text-gray-700">
                    Menjadi platform pembelajaran online terkemuka yang mempersiapkan generasi masa depan dengan
                    keterampilan praktis di bidang teknologi.
                </p>
            </div>
            <!-- Misi -->
            <div class="p-8 bg-white rounded-lg shadow-xl transform hover:scale-105 transition duration-300">
                <h3 class="text-2xl font-semibold text-indigo-600 mb-4">Misi</h3>
                <ul class="list-disc pl-6 text-gray-700">
                    <li>Menyediakan kursus berkualitas tinggi yang dapat diakses oleh siapa saja di seluruh dunia.</li>
                    <li>Menghubungkan siswa dengan mentor berpengalaman di industri teknologi.</li>
                    <li>Memberikan pengalaman belajar yang fleksibel dan menyenangkan untuk setiap individu.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Our Story Section with Animated Timeline -->
<section class="py-6 bg-gradient-to-r from-teal-300 to-indigo-600 min-h-screen flex items-center justify-center">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl sm:text-4xl font-semibold mb-12">Perjalanan Kami</h2>
        <div class="flex flex-col md:flex-row items-center justify-between space-y-12 md:space-y-0 md:space-x-8">
            <!-- Timeline Card 1 -->
            <div
                class="timeline-card bg-white p-6 rounded-lg shadow-xl w-full max-w-xs md:max-w-sm animate__animated animate__fadeIn animate__delay-0.5s">
                <h3 class="text-xl font-semibold text-indigo-600">2021</h3>
                <p class="text-gray-700">Peluncuran pertama platform Edu Academy dengan kursus pertama kami dalam
                    Pemrograman Web.</p>
            </div>
            <!-- Timeline Card 2 -->
            <div
                class="timeline-card bg-white p-6 rounded-lg shadow-xl w-full max-w-xs md:max-w-sm animate__animated animate__fadeIn animate__delay-1s">
                <h3 class="text-xl font-semibold text-indigo-600">2022</h3>
                <p class="text-gray-700">Ekspansi ke kursus desain grafis dan pengembangan aplikasi seluler,
                    memperkenalkan mentor berpengalaman di bidangnya.</p>
            </div>
            <!-- Timeline Card 3 -->
            <div
                class="timeline-card bg-white p-6 rounded-lg shadow-xl w-full max-w-xs md:max-w-sm animate__animated animate__fadeIn animate__delay-1.5s">
                <h3 class="text-xl font-semibold text-indigo-600">2023</h3>
                <p class="text-gray-700">Edu Academy mendapatkan lebih dari 100.000 pengguna terdaftar dari berbagai
                    negara.</p>
            </div>
        </div>
    </div>
</section>

<!-- Company Gallery Section -->
<section class="company-gallery py-16 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl sm:text-4xl font-semibold mb-8">Galeri Perusahaan</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <div
                class="gallery-item bg-white shadow-lg rounded-lg overflow-hidden animate__animated animate__fadeInUp animate__delay-0.5s">
                <img src="https://via.placeholder.com/400x300" alt="Perusahaan 1 - Teknologi"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-indigo-600">Perusahaan 1</h3>
                    <p class="text-gray-700">Deskripsi singkat tentang perusahaan ini.</p>
                </div>
            </div>
            <div
                class="gallery-item bg-white shadow-lg rounded-lg overflow-hidden animate__animated animate__fadeInUp animate__delay-1s">
                <img src="https://via.placeholder.com/400x300" alt="Perusahaan 2 - Teknologi"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-indigo-600">Perusahaan 2</h3>
                    <p class="text-gray-700">Deskripsi singkat tentang perusahaan ini.</p>
                </div>
            </div>
            <div
                class="gallery-item bg-white shadow-lg rounded-lg overflow-hidden animate__animated animate__fadeInUp animate__delay-1.5s">
                <img src="https://via.placeholder.com/400x300" alt="Perusahaan 3 - Teknologi"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-indigo-600">Perusahaan 3</h3>
                    <p class="text-gray-700">Deskripsi singkat tentang perusahaan ini.</p>
                </div>
            </div>
            <div
                class="gallery-item bg-white shadow-lg rounded-lg overflow-hidden animate__animated animate__fadeInUp animate__delay-2s">
                <img src="https://via.placeholder.com/400x300" alt="Perusahaan 4 - Teknologi"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-indigo-600">Perusahaan 4</h3>
                    <p class="text-gray-700">Deskripsi singkat tentang perusahaan ini.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mitra Kami Section -->
<section class="partners py-12 bg-gray-200">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl sm:text-4xl font-semibold mb-8">Mitra Kami</h2>
        <div class="flex justify-center space-x-8">
            <!-- Gambar mitra lokal 1 -->
            <img src="assets/images/mitra1.png" alt="Mitra 1 - Teknologi"
                class="h-12 animate__animated animate__fadeInUp animate__delay-0.5s">
            <!-- Gambar mitra lokal 2 -->
            <img src="assets/images/mitra2.png" alt="Mitra 2 - Teknologi"
                class="h-12 animate__animated animate__fadeInUp animate__delay-1s">
            <!-- Gambar mitra lokal 3 -->
            <img src="assets/images/mitra3.png" alt="Mitra 3 - Teknologi"
                class="h-12 animate__animated animate__fadeInUp animate__delay-1.5s">
            <!-- Gambar mitra lokal 4 -->
            <img src="assets/images/mitra4.png" alt="Mitra 4 - Teknologi"
                class="h-12 animate__animated animate__fadeInUp animate__delay-2s">
            <!-- Gambar mitra lokal 5 -->
            <img src="assets/images/mitra5.png" alt="Mitra 5 - Teknologi"
                class="h-12 animate__animated animate__fadeInUp animate__delay-2.5s">
            <!-- Gambar mitra lokal 6 -->
            <img src="assets/images/mitra6.png" alt="Mitra 6 - Teknologi"
                class="h-12 animate__animated animate__fadeInUp animate__delay-3s">
        </div>
    </div>
</section>


<?php include('footer.php'); ?>
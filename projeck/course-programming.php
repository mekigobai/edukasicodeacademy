<?php include('header.php'); ?>

<!-- Link ke Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Hero Section -->
<section class="hero bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 text-white py-24">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-extrabold mb-4">Kursus Pemrograman</h1>
        <p class="text-xl font-medium mb-8">Pelajari berbagai bahasa pemrograman untuk membangun aplikasi web dan perangkat lunak dari dasar hingga mahir.</p>
        <a href="register.php" class="bg-white text-indigo-600 px-8 py-3 rounded-md hover:bg-gray-200 transition ease-in-out">Daftar Sekarang</a>
    </div>
</section>

<!-- Course Details -->
<section class="bg-gray-50 py-24">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-semibold text-gray-800 mb-12">Deskripsi Kursus</h2>
        <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
            Kursus Pemrograman ini akan mengajarkan Anda bahasa pemrograman yang paling banyak digunakan dalam pengembangan perangkat lunak. Mulai dari HTML, CSS, JavaScript, hingga Python, Anda akan belajar untuk membangun aplikasi dan sistem web yang tangguh dan dapat diterapkan di dunia kerja.
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
                <h3 class="text-2xl font-semibold mb-4">Modul 1: Pengenalan HTML dan CSS</h3>
                <p class="text-lg mb-4">Pelajari dasar-dasar HTML dan CSS untuk membangun struktur dan desain halaman web pertama Anda.</p>
            </div>

            <!-- Modul 2 -->
            <div class="bg-indigo-600 text-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold mb-4">Modul 2: JavaScript untuk Pemula</h3>
                <p class="text-lg mb-4">Pelajari dasar-dasar JavaScript untuk menambah interaktivitas pada halaman web Anda.</p>
            </div>

            <!-- Modul 3 -->
            <div class="bg-indigo-600 text-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold mb-4">Modul 3: Pengantar Python</h3>
                <p class="text-lg mb-4">Mulai belajar Python, bahasa pemrograman yang digunakan untuk pengembangan aplikasi dan analisis data.</p>
            </div>

            <!-- Modul 4 -->
            <div class="bg-indigo-600 text-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold mb-4">Modul 4: Pengembangan Aplikasi Web dengan JavaScript</h3>
                <p class="text-lg mb-4">Pelajari framework JavaScript seperti React atau Angular untuk mengembangkan aplikasi web dinamis.</p>
            </div>

            <!-- Modul 5 -->
            <div class="bg-indigo-600 text-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold mb-4">Modul 5: Penyelesaian Proyek Akhir</h3>
                <p class="text-lg mb-4">Buat aplikasi web lengkap dengan menggunakan pengetahuan yang telah Anda pelajari selama kursus ini.</p>
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
                <img src="images/tutor-programming.jpg" alt="Instruktur Kursus" class="rounded-full w-32 h-32 mx-auto mb-4">
                <h3 class="text-2xl font-semibold text-gray-800">John Doe</h3>
                <p class="text-gray-600">John adalah seorang pengembang perangkat lunak berpengalaman dengan lebih dari 10 tahun pengalaman di industri teknologi. Ia telah bekerja dengan berbagai bahasa pemrograman dan teknologi, serta berfokus pada pengembangan web dan aplikasi berbasis JavaScript.</p>
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
                <p class="text-lg text-gray-600 mb-4">"Kursus ini memberikan saya pemahaman yang sangat baik tentang dasar-dasar pemrograman. Instruktornya sangat membantu!"</p>
                <p class="font-semibold text-indigo-600">- Sarah T.</p>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-gray-200 rounded-lg p-6 w-80">
                <p class="text-lg text-gray-600 mb-4">"Saya bisa membuat aplikasi web pertama saya setelah mengikuti kursus ini. Penjelasan materi sangat jelas dan praktis."</p>
                <p class="font-semibold text-indigo-600">- Mark W.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 text-white py-24">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-semibold mb-4">Siap untuk Memulai Karier Anda dalam Pemrograman?</h2>
        <p class="text-lg mb-8">Daftar sekarang dan pelajari keterampilan pemrograman yang dapat membawa Anda menuju karier yang sukses!</p>
        <a href="register.php" class="bg-white text-indigo-600 px-8 py-3 rounded-md hover:bg-gray-200 transition ease-in-out">Daftar Sekarang</a>
    </div>
</section>

<?php include('footer.php'); ?>
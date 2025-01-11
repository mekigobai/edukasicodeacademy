<?php include('header.php'); ?>

<?php
// Daftar logo partners
$partners = [
    "https://via.placeholder.com/150x50",
    "https://via.placeholder.com/150x50",
    "https://via.placeholder.com/150x50",
    "https://via.placeholder.com/150x50",
    "https://via.placeholder.com/150x50",
    "https://via.placeholder.com/150x50",
];
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursus Online Berkualitas di Edukasi Code Academy</title>

    <!-- Meta Deskripsi untuk SEO -->
    <meta name="description"
        content="Edukasi Code Academy menawarkan berbagai kursus pemrograman, desain UI/UX, pemasaran digital, dan pengembangan aplikasi. Mulai perjalanan belajar Anda sekarang!">

    <!-- Meta Keywords untuk SEO -->
    <meta name="keywords"
        content="kursus online, pemrograman, desain UI/UX, pemasaran digital, pengembangan aplikasi, edukasi digital">

    <!-- Meta Author -->
    <meta name="author" content="Edukasi Code Academy">

    <link rel="stylesheet" href="style.css">

    <!-- Link ke Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
    /* Animasi untuk logo bergerak */
    @keyframes marquee {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    /* Animasi scroll untuk container logo */
    .animate-marquee {
        animation: marquee 20s linear infinite;
    }

    /* Efek hover untuk logo */
    .logo:hover {
        transform: scale(1.1);
        filter: brightness(1.2);
    }

    /* Hover effect untuk kursus */
    .course-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>

<body>
    <!-- Hero Section dengan background gradient -->
    <section class="py-6 bg-gradient-to-r from-teal-300 to-indigo-600 min-h-screen flex items-center justify-center">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between">
            <!-- Foto di atas (untuk tampilan mobile) -->
            <div class="w-full md:hidden mt-6 mb-6">
                <img src="asset/company.svg" alt="Edukasi Code Academy" class="w-full h-auto rounded-lg shadow-xl">
            </div>

            <!-- Teks dan Tombol -->
            <div class="w-full md:w-1/2 text-center md:text-left">
                <!-- Teks dengan dua warna -->
                <h1 class="text-5xl sm:text-6xl md:text-5xl font-extrabold leading-tight mb-6 text-white">
                    <span class="text-white">Selamat Datang Edukasi</span> di <span class="text-blue-900"> CoDe
                        AcaDemy</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl font-medium mb-8 text-white">Kursus edukasi online untuk masa
                    depan yang cerah. Mulai perjalanan belajar Anda sekarang!</p>
                <div class="mt-6 sm:mt-8 space-y-4 sm:space-y-0 md:flex md:space-x-4">
                    <a href="login.php"
                        class="bg-white text-indigo-600 px-8 py-3 rounded-md hover:bg-gray-200 transition ease-in-out">Masuk
                        ke Dashboard</a>
                    <a href="register.php"
                        class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-md hover:bg-white hover:text-indigo-600 transition ease-in-out">Daftar
                        Sekarang</a>
                </div>
            </div>

            <!-- Foto di sebelah kanan (akan muncul pada layar besar) -->
            <div class="hidden md:block md:w-1/2 mt-6 sm:mt-0">
                <img src="asset/company.svg" alt="Edukasi Code Academy" class="w-full h-auto rounded-lg shadow-xl">
            </div>
        </div>
    </section>

    <!-- Konten Kursus -->
    <section class="bg-gray-50 py-12 md:py-24">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl sm:text-4xl font-semibold text-gray-800 mb-12">Kursus Kami</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Kursus Pemrograman -->
                <div
                    class="course-card bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <img src="asset/pengembang.svg"
                        alt="Kursus Pemrograman untuk Menguasai Pengembangan Perangkat Lunak"
                        class="w-full h-48 sm:h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl md:text-2xl font-semibold text-gray-800 mb-4">Kursus Pemrograman</h3>
                        <p class="text-gray-600 mb-4">Pelajari berbagai bahasa pemrograman yang dapat membantu Anda
                            menguasai pengembangan perangkat lunak dari dasar hingga mahir.</p>
                        <a href="course-programming.php" class="text-indigo-600 font-semibold hover:underline">Pelajari
                            Lebih Lanjut</a>
                    </div>
                </div>

                <!-- Kursus Desain UI/UX -->
                <div
                    class="course-card bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <img src="asset/wayframe.svg" alt="Kursus Desain UI/UX untuk Pengalaman Pengguna yang Lebih Baik"
                        class="w-full h-48 sm:h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl md:text-2xl font-semibold text-gray-800 mb-4">Kursus Desain UI/UX</h3>
                        <p class="text-gray-600 mb-4">Bangun keterampilan desain untuk menciptakan pengalaman pengguna
                            yang lebih baik melalui antarmuka yang menarik dan intuitif.</p>
                        <a href="course-ui-ux.php" class="text-indigo-600 font-semibold hover:underline">Pelajari Lebih
                            Lanjut</a>
                    </div>
                </div>

                <!-- Kursus Pemasaran Digital -->
                <div
                    class="course-card bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <img src="asset/undraw_user_flow_re_bvfx.svg"
                        alt="Kursus Pemasaran Digital untuk Meningkatkan Strategi Online"
                        class="w-full h-48 sm:h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl md:text-2xl font-semibold text-gray-800 mb-4">Kursus Pemasaran Digital</h3>
                        <p class="text-gray-600 mb-4">Pelajari bagaimana mengoptimalkan pemasaran online Anda dengan
                            berbagai strategi digital yang efektif dan terukur.</p>
                        <a href="course-digital-marketing.php"
                            class="text-indigo-600 font-semibold hover:underline">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

                <!-- Kursus Pengembangan Aplikasi -->
                <div
                    class="course-card bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <img src="asset/mobile.svg" alt="Kursus Pengembangan Aplikasi Web dan Mobile"
                        class="w-full h-48 sm:h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl md:text-2xl font-semibold text-gray-800 mb-4">Kursus Pengembangan Aplikasi
                        </h3>
                        <p class="text-gray-600 mb-4">Kuasai pengembangan aplikasi untuk web dan mobile dengan alat
                            terbaru dan teknik pengembangan modern.</p>
                        <a href="course-app-development.php"
                            class="text-indigo-600 font-semibold hover:underline">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Logo Partners Section -->
    <section class="partners py-12 bg-gray-200">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl sm:text-4xl font-semibold mb-8">Mitra Kami</h2>
            <!-- Logo container dengan animasi scroll -->
            <div class="partners-logos flex space-x-8 sm:space-x-16 overflow-hidden animate-marquee">
                <?php foreach ($partners as $partner): ?>
                <img src="<?php echo $partner; ?>" alt="Logo Partner Edukasi Code Academy"
                    class="h-12 sm:h-16 transition-transform duration-300 logo">
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Tombol WhatsApp -->
    <section id="whatsapp-chat" class="fixed bottom-5 right-5 z-50">
        <a href="https://wa.me/6281234567890" target="_blank"
            class="flex items-center justify-center bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition duration-300 ease-in-out transform hover:scale-110">
            <i class="fab fa-whatsapp text-2xl"></i>
        </a>
    </section>

</body>

</html>

<?php include('footer.php'); ?>
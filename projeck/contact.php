<!-- contact.php -->
<?php include('header.php'); ?>

<!-- Link ke Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<main class="bg-gray-100 text-gray-900">
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-16">
        <div class="max-w-7xl mx-auto text-center px-4">
            <h1 class="text-4xl font-bold mb-4">Kontak Kami</h1>
            <p class="text-lg mb-8">Kami siap membantu Anda! Isi formulir di bawah ini untuk menghubungi kami atau lihat lokasi kami di peta.</p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact-form" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Hubungi Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Formulir Kontak -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg">
                    <form action="submit_contact.php" method="POST">
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-semibold text-gray-700">Nama</label>
                            <input type="text" id="name" name="name" class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md" required>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                            <input type="email" id="email" name="email" class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md" required>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="block text-sm font-semibold text-gray-700">Pesan</label>
                            <textarea id="message" name="message" class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md" rows="4" required></textarea>
                        </div>

                        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-3 px-8 rounded-md font-semibold transition duration-300">
                            Kirim Pesan
                        </button>
                    </form>
                </div>

                <!-- Alamat dan Informasi Kontak -->
                <div class="text-center md:text-left">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Alamat Kami</h3>
                    <p class="text-lg text-gray-600 mb-4">Jl. Raya No. 123, Jakarta, Indonesia</p>
                    <p class="text-lg text-gray-600 mb-4">Telepon: +62 123 456 789</p>
                    <p class="text-lg text-gray-600 mb-4">Email: contact@perusahaan.com</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Map Section -->
    <section id="map" class="py-20">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Lokasi Kami</h2>
            <!-- Embed Google Map -->
            <div class="w-full h-80 rounded-lg overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126078.04314572235!2d106.6482242219148!3d-6.217243968053912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f58e68f4bb75%3A0x69b2b3b4973a1e4f!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1636140591211!5m2!1sen!2sid"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
</main>

<?php include('footer.php'); ?>
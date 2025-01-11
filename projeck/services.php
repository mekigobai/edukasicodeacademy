<?php include('header.php'); ?>

<main class="max-w-25xl mx-auto py-25 px-25">
    <!-- Link ke Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Judul Halaman (Full Screen Hero) -->
    <section id="hero"
        class="py-6 bg-gradient-to-r from-teal-400 to-indigo-600 min-h-screen flex items-center justify-center text-center">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6">
            <!-- Left Section: Image -->
            <div class="md:w-1/2 mb-8 md:mb-0">
                <img src="asset/undraw_undraw_applications_vaxx_-1-_nj9n.svg"
                    alt="Edukasi Code Academy Platform Pembelajaran Teknologi"
                    class="w-full h-auto rounded-lg shadow-xl object-cover">
            </div>

            <!-- Title Section -->
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-5xl sm:text-6xl font-extrabold leading-tight mb-6 animate__animated animate__fadeI
                    animate__delay-0.5s">
                    <span class=" text-white">Our Profes</span><span class="text-blue-900"> sional Services</span>

                </h1>
                <p class=" text-lg text-white mb-6">Explore the services we offer to enhance your digital
                    presence and
                    grow your business.</p>
                <a href="#services" class="text-blue-500 font-semibold hover:text-blue-700 mt-4 inline-block">Learn
                    More</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-12 bg-gray-50">
        <h2 class="text-3x1 font-semibold text-center  text-gray-900 mb-12">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1: Web Development -->
            <div
                class="bg-white shadow-xl rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="relative">
                    <img src="https://via.placeholder.com/600x400" alt="Web Development"
                        class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black opacity-40"></div>
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">Web Development</h2>
                    <p class="text-gray-600 mb-4">We create modern, responsive websites that are not only beautiful but
                        also tailored to your business needs, ensuring user satisfaction and better engagement.</p>
                    <a href="#" class="text-blue-500 font-semibold hover:text-blue-700">Learn More</a>
                </div>
            </div>

            <!-- Service 2: UI/UX Design -->
            <div
                class="bg-white shadow-xl rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="relative">
                    <img src="https://via.placeholder.com/600x400" alt="UI/UX Design" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black opacity-40"></div>
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">UI/UX Design</h2>
                    <p class="text-gray-600 mb-4">Our expert designers ensure seamless and intuitive user interfaces
                        that create a delightful experience, from the first interaction to the last click.</p>
                    <a href="#" class="text-blue-500 font-semibold hover:text-blue-700">Explore Our Work</a>
                </div>
            </div>

            <!-- Service 3: Digital Marketing -->
            <div
                class="bg-white shadow-xl rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="relative">
                    <img src="https://via.placeholder.com/600x400" alt="Digital Marketing"
                        class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black opacity-40"></div>
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">Digital Marketing</h2>
                    <p class="text-gray-600 mb-4">Grow your online presence with our tailored marketing strategies. We
                        help you increase visibility, drive traffic, and convert leads into loyal customers.</p>
                    <a href="#" class="text-blue-500 font-semibold hover:text-blue-700">Get Started</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('footer.php'); ?>
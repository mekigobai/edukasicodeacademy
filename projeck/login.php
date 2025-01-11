<!-- login.php -->
<?php include('header.php'); ?>

<section class="login py-6 bg-gradient-to-r from-teal-300 to-indigo-600 min-h-screen flex items-center justify-center">
    <!-- Link ke Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="container mx-auto flex items-center justify-center px-4 md:px-8 max-w-4xl">
        <!-- Gambar Kiri -->
        <div
            class="hidden md:block w-1/3 bg-gradient-to-r from-indigo-500 to-teal-300 p-6 rounded-lg shadow-xl transform transition-all duration-500 ease-in-out">
            <img src="asset/email.svg" alt="Login Image" class="w-full h-auto object-cover rounded-lg shadow-xl">
        </div>

        <!-- Form Login Kanan -->
        <div
            class="w-full md:w-2/3 lg:w-2/5 bg-white shadow-lg rounded-lg p-6 md:p-8 transform transition-transform duration-300 ease-in-out hover:scale-105">
            <h1 class="text-3xl font-semibold text-center text-gray-900 mb-6">Login</h1>
            <form action="login_process.php" method="POST">
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold text-lg">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500 transition-all duration-300 ease-in-out transform hover:scale-105">
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold text-lg">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500 transition-all duration-300 ease-in-out transform hover:scale-105">
                </div>

                <!-- Button -->
                <div class="mb-4">
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-indigo-500 to-teal-500 text-white py-3 rounded-md hover:bg-gradient-to-l from-indigo-600 to-teal-600 transition duration-300 ease-in-out transform hover:scale-105">
                        Login
                    </button>
                </div>

                <!-- Additional Links -->
                <div class="text-center text-sm text-gray-600">
                    <a href="forget.php" class="text-teal-500 hover:text-teal-700 transition duration-300">Forgot
                        Password?</a>
                </div>
                <div class="text-center text-sm text-gray-600 mt-4">
                    Don't have an account? <a href="register.php"
                        class="text-teal-500 hover:text-teal-700 transition duration-300">Sign up</a>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
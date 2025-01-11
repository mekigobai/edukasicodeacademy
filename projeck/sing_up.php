<!-- signup.php -->
<?php include('header.php'); ?>

<section class="signup py-16 bg-gray-50 min-h-screen flex items-center justify-center">
    <!-- Link ke Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="container mx-auto flex items-center justify-center max-w-lg">
        <!-- Form Pendaftaran -->
        <div class="w-full bg-white shadow-xl rounded-lg p-8 md:p-12">
            <h1 class="text-3xl font-bold text-center text-gray-900 mb-6">Sign Up</h1>
            <form action="signup_process.php" method="POST">
                <!-- Username -->
                <div class="mb-6">
                    <label for="username" class="block text-gray-700 font-semibold">Username</label>
                    <input type="text" id="username" name="username" required
                        class="w-full p-4 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Email -->
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-semibold">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full p-4 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-semibold">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full p-4 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <label for="confirm_password" class="block text-gray-700 font-semibold">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required
                        class="w-full p-4 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Button -->
                <div class="flex items-center justify-between mb-6">
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-105">
                        Sign Up
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
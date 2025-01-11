<!-- forgot_password.php -->
<?php include('header.php'); ?>

<section class="forgot-password py-16 bg-gray-50 min-h-screen flex items-center justify-center">
    <!-- Link ke Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="container mx-auto flex items-center justify-center max-w-lg">
        <!-- Form Lupa Password -->
        <div class="w-full bg-white shadow-xl rounded-lg p-8 md:p-12">
            <h1 class="text-3xl font-bold text-center text-gray-900 mb-6">Reset Password</h1>
            <form action="reset_password_process.php" method="POST">
                <!-- Email -->
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-semibold">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full p-4 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Button -->
                <div class="flex items-center justify-between mb-6">
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-105">
                        Send Reset Link
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
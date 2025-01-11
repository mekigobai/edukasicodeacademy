<!-- register.php -->
<?php include('header.php'); ?>

<section class="register py-16 bg-gray-50">
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="container mx-auto max-w-md">
        <h1 class="text-3xl font-bold text-center">Daftar</h1>
        <form action="register_process.php" method="POST" class="bg-white shadow-lg p-8 rounded-md mt-8">
            <label for="username" class="block text-gray-700">Username</label>
            <input type="text" id="username" name="username" required class="w-full p-3 mt-2 border border-gray-300 rounded-md">

            <label for="email" class="block text-gray-700 mt-4">Email</label>
            <input type="email" id="email" name="email" required class="w-full p-3 mt-2 border border-gray-300 rounded-md">

            <label for="password" class="block text-gray-700 mt-4">Password</label>
            <input type="password" id="password" name="password" required class="w-full p-3 mt-2 border border-gray-300 rounded-md">

            <button type="submit" class="w-full bg-blue-600 text-white py-3 mt-6 rounded-md hover:bg-blue-700">Daftar</button>
        </form>
    </div>
</section>

<?php include('footer.php'); ?>
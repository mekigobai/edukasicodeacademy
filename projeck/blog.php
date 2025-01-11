<!-- blog.php -->
<?php include('header.php'); ?>

<!-- Link ke Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<main class="max-w-7xl mx-auto py-12 px-6">
    <h1 class="text-4xl font-semibold text-center mb-8">Blog</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Blog Post 1 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="images/sample1.jpg" alt="Blog Post 1" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-2">Post Title 1</h2>
                <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.</p>
                <a href="#" class="text-indigo-600 hover:underline">Read More</a>
            </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="images/sample2.jpg" alt="Blog Post 2" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-2">Post Title 2</h2>
                <p class="text-gray-700 mb-4">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius.</p>
                <a href="#" class="text-indigo-600 hover:underline">Read More</a>
            </div>
        </div>

        <!-- Blog Post 3 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="images/sample3.jpg" alt="Blog Post 3" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-2">Post Title 3</h2>
                <p class="text-gray-700 mb-4">Suspendisse potenti. Nullam in urna eu justo ullamcorper ultricies.</p>
                <a href="#" class="text-indigo-600 hover:underline">Read More</a>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>
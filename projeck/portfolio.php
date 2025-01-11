<!-- portfolio.php -->
<?php include('header.php'); ?>

<main class="max-w-7xl mx-auto py-12 px-6">
    <!-- Link ke Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <h1 class="text-4xl font-semibold text-center mb-8">Our Portfolio</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Project 1 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="images/project1.jpg" alt="Project 1" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-2">Project 1</h2>
                <p class="text-gray-700 mb-4">This is a description of the project. It could be a website, app, or design project.</p>
                <a href="#" class="text-indigo-600 hover:underline">View Project</a>
            </div>
        </div>

        <!-- Project 2 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.7/dist/tailwind.min.css" rel="stylesheet">
            <script src="https://cdn.tailwindcss.com"></script>
            <img src="images/project2.jpg" alt="Project 2" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-2">Project 2</h2>
                <p class="text-gray-700 mb-4">Another project description showcasing our design and development capabilities.</p>
                <a href="#" class="text-indigo-600 hover:underline">View Project</a>
            </div>
        </div>

        <!-- Project 3 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="images/project3.jpg" alt="Project 3" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-2">Project 3</h2>
                <p class="text-gray-700 mb-4">Explore our previous works in design and development that helped businesses grow.</p>
                <a href="#" class="text-indigo-600 hover:underline">View Project</a>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>
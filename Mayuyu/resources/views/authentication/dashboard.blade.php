<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50 text-gray-900">

    <!-- HERO SECTION -->
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 opacity-80"></div>
        <div class="relative z-10 text-center py-24 px-5 text-white">
            <h1 class="text-5xl font-extrabold drop-shadow-lg">Hi, I'm <span class="text-yellow-300">Your Name</span></h1>
            <p class="text-xl mt-4 opacity-90">A Web Developer passionate about creating modern digital experiences</p>

            <div class="mt-8 flex justify-center space-x-4">
                <a href="#projects" class="px-6 py-3 bg-white text-gray-800 font-semibold rounded-lg shadow hover:bg-gray-200 transition">
                    View Projects
                </a>
                <a href="#contact" class="px-6 py-3 border border-white font-semibold rounded-lg hover:bg-white hover:text-gray-800 transition">
                    Contact Me
                </a>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="max-w-5xl mx-auto mt-16 px-6">
        <h2 class="text-3xl font-bold mb-4">About Me</h2>
        <p class="text-lg leading-relaxed text-gray-700">
            I’m a passionate web developer with experience in Laravel, PHP, JavaScript, and modern front-end frameworks.
            I love building clean, user-friendly, and visually appealing websites.
        </p>
    </section>

    <!-- SKILLS SECTION -->
    <section class="max-w-5xl mx-auto mt-16 px-6">
        <h2 class="text-3xl font-bold mb-6">Skills</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
            <div class="bg-white p-5 shadow rounded-lg text-center font-semibold">HTML</div>
            <div class="bg-white p-5 shadow rounded-lg text-center font-semibold">CSS</div>
            <div class="bg-white p-5 shadow rounded-lg text-center font-semibold">JavaScript</div>
            <div class="bg-white p-5 shadow rounded-lg text-center font-semibold">PHP</div>
            <div class="bg-white p-5 shadow rounded-lg text-center font-semibold">Laravel</div>
            <div class="bg-white p-5 shadow rounded-lg text-center font-semibold">MySQL</div>
            <div class="bg-white p-5 shadow rounded-lg text-center font-semibold">Git</div>
            <div class="bg-white p-5 shadow rounded-lg text-center font-semibold">TailwindCSS</div>
        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="projects" class="max-w-6xl mx-auto mt-20 px-6">
        <h2 class="text-3xl font-bold mb-8">Projects</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transform transition">
                <div class="h-40 bg-gray-200"></div>
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-2">Project One</h3>
                    <p class="text-gray-600">A modern web application built with Laravel.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transform transition">
                <div class="h-40 bg-gray-200"></div>
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-2">Project Two</h3>
                    <p class="text-gray-600">A responsive portfolio using TailwindCSS.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transform transition">
                <div class="h-40 bg-gray-200"></div>
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-2">Project Three</h3>
                    <p class="text-gray-600">A full-stack CRUD system with authentication.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="max-w-4xl mx-auto mt-20 px-6 mb-20">
        <h2 class="text-3xl font-bold mb-4">Contact Me</h2>
        <p class="mb-6 text-gray-700">Let’s work together! Feel free to reach out.</p>

        <form class="space-y-4">
            <input type="text" placeholder="Your Name" class="w-full p-3 border rounded-lg">
            <input type="email" placeholder="Your Email" class="w-full p-3 border rounded-lg">
            <textarea placeholder="Your Message" rows="5" class="w-full p-3 border rounded-lg"></textarea>
            <button class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Send Message</button>
        </form>
    </section>

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-white text-center py-6">
        © {{ date('Y') }} Your Name — All Rights Reserved
    </footer>

</body>
</html>

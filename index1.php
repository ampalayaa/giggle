<?php
require 'includes/connect.php';

echo "Database connection successful!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sapforce AI - SaaS Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6366F1'
                    },
                    boxShadow: {
                        'glass': '0 8px 32px 0 rgba(31, 38, 135, 0.37)'
                    },
                    backdropBlur: {
                        sm: '4px'
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeIn {
            0% {opacity: 0; transform: translateY(20px);}
            100% {opacity: 1; transform: translateY(0);}
        }
        .animate-fadeIn {
            animation: fadeIn 1.2s ease forwards;
        }
        /* Parallax effect on background */
        .parallax {
            background-image: url('https://via.placeholder.com/1920x1080'); /* Use a high-quality image */
            height: 100vh;
            background-size: cover;
            background-position: center;
            filter: brightness(70%);
        }
    </style>
</head>
<body class="bg-gray-950 text-white font-sans">

    <!-- Navbar -->
    <nav class="flex justify-between items-center p-6 mx-4 backdrop-blur-sm bg-gray-800/30 rounded-2xl shadow-glass relative">
        <div class="text-2xl font-bold text-white">Sapforce</div>
        <div class="space-x-8 hidden md:flex">
            <a href="#home" class="hover:text-indigo-400 transition duration-300 ease-in-out">Home</a>
            <a href="#features" class="hover:text-indigo-400 transition duration-300 ease-in-out">Features</a>
            <a href="#pricing" class="hover:text-indigo-400 transition duration-300 ease-in-out">Pricing</a>
            <a href="#about" class="hover:text-indigo-400 transition duration-300 ease-in-out">About</a>
        </div>
        <button class="bg-primary hover:bg-indigo-600 transition px-5 py-2 rounded-full text-white font-semibold shadow-lg">Get Started</button>
    </nav>

    <!-- Hero Section with Parallax -->
    <section id="home" class="parallax flex flex-col-reverse md:flex-row items-center justify-between max-w-7xl mx-auto px-6 md:px-0 mt-10 animate-fadeIn">
        <div class="w-full md:w-1/2 text-center md:text-left">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6 text-white animate-fadeIn">AI-powered Automation<br>For Modern Business</h1>
            <p class="text-gray-400 mb-8 animate-fadeIn">Boost productivity with our intelligent AI solutions for customer insights, workflow automation, and more.</p>
            <button class="bg-primary hover:bg-indigo-600 transition px-6 py-3 rounded-full text-white font-semibold shadow-lg">Start Free Trial</button>
        </div>
        <div class="w-full md:w-1/2">
            <video autoplay loop muted class="rounded-3xl shadow-2xl transform hover:scale-105 transition duration-500">
                <source src="https://cdn.dribbble.com/userupload/5999271/file/small-d9347dd70a10e4e3612d9d31555e7e85.mp4" type="video/mp4" alt="AI SaaS Mockup" class="rounded-3xl shadow-2xl transform hover:scale-105 transition duration-500">
            </video>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="mt-32 mx-4 max-w-full md:max-w-7xl px-6 md:px-0">
        <h2 class="text-3xl md:text-5xl font-bold text-center mb-14 animate-fadeIn">Core Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="p-8 bg-gray-900 rounded-3xl shadow-xl hover:shadow-indigo-500/20 transition duration-300 hover:-translate-y-2">
                <h3 class="text-xl font-semibold mb-4">Smart Insights</h3>
                <p class="text-gray-400">Get actionable business intelligence, powered by AI-driven analysis.</p>
            </div>
            <div class="p-8 bg-gray-900 rounded-3xl shadow-xl hover:shadow-indigo-500/20 transition duration-300 hover:-translate-y-2">
                <h3 class="text-xl font-semibold mb-4">Automated Workflows</h3>
                <p class="text-gray-400">Automate repetitive tasks and optimize your team's efficiency.</p>
            </div>
            <div class="p-8 bg-gray-900 rounded-3xl shadow-xl hover:shadow-indigo-500/20 transition duration-300 hover:-translate-y-2">
                <h3 class="text-xl font-semibold mb-4">Seamless Integration</h3>
                <p class="text-gray-400">Integrate easily with your existing tools and services.</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="pricing" class="mt-32 mx-4 max-w-full md:max-w-5xl mx-auto text-center px-6 md:px-0 animate-fadeIn">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to transform your business?</h2>
        <p class="text-gray-400 mb-8">Join thousands of companies already harnessing AI to accelerate growth and productivity.</p>
        <button class="bg-primary hover:bg-indigo-600 transition px-8 py-4 rounded-full text-white text-lg font-semibold shadow-lg">Get Started Today</button>
    </section>

    <!-- Footer -->
    <footer class="mt-32 py-12 border-t border-gray-800 text-center text-gray-600 text-sm animate-fadeIn">
        © 2025 Sapforce. All rights reserved.
    </footer>

</body>
</html>

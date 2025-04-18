<?php
require 'includes/connect.php';

echo "Database connection successful!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduwerks - E-Learning Platform</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="font-sans text-gray-800">
    <!-- Navigation -->
    <nav class="bg-white py-4 px-6 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <div class="text-3xl font-bold text-blue-600">
                    <span class="text-orange-500">Edu</span>werks
                </div>
            </div>
            <div class="hidden lg:flex space-x-8">
                <a href="#" class="font-medium text-gray-700 hover:text-blue-600">Home</a>
                <a href="#" class="font-medium text-gray-700 hover:text-blue-600">About</a>
                <a href="#" class="font-medium text-gray-700 hover:text-blue-600">Courses</a>
                <a href="#" class="font-medium text-gray-700 hover:text-blue-600">Teachers</a>
                <a href="#" class="font-medium text-gray-700 hover:text-blue-600">Contact</a>
            </div>
            <div class="flex items-center space-x-4">
                <button class="bg-blue-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-blue-700 transition">Login</button>
                <button class="bg-orange-500 text-white px-6 py-2 rounded-lg font-medium hover:bg-orange-600 transition">Sign Up</button>
            </div>
            <div class="lg:hidden">
                <button class="text-gray-700">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-50 to-purple-50 py-12 lg:py-20">
        <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 mb-10 lg:mb-0">
                <h1 class="text-4xl lg:text-5xl font-bold mb-6">
                    Discover a New Way to <span class="text-blue-600">Learn</span> Online
                </h1>
                <p class="text-lg text-gray-600 mb-8">
                    Eduwerks is a modern learning platform that helps students master new skills through interactive courses and expert guidance.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <button class="bg-blue-600 text-white px-8 py-3 rounded-lg font-medium hover:bg-blue-700 transition">Get Started</button>
                    <button class="border border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-medium hover:bg-blue-50 transition">Explore Courses</button>
                </div>
            </div>
            <div class="lg:w-1/2">
                <img src="/api/placeholder/600/400" alt="Students learning online" class="rounded-2xl shadow-xl">
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-blue-50 p-6 rounded-xl text-center">
                    <div class="text-blue-600 text-4xl font-bold mb-2">10k+</div>
                    <div class="text-gray-700">Active Students</div>
                </div>
                <div class="bg-orange-50 p-6 rounded-xl text-center">
                    <div class="text-orange-500 text-4xl font-bold mb-2">200+</div>
                    <div class="text-gray-700">Expert Instructors</div>
                </div>
                <div class="bg-purple-50 p-6 rounded-xl text-center">
                    <div class="text-purple-600 text-4xl font-bold mb-2">500+</div>
                    <div class="text-gray-700">Online Courses</div>
                </div>
                <div class="bg-green-50 p-6 rounded-xl text-center">
                    <div class="text-green-600 text-4xl font-bold mb-2">95%</div>
                    <div class="text-gray-700">Success Rate</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Courses -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Popular Courses</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Explore our most in-demand courses designed to help you develop new skills and achieve your goals.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Course 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/200" alt="Web Development" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm">Web Dev</div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="/api/placeholder/40/40" alt="Instructor" class="w-10 h-10 rounded-full">
                            <div class="ml-3">
                                <p class="text-sm text-gray-600">Jane Cooper</p>
                                <div class="flex text-yellow-400 text-sm">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="text-gray-600 ml-1">4.5</span>
                                </div>
                            </div>
                        </div>
                        <h3 class="font-bold text-xl mb-2">Complete Web Development Bootcamp</h3>
                        <p class="text-gray-600 mb-4">Learn HTML, CSS, JavaScript, React and Node.js to become a full-stack developer.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-blue-600 font-bold text-lg">$89.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700">Enroll Now</button>
                        </div>
                    </div>
                </div>

                <!-- Course 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/200" alt="Data Science" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4 bg-purple-600 text-white px-3 py-1 rounded-full text-sm">Data Science</div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="/api/placeholder/40/40" alt="Instructor" class="w-10 h-10 rounded-full">
                            <div class="ml-3">
                                <p class="text-sm text-gray-600">Robert Fox</p>
                                <div class="flex text-yellow-400 text-sm">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="text-gray-600 ml-1">5.0</span>
                                </div>
                            </div>
                        </div>
                        <h3 class="font-bold text-xl mb-2">Data Science and Machine Learning</h3>
                        <p class="text-gray-600 mb-4">Master data analysis, visualization and machine learning algorithms.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-blue-600 font-bold text-lg">$94.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700">Enroll Now</button>
                        </div>
                    </div>
                </div>

                <!-- Course 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/200" alt="Digital Marketing" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm">Marketing</div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="/api/placeholder/40/40" alt="Instructor" class="w-10 h-10 rounded-full">
                            <div class="ml-3">
                                <p class="text-sm text-gray-600">Leslie Alexander</p>
                                <div class="flex text-yellow-400 text-sm">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span class="text-gray-600 ml-1">4.0</span>
                                </div>
                            </div>
                        </div>
                        <h3 class="font-bold text-xl mb-2">Digital Marketing Masterclass</h3>
                        <p class="text-gray-600 mb-4">Learn SEO, social media marketing, email campaigns and growth strategies.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-blue-600 font-bold text-lg">$79.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700">Enroll Now</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-10">
                <button class="border border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-medium hover:bg-blue-50 transition">
                    View All Courses <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Why Choose Eduwerks?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    We provide a comprehensive learning experience with features designed to help you succeed.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6">
                    <div class="bg-blue-100 text-blue-600 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-laptop-code text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-3">Interactive Learning</h3>
                    <p class="text-gray-600">Engage with interactive lessons, quizzes, and hands-on projects.</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="bg-orange-100 text-orange-600 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-tie text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-3">Expert Instructors</h3>
                    <p class="text-gray-600">Learn from industry professionals with years of practical experience.</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="bg-purple-100 text-purple-600 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-certificate text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-3">Certification</h3>
                    <p class="text-gray-600">Earn recognized certificates to boost your professional profile.</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="bg-green-100 text-green-600 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-headset text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-3">24/7 Support</h3>
                    <p class="text-gray-600">Get help whenever you need it with our dedicated support team.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">What Our Students Say</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Hear from our students about how Eduwerks has helped them achieve their learning goals.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6">
                        "The web development course was exactly what I needed to transition into a tech career. The hands-on projects were challenging but rewarding."
                    </p>
                    <div class="flex items-center">
                        <img src="/api/placeholder/48/48" alt="Student" class="w-12 h-12 rounded-full">
                        <div class="ml-4">
                            <h4 class="font-bold">Michael Johnson</h4>
                            <p class="text-sm text-gray-600">Web Developer</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6">
                        "I've tried several online platforms, but Eduwerks offers the best balance of theory and practice. The instructors are incredibly knowledgeable."
                    </p>
                    <div class="flex items-center">
                        <img src="/api/placeholder/48/48" alt="Student" class="w-12 h-12 rounded-full">
                        <div class="ml-4">
                            <h4 class="font-bold">Sarah Williams</h4>
                            <p class="text-sm text-gray-600">Data Analyst</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-600 mb-6">
                        "The digital marketing course helped me double my client base within 3 months. The strategies I learned were practical and effective."
                    </p>
                    <div class="flex items-center">
                        <img src="/api/placeholder/48/48" alt="Student" class="w-12 h-12 rounded-full">
                        <div class="ml-4">
                            <h4 class="font-bold">David Chen</h4>
                            <p class="text-sm text-gray-600">Marketing Consultant</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Start Your Learning Journey?</h2>
            <p class="max-w-2xl mx-auto mb-8">
                Join thousands of students who are already improving their skills and advancing their careers with Eduwerks.
            </p>
            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center">
                <button class="bg-white text-blue-600 px-8 py-3 rounded-lg font-medium hover:bg-gray-100 transition">
                    Get Started
                </button>
                <button class="border border-white text-white px-8 py-3 rounded-lg font-medium hover:bg-blue-700 transition">
                    View Courses
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="text-2xl font-bold mb-4">
                        <span class="text-orange-500">Edu</span>werks
                    </div>
                    <p class="text-gray-400 mb-4">
                        Transforming lives through accessible and quality education.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Courses</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Instructors</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="font-bold mb-4">Categories</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Web Development</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Data Science</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Digital Marketing</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Business</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Design</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="font-bold mb-4">Contact</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-2 text-gray-400"></i>
                            <span class="text-gray-400">123 Education St, Knowledge City</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-2 text-gray-400"></i>
                            <span class="text-gray-400">+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2 text-gray-400"></i>
                            <span class="text-gray-400">info@eduwerks.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Eduwerks. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencil Bitz - Your Publishing Partner</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3708edbb88.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

    <style>
        /* Optional custom styles for a more modern card effect and button */
        .service-card-modern:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .register-button {
            transition: all 0.3s ease;
        }

        .register-button:hover {
            letter-spacing: 0.5px;
        }
    </style>

</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 font-['Poppins']">
    <!-- Header -->
    <?php require_once "navbar.php"; ?>
    <!-- Hero Section -->

    <!-- Services Section -->
    <section id="services" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Services</h2>
                <p class="text-gray-600 text-lg">Comprehensive publishing solutions for authors at every stage</p>
            </div>
            <div class="container-services overflow-hidden py-3">
                <div class="max-w-7xl mx-auto">

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                        <?php
                        $services = [
                            ['title' => 'Textbook Publications', 'contact' => 'Karthik Alagusamy', 'phone' => '+91 7200741307', 'icon' => 'book-open', 'color' => 'indigo'],
                            ['title' => 'Patent Grant Support', 'contact' => 'Rajkumar Kalyanasundaram', 'phone' => '+91 8468058012', 'icon' => 'award', 'color' => 'purple'],
                            ['title' => 'Edited Book Chapters', 'contact' => 'Harini Selvam', 'phone' => '+91 9629476711', 'icon' => 'edit-3', 'color' => 'pink'],
                            ['title' => 'Ph.D. Assistance', 'contact' => 'Sangeetha Subramaniam', 'phone' => '+91 9944304713', 'icon' => 'graduation-cap', 'color' => 'yellow'],
                            ['title' => 'SCI & Scopus Publications', 'contact' => 'Sangeetha Subramaniam', 'phone' => '+91 9944304713', 'icon' => 'file-text', 'color' => 'sky'],
                            ['title' => 'Educational Events Organizing', 'contact' => 'Aishwarya Murugan', 'phone' => '+91 9600581734', 'icon' => 'calendar', 'color' => 'red'],
                        ];

                        foreach ($services as $service) {
                            $base_color = $service['color'];
                            $bg_class = "bg-{$base_color}-50";
                            $icon_bg_class = "bg-{$base_color}-200";
                            $icon_hover_class = "group-hover:bg-{$base_color}-400";
                            $icon_text_class = "text-{$base_color}-700";
                            echo "
                            <div class='group {$bg_class} rounded-xl p-4 shadow-lg hover:shadow-2xl transition-all duration-500 text-center flex flex-col items-center justify-start h-full service-card-modern'>
                                <div class='relative flex justify-center mb-4 mt-2'>
                                    <div class='w-14 h-14 {$icon_bg_class} rounded-full flex items-center justify-center {$icon_hover_class} transition-colors transform group-hover:scale-105'>
                                        <i data-lucide='{$service['icon']}' class='w-7 h-7 {$icon_text_class}'></i>
                                    </div>
                                </div>
                                <h3 class='text-lg font-extrabold text-gray-800 mb-2 mt-auto relative z-10'>{$service['title']}</h3>
                                <p class='text-gray-600 text-sm font-medium mb-1'>{$service['contact']}</p>
                                <a href='tel:{$service['phone']}' class='text-{$base_color}-600 text-xs font-semibold hover:text-{$base_color}-800 transition-colors'>
                                    {$service['phone']}
                                </a>
                            </div>
                        ";
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 bg-gradient-to-br from-gray-50 to-indigo-50">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Trusted by Authors Worldwide</h2>
                <p class="text-gray-600 text-lg">Hear what our authors have to say about their publishing experience</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-6 rounded-2xl shadow-lg border-t-4 border-indigo-500 transition duration-300 hover:shadow-xl">
                    <div class="flex flex-col items-center mb-4">
                        <div class="w-44 h-50 bg-gradient-to-br from-indigo-100 to-purple-100 rounded-lg overflow-hidden mb-4 shadow-md">
                            <div class="w-full h-full flex items-center justify-center text-indigo-500">
                                <img src="assets/img/testimonials//new/3.jpeg" alt="">
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 text-center">Book Title</h3>
                        <p class="text-sm text-indigo-600 font-medium mt-1">Auther Name</p>
                        <p class="text-xs text-gray-500 mt-1"> Department</p>
                        <p class="text-xs text-gray-500">Designation</p>
                        <p class="text-xs text-gray-500">College And Location</p>
                    </div>

                    <hr class="my-4 border-gray-200">

                    <p class="text-gray-700 italic mb-4">
                        The printing quality and cover design exceeded my expectations. Pencil Bitz made the entire publishing process smooth and stress-free. The delivery was prompt and the books arrived in perfect condition."
                    </p>

                    <div class="flex justify-between items-center text-sm text-gray-500">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-6 rounded-2xl shadow-lg border-t-4 border-purple-500 transition duration-300 hover:shadow-xl">
                    <div class="flex flex-col items-center mb-4">
                        <div class="w-44 h-50 bg-gradient-to-br from-purple-100 to-pink-100 rounded-lg overflow-hidden mb-4 shadow-md">
                            <div class="w-full h-full flex items-center justify-center text-purple-500">
                                <img src="assets/img/testimonials/new/2.jpeg" alt="">
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 text-center">Book Title</h3>
                        <p class="text-sm text-indigo-600 font-medium mt-1">Auther Name</p>
                        <p class="text-xs text-gray-500 mt-1"> Department</p>
                        <p class="text-xs text-gray-500">Designation</p>
                        <p class="text-xs text-gray-500">College And Location</p>
                    </div>

                    <hr class="my-4 border-gray-200">

                    <p class="text-gray-700 italic mb-4">
                        "I'm extremely satisfied with the publishing quality and the team's responsiveness. They provided valuable suggestions that improved my book's market appeal. The delivery was faster than expected!"
                    </p>

                    <div class="flex justify-between items-center text-sm text-gray-500">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-6 rounded-2xl shadow-lg border-t-4 border-blue-500 transition duration-300 hover:shadow-xl">
                    <div class="flex flex-col items-center mb-4">
                        <div class="w-44 h-50 bg-gradient-to-br from-blue-100 to-cyan-100 rounded-lg overflow-hidden mb-4 shadow-md">
                            <div class="w-full h-full flex items-center justify-center text-blue-500">
                                <img src="assets/img/testimonials/new/1.jpeg" alt="">
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 text-center">Book Title</h3>
                        <p class="text-sm text-indigo-600 font-medium mt-1">Auther Name</p>
                        <p class="text-xs text-gray-500 mt-1"> Department</p>
                        <p class="text-xs text-gray-500">Designation</p>
                        <p class="text-xs text-gray-500">College And Location</p>
                    </div>

                    <hr class="my-4 border-gray-200">

                    <p class="text-gray-700 italic mb-4">
                        "The printing quality and cover design are excellent. While the book contains comprehensive theoretical content, I'd appreciate more practical problems in future editions. Overall, a great publishing experience."
                    </p>

                    <div class="flex justify-between items-center text-sm text-gray-500">
                        <span class="text-yellow-400">★★★★☆</span>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="reviews.html" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-8 py-3 rounded-lg transition duration-300 shadow-md">
                    View All Reviews
                </a>
            </div>
        </div>
    </section>


    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-indigo-600 to-purple-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Publish Your Book?</h2>
            <p class="text-xl max-w-2xl mx-auto mb-10 opacity-90">Join thousands of authors who have trusted Pencil Bitz with their publishing needs.</p>
            <a href="contact.php" class="bg-white text-indigo-600 hover:bg-gray-100 text-lg font-semibold px-8 py-4 rounded-xl shadow-lg transform hover:scale-105 transition duration-300 inline-block">
                Start Your Publishing Journey
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once "footer.php"; ?>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <script>
        lucide.createIcons();
    </script>

</body>

</html>
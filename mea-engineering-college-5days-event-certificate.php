<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pencil Bitz">

    <title>Event Page</title>

    <link rel="shortcut icon" href="assets/img/PB-new-logo.png" type="image/x-icon">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
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

<body>

    <?php require_once "navbar.php"; ?>
    <div style="max-width: 1520px;" class="relative container mx-auto px-4">

        <div class="container-services overflow-hidden py-3">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-4xl font-extrabold text-center mb-2 text-gray-900"> Our Services</h2>

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

        <hr class=" border-gray-200">

        <div class="container-event overflow-hidden py-2">
            <div class="max-w-6xl mx-auto bg-white rounded-xl shadow-2xl p-6 lg:p-10 border border-gray-100">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-12 mb-6 lg:mb-0">
                        <div class="d-flex justify-content-center align-items-start h-auto">
                            <img src="assets/img/upcomeing-event/mea-engineering-5days-nov.jpg" alt="Event Image" class="w-full max-h-[700px] object-cover rounded-xl shadow-xl transition-transform duration-500 hover:scale-[1.01]">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="event-content px-2">
                            <h3 class="text-lg font-bold text-gray-500 tracking-wider uppercase mb-1">College</h3>
                            <h1 class="font-extrabold text-3xl text-gray-800 leading-tight mb-4 border-l-4 border-red-500 pl-3">
                                MEA  ENGINEERING COLLEGE
                            </h1>
                            <h3 class="text-lg font-bold text-gray-500 tracking-wider uppercase mb-1">Titel</h3>
                            <h2 class="text-2xl font-semibold text-red-600 mb-6 pl-3">Data Science</h2>

                            <ul class="space-y-4 mb-8 text-gray-700 font-medium">
                                <h3 class="text-lg font-bold text-gray-500 tracking-wider uppercase mb-1">Details</h3>
                                <li class="flex items-start">
                                    <i class="fas fa-calendar-alt text-sky-500 text-xl w-6 mt-1 mr-3 flex-shrink-0"></i>
                                    <div>
                                        <strong class="text-gray-800">Date:</strong> 01 to 05 November 2025
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-clock text-sky-500 text-xl w-6 mt-1 mr-3 flex-shrink-0"></i>
                                    <div>
                                        <strong class="text-gray-800">Time:</strong> 6:00PM To 8:00PM
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-map-marker-alt text-sky-500 text-xl w-6 mt-1 mr-3 flex-shrink-0"></i>
                                    <div>
                                        <strong class="text-gray-800">Location:</strong> malappuram, Kerala
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-user-tie text-sky-500 text-xl w-6 mt-1 mr-3 flex-shrink-0"></i>
                                    <div>
                                        <strong class="text-gray-800">Speaker Contact:</strong> <a href="tel:+919600581734" class="text-blue-600 hover:text-blue-500 underline">+91 77088 28673</a>
                                    </div>
                                </li>
                            </ul>

                            <div class="flex flex-wrap gap-4">
                                <a href="#" class="register-button inline-flex items-center justify-center bg-red-600 text-white font-bold px-6 py-3 rounded-lg shadow-lg hover:bg-red-700 transition-colors duration-300 transform hover:scale-[1.02]">
                                    Register Now <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                                <a href="assets/img/event-certificate/Mea Participants.pdf" class="register-button inline-flex items-center justify-center bg-sky-500 text-white font-bold px-6 py-3 rounded-lg shadow-lg hover:bg-sky-600 transition-colors duration-300" download="">
                                    <i class="fa-solid fa-download mr-2"></i>Download Certificate
                                </a>
                            </div>

                            <p class="mt-8 text-sm text-gray-600 border-t pt-4">
                                If you need an FDP, Workshop, or Seminar in association with Pencil Bitz, for your institution kindly contact
                                <a href="tel:+917708828673" class="text-blue-600 hover:text-blue-500 underline font-extrabold">+91 77088 28673</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once "footer.php"; ?>

    </div>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
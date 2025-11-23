<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pencil Bitz">

    <!-- ========== Page Title ========== -->
    <title>Acharya Pathashala college| Pencil Bitz Event Certificate</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/PB-new-logo.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/elegant-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon-set.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/validnavs.css" rel="stylesheet">
    <link href="assets/css/helper.css" rel="stylesheet">
    <link href="assets/css/unit-test.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/own.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="assets/css/index.css" rel="stylesheet">
    <link href="assets/css/book-store.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3708edbb88.js" crossorigin="anonymous"></script>
     <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>


</head>

<body>

    <!-- Navbar -->
    <?php require_once "navbar.php"; ?>
    <!-- End  file  -->
    <!-- Home page 1 -->
    <div style="max-width: 1520px;" class="relative container ">
        <div class="container-event overflow-hidden py-2">
            <div class="row align-items-center py-2 mb-3">
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

    <script>
        lucide.createIcons();
    </script>            <div class="row align-items-center">
                        <div class="flex justify-center">
            <a href="assets/img/event-certificate/shree venkateswara-certificates.pdf"></a>

        </div>

            <!-- Event Image -->
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 ">
                <div class="d-flex justify-content-center align-items-center h-100">
                <img src="assets/img/upcomeing-event/aps-college-of-commerce-nov-13.jpg" alt="Event Image" class="img-fluid rounded-4 shadow-lg border border-0 rounded-2" style="max-height: 600px; object-fit: cover;">
                </div>
            </div>
            <!-- Event Details -->
            <div class="col-lg-6 col-md-12">
                <div class="event-content px-2">
                      <div class="mb-2">
                    <h3 class="fw-medium fs-3 text-gray-500 ">College</h3>
                    <h1 class="font-semibold text-gray-700 text-3xl py-2 ps-3">
                     ACHARYA PATHASHALA COLLEGE OF COMMERCE </span>
                   </h1>
                </div>
                <h3 class="fw-medium fs-3 text-gray-500  ">Topic</h3>
                <h1 class="fw-semibold fs-2 text-red-500 mb-3 ps-3">Cyber Security Awareness For Educators</h1>
                <h3 class="fw-medium fs-3 text-gray-500 ">Details</h3>

                <ul class="list-unstyled mb-4 ps-3 ">
                    <li class="mb-2"><i class="fas fa-calendar-alt text-primary me-2"></i> <strong>Date:</strong>13 November 2025</li>
                    <li class="mb-2"><i class="fas fa-clock text-primary me-2"></i> <strong>Time:</strong> 6:00PM To 8:00PM </li>

                    <li class="mb-2"><i class="fas fa-map-marker-alt text-primary me-2"></i> <strong>Location:</strong>Bengaluru</li>
                    <li class="mb-2"><i class="fas fa-user-tie text-primary me-2"></i> <strong>Speaker:</strong> +91 9600581734</li>
                </ul>
                <a href="#" class="bg-gray-200 hover:bg-green-300 hover:text-gray-800 rounded-2 text-gray-800 shadow-lg fw-bold px-4 py-2">
                    Register Now <i class="fas fa-arrow-right ms-2"></i>
                </a>
                 <a href="assets/img/event-certificate/APS - participants Certificates 13 11 25.pdf" class="bg-sky-400 hover:bg-sky-300 hover:text-gray-800 rounded-2 text-gray-800 shadow-lg fw-bold px-4 py-2 ms-5" download="" >Download Certificate</a>
                </div>
                <div class="">
                    <p class="mt-4 ">
                        If you need an FDP, Workshop, or Seminar in association with Pencil Bitz,<br>for your institution kindly contact 
                        <a href="tel:+919600581734" class="text-blue-600 hover:text-blue-500 underline font-semibold">+91 9600581734</a>
                    </p>
                </div>
            </div>
            </div>
        </div>



        <!-- Start Footer 
    ============================================= -->
        <?php require_once "footer.php"; ?>

    </div>
</body>
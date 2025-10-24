<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pencil Bitz">

    <title>Pencil Bitz - Careers</title>

    <link rel="shortcut icon" href="assets/img/new-logo-pencilbitz.jpg" type="image/x-icon">

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
    <link href="assets/css/publicatons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3708edbb88.js" crossorigin="anonymous"></script>

    <style>
        /* Custom styles to override or enhance Tailwind */
        i.fas.fa-map-marker-alt.mr-1.text-2xl {
            font-size: 1rem;
            /* Adjust icon size for better alignment */
            margin-right: 0.25rem;
        }

        .job-card .h-auto.flex.justify-content-center img {
            max-width: 100%;
            /* Ensure images within job cards are responsive */
            height: auto;
        }

        .apply-button-group a {
            display: flex;
            align-items: center;
            justify-content: center;
            /* Center content within buttons */
            padding: 0.5rem 1rem;
            /* Adjust padding for better button size */
            margin-bottom: 0.5rem;
            /* Space between buttons */
            text-align: center;
            width: 100%;
            /* Make buttons full width on smaller screens */
        }

        @media (min-width: 768px) {

            /* Medium screens and up */
            .apply-button-group a {
                width: auto;
                /* Revert to auto width on larger screens */
                margin-left: 0.5rem;
                /* Space between buttons on larger screens */
                margin-bottom: 0;
            }

            .apply-button-group {
                flex-direction: row;
                /* Arrange buttons in a row on larger screens */
                justify-content: flex-end;
                /* Align to the right */
            }
        }

        /* Specific style for the small map icon in the walk-in drive section */
        .walk-in-location i.fas.fa-map-marker-alt {
            font-size: 0.875rem;
            /* Smaller size for this specific icon */
            padding: 0;
            margin-bottom: 0;
        }
    </style>
</head>

<body>

    <?php require_once "navbar.php"; ?>

    <main class="container  mx-auto px-4 py-8 max-w-8xl">
        <section class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4 animate-fade-in-down">Join Our Team at Pencil Bitz</h1>
            <p class="text-xl md:text-2xl font-semibold text-gray-700 mb-8 animate-fade-in-up">Current Job Openings</p>

            <div class="bg-white rounded-xl shadow-lg p-6 md:p-10 flex flex-col md:flex-row items-center justify-center gap-8 border-l-8 border-green-500 transform transition-transform duration-500 hover:scale-105">
                <div class="flex flex-wrap justify-center gap-4">
                    <img src="assets/img/career-9-7-25-p1.jpg" alt="Career post 1" class="w-32 h-32 md:w-40 md:h-40 object-cover rounded-md shadow-md">
                    <img src="assets/img/career-9-7-25-p2.jpg" alt="Career post 2" class="w-32 h-32 md:w-40 md:h-40 object-cover rounded-md shadow-md">
                    <img src="assets/img/career-9-25.jpg" alt="Career post 3" class="w-32 h-32 md:w-40 md:h-40 object-cover rounded-md shadow-md">
                </div>
                <div class="text-left max-w-lg">
                    <h2 class="text-3xl font-bold text-green-700 mb-3">Weekly Walk-In Drive</h2>
                    <p class="text-gray-700 mb-2 ">
                        <span class="font-semibold">Every Wednesday and Saturday</span> – Join a top Edutech firm specializing in Patent Grants Text book publishing, Research support and Academic events (India & Abroad).
                    </p>
                    <hr class="border-t-2 border-gray-300 w-full my-4">

                    <h3 class="text-xl font-medium underline text-gray-800 mb-2">Roles:</h3>
                    <ul class="list-disc pl-6 text-gray-600 space-y-1">
                        <li>
                            <span class="font-semibold text-black">Business Development Manager</span><br>
                            <span class="text-sm">Experience: 4+ Years in Sales</span>
                        </li>
                        <li>
                            <span class="font-semibold text-black">Business Development Associate (Sales)</span><br>
                            <span class="text-sm">Experience: 1-3 Years in Sales</span>
                        </li>
                        <li>
                            <span class="font-semibold text-black">Technical Executive (Non-IT)</span><br>
                            <span class="text-sm">Experience: 0-2 Years</span>
                        </li>
                    </ul>
                    <p class="text-gray-700 mt-4">
                        <!-- <span class="font-semibold">Date:</span> 12-07-2025<br> -->
                        <span class="font-semibold">Time:</span> 10:00 AM – 4:00 PM<br>
                        <span class="font-semibold">Location:</span>
                        <a href="https://maps.app.goo.gl/EkGo8DijxaWx1nRN6" target="_blank" rel="noopener" class="inline-flex items-center text-blue-600 hover:underline hover:text-blue-800 transition walk-in-location">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            Pencil Bitz Office, Ganapathy, Coimbatore
                        </a>
                    </p>

                    <div class="mt-6 flex flex-col sm:flex-row justify-center md:justify-start gap-3">
                        <div class="relative group">
                            <button onclick="window.location.href='mailto:pencilbitzhr@gmail.com'" class="w-full sm:w-auto px-6 py-2 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 transition duration-300 flex items-center justify-center shadow-md">
                                <i class="fas fa-envelope mr-2 text-xl"></i>
                                <span class="text-white">Contact HR via Email</span>
                            </button>
                            <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-max bg-gray-800 text-white text-xs rounded py-1 px-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10 whitespace-nowrap">
                                <span>Email: pencilbitzhr@gmail.com</span>
                                <button type="button" onclick="navigator.clipboard.writeText('pencilbitzhr@gmail.com')" class="ml-2 underline text-blue-300 hover:text-blue-500 focus:outline-none">Copy</button>
                            </div>
                        </div>
                        <a href="https://wa.me/+919025839394" target="_blank" rel="noopener" class="w-full sm:w-auto px-6 py-2 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 transition duration-300 flex items-center justify-center shadow-md">
                            <i class="fab fa-whatsapp mr-2 text-xl"></i> WhatsApp Us
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="job-card bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 transform transition-transform duration-300 hover:scale-[1.02]">
                <div class="p-6 flex flex-col">
                    <div class="flex justify-center mb-4">
                        <img src="assets/img/career-9-7-25-p1.jpg" alt="Business Development Manager" class="w-48 h-auto object-cover rounded-lg shadow-sm">
                    </div>
                    <h3 class="text-2xl font-bold text-blue-700 mb-2 text-center">Business Development Manager</h3>
                    <div class="flex items-center justify-center mb-4 text-gray-600 text-sm">
                        <span class="bg-blue-100 text-blue-800 text-xs px-2.5 py-0.5 rounded-full mr-2 font-medium">Full-time</span>
                        <span><i class="fas fa-map-marker-alt mr-1"></i> Coimbatore</span>
                    </div>

                    <p class="text-gray-700 mb-6  text-justify">
                        Lead our expansion in patent grant support, textbook publishing, and research services. Ideal for professionals with experience in academic/research markets and strategic business growth.
                    </p>

                    <div class="mb-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-3">Key Responsibilities:</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2 flex-shrink-0"></i>
                                <span>Identify and engage clients from universities and research institutions</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2 flex-shrink-0"></i>
                                <span>Promote patent drafting, academic publishing, and textbook services</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2 flex-shrink-0"></i>
                                <span>Develop and implement growth strategies to achieve targets</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2 flex-shrink-0"></i>
                                <span>Manage full sales cycles and client relationships</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mb-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-3">Requirements:</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <i class="fas fa-dot-circle text-gray-400 text-xs mt-2 mr-2 flex-shrink-0"></i>
                                <span>2+ years in business development (IP/publishing preferred)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-dot-circle text-gray-400 text-xs mt-2 mr-2 flex-shrink-0"></i>
                                <span>Knowledge of patent processes and academic publishing</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-dot-circle text-gray-400 text-xs mt-2 mr-2 flex-shrink-0"></i>
                                <span>Strong communication and negotiation skills</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-dot-circle text-gray-400 text-xs mt-2 mr-2 flex-shrink-0"></i>
                                <span>Bachelor's/Master's in Business, Science or Engineering</span>
                            </li>
                        </ul>
                    </div>

                    <div class="border-t border-gray-200 pt-4 mt-auto">
                        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 flex-wrap">
                            <p class="text-gray-600 text-sm flex items-center">
                                <i class="far fa-clock mr-2"></i> Posted 1 day ago
                            </p>
                            <div class="apply-button-group flex flex-col sm:flex-row gap-2 w-full sm:w-auto p-0">
                                <a href="mailto:pencilbitzhr@gmail.com"
                                    class="bg-green-500 text-white px-2 py-2 rounded-md hover:bg-green-700 transition-all duration-200 shadow-md text-center">
                                    <i class="fas fa-envelope mr-2"></i> Send Email
                                </a>
                                <a href="https://wa.me/+919025839394" target="_blank" rel="noopener"
                                    class="bg-green-500 text-white px-2 py-2  rounded-md hover:bg-green-600 transition-all duration-200 shadow-md text-center">
                                    <i class="fab fa-whatsapp mr-2"></i> WhatsApp Us
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="job-card bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 transform transition-transform duration-300 hover:scale-[1.02]">
                <div class="p-6 flex flex-col">
                    <div class="flex justify-center mb-4">
                        <img src="assets/img/career-9-7-25-p2.jpg" alt="Business Development Associate" class="w-48 h-auto object-cover rounded-lg shadow-sm">
                    </div>
                    <h3 class="text-2xl font-bold text-blue-700 mb-2 text-center">Business Development Associate</h3>
                    <div class="flex items-center justify-center mb-4 text-gray-600 text-sm">
                        <span class="bg-blue-100 text-blue-800 text-xs px-2.5 py-0.5 rounded-full mr-2 font-medium">Full-time</span>
                        <span><i class="fas fa-map-marker-alt mr-1"></i> Coimbatore</span>
                    </div>

                    <p class="text-gray-700 mb-6 text-justify">
                        Drive outreach and lead generation for our patent and publishing services. Perfect for enthusiastic individuals with strong communication skills looking to start their career in sales.
                    </p>

                    <div class="mb-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-3">Key Responsibilities:</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2 flex-shrink-0"></i>
                                <span>Make outbound calls to professors and researchers</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2 flex-shrink-0"></i>
                                <span>Explain services and generate qualified leads</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2 flex-shrink-0"></i>
                                <span>Support proposal preparation and sales coordination</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2 flex-shrink-0"></i>
                                <span>Maintain CRM and conduct market research</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mb-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-3">Requirements:</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <i class="fas fa-dot-circle text-gray-400 text-xs mt-2 mr-2 flex-shrink-0"></i>
                                <span>0-2 years in telecalling/sales (freshers welcome)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-dot-circle text-gray-400 text-xs mt-2 mr-2 flex-shrink-0"></i>
                                <span>Bachelor's degree in any discipline</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-dot-circle text-gray-400 text-xs mt-2 mr-2 flex-shrink-0"></i>
                                <span>Excellent communication skills</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-dot-circle text-gray-400 text-xs mt-2 mr-2 flex-shrink-0"></i>
                                <span>Self-driven and target-oriented</span>
                            </li>
                        </ul>
                    </div>

                    <div class="border-t border-gray-200 pt-4 mt-auto">
                        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 flex-wrap">
                            <p class="text-gray-600 text-sm flex items-center">
                                <i class="far fa-clock mr-2"></i> Posted 1 day ago
                            </p>
                            <div class="apply-button-group flex flex-col sm:flex-row gap-2 w-full sm:w-auto p-0">
                                <a href="mailto:pencilbitzhr@gmail.com"
                                    class="bg-green-500 text-white px-2 py-2 rounded-md hover:bg-green-700 transition-all duration-200 shadow-md text-center">
                                    <i class="fas fa-envelope mr-2"></i> Send Email
                                </a>
                                <a href="https://wa.me/+919025839394" target="_blank" rel="noopener"
                                    class="bg-green-500 text-white px-2 py-2  rounded-md hover:bg-green-600 transition-all duration-200 shadow-md text-center">
                                    <i class="fab fa-whatsapp mr-2"></i> WhatsApp Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="job-card bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 transform transition-transform duration-300 hover:scale-[1.02]">
                <div class="p-6 flex flex-col">
                    <div class="flex justify-center mb-4">
                        <img src="assets/img/career-9-25.jpg" alt="Technical Executive" class="w-48 h-auto object-cover rounded-lg shadow-sm">
                    </div>
                    <h3 class="text-2xl font-bold text-blue-700 mb-2 text-center">Technical Executive (Non-IT)</h3>
                    <div class="flex items-center justify-center mb-4 text-gray-600 text-sm">
                        <span class="bg-blue-100 text-blue-800 text-xs px-2.5 py-0.5 rounded-full mr-2 font-medium">Full-time</span>
                        <span><i class="fas fa-map-marker-alt mr-1"></i> Coimbatore</span>
                    </div>

                    <p class="text-gray-700 mb-6  text-justify">
                        Support our technical operations in academic publishing and patent services. Ideal for candidates with technical/scientific background looking to transition into a client-facing role.
                    </p>

                    <div class="mb-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-3">Key Responsibilities:</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2 flex-shrink-0"></i>
                                <span>Provide technical support for academic publishing and patent documentation</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2 flex-shrink-0"></i>
                                <span>Review and format technical manuscripts for publication</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2 flex-shrink-0"></i>
                                <span>Coordinate between researchers and publishing teams</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2 flex-shrink-0"></i>
                                <span>Assist with patent documentation and technical drawings</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2 flex-shrink-0"></i>
                                <span>Maintain technical databases and reference materials</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mb-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-3">Requirements:</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <i class="fas fa-dot-circle text-gray-400 text-xs mt-2 mr-2 flex-shrink-0"></i>
                                <span>Bachelor's/Master's in Engineering, Science, or Technical field</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-dot-circle text-gray-400 text-xs mt-2 mr-2 flex-shrink-0"></i>
                                <span>0-2 years experience (fresh graduates welcome)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-dot-circle text-gray-400 text-xs mt-2 mr-2 flex-shrink-0"></i>
                                <span>Strong technical writing and documentation skills</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-dot-circle text-gray-400 text-xs mt-2 mr-2 flex-shrink-0"></i>
                                <span>Basic understanding of research methodologies</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-dot-circle text-gray-400 text-xs mt-2 mr-2 flex-shrink-0"></i>
                                <span>Attention to detail and analytical thinking</span>
                            </li>
                        </ul>
                    </div>

                   <div class="border-t border-gray-200 pt-4 mt-auto">
                        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 flex-wrap">
                            <p class="text-gray-600 text-sm flex items-center">
                                <i class="far fa-clock mr-2"></i> Posted 1 day ago
                            </p>
                            <div class="apply-button-group flex flex-col sm:flex-row gap-2 w-full sm:w-auto p-0">
                                <a href="mailto:pencilbitzhr@gmail.com"
                                    class="bg-green-500 text-white px-2 py-2 rounded-md hover:bg-green-700 transition-all duration-200 shadow-md text-center">
                                    <i class="fas fa-envelope mr-2"></i> Send Email
                                </a>
                                <a href="https://wa.me/+919025839394" target="_blank" rel="noopener"
                                    class="bg-green-500 text-white px-2 py-2  rounded-md hover:bg-green-600 transition-all duration-200 shadow-md text-center">
                                    <i class="fab fa-whatsapp mr-2"></i> WhatsApp Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once "footer.php"; ?>

</body>

</html>
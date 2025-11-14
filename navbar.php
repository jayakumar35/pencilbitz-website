<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PencilBitz Navbar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="assets/css/navbar.css" rel="stylesheet">
    <style>
        .company-logo {
            max-width: 100px;
            max-height: 100px;
        }

        @media (min-width:320px) and (max-width: 769px) {
            .inline-flex {
                font-size: 18px;
                margin: 0px 0px 0px 0px;
                padding: 0px 0px 0px 0px;
            }
        }
    </style>
</head>

<body>
    <nav class="bg-white border-b border-gray-200 shadow-lg ">
        <div style="max-width: 1520px;" class=" mx-auto px-4 sm:px-6 lg:px-8 py-2">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between w-full">
                <!-- Logo and Company Name -->
                <div class="flex items-center space-x-4 flex-shrink-0">
                    <a href="index.php" class="flex items-center">
                        <img src="assets/img/PB-new-logo.png" alt="Company Logo" class="company-logo">
                    </a>
                    <span class="text-3xl md:text-4xl font-semibold text-gray-800 font-sans whitespace-nowrap">
                        <span class="text-4xl md:text-5xl font-bold text-red-500 font-mono">P</span>encil&nbsp;Bitz
                    </span>
                </div>
                <!-- WhatsApp Community Button (centered on all devices) -->
                <div class="flex justify-center my-2 md:my-0 w-full md:w-auto">
                    <button type="button" onclick="window.open('https://chat.whatsapp.com/D0QvYUpcXihCIruNgZCqTB','_blank','noopener')" class="transition-colors duration-200 px-2 py-1 rounded hover:text-green-200 hover:bg-green-50 flex items-center group relative focus:outline-none">
                        <span class="inline-block mr-2">
                            <svg class="w-6 h-6 text-green-500 group-hover:animate-zoom" fill="currentColor" viewBox="0 0 24 24">
                                <g>
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.031-.967-.273-.099-.472-.148-.67.15-.197.297-.767.967-.94 1.164-.173.198-.347.223-.644.075-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.372-.025-.521-.075-.149-.669-1.611-.916-2.206-.242-.579-.487-.5-.669-.51-.173-.007-.372-.009-.571-.009-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.099 3.205 5.077 4.372.709.306 1.262.489 1.694.626.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.288.173-1.413-.074-.124-.272-.198-.57-.347zm-5.421 7.617h-.001a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.999-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.455 4.436-9.89 9.893-9.89 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.991c-.003 5.456-4.438 9.891-9.895 9.891zm8.413-18.306A11.815 11.815 0 0012.05 0C5.495 0 .06 5.435.058 12.086c0 2.13.557 4.213 1.615 6.044L0 24l6.063-1.616a11.88 11.88 0 005.982 1.607h.005c6.554 0 11.989-5.435 11.991-12.086a11.86 11.86 0 00-3.496-8.474z" />
                                </g>
                            </svg>
                        </span>
                        <span class="text-green-500 ">Join WhatsApp Group</span>
                        <span class="absolute left-1/2 -top-14 -translate-x-1/2 bg-green-500 text-white text-xs rounded px-3 py-1 opacity-0 group-hover:opacity-100 group-hover:scale-110 transition-all duration-300 shadow-lg z-30 pointer-events-none">
                            Join our WhatsApp group!
                        </span>
                    </button>
                    <style>
                        @keyframes zoomInOut {
                            0% {
                                transform: scale(1.2);
                            }

                            50% {
                                transform: scale(1);
                            }

                            100% {
                                transform: scale(1.2);
                            }
                        }

                        .group:hover .group-hover\:animate-zoom {
                            animation: zoomInOut 0.4s;
                        }
                    </style>
                </div>
                <!-- Company Details (right) -->
                <div class="text-start md:text-right mt-2 md:mt-0 text-md md:text-sm text-gray-600 space-y-1 flex flex-col items-start md:items-end flex-shrink-0">
                    <div>ISO 9001:2015 Certified Organization</div>
                    <div>Phone: <a href="tel:+918468058012" class="text-blue-600 hover:underline">+91 8468058012</a></div>
                    <div>Phone: <a href="tel:+919944307413" class="text-blue-600 hover:underline">+91 9944307413</a></div>

                    <div>Mail: <a href="mailto:managingdirector@pencilbitz.com" class="text-blue-600 hover:underline">managingdirector@pencilbitz.com</a></div>
                </div>
            </div>

            <!-- Navigation -->
            <div class="flex items-center justify-center mt-4">

                <!-- Desktop Menu -->
                <ul class="hidden lg:flex flex-wrap justify-center gap-x-3 gap-y-2 font-semibold text-gray-700">
                    <li>
                        <a href="index.php" class="transition-colors duration-200 px-3 py-2 rounded-lg hover:text-green-600 hover:bg-green-50 flex items-center
                             <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-home mr-2 text-sm"></i>Home
                        </a>
                    </li>
                    <li>
                        <a href="our-company.php" class="transition-colors duration-200 px-3 py-2 rounded-lg hover:text-green-600 hover:bg-green-50 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'our-company.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-building mr-2 text-sm"></i>Our Company
                        </a>
                    </li>
                    <li class="relative group">
                        <button id="desktop-dropdown-btn" type="button" class="inline-flex items-center px-3 py-2 rounded-lg hover:text-green-600 hover:bg-green-50 transition-colors duration-200 font-semibold focus:outline-none">
                            <i class="fas fa-cogs mr-2 text-sm"></i>Services
                            <svg class="ml-1 h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="desktop-dropdown" class="absolute left-0 mt-2 w-64 bg-white border border-gray-200 rounded-md shadow-lg hidden z-20 group-hover:block">
                            <a href="patent.php" class="block px-4 py-2 text-gray-700 hover:text-green-600 hover:bg-green-50 transition flex items-center">
                                <i class="fas fa-file-alt mr-2 text-sm"></i>Patent Grant Support
                            </a>
                            <a href="book-store.php" class="block px-4 py-2 text-gray-700 hover:text-green-600 hover:bg-green-50 transition flex items-center">
                                <i class="fas fa-book mr-2 text-sm"></i>Text Book Publication
                            </a>
                            <a href="phd-assistance.php" class="block px-4 py-2 text-gray-700 hover:text-green-600 hover:bg-green-50 transition flex items-center">
                                <i class="fas fa-graduation-cap mr-2 text-sm"></i>PhD Assistance
                            </a>
                            <a href="scopus.php" class="block px-4 py-2 text-gray-700 hover:text-green-600 hover:bg-green-50 transition flex items-center">
                                <i class="fas fa-search mr-2 text-sm"></i>SCI and Scopus Publications
                            </a>
                            <a href="event.php" class="block px-4 py-2 text-gray-700 hover:text-green-600 hover:bg-green-50 transition flex items-center">
                                <i class="fas fa-calendar-alt mr-2 text-sm"></i>Academic Events Organizing
                            </a>
                        </div>
                    </li>
                    <li>
                        <a href="Publications.php" class="transition-colors duration-200 px-3 py-2 rounded-lg hover:text-green-600 hover:bg-green-50 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'Publications.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-newspaper mr-2 text-sm"></i>Publications
                        </a>
                    </li>
                    <li>
                        <a href="book-store.php" class="transition-colors duration-200 px-3 py-2 rounded-lg hover:text-green-600 hover:bg-green-50 flex items-center
                             <?php if (basename($_SERVER['PHP_SELF']) == 'book-store.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-book-open mr-2 text-sm"></i>Book Store
                        </a>
                    </li>
                    <li>
                        <a href="edited-book.php" class="transition-colors duration-200 px-3 py-2 rounded-lg hover:text-green-600 hover:bg-green-50 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'edited-book.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-edit mr-2 text-sm"></i>Edited Book
                        </a>
                    </li>
                    <li>
                        <a href="event.php" class="transition-colors duration-200 px-3 py-2 rounded-lg hover:text-green-600 hover:bg-green-50 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'event.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-calendar mr-2 text-sm"></i>Events
                        </a>
                    </li>
                    <li>
                        <a href="career.php" class="transition-colors duration-200 px-3 py-2 rounded-lg hover:text-green-600 hover:bg-green-50 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'career.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-briefcase mr-2 text-sm"></i>Career
                        </a>
                    </li>
                    <li>
                        <a href="gallery.php" class="transition-colors duration-200 px-3 py-2 rounded-lg hover:text-green-600 hover:bg-green-50 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'gallery.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-image mr-2 text-sm"></i>Gallery
                        </a>
                    </li>
                    <li>
                        <a href="reviews.php" class="transition-colors duration-200 px-3 py-2 rounded-lg hover:text-green-600 hover:bg-green-50 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'reviewer.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-user-check mr-2 text-sm"></i>Reviews
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" class="transition-colors duration-200 px-3 py-2 rounded-lg hover:text-green-600 hover:bg-green-50 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-envelope mr-2 text-sm"></i>Contact
                        </a>
                    </li>

                </ul>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="lg:hidden text-blue-500 focus:outline-none ml-2 bg-gray-100 p-2 rounded-lg" aria-label="Toggle Mobile Menu">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden lg:hidden mt-4 bg-white rounded-lg shadow-md p-4">
                <ul class="space-y-2 font-semibold text-gray-700">
                    <li>
                        <a href="index.php" class="block px-4 py-3 rounded-lg hover:bg-green-50 hover:text-green-600 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-home mr-3 text-sm w-5"></i>Home
                        </a>
                    </li>
                    <li>
                        <a href="our-company.php" class="block px-4 py-3 rounded-lg hover:bg-green-50 hover:text-green-600 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'our-company.php') echo 'text-green-600 bg-green-100'; ?>"> <i class="fas fa-building mr-3 text-sm w-5"></i>Our Company
                        </a>
                    </li>
                    <li>
                        <button id="mobile-dropdown-btn" type="button" class="w-full inline-flex items-center px-4 py-3 rounded-lg hover:bg-green-50 hover:text-green-600 text-left focus:outline-none">
                            <i class="fas fa-cogs mr-3 text-sm w-5"></i>
                            <span class="flex-grow">Services</span>
                            <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="mobile-dropdown" class="ml-8 mt-2 bg-gray-50 rounded-md shadow-inner hidden">
                            <a href="patent.php" class="block px-4 py-3 text-gray-700 hover:text-green-600 hover:bg-green-100 transition flex items-center">
                                <i class="fas fa-file-alt mr-3 text-sm"></i>Patent Grant Support
                            </a>
                            <a href="book-store.php" class="block px-4 py-3 text-gray-700 hover:text-green-600 hover:bg-green-100 transition flex items-center">
                                <i class="fas fa-book mr-3 text-sm"></i>Text Book Publication
                            </a>
                            <a href="phd-assistance.php" class="block px-4 py-3 text-gray-700 hover:text-green-600 hover:bg-green-100 transition flex items-center">
                                <i class="fas fa-graduation-cap mr-3 text-sm"></i>PhD Assistance
                            </a>
                            <a href="scopus.php" class="block px-4 py-3 text-gray-700 hover:text-green-600 hover:bg-green-100 transition flex items-center">
                                <i class="fas fa-search mr-3 text-sm"></i>SCI and Scopus Publications
                            </a>
                            <a href="event.php" class="block px-4 py-3 text-gray-700 hover:text-green-600 hover:bg-green-100 transition flex items-center">
                                <i class="fas fa-calendar-alt mr-3 text-sm"></i>Academic Events Organizing
                            </a>
                        </div>
                    </li>
                    <li>
                        <a href="Publications.php" class="block px-4 py-3 rounded-lg hover:bg-green-50 hover:text-green-600 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'Publications.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-newspaper mr-3 text-sm w-5"></i>Publications
                        </a>
                    </li>
                    <li>
                        <a href="book-store.php" class="block px-4 py-3 rounded-lg hover:bg-green-50 hover:text-green-600 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'book-store.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-book-open mr-3 text-sm w-5"></i>Book Store
                        </a>
                    </li>
                    <li>
                        <a href="edited-book.php" class="block px-4 py-3 rounded-lg hover:bg-green-50 hover:text-green-600 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'edited-book.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-edit mr-3 text-sm w-5"></i>Edited Book
                        </a>
                    </li>
                    <li>
                        <a href="event.php" class="block px-4 py-3 rounded-lg hover:bg-green-50 hover:text-green-600 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'event.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-calendar mr-3 text-sm w-5"></i>Events
                        </a>
                    </li>
                    <li>
                        <a href="career.php" class="block px-4 py-3 rounded-lg hover:bg-green-50 hover:text-green-600 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'career.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-briefcase mr-3 text-sm w-5"></i>Career
                        </a>
                    </li>
                    <li>
                        <a href="gallery.php" class="block px-4 py-3 rounded-lg hover:bg-green-50 hover:text-green-600 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'achievement.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-image mr-3 text-sm w-5"></i>Gallery
                        </a>
                    </li>
                                        <li>
                        <a href="reviews.php" class="transition-colors duration-200 px-4 py-2 rounded-lg hover:text-green-600 hover:bg-green-50 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'reviewer.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-user-check mr-2 text-sm"></i>Reviews
                        </a>
                    </li>

                                        <li>
                        <a href="contact.php" class="block px-4 py-3 rounded-lg hover:bg-green-50 hover:text-green-600 flex items-center
                            <?php if (basename($_SERVER['PHP_SELF']) == 'gallery.php') echo 'text-green-600 bg-green-100'; ?>"><i class="fas fa-envelope mr-3 text-sm w-5"></i>Contact
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').onclick = function() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        };

        // Desktop dropdown toggle
        document.getElementById('desktop-dropdown-btn').onclick = function(event) {
            event.stopPropagation();
            const dropdown = document.getElementById('desktop-dropdown');
            dropdown.classList.toggle('hidden');
        };

        // Hide desktop dropdown if clicked outside
        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('desktop-dropdown');
            const button = document.getElementById('desktop-dropdown-btn');
            if (!button.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });

        // Mobile dropdown toggle
        document.getElementById('mobile-dropdown-btn').onclick = function(event) {
            event.stopPropagation();
            const dropdown = document.getElementById('mobile-dropdown');
            dropdown.classList.toggle('hidden');
        };

        // Hide mobile dropdown if clicked outside
        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('mobile-dropdown');
            const button = document.getElementById('mobile-dropdown-btn');
            if (!button.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pencil Bitz">

    <!-- ========== Page Title ========== -->
    <title>Pencilbitz

    </title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/new-logo-pencilbitz.jpg" type="image/x-icon">

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
    <link href="assets/css/contact.css" rel="stylesheet">


    <style>
        .mycol {
            background: linear-gradient(to right, #00bfae, #004d99) !important;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-left: 5px;
        }

        /* Common button styling */
        .btn-small {

            padding: 5px 15px;
            font-size: 14px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            color: #fff;
            background-size: 200% auto;
            /* For smooth transition */
            transition: background-position 0.3s ease, color 0.3s ease;
        }

        /* Blue and red merging gradient button */
        .btn-blue-red-gradient {
            background-image: linear-gradient(to right, #0b57e3, #e30b0b);
            background-position: 0% 0%;
        }

        .btn-blue-red-gradient:hover {
            background-position: 100% 0%;
            color: #fff !important;
        }
    </style>
    <!-- ========== End Stylesheet ========== -->

</head>

<body>

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->


    <!-- Navbar -->
    <?php require_once "navbar.php"; ?>
    <!-- Patent Information Section with World Map Background -->
    <div style="max-width: 1520px;" class="relative container my-10">
         <nav class="mb-6  rounded-lg px-4 py-3">
                <ol class="flex items-center text-gray-700 space-x-2 text-sm font-medium">
                    <li class="flex items-center">
                        <a href="index.php" class="hover:underline text-blue-600 flex items-center">
                            <i class="fas fa-home mr-1"></i> Home
                        </a>
                        <span class="mx-2 text-gray-400"><i class="fas fa-chevron-right"></i></span>
                    </li>
                    <li class="flex items-center">
                        <a href="patent.php" class="hover:underline text-blue-600 flex items-center">
                            <i class="fa-solid fa-file-pen mr-1"></i>Patent
                        </a>
                        <span class="mx-2 text-gray-400"><i class="fas fa-chevron-right"></i></span>
                    </li>
                </ol>
            </nav>
                <div class="bg-green-50 border-l-4 border-blue-500 p-3 rounded-lg shadow-md max-w-4xl mx-auto mt-2 py-5 my-3">
    <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">Patent Assistance & Inquiries</h3>
    <p class="text-gray-700 text-center mb-4 text-lg">
        For Patent Filing, Consultation, and Intellectual Property Support, please contact:
    </p>
    <div class="flex justify-center gap-6">
        <!-- Call Button -->
        <a href="tel:+918468058012"
            class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition flex items-center w-max">
            <i class="fas fa-phone mr-2 text-lg"></i>+91 8468058012
        </a>
        <!-- WhatsApp Button -->
        <a href="https://wa.me/+918468058012" target="_blank" rel="noopener"
            class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600 transition flex items-center">
            <i class="fab fa-whatsapp mr-1 text-xl"></i> WhatsApp
        </a>
    </div>
</div>


        <div class="relative">
            <div class="absolute inset-0 z-0 opacity-20 pointer-events-none">
                <img src="https://upload.wikimedia.org/wikipedia/commons/8/83/Equirectangular_projection_SW.jpg"
                alt="World Map"
                class="w-full h-full object-cover"
                style="filter: grayscale(0) brightness(1.5);">
            </div>

    
            <!-- World Map Background -->
          <div class="relative row z-5">
            <div class="col-12">
                <h1 class="text-center font-bold text-4xl mb-4">Patent Grant Support</h1>
            </div>
            <div class="col-12">
                <h2 class="text-justfy text-md font-medium text-gray-800 mb-4">Pencil Bitz supports innovation by guiding inventors through the entire patent process—from idea evaluation to grant and beyond. We provide legal and technical assistance, cover all related costs, and help with licensing and commercialization. This ensures ideas are protected, aligned with our growth goals, and transformed into valuable innovations</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 py-3">
                    <div class="border rounded shadow p-3 text-center bg-white bg-opacity-90">
                        <a href="indian-design-patent.php">
                            <h3 class="text-lg font-semibold">Indian Design Grant Patent</h3>
                        </a>
                    </div>
                    <div class="border rounded shadow p-3 text-center bg-white bg-opacity-90">
                        <a href="uk-design-patent.php">
                            <h3 class="text-lg font-semibold">UK Design Grant Patent</h3>
                        </a>
                    </div>
                    <div class="border rounded shadow p-3 text-center bg-white bg-opacity-90">
                        <a href="australian-design-patent.php">
                            <h3 class="text-lg font-semibold">Australian Design Grant Patent </h3>
                        </a>
                    </div>
                    <div class="border rounded shadow p-3 text-center bg-white bg-opacity-90">
                        <a href="german-utility.php">
                            <h3 class="text-lg font-semibold">German Utility Grant Patent</h3>
                        </a>
                    </div>
                    <div class="border rounded shadow p-3 text-center bg-white bg-opacity-90">
                        <a href="japanese-utility.php">
                            <h3 class="text-lg font-semibold">Japanese Utility Grant Patent</h3>
                        </a>
                    </div>
                    <div class="border rounded shadow p-3 text-center bg-white bg-opacity-90">
                        <a href="us-patent-publication.php">
                            <h3 class="text-lg font-semibold">US Utility Publication Patent</h3>
                        </a>
                    </div>
                    <div class="border rounded shadow p-3 text-center bg-white bg-opacity-90">
                        <a href="utility-patent.php">
                            <h3 class="text-lg font-semibold">Indian Utility Patent Grant</h3>
                        </a>
                    </div>
                    <div class="border rounded shadow p-3 text-center bg-white bg-opacity-90">
                        <a href="utility-patent-publications.php">
                            <h3 class="text-lg font-semibold">Indian Utility Patent Publications</h3>
                        </a>
                    </div>
                    <div class="border rounded shadow p-3 text-center bg-white bg-opacity-90">
                        <a href="indian-copyright.php">
                            <h3 class="text-lg font-semibold">Indian Copyrights</h3>
                        </a>
                    </div>
                    <div class="border rounded shadow p-3 text-center bg-white bg-opacity-90">
                        <a href="canada -copyright.php">
                            <h3 class="text-lg font-semibold">Canada Copyrights </h3>
                        </a>
                    </div>
                    <div class="border rounded shadow p-3 text-center bg-white bg-opacity-90">
                        <a href="US-Publication-Patent.php">
                            <h3 class="text-lg font-semibold">South African Utility Grant Patent</h3>
                        </a>
                    </div>
                </div>
            </div>
          </div>
        </div>
   
        <div class=" my-10">
          <div class="row mt-8">
            <div class="col-12">
                <h2 class="text-center text-2xl font-bold mb-3">Protect Your Ideas with Our Patent Solutions</h2>
                <p class="text-justfy text-base mb-5 ">
                    At Pencilbitz, we understand that your ideas and innovations are valuable assets. That’s why we offer comprehensive patent services to help individuals, startups, and businesses protect their intellectual property with confidence.
                </p>
                <h3 class="text-center text-xl font-semibold mt-6 mb-3">Why Choose PencilBitz?</h3>
            </div>
          </div>
          <div class="row mt-4 mb-10">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-lg border-0">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-people-arrows fa-2x text-blue-500 mb-3"></i>
                        <h4 class="card-title mb-2 font-bold">End-to-End Guidance</h4>
                        <p class="text-justify card-text text-gray-700">
                            Work with experienced professionals who ensure your patent applications are accurate and complete.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-lg border-0">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-user-graduate fa-2x text-blue-500 mb-3"></i>
                        <h4 class="card-title mb-2 font-bold">Expert Assistance</h4>
                        <p class=" text-justify card-text text-gray-700">
                            Access to technical experts and legal professionals for high-quality application preparation.


                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-lg border-0">
                    <div class="card-body text-center">
                        <i class="fas fa-industry fa-2x text-blue-500 mb-3"></i>
                        <h4 class="card-title mb-2 font-bold">Cost Coverage</h4>
                        <p class=" text-justify card-text text-gray-700">
                            Full financial support for filing, examination, attorney, and maintenance fees.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-lg border-0">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-truck-fast fa-2x text-blue-500 mb-3"></i>
                        <h4 class="card-title mb-2 font-bold">Faster Processing</h4>
                        <p class="text-justify card-text text-gray-700">
                            Coordination with patent offices to address issues and accelerate approval.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-lg border-0">
                    <div class="card-body text-center">
                        <i class="fas fa-handshake fa-2x text-blue-500 mb-3"></i>
                        <h4 class="card-title mb-2 font-bold">Post-Grant Support</h4>
                        <p class=" text-justify card-text text-gray-700">
                            Help with licensing, commercialization, and enforcement of granted patents.


                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-lg border-0">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-user-shield  fa-2x text-blue-500 mb-3"></i>
                        <h4 class="card-title mb-2 font-bold">Innovation-Focused</h4>
                        <p class="text-justify card-text text-gray-700">
                            A strong commitment to protecting and promoting groundbreaking ideas that align with business growth

                        </p>
                    </div>
                </div>
            </div>
          </div>
          <div class="container my-8">
            <div class="row align-items-center">
                <!-- Left Side: Image -->
                <div class="col-md-6 mb-4 mb-md-0 text-center">
                    <img src="assets/img/offer (2).jpg" alt="What We Offer" class="img-fluid rounded shadow-lg border-0">
                </div>
                <!-- Right Side: List Content -->
                <div class="col-md-6">
                    <h2 class="font-bold text-3xl mb-4">What We Offer</h2>
                    <div class="mb-4">
                        <h4 class="font-semibold text-lg mb-1">1. Patent Filling And Documentation</h4>
                        <p class=" text-justify text-gray-700">We provide end-to-end support for patent filing, ensuring all legal and technical documents are accurately prepared. Our team helps streamline the process to secure your intellectual property efficiently.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-semibold text-lg mb-1">2. Patent Research and Analysis</h4>
                        <p class=" text-justify text-gray-700">We conduct thorough patent research to identify existing technologies and assess patentability. Our analysis helps you make informed decisions and avoid potential infringements."

                            Let me know if you want it to sound more business-oriented or beginner-friendly</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-semibold text-lg mb-1">3. Patent Portfolio Management</h4>
                        <p class=" text-justify text-gray-700">We help you organize, monitor, and maximize the value of your patent assets. Our strategic approach ensures your portfolio aligns with business goals and stays protected globally</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-semibold text-lg mb-1">4. Legal Support and Avisory Services</h4>
                        <p class=" text-justify text-gray-700">We offer expert legal guidance on intellectual property matters, from patent disputes to compliance. Our advisory services ensure you make confident, informed decisions at every stage.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-semibold text-lg mb-1">5. Customized Solution for Textbook and Educational Content</h4>
                        <p class=" text-justify text-gray-700">We provide tailored IP solutions for authors, educators, and publishers to protect and manage educational content. From copyright filing to content licensing, we ensure your creations are safeguarded</p>
                    </div>
                </div>
            </div>
          </div>
        </div>
   
        <div class="  my-12">
            <div class="row align-items-center">
            <h2 class="font-bold text-center text-4xl mb-4">Who Need Patent Services</h2>

            <!-- Left Side: List Content -->
            <div class="col-md-6 order-2 order-md-1 ps-5">
                <div class="mb-4 d-flex  sm:mt-0">
                    <i class=" text-green-400 px-2 fa-solid fa-circle-check"></i>
                    <h4 class="font-semibold text-lg text-justify text-gray-500 mb-1">Inventors & Innovators Individuals developing new products, processes, or technologies who want to protect their ideas.</h4>

                </div>
                <div class="mb-4 d-flex">
                    <i class=" text-green-400 px-2 fa-solid fa-circle-check"></i>
                    <h4 class="font-semibold text-lg text-justify text-gray-500 mb-1"> Startups
                        Early-stage companies seeking to secure their innovations, attract investors, and gain competitive advantage.
                    </h4>
                </div>
                <div class="mb-4 d-flex">
                    <i class=" text-green-400 px-2 fa-solid fa-circle-check"></i>
                    <h4 class="font-semibold text-lg text-justify text-gray-500 mb-1"> Businesses & Corporations
                        Companies aiming to safeguard R&D investments, prevent imitation, and build intellectual property portfolios.
                    </h4>
                </div>
                <div class="mb-4 d-flex">
                    <i class=" text-green-400 px-2 fa-solid fa-circle-check"></i>
                    <h4 class="font-semibold text-lg text-justify text-gray-500 mb-1"> Research Institutions & Universities
                        Organizations involved in scientific or technological research looking to protect and commercialize discoveries.
                    </h4>
                </div>
                <div class="mb-4 d-flex">
                    <i class=" text-green-400 px-2 fa-solid fa-circle-check"></i>
                    <h4 class="font-semibold text-lg text-justify text-gray-500 mb-1">Engineers & Developers
                        Professionals creating new tools, software, or systems that may be eligible for patent protection.
                    </h4>
                </div>

              <div class="mb-4 d-flex">
                <i class=" text-green-400 px-2 fa-solid fa-circle-check"></i>
                <h4 class="font-semibold text-lg text-justify text-gray-500 mb-1">Designers
                    Creators of unique product designs, packaging, or user interfaces who want to protect their visual innovations
                </h4>
              </div>
            </div>

            <!-- Right Side: Image -->
            <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0 text-center">
            <img src="assets/img/who-need.jpg" alt="What We Offer" class="img-fluid rounded shadow-lg border-0 w-100 h-auto">
            </div>
            </div>
         

        </div>
         <?php require_once "footer.php"; ?>
    </div>
      
</body>

</html>
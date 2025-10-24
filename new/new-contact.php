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
    <script src="https://kit.fontawesome.com/3708edbb88.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
                        <script src="https://cdn.tailwindcss.com"></script>
                        <script>
                            tailwind.config = {
                                theme: {
                                    extend: {
                                        colors: {
                                            primary: '#1a365d',
                                            accent: '#2b6cb0',
                                            secondary: '#4a5568',
                                            highlight: '#f6ad55',
                                        }
                                    }
                                }
                            }
                        </script>
                        <style>
                            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

                            body {
                                font-family: 'Poppins', sans-serif;
                                background: linear-gradient(135deg, #f0f4f8 0%, #e6f0ff 100%);
                                min-height: 100vh;
                                padding: 20px;
                            }

                            .md-card {
                                position: relative;
                                overflow: hidden;
                                border-top: 4px solid #f6ad55;
                                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
                                transition: all 0.3s ease;
                            }

                            .md-card:hover {
                                transform: translateY(-5px);
                                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
                            }

                            .md-card::before {
                                content: "Leadership";
                                position: absolute;
                                top: 15px;
                                right: -30px;
                                background: #f6ad55;
                                color: white;
                                font-weight: 600;
                                padding: 5px 30px;
                                transform: rotate(45deg);
                                font-size: 14px;
                            }

                            .team-card {
                                transition: all 0.3s ease;
                                border-top: 3px solid #2b6cb0;
                            }

                            .team-card:hover {
                                transform: translateY(-5px);
                                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
                            }

                            .contact-badge {
                                transition: all 0.2s ease;
                            }

                            .contact-badge:hover {
                                background: #3f86d2ff;
                                color: white;
                            }
                            

                            .section-title::after {
                                content: "";
                                display: block;
                                width: 80px;
                                height: 4px;
                                background: #f6ad55;
                                margin: 15px auto 30px;
                                border-radius: 2px;
                            }

                            .profile-img  {
                                border: 4px solid #e2e8f0;
                                transition: all 0.3s ease;
                            }

                            .profile-img:hover {
                                border-color: #2b6cb0;
                                transform: scale(1.05);
                            }
                          
                        </style>

</head>

<body>

    <!-- Navbar -->
    <?php require_once "navbar.php"; ?>
    <!-- End  file  -->
    <div class="contact-style-one-area overflow-hidden">


        <div style="max-width: 1520px;" class=" container ">
            <div class="row">
                <div class="col-lg-12  ">

                    <body class="bg-gray-50">
                        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                            <div class="text-center mb-16">
                                <h1 class="text-4xl md:text-5xl font-bold text-primary mb-4">Our Leadership Team</h1>
                                <p class="text-xl text-secondary max-w-3xl mx-auto">
                                    Meet our dedicated team of professionals who are committed to delivering the best service and support to our customers.
                                </p>
                                <div class="section-title"></div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-5">
                                <!-- Managing Director Card (Distinct Design) -->
                                <div class="lg:col-span-2">
                                    <div class="md-card bg-white rounded-xl p-8 flex flex-col md:flex-row items-center md:items-start gap-8">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/sangeetha-mam.png"
                                                alt="Sangeetha Subramaniam"
                                                class="w-48 h-48 rounded-full profile-img object-cover">
                                        </div>
                                        <div class="text-center md:text-left">
                                            <div class="mb-4">
                                                <h3 class="text-2xl font-bold text-primary">Sangeetha Subramaniam</h3>
                                                <div class="flex justify-center md:justify-start items-center mt-2 gap-2">
                                                    <span class="bg-accent text-white px-3 py-1 rounded-full text-sm font-medium">Managing Director</span>
                                                   
                                                </div>
                                            </div>
                                          
                                           <div class="space-y-3">
                                                <div class="flex items-center justify-center md:justify-start gap-3">
                                                    <div class="contact-badge flex items-center bg-gray-100 px-4 py-2 rounded-lg">
                                                        <i class="fas fa-phone-alt text-accent mr-2"></i>
                                                        <span class="font-medium">+91 9944307413</span>
                                                    </div>
                                                </div>

                                                <div class="flex items-center justify-center md:justify-start gap-3">
                                                    <div class="contact-badge flex items-center bg-gray-100 px-4 py-2 rounded-lg">
                                                        <i class="fas fa-envelope text-accent mr-2"></i>
                                                        <span class="font-medium">managingdirector@pencilbitz.com</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex justify-center md:justify-start gap-3 mt-6">
                                                <a href="#" class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-accent hover:bg-accent hover:text-white transition">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                                <a href="#" class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-accent hover:bg-accent hover:text-white transition">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                                <a href="#" class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-accent hover:bg-accent hover:text-white transition">
                                                    <i class="fas fa-envelope"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Member Cards -->
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-5">
                                <!-- Textbook Manager -->
                                <div class="team-card bg-white rounded-xl p-6">
                                    <div class="text-center">
                                        <div class="flex-shrink-0 text-center justify-content-center">
                                            <img src="assets/img/raj.png"
                                                alt="Rajkumar Kalyanasundaram"
                                                class=" w-48 h-48 rounded-full border-1 profile-img object-scale-down justify-content-center ">
                                        </div>
                                        <h3 class="text-xl font-bold text-primary mb-2">Rajkumar Kalyanasundaram</h3>
                                        <p class="text-accent font-medium mb-4">Textbook Manager</p>

                                       

                                       <div class="grid justify-center gap-3">
    <div class="contact-badge flex items-center bg-gray-100 px-4 py-2 rounded-lg group">
        <i class="fas fa-phone-alt text-accent mr-2 group-hover:text-white transition duration-300"></i>
        <span class="font-medium">+91 7092108975</span>
    </div>
    <div class="contact-badge flex items-center bg-gray-100 px-4 py-2 rounded-lg group">
        <i class="fas fa-envelope text-accent mr-2 group-hover:text-white transition duration-300"></i>
        <span class="font-medium">pencilbitzhr@gmail.com</span>
    </div>
</div>

                                    </div>
                                </div>
                                
                                <!-- Additional Team Members -->
                                <div class="space-y-8">
                                    <!-- Research Paper Enquiries -->
                                    <div class="team-card bg-white rounded-xl p-6">
                                        <div class="text-center">
                                            <div class="flex-shrink-0 text-center">
                                            <img src="assets/img/harini.png"
                                                alt="Rajkumar Kalyanasundaram"
                                                class="w-48 h-48 rounded-full border-1 profile-img object-scale-down justify-content-center">
                                        </div>
                                            <h3 class="text-xl font-bold text-primary mb-2">Harini Selvam</h3>
                                            <p class="text-accent font-medium mb-4">Research Paper Writing Enquiries</p>

                                           

                                            <div class="grid justify-center gap-3">
                                                <div class="contact-badge flex items-center bg-gray-100 px-4 py-2 rounded-lg group ">
                                                    <i class="fas fa-phone-alt text-accent group-hover:text-white transition duration-300  mr-2"></i>
                                                    <span class="font-medium">+91 9629476711</span>
                                                </div>
                                                 <div class="contact-badge flex items-center bg-gray-100 px-4 py-2 rounded-lg group">
                                                    <i class="fas fa-envelope text-accent mr-2 group-hover:text-white transition duration-300"></i>
                                                    <span class="font-medium">pencilbitzhr@gmail.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Patent Support Manager -->
                                <div class="team-card bg-white rounded-xl p-6">
                                    <div class="text-center">
                                          <div class="flex-shrink-0 text-center">
                                            <img src="assets/img/rakhsha.png"
                                                alt="Rakhsha K"
                                                class="w-48 h-48 rounded-full border-1 profile-img object-scale-down justify-content-center">
                                        </div>
                                        <h3 class="text-xl font-bold text-primary mb-2">Rakhsha K</h3>
                                        <p class="text-accent font-medium mb-4">Patent Support Manager</p>

                                       

                                        <div class="grid justify-center gap-3">
                                            <div class="contact-badge flex items-center bg-gray-100 px-4 py-2 rounded-lg group">
                                                <i class="fas fa-phone-alt text-accent mr-2 group-hover:text-white transition duration-300"></i>
                                                <span class="font-medium">+91 8468058012</span>
                                            </div>
                                             <div class="contact-badge flex items-center bg-gray-100 px-4 py-2 rounded-lg group">
                                                    <i class="fas fa-envelope text-accent mr-2 group-hover:text-white transition duration-300"></i>
                                                    <span class="font-medium">patent.pencilbitz@gmail.com</span>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                                                  <!-- Academic Event Manager -->
                                    <div class="team-card bg-white rounded-xl p-6">
                                        <div class="text-center">
                                              <div class="flex-shrink-0 text-center">
                                            <img src="assets/img/aishoo-1.png"
                                                alt="Rajkumar Kalyanasundaram"
                                                class="w-48 h-48 rounded-full border-1 profile-img object-scale-down justify-content-center">
                                        </div>
                                            <h3 class="text-xl font-bold text-primary mb-2">Aishwarya M</h3>
                                            <p class="text-accent font-medium mb-4">Academic Event Manager</p>

                                           

                                            <div class="grid justify-center gap-3">
                                                <div class="contact-badge flex items-center bg-gray-100 px-4 py-2 rounded-lg group">
                                                    <i class="fas fa-phone-alt text-accent mr-2 group-hover:text-white transition duration-300"></i>
                                                    <span class="font-medium">+91 9361313822</span>
                                                </div>
                                                 <div class="contact-badge flex items-center bg-gray-100 px-4 py-2 rounded-lg group">
                                                    <i class="fas fa-envelope text-accent mr-2 group-hover:text-white transition duration-300"></i>
                                                    <span class="font-medium">aishwarya.pencilbitz@gmail.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Academic Event Manager -->
                                    <div class="team-card bg-white rounded-xl p-6">
                                        <div class="text-center">
                                            <div class="flex-shrink-0 text-center">
                                            <img src="assets/img/Ashiya_begam-removebg-previewnew.png"
                                                alt="Ashiya Begam"
                                                class="w-48 h-48 rounded-full border-1 profile-img object-scale-down justify-content-center">
                                        </div>
                                            <h3 class="text-xl font-bold text-primary mb-2">Ashiya Begam</h3>
                                            <p class="text-accent font-medium mb-4">HR Manager</p>

                                           

                                            <div class="grid justify-center gap-3">
                                                <div class=" contact-badge flex items-center bg-gray-100 px-4 py-2 rounded-lg group">
                                                    <i class="fas fa-phone-alt text-accent mr-2 group-hover:text-white transition duration-300"></i>
                                                    <span class="font-medium">+91 9025839394</span>
                                                </div>
                                                  <div class="contact-badge flex items-center bg-gray-100 px-4 py-2 rounded-lg group">
                                                    <i class="fas fa-envelope text-accent mr-2 group-hover:text-white transition duration-300"></i>
                                                    <span class="font-medium">pencilbitzhr@gmail.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                      <!-- Academic Event Manager -->
                                    <div class="team-card bg-white rounded-xl p-6">
                                        <div class="text-center">
                                              <div class="flex-shrink-0 text-center">
                                            <img src="assets/img/meera.png"
                                                alt="Rajkumar Kalyanasundaram"
                                                class="w-48 h-48 rounded-full border-1 profile-img object-scale-down justify-content-center">
                                        </div>
                                            <h3 class="text-xl font-bold text-primary mb-2">Meeramathi P</h3>
                                            <p class="text-accent font-medium mb-4">Academic Event Manager</p>

                                           

                                            <div class="grid justify-center gap-3">
                                                <div class="contact-badge flex items-center bg-gray-100 px-4 py-2 rounded-lg group">
                                                    <i class="fas fa-phone-alt text-accent mr-2 group-hover:text-white transition duration-300"></i>
                                                    <span class="font-medium">+91 9361313822</span>
                                                </div>
                                                 <div class="contact-badge flex items-center bg-gray-100 px-4 py-2 rounded-lg group">
                                                    <i class="fas fa-envelope text-accent mr-2 group-hover:text-white transition duration-300"></i>
                                                    <span class="font-medium">eventmanager@gmail.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row g-4">
            <!-- Contact Info -->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class=" p-1 lg:p-4 mt-5 rounded  text-justify ">
                    <h2 class=" sub-title mb-3 text-blue-600 font-medium  text-2xl lg:text-4xl sm:text-4xl ">Contact Information</h2>
                    <p class="text-muted text-xl lg:text-2xl    text-gray-600">We’re here to assist you! If you have any questions, feedback, or require support, don’t hesitate to get in touch with us.</p>

                    <ul class="list-unstyled mt-4">
                        <!-- Phone -->
                        <li class="d-flex align-items-start mb-4">
                            <i class="fas fa-phone-alt text-primary fs-4 me-3 mt-1"></i>
                            <div>
                                <h6 class="mb-2 fw-bold">Phone</h6>
                                <a href="tel:+919944307413" class="text-gray-700 hover:text-sky-600">+91 99443 07413</a>
                            </div>
                        </li>

                        <!-- Location -->
                        <li class="d-flex align-items-start mb-4">
                            <i class="fas fa-map-marker-alt text-danger fs-4 me-3 mt-1"></i>
                            <div>
                                <h6 class="mb-1 fw-bold">Our Location</h6>
                                <a href="https://maps.app.goo.gl/YKPoYX2kJKZEtDuy8" class="text-gray-800 hover:text-blue-500">Coimbatore TamilNadu 641006</a>
                            </div>
                        </li>

                        <!-- Email -->
                        <li class="d-flex align-items-start mb-4">
                            <i class="fas fa-envelope-open-text text-warning fs-4 me-3 mt-1"></i>
                            <div>
                                <h6 class="mb-1 fw-bold">Email</h6>
                                <a href="mailto:pencilbitzindia@gmail.com" class="text-gray-800 hover:text-blue-700">pencilbitzindia@gmail.com</a>
                            </div>
                        </li>

                        <!-- WhatsApp -->
                        <li class="d-flex align-items-start">
                            <i class="fab fa-whatsapp text-success fs-4 me-3 mt-1"></i>
                            <div>
                                <h6 class="mb-1 fw-bold">WhatsApp</h6>
                                <a href="https://wa.me/919944307413" target="_blank" class="text-gray-800 hover:text-green-500">Chat on WhatsApp</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="contact-form-style-one">
                    <h5 class="sub-title">Have Questions?</h5>
                    <h2 class="heading  ">Send us a Message</h2>
 <form class="contactform" onsubmit="sendEmail(event)">
                                    <div class="mb-3">
                                        <input
                                            type="text"
                                            name="name"
                                            class="form-control"
                                            placeholder="Your Name"
                                            required />
                                    </div>
                                    <div class="mb-3">
                                        <input
                                            type="email"
                                            name="email"
                                            class="form-control"
                                            placeholder="Your Email"
                                            required />
                                    </div>
                                    <div class="mb-3">
                                        <input
                                            type="tel"
                                            name="phone"
                                            class="form-control"
                                            placeholder="Your Phone Number"
                                            required />
                                    </div>
                                    <div class="mb-3">
                                        <textarea
                                            name="message"
                                            class="form-control"
                                            rows="5"
                                            placeholder="Text Your Message"
                                            required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="contact-map m-3 mt-5 pb-5">
                    <h2 class=" text-center fs-1">Find Us Here</h2>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.045132520461!2d76.97084277480894!3d11.035240789129631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859002f5e17f3%3A0x16123b0c1c1835da!2sPencilbitz!5e0!3m2!1sen!2sin!4v1747809123058!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
                                <!-- EmailJs soucrs code  -->
                    <!-- Include Bootstrap CSS in your HTML head -->
                    <link
                        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
                        rel="stylesheet" />
                    <!-- EmailJS Script -->
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
                    <script type="text/javascript">
                        (function() {
                            emailjs.init('19NICKaaPGidNRxaj'); // Public Key
                        })();

                        function sendEmail(e) {
                            e.preventDefault();

                            const form = e.target;

                            const formData = {
                                name: form.name.value,
                                email: form.email.value,
                                phone: form.phone.value,
                                message: form.message.value,
                            };

                            // 1. Thank you email to user
                            emailjs
                                .send('service_l493cys', 'template_hkhve69', formData)
                                .then((response) => {
                                    console.log('User email sent:', response.status, response.text);
                                    form.reset(); // Clear form after sending
                                })
                                .catch((error) => {
                                    console.error('Error sending user email:', error);
                                });

                            // 2. Admin notification
                            emailjs
                                .send('service_l493cys', 'template_osxk0jk', formData)
                                .then((response) => {
                                    console.log('Admin email sent:', response.status, response.text);
                                })
                                .catch((error) => {
                                    console.error('Error sending admin email:', error);
                                });
                        }
                    </script>

                    <!-- End Emailjs Code -->

            <!-- <a href="book-payment-parveshmuzaraf.php">book-payment-1</a>
                     <a href="book-payment-citrameni.php"> book-payment-2</a>
                     <a href="book-payment-pon-sridharan-kumar.php">book payment-3</a>
                     <a href="book-payment-tamilarasi.php">book payment-4</a> -->

        </div>

        <!-- Start Features 
    ============================================= -->

        <!-- End Blog  -->


        <!-- Start Footer 
    ============================================= -->
        <?php require_once "footer.php"; ?>

</body>

</html>
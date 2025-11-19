<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pencil Bitz">

    <!-- ========== Page Title ========== -->
    <title>Pencilbitz</title>

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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


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
        }

        .team-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-5px);
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: #667eea;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .team-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 16px;
            overflow: hidden;
        }

        .team-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .section-titles {
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: #667eea;
        }

        .role-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .textbook-badge {
            background-color: #dbeafe;
            color: #1e40af;
        }

        .patent-badge {
            background-color: #f3e8ff;
            color: #7c3aed;
        }

        .event-badge {
            background-color: #fef3c7;
            color: #d97706;
        }

        .ieee-badge {
            background-color: #fee2e2;
            color: #dc2626;
        }

        .director-badge {
            background-color: #ede9fe;
            color: #6d28d9;
        }

        .member-photo {
            width: 160px;
            height: 190px;
            object-position: cover;
            /* border-radius: 50%; */
            object-fit: cover;
            /* border: 4px solid white; */
            border: none;
            /* box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); */
        }

        .director-photo {
            width: 180px;
            height: 180px;
        }
    </style>

</head>

<body class="bg-gray-50">

    <!-- Navbar -->
    <?php require_once "navbar.php"; ?>
    <!-- End  file  -->
    <div style="max-width: 1520px;" class=" container  ">
        <div class="max-w-8xl mx-auto py-5 sm:px-4 lg:px-1 ">
            <div class="min-h-screen py-3">
                <div class="container mx-auto px-4 items-center">
                    <!-- Header Section -->
                    <div class="text-center mb-5">
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Our Team</h1>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Meet our dedicated team members who are here to support you with textbooks, research papers, patents, and events.</p>
                    </div>
                    <!-- Managing Director Section -->
                    <div class="mb-3">
                        <h2 class="section-titles flex  justify-content-center text-3xl font-bold text-gray-800 text-center">Managing Director</h2>
                        <div class="flex justify-center">
                            <div class="team-card bg-white rounded-xl p-4 shadow-lg w-full max-w-lg">
                                <div class="text-center">
                                    <div class="flex justify-center mb-6">
                                        <div class="gradient-bg rounded-full w-48 h-48 flex items-center justify-center overflow-hidden shadow-md">
                                            <img src="assets/img/team/sangeetha-mam.png" alt="Sangeetha Subramaniam" class="w-full h-full object-cover">
                                        </div>
                                    </div>
                                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Sangeetha Subramaniam</h3>
                                    <p class="text-purple-600 font-medium mb-6">Managing Director</p>
                                    <!-- Contact Buttons -->
                                    <div class="mt-6 space-y-3">
                                        <!-- Phone -->
                                        <a href="tel:+919944307413" class="flex items-center justify-center bg-blue-50 text-blue-600 px-4 py-3 rounded-lg hover:bg-blue-600 hover:text-white transition-all duration-300 max-w-xs mx-auto">
                                            <i class="fas fa-phone mr-2"></i>
                                            +91 9944304713
                                        </a>
                                        <!-- Email -->
                                        <a href="mailto:managingdirector@pencilbitz.com" class="flex items-center text-sm sm:text-sm justify-center bg-green-50 text-green-600 px-4 py-3 rounded-lg hover:bg-green-600 hover:text-white transition-all duration-300 max-w-xs mx-auto">
                                            <i class="fas fa-envelope mr-2"></i>
                                            managingdirector@pencilbitz.com
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </dev>
                </div>
            </div>
            <style>
                :root {
                    --primary: #2c3e50;
                    --secondary: #3498db;
                    --accent: #e74c3c;
                    --light: #f8f9fa;
                    --dark: #2c3e50;
                    --text: #333333;
                    --text-light: #6c757d;
                    --border-radius: 12px;
                    --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
                    --transition: all 0.3s ease;
                }

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }

                body {
                    background-color: #f5f7fa;
                    color: var(--text);
                    line-height: 1.6;
                }

                .container {
                    max-width: 1200px;
                    margin: 0 auto;
                    padding: 0 5px;
                }


                /* Section Styles */
                .section {
                    padding: 10px 0;
                }

                .section-title {
                    text-align: center;
                    margin-bottom: 10px;
                    position: relative;
                }

                .section-title h2 {
                    font-size: 2.5rem;
                    color: var(--primary);
                    margin-bottom: 10px;
                    font-weight: 700;
                }

                .section-title p {
                    color: var(--text-light);
                    max-width: 600px;
                    margin: 0 auto;
                    font-size: 1.1rem;
                }

                .section-title::after {
                    content: "";
                    display: block;
                    width: 80px;
                    height: 4px;
                    background: var(--secondary);
                    margin: 20px auto;
                    border-radius: 2px;
                }

                /* Team Grid */
                .team-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                    gap: 30px;
                    margin-bottom: 60px;
                }

                .team-card {
                    background: white;
                    border-radius: var(--border-radius);
                    overflow: hidden;
                    box-shadow: var(--shadow);
                    transition: var(--transition);
                    position: relative;
                }

                .team-card:hover {
                    transform: translateY(-10px);
                    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
                }

                .card-header {
                    padding: 30px 20px 20px;
                    text-align: center;
                    position: relative;
                }

                .member-photo {
                    width: 140px;
                    height: 140px;
                    border-radius: 50%;
                    object-fit: cover;
                    border: 5px solid white;
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                    margin: 0 auto 20px;
                    display: block;
                }

                .role-badge {
                    display: inline-block;
                    padding: 6px 15px;
                    border-radius: 30px;
                    font-size: 0.85rem;
                    font-weight: 600;
                    margin-bottom: 15px;
                    color: white;
                }

                .patent-badge {
                    background: linear-gradient(135deg, #9b59b6, #8e44ad);
                }

                .textbook-badge {
                    background: linear-gradient(135deg, #3498db, #2980b9);
                }

                .event-badge {
                    background: linear-gradient(135deg, #e74c3c, #c0392b);
                }

                .team-card h3 {
                    font-size: 1.5rem;
                    margin-bottom: 5px;
                    color: var(--dark);
                }

                .team-card .position {
                    color: var(--text-light);
                    font-size: 1rem;
                    margin-bottom: 20px;
                }

                .card-body {
                    padding: 0 25px 25px;
                }

                .contact-info {
                    display: flex;
                    flex-direction: column;
                    gap: 12px;
                }

                .contact-link {
                    display: flex;
                    align-items: center;
                    padding: 12px 15px;
                    border-radius: 10px;
                    text-decoration: none;
                    color: var(--text);
                    transition: var(--transition);
                    border: 1px solid #eaeaea;
                }

                .contact-link:hover {
                    background: #f8f9fa;
                    transform: translateX(5px);
                }

                .contact-link i {
                    width: 30px;
                    height: 30px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 50%;
                    margin-right: 12px;
                    color: white;
                }

                .phone-link i {
                    background: var(--secondary);
                }

                .email-link i {
                    background: var(--accent);
                }

                .contact-link span {
                    font-size: 0.95rem;
                }

                /* CTA Section */
                .cta-section {
                    background: linear-gradient(135deg, var(--primary) 0%, #1a2530 100%);
                    color: white;
                    padding: 80px 0;
                    text-align: center;
                    border-radius: var(--border-radius);
                    margin-top: 40px;
                }

                .cta-section h3 {
                    font-size: 2.2rem;
                    margin-bottom: 20px;
                }

                .cta-section p {
                    font-size: 1.1rem;
                    max-width: 700px;
                    margin: 0 auto 30px;
                    opacity: 0.9;
                }

                .cta-button {
                    display: inline-flex;
                    align-items: center;
                    background: var(--accent);
                    color: white;
                    padding: 15px 30px;
                    border-radius: 50px;
                    text-decoration: none;
                    font-weight: 600;
                    font-size: 1.1rem;
                    transition: var(--transition);
                    box-shadow: 0 5px 15px rgba(231, 76, 60, 0.3);
                }

                .cta-button:hover {
                    background: #c0392b;
                    transform: translateY(-3px);
                    box-shadow: 0 8px 20px rgba(231, 76, 60, 0.4);
                }

                .cta-button i {
                    margin-right: 10px;
                }

                /* Footer */
                .footer {
                    background: var(--dark);
                    color: white;
                    padding: 40px 0;
                    text-align: center;
                    margin-top: 60px;
                }

                .footer p {
                    opacity: 0.8;
                }

                /* Responsive */
                @media (max-width: 768px) {
                    .header h1 {
                        font-size: 2.5rem;
                    }

                    .section-title h2 {
                        font-size: 2rem;
                    }

                    .team-grid {
                        grid-template-columns: 1fr;
                    }
                }
            </style>
            <div>
                <!-- Patent Team Section -->
                <section class="section">
                    <div class="container ">
                        <div class="section-title flex justify-content-center">
                            <h2>Senior Manager</h2>
                        </div>
                        <div class="flex justify-content-center">
                            <div class="team-grid flex justify-content-center align-items-center">
                                <!-- Team Member 1 -->
                                <div class="team-card py-3">
                                    <div class="card-header">
                                        <img class="member-photo" src="assets/img/team/rajkumar.png" alt="Rajkumar Kalyanasundaram">
                                        <span class="role-badge patent-badge">Patent Specialist</span>
                                        <h3>Rajkumar Kalyanasundaram</h3>
                                        <p class="position">Senior Manager</p>
                                    </div>
                                    <div class="mt-6 space-y-3">
                                        <!-- Phone -->
                                        <a href="tel:+918468058012" class="flex items-center justify-center bg-blue-50 text-blue-600 px-4 py-3 rounded-lg hover:bg-blue-600 hover:text-white transition-all duration-300 max-w-xs mx-auto">
                                            <i class="fas fa-phone mr-2"></i>
                                            +91 8468058012
                                        </a>
                                        <!-- Email -->
                                        <a href="mailto:patentsupportmanager@pencilbitz.com" class="flex items-center text-sm sm:text-sm justify-center bg-green-50 text-green-600 px-4 py-3 rounded-lg hover:bg-green-600 hover:text-white transition-all duration-300 max-w-xs mx-auto">
                                            <i class="fas fa-envelope mr-2"></i>
                                            patentsupportmanager@pencilbitz.com
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </section>

                <!-- Textbook Team Section -->
                <section class="section" style="background-color: #f8f9fa;">
                    <div class="container">
                        <div class="section-title flex justify-content-center">
                            <h2>Textbook Team</h2>
                        </div>

                        <div class="team-grid">
                            <!-- Team Member 1 -->
                            <div class="team-card">
                                <div class="card-header">
                                    <img class="member-photo" src="assets/img/team/karthik.png" alt="Karthik A">
                                    <span class="role-badge textbook-badge">Textbook Manager</span>
                                    <h3>Karthik Alagusamy</h3>
                                    <p class="position">Manager</p>
                                </div>
                                <div class="card-body">
                                    <div class="contact-info">
                                        <a href="tel:+917200741307" class="contact-link phone-link">
                                            <i class="fas fa-phone"></i>
                                            <span>+91 7200741307</span>
                                        </a>
                                        <a href="mailto:karthik.pencilbitz@gmail.com" class="contact-link email-link">
                                            <i class="fas fa-envelope"></i>
                                            <span>textbookmanager@pencilbitz.com</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Member 2 -->
                            <div class="team-card">
                                <div class="card-header">
                                    <img class="member-photo" src="assets/img/team/krisha.png" alt="Krisha">
                                    <span class="role-badge textbook-badge">Textbook Associate</span>
                                    <h3>Krisha Nandhakumar</h3>
                                    <p class="position">Associate</p>
                                </div>
                                <div class="card-body">
                                    <div class="contact-info">
                                        <a href="tel:+917338741342" class="contact-link phone-link">
                                            <i class="fas fa-phone"></i>
                                            <span>+91 7338741342</span>
                                        </a>
                                        <a href="mailto:krisha.pencilbitz@gmail.com" class="contact-link email-link">
                                            <i class="fas fa-envelope"></i>
                                            <span>krisha.pencilbitz@gmail.com</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Member 3 -->
                            <div class="team-card">
                                <div class="card-header">
                                    <img class="member-photo" src="assets/img/team/Mythili.png" alt="Mythili">
                                    <span class="role-badge textbook-badge">Textbook Associate</span>
                                    <h3>Mythili Balasubramanian</h3>
                                    <p class="position">Associate</p>
                                </div>
                                <div class="card-body">
                                    <div class="contact-info">
                                        <a href="tel:+917708826928" class="contact-link phone-link">
                                            <i class="fas fa-phone"></i>
                                            <span>+91 7708826928</span>
                                        </a>
                                        <a href="mailto:mythili.pencilbitz@gmail.com" class="contact-link email-link">
                                            <i class="fas fa-envelope"></i>
                                            <span>mythili.pencilbitz@gmail.com</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Event Team Section -->
                <section class="section">
                    <div class="container">
                        <div class="section-title flex justify-content-center">
                            <h2> Events Team</h2>
                        </div>
                        <div class="team-grid">
                            <!-- Team Member 1 -->
                            <div class="team-card">
                                <div class="card-header">
                                    <img class="member-photo " src="assets/img/team/aisho-new.jpg" alt="Aishwarya M">
                                    <span class="role-badge event-badge">Event Coordinator</span>
                                    <h3>Aishwarya Murugan</h3>
                                    <p class="position">Team Leader</p>
                                </div>
                                <div class="card-body">
                                    <div class="contact-info">
                                        <a href="tel:+919600581734" class="contact-link phone-link">
                                            <i class="fas fa-phone"></i>
                                            <span>+91 9600581734</span>
                                        </a>
                                        <a href="mailto:aishwarya.pencilbitz@gmail.com" class="contact-link email-link overflow-auto">
                                            <i class="fas fa-envelope"></i>
                                            <span class="">aishwarya.pencilbitz@gmail.com</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Member 2 -->
                            <div class="team-card">
                                <div class="card-header">
                                    <img class="member-photo" src="assets/img/team/Shri-dharshini.M.png" alt="Shri dharshini M">
                                    <span class="role-badge event-badge">Event Associate</span>
                                    <h3>Shri Dharshini Mahendran</h3>
                                    <p class="position">Associate</p>
                                </div>
                                <div class="card-body">
                                    <div class="contact-info">
                                        <a href="tel:+919600261734" class="contact-link phone-link">
                                            <i class="fas fa-phone"></i>
                                            <span>+91 9600261734</span>
                                        </a>
                                        <a href="mailto:shridarshini.pencilbitz@gmail.com" class="contact-link email-link overflow-auto">
                                            <i class="fas fa-envelope"></i>
                                            <span>shridarshini.pencilbitz@gmail.com</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Team Member 3 -->
                            <div class="team-card">
                                <div class="card-header">
                                    <img class="member-photo" src="assets/img/team/Sandhya.M.png" alt="Shri dharshini M">
                                    <span class="role-badge event-badge">Event Associate</span>
                                    <h3>Sandhya Muthukumar</h3>
                                    <p class="position">Associate</p>
                                </div>
                                <div class="card-body">
                                    <div class="contact-info">
                                        <a href="tel:+917708828942" class="contact-link phone-link">
                                            <i class="fas fa-phone"></i>
                                            <span>+91 7708828942</span>
                                        </a>
                                        <a href="mailto:sandhya.bookbytes@gmail" class="contact-link email-link overflow-auto">
                                            <i class="fas fa-envelope"></i>
                                            <span>sandhya.bookbytes@gmail</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                             <!-- Team Member 4 -->
                            <div class="team-card">
                                <div class="card-header">
                                    <img class="member-photo" src="assets/img/team/reagan.png" alt="Shri dharshini M">
                                    <span class="role-badge event-badge">Event Associate</span>
                                    <h3> Reagan Joseph S</h3>
                                    <p class="position">Associate</p>
                                </div>
                                <div class="card-body">
                                    <div class="contact-info">
                                        <a href="tel:+917708828673" class="contact-link phone-link">
                                            <i class="fas fa-phone"></i>
                                            <span>+91 7708828673</span>
                                        </a>
                                        <a href="mailto:reagan.bookbytes@gmail.com" class="contact-link email-link overflow-auto">
                                            <i class="fas fa-envelope"></i>
                                            <span>reagan.bookbytes@gmail.com</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Event Team Section -->
                <section class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="section-title">
                                    <h2>Patent Team</h2>
                                </div>
                                <div class="team-grid">
                                    <!-- Team Member 2 -->
                                    <div class="team-card">
                                        <div class="card-header">
                                            <img class="member-photo" src="assets/img/team/Thrisha.R.png" alt="Thrisha R">
                                            <span class="role-badge patent-badge">Patent Associate</span>
                                            <h3>Thrisha Rajendran</h3>
                                            <p class="position">Associate</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="contact-info">
                                                <a href="tel:+917708828541" class="contact-link phone-link">
                                                    <i class="fas fa-phone"></i>
                                                    <span>+91 7708828541</span>
                                                </a>
                                                <a href="mailto:thrisha.pencilbitz@gmail.com" class="contact-link email-link">
                                                    <i class="fas fa-envelope"></i>
                                                    <span>thrisha.pencilbitz@gmail.com</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="section-title">
                                    <h2>IEEE Team</h2>
                                </div>
                                <div class="team-grid">
                                    <!-- Team Member 2 -->
                                    <div class="team-card">
                                        <div class="card-header">
                                            <img class="member-photo" src="assets/img/team/harini.png" alt="Thrisha R">
                                            <span class="role-badge patent-badge">IEEE</span>
                                            <h3>Harini Selvam</h3>
                                            <p class="position">Manager</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="contact-info">
                                                <a href="tel:+91 9629476711" class="contact-link phone-link">
                                                    <i class="fas fa-phone"></i>
                                                    <span>+91 9629476711</span>
                                                </a>
                                                <a href="mailto:ieeepublications.pencilbitz@gmail.com" class="contact-link email-link">
                                                    <i class="fas fa-envelope"></i>
                                                    <span>ieeepublications.pencilbitz@gmail.com</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                </section>



            </div>
            <div class="max-w-4xl mx-auto px-6 text-center py-8">
                <!-- Heading -->
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Have Any Questions?
                </h2>
                <p class="text-gray-600 mb-8">
                    We’re here to help you. Contact our support person directly for quick assistance.
                </p>
                <img class="member-photo " src="assets/img/team/chandru.jpg" alt="Shri dharshini M">
                <!-- Contact Person -->
                <div class="bg-white shadow-lg rounded-lg p-6 max-w-md mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800">Chandru R</h3>
                    <p class="text-gray-500">Operation Manager </p>

                    <!-- Contact Buttons -->
                    <div class="mt-6 space-y-3">
                        <!-- Phone -->
                        <a href="tel:+917708826908"
                            class="flex items-center justify-center bg-blue-50 text-blue-600 px-4 py-2 rounded-lg hover:bg-blue-600 hover:text-white transition">
                            <i class="fas fa-phone mr-2"></i>
                            +91 7708826908
                        </a>

                    </div>
                </div>
            </div>
            </section>

            <div class="row m-2">
                <!-- Contact Info -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class=" p-1 lg:p-4 mt-5 rounded  text-justify ">
                        <h2 class=" sub-title mb-3 text-blue-600 font-medium  text-2xl lg:text-4xl sm:text-4xl ">Contact Information</h2>
                        <p class="text-muted text-xl lg:text-2xl    text-gray-600">We’re here to assist you! If you have any questions, feedback, or require support, don’t hesitate to get in touch with us.</p>

                        <ul class="list-unstyled mt-4">
                            <!-- Phone -->
                            <li class="d-flex align-items-start mb-4">
                                <i class="fas fa-phone text-primary fs-4 me-3 mt-1"></i>
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
                                    <a href="mailto:managingdirector@pencilbitz.com" class="text-gray-800 hover:text-blue-700">managingdirector@pencilbitz.com</a>
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
                <div class="col">
                    <div class="contact-map m-1 mt-5 pb-5">
                        <h2 class=" text-center fs-1">Find Us Here</h2>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.045132520461!2d76.97084277480894!3d11.035240789129631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859002f5e17f3%3A0x16123b0c1c1835da!2sPencilbitz!5e0!3m2!1sen!2sin!4v1747809123058!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <!-- EmailJs soucrs code  -->
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

            <!-- <a href="book-payment-parveshmuzaraf.php">book-payment-Parveshmuzaraf</a>
            <a href="book-payment-citrameni.php"> book-payment-Citrameni</a>
            <a href="book-payment-pon-sridharan-kumar.php">book payment-Pon Sridharan Kumar</a>
            <a href="book-payment-tamilarasi.php">book payment-Tamilarasi</a>
            <a href="book-payment-Kanthasami.php">Book-payment-Kanthasami</a> -->
            <!-- <a href="book-payment-Sangeetha.php">Book-Payment-Sangeetha</a>
            <a href="book-payment-Praveen.php">Book-Payment-Praveen</a> -->



            <!-- Start Footer 
                       ============================================= -->
            <?php require_once "footer.php"; ?>




        </div>
    </div>



</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pencil Bitz - Call for Book Chapters">

    <!-- ========== Page Title ========== -->
    <title>Edited Books - Pencil Bitz</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/new-logo-pencilbitz.jpg" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3708edbb88.js" crossorigin="anonymous"></script>
    <style>
        :root {
            --primary: #0ea5e9;
            --primary-dark: #0284c7;
            --secondary: #f97316;
            --light: #f8fafc;
            --dark: #1e293b;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8fafc;
            color: #334155;
        }
        
        .header-section {
            background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);
            color: white;
            padding: 3rem 0;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 20px rgba(14, 165, 233, 0.2);
            margin-bottom: 3rem;
        }
        
        .book-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            margin-bottom:10px;
            position: relative;
            border: 1px solid #e2e8f0;
        }
        
        .book-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .book-cover {
            height: 260px;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .book-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--secondary);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .book-content {
            padding: 1.5rem;
        }
        
        .book-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 0.5rem;
            line-height: 1.3;
        }
        
        .book-subtitle {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .book-description {
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }
        
        .book-details {
            border-top: 1px solid #e2e8f0;
            padding-top: 1.5rem;
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
        }
        
        .detail-item {
            flex: 1;
            min-width: 150px;
        }
        
        .detail-label {
            font-size: 0.85rem;
            color: #94a3b8;
            margin-bottom: 0.25rem;
        }
        
        .detail-value {
            font-weight: 600;
            color: var(--dark);
        }
        
        .btn-primary-custom {
            background: var(--primary);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-primary-custom:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(14, 165, 233, 0.3);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-title h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 1rem;
        }
        
        .section-title p {
            font-size: 1.1rem;
            color: #64748b;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .books-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        @media (max-width: 768px) {
            .books-grid {
                grid-template-columns: 1fr;
            }
            
            .book-details {
                flex-direction: column;
                gap: 1rem;
            }
            
            .section-title h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>

    <!-- navbar file -->
    <?php require_once "navbar.php"; ?>
    <!-- End navbar file  -->

    <!-- Header Section -->
    <div class="header-section">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Call for Book Chapters</h1>
                <p class="text-xl max-w-2xl mx-auto">Join our academic publications with chapters that will be promoted on Amazon and Flipkart</p>
                <div class="mt-6">
                    <span class="inline-block bg-white text-primary px-4 py-2 rounded-full font-semibold shadow-md">
                        <i class="fas fa-arrow-down mr-2"></i>Scroll to see available opportunities
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 pb-12" style="max-width: 1520px;">
        <div class="section-title">
            <h1>Edited Books</h1>
            <p>Explore our current calls for book chapters. Click on any book to learn more and submit your chapter.</p>
        </div>
               <div class=" flex justify-content-center mr-2 py-4"> 
                <h2 class="text-3xl font-bold text-sky-600">Upcoming Books</h2>
               </div>
        <div class="books-grid">
            <!-- Book 1 -->
            <div class="book-card">
                <div class="book-cover " style="background-image: url('https://th.bing.com/th/id/R.7937c1cb42cd6cea6071b27641410db5?rik=3kERbcw%2bqjZHcA&riu=http%3a%2f%2fzephyrtechnologies.in%2fimages%2fzephyrlearn-datascience.jpg&ehk=7kc3BUy3bkPDOBAXF1zPWwR13XOCFmcf9onNVXuGFnc%3d&risl=&pid=ImgRaw&r=0');">
                    <div class="book-badge">Coming Soon</div>
                </div>
                <div class="book-content">
                    <h2 class="book-title">Data Science with Machine Learning: Concepts, Applications and Challenges </h2>
                    <p class="book-subtitle">With Amazon and Flipkart Promotion</p>
                    <!-- <p class="book-description">Innovations in Machine Learning: Techniques and Trends explores modern ML algorithms, deep learning methods, and real-world applications. It offers insights into emerging technologies, practical implementations, and future trends in intelligent systems.</p> -->
                    
                    <div class="book-details">
                        <div class="detail-item">
                            <div class="detail-label">Contact Person</div>
                            <div class="detail-value">Harini: +91 9629476711</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Chapter Submission</div>
                            <div class="detail-value">26/06/2025</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Book Release</div>
                            <div class="detail-value">30/06/2025</div>
                        </div>
                    </div>
                    
                    <div class="mt-4 text-center">
                        <a href="#" class="btn-primary-custom">
                            <i class="fas fa-book-open mr-2"></i> View Details
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Book 2 -->
            <div class="book-card">
                <div class="book-cover" style="background-image: url('https://img.freepik.com/premium-photo/artificial-intelligence-data-science-icon-element-design-vector-illustration_41050-7319.jpg');">
                    <div class="book-badge">Coming Soon</div>
                </div>
                <div class="book-content">
                    <h2 class="book-title">Artificial Intelligence: Concepts, Challenges and Emerging Applications</h2>
                    <p class="book-subtitle">With International Distribution</p>
                    <!-- <p class="book-description">This comprehensive volume covers the latest advances in AI and data science, including neural networks, natural language processing, computer vision, and big data analytics. Perfect for researchers and practitioners alike.</p> -->
                    
                    <div class="book-details">
                        <div class="detail-item">
                            <div class="detail-label">Contact Person</div>
                            <div class="detail-value">Harini: +91 9629476711</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Chapter Submission</div>
                            <div class="detail-value">15/08/2025</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Book Release</div>
                            <div class="detail-value">30/09/2025</div>
                        </div>
                    </div>
                    
                    <div class="mt-4 text-center">
                        <a href="#" class="btn-primary-custom">
                            <i class="fas fa-book-open mr-2"></i> View Details
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="">
                <div class=" flex justify-content-center mr-2 py-4"> 
                <h2 class="text-3xl font-bold text-sky-600">Completed  Books</h2>
            </div>
                    <div class="books-grid">
            <!-- Book 1 -->
            <div class="book-card">
                <div class="book-cover " style="background-image: url('https://blog.ansi.org/wp-content/uploads/2024/08/Digital-Brain-in-Lightbulb.jpg');">
                    <div class="book-badge">New Release</div>
                </div>
                <div class="book-content">
                    <h2 class="book-title">INNOVATIONS IN MACHINE LEARNING TECHNIQUES AND TRENDS Innovations In Mechine Learning Techn</h2>
                    <p class="book-subtitle">With Amazon and Flipkart Promotion</p>
                    <!-- <p class="book-description">Innovations in Machine Learning: Techniques and Trends explores modern ML algorithms, deep learning methods, and real-world applications. It offers insights into emerging technologies, practical implementations, and future trends in intelligent systems.</p> -->
                    
                    <div class="book-details">
                        <div class="detail-item">
                            <div class="detail-label">Contact Person</div>
                            <div class="detail-value">Harini: +91 9629476711</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Chapter Submission</div>
                            <div class="detail-value">26/06/2025</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Book Release</div>
                            <div class="detail-value">30/06/2025</div>
                        </div>
                    </div>
                    
                    <div class="mt-4 text-center">
                        <a href="edited-book-innovations-in-machine-learning.php" class="btn-primary-custom">
                            <i class="fas fa-book-open mr-2"></i> View Details
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Book 2 -->
            <div class="book-card">
                <div class="book-cover" style="background-image: url('https://www.semaphore-software.com/semaphoresite/uploads/2023/07/IoT.png');">
                    <div class="book-badge">New Release</div>
                </div>
                <div class="book-content">
                    <h2 class="book-title">Internet of Things (IoT): Emerging Trends, Applications, and Challenges</h2>
                    <p class="book-subtitle">With Amazon and Flipkart Promotion</p>
                    <!-- <p class="book-description">This comprehensive volume covers the latest advances in AI and data science, including neural networks, natural language processing, computer vision, and big data analytics. Perfect for researchers and practitioners alike.</p> -->
                    
                    <div class="book-details">
                        <div class="detail-item">
                            <div class="detail-label">Contact Person</div>
                            <div class="detail-value">Harini: +91 9629476711</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Chapter Submission</div>
                            <div class="detail-value">15/08/2025</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Book Release</div>
                            <div class="detail-value">30/09/2025</div>
                        </div>
                    </div>
                    
                    <div class="mt-4 text-center">
                        <a href="edited-book-interner-of-things(IOT)-book.php" class="btn-primary-custom">
                            <i class="fas fa-book-open mr-2"></i> View Details
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Book 3 -->
        </div>

        </div>    
        <div class="mt-12 bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Interested in Publishing with Us?</h2>
                <p class="text-gray-600 mb-6">We're always looking for new authors and editors to collaborate with. If you have an idea for a book or would like to propose a new publication, get in touch with our editorial team.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#" class="btn-primary-custom">
                        <i class="fas fa-envelope mr-2"></i> Contact Editorial Team
                    </a>
                    <a href="#" class="bg-gray-100 text-gray-800 px-6 py-3 rounded-lg font-semibold hover:bg-gray-200 transition-colors">
                        <i class="fas fa-file-alt mr-2"></i> Submission Guidelines
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Footer -->
    <?php require_once "footer.php"; ?>
    <!-- End Footer -->

</body>
</html>
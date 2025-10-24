<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ========== Page Title ========== -->
    <title>Pencil Bitz</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/new-logo-pencilbitz.jpg" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }

        .font-serif-display {
            font-family: 'Playfair Display', serif;
        }

        .bg-book-gradient {
            background: linear-gradient(135deg, #f5f7f5ff 0%, #3bf654ff 100%);
        }

        .bg-book-gradient-2 {
            background: linear-gradient(135deg, #0f766e 0%, #14b8a6 100%);
        }

        .bg-book-gradient-3 {
            background: linear-gradient(135deg, #7e22ce 0%, #c084fc 100%);
        }

        .book-shadow {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .floating-element {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite alternate;
        }

        @keyframes pulse-glow {
            from {
                box-shadow: 0 0 5px rgba(59, 130, 246, 0.5);
            }

            to {
                box-shadow: 0 0 20px rgba(59, 130, 246, 0.8);
            }
        }

        .gradient-text {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .section-divider {
            border-bottom: 1px solid #e5e7eb;
            margin: 3rem 0;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">
    <!-- navbar -->
    <?php include 'navbar.php'; ?>
    <!-- Header -->
    <!-- Book Details Section -->
    <div class="container mx-auto px-4 py-8 max-w-7xl">
        <div class="flex flex-col lg:flex-row gap-12">

            <!-- Book Image Section - Multiple Design Options -->
            <div class="w-full lg:w-2/5">
                <!-- Option 1: Modern Card Design -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">Book Cover</h3>
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden book-shadow">
                        <div class="bg-book-gradient p-6 flex justify-center items-center">
                            <div class="w-64 h-80 bg-white rounded-lg shadow-2xl overflow-hidden transform rotate-2 floating-element">
                                <img src="assets/img/edited-books/IMTT.png" alt="INNOVATIONS IN MACHINE LEARNING" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="p-4 flex justify-center">
                            <a href="assets/img/edited-books/ml-edited-book-chapter.pdf" class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-all duration-300 pulse-glow">
                                <i class="fas fa-eye"></i> Preview Book
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Option 3: 3D Perspective Design -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">3D Perspective</h3>
                    <div class="relative h-64 flex justify-center items-center">
                        <div class="absolute w-48 h-60 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg transform rotate-12 z-10 shadow-xl overflow-hidden">
                            <img src="assets/img/edited-books/IMTT.png" alt="INNOVATIONS IN MACHINE LEARNING" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute w-48 h-60 bg-gradient-to-r from-gray-400 to-gray-500 rounded-lg transform -rotate-6 translate-x-4 shadow-lg"></div>
                    </div>
                </div>
            </div>

            <!-- Book Information Section -->
            <div class="w-full lg:w-3/5">
                <div class="bg-white rounded-xl shadow-sm p-6 md:p-8">
                    <p class="text-sm uppercase tracking-wider text-blue-600 font-semibold mb-2">Pencil Blitz Publishing</p>

                    <h1 class=" text-4xl md:text-5xl font-extrabold leading-tight mb-2 text-gray-900">
                        INNOVATIONS IN <span class="gradient-text">MACHINE LEARNING</span>
                    </h1>
                    <p class="font-serif-display text-xl italic mb-6 text-gray-600">
                        Techniques and Trends
                    </p>

                    <!-- Book Status Badges -->
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-3 py-1 rounded-full">Available for Pre-order</span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-3 py-1 rounded-full">Amazon & Flipkart Promotion</span>
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium px-3 py-1 rounded-full">Call for Chapters Open</span>
                    </div>

                    <!-- Key Information Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <p class="text-sm text-blue-700 font-medium mb-1">Lead Editor</p>
                            <p class="text-lg font-semibold text-gray-900">Dr. R. Pari</p>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <p class="text-sm text-blue-700 font-medium mb-1">Associate Editor</p>
                            <p class="text-lg font-semibold text-gray-900">Dr. D. Prabakar</p>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <p class="text-sm text-blue-700 font-medium mb-1">Section Editor</p>
                            <p class="text-lg font-semibold text-gray-900">Dr. Tabassum Nahid Sultana</p>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <p class="text-sm text-blue-700 font-medium mb-1">Contributing Editor</p>
                            <p class="text-lg font-semibold text-gray-900">Asra Fatima</p>
                        </div>
                    </div>

                    <!-- Book Description -->
                    <div class="mb-8">
                        <h2 class="text-xl font-bold text-gray-800 mb-3">About This Book</h2>
                        <p class="text-gray-700 leading-relaxed">
                            This essential volume brings together the latest research from leading experts in Computer Science and Engineering. It details pioneering algorithms, enhanced classification accuracy methods, and emerging trends in Wireless Sensor Networks, IoT, Information Security, and Artificial Intelligence, providing a critical resource for advanced students and seasoned professionals.
                        </p>
                    </div>

                    <!-- Book Specifications -->
                    <div class="bg-gray-50 p-5 rounded-xl mb-8">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Book Specifications</h2>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                           
                            <div>
                                <p class="text-sm text-gray-500">Release Date</p>
                                <p class="font-semibold">Q4 2025</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Features</p>
                                <p class="font-semibold">161 Pages, B&W/Color</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">ISBN</p>
                                <p class="font-semibold">978-93-48556-35-6</p>
                            </div>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="flex flex-col sm:flex-row gap-4 mb-8">
                        <a href="https://wa.me/+919629476711" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white text-center py-3 px-6 rounded-lg font-semibold transition-all duration-300 flex items-center justify-center gap-2">
                            <i class="fas fa-shopping-cart"></i> Pre-order Now
                        </a>
                        <a href="assets/img/edited-books/ml-edited-book-chapter.pdf" download="assets/img/edited-books/ml-edited-book-chapter.pdf" class="flex-1 bg-white border border-blue-600 text-blue-600 hover:bg-blue-50 text-center py-3 px-6 rounded-lg font-semibold transition-all duration-300 flex items-center justify-center gap-2">
                            <i class="fas fa-download"></i> Download Prospectus
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <!-- Additional Information Section -->
        <div class="mt-12 bg-white rounded-xl shadow-sm p-6 md:p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Book Details</h2>

            <!-- Tabs for different information sections -->
            <div class="border-b border-gray-200 mb-6">
                <div class="flex flex-wrap -mb-px">
                    <button class="tab-link text-blue-600 border-b-2 border-blue-600 py-3 px-4 font-medium text-sm" data-tab="tab-1">
                        Call for Chapters
                    </button>
                    <button class="tab-link text-gray-500 hover:text-gray-700 py-3 px-4 font-medium text-sm" data-tab="tab-2">
                        Table of Contents
                    </button>
                    <button class="tab-link text-gray-500 hover:text-gray-700 py-3 px-4 font-medium text-sm" data-tab="tab-3">
                        Key Topics
                    </button>
                    <button class="tab-link text-gray-500 hover:text-gray-700 py-3 px-4 font-medium text-sm" data-tab="tab-4">
                        Target Audience
                    </button>
                </div>
            </div>

            <!-- Tab Content -->
            <div id="tab-1" class="tab-content active">
                <div class="bg-blue-50 p-5 rounded-lg mb-6">
                    <h3 class="text-xl font-bold text-blue-800 mb-3">Call for Book Chapters</h3>
                    <p class="text-gray-700 mb-4">We are currently accepting chapter submissions for this upcoming publication. Contribute to this cutting-edge volume on machine learning innovations.</p>


                    <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 mb-4">
                        <p class="text-yellow-700 font-medium">For submission inquiries, contact:</p>
                        <p class="text-lg font-semibold text-gray-800"><i class="fas fa-user mr-2"></i>Harini: +91 9629476711</p>
                    </div>

                    <a href="#" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg font-medium transition-colors">
                        <i class="fas fa-file-alt"></i> Submit Chapter Proposal
                    </a>
                </div>
            </div>

            <div id="tab-2" class="tab-content">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Table of Contents: Innovations in Machine Learning: Techniques and Trends</h3>
                <div class="space-y-3">
                    <div class="p-3 bg-gray-50 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">1. Revolutionizing Medical Diagnostics & Prognostics through Deep Learning</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 01</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors: Padmaja C</p>
                    </div>
                    <div class="p-3 bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">2. Predictive Modelling & Intelligent Decision Support in Oncology</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 09</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors: Dr. Shaik Basheera</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">3. Personalized Healthcare via Federated Machine Learning</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 15</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors:Paladi Vishalini </p>
                    </div>
                    <div class="p-3 bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">4. ML for Financial Forecasting and Risk Management</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 21</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors:Rajeswary Nair, Lekshmipriya Vijayan</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">5. Customer Behaviour & Marketing with Explainable AI</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 27</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors: Dr. B. Lakshma Reddy, Dr. Sreenivasa Murthy V, Dr. Mage Usha U </p>
                    </div>
                    <div class="p-3 bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">6. Fraud Detection in E-Commerce & Digital Banking</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 33</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors: Dr. Chamundeshwari. G, P. Vinod Kumar</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">7. IoT Smart Farming: Crop Yield, Soil Monitoring, & Precision Agri.</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 40</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors:Dr. Kakade Sandeep Kishanrao, Honrao Sachin Babanrao, Dr. Deshpande Asmita Sumant, Prof. Shrishail Sidram Patil</p>
                    </div>
                    <div class="p-3 bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">8. ML in Climate Forecasting & Environmental Monitoring</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 50</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors: Mr. E. Sivarajan</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">9. Reinforcement Learning in Autonomous Vehicles</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 57</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors:Mani G</p>
                    </div>
                    <div class="p-3 bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">10. IoT Meets ML: Smart Homes & Urban Analytics</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 63</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors: K. S. R. Rajeswara Rao</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">11. NLP for Multilingual Retrieval & Sentiment Analysis</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 67</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors: Dr. R. Dhivya </p>
                    </div>
                    <div class="p-3 bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">12. Conversational AI: ML Chatbots in Business & Education</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 75</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors: Santhi P</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">13. Adversarial ML for Cybersecurity Defense</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 82</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors:Mrs. S. Vanitha, Mrs. K. Prabha</p>
                    </div>
                    <div class="p-3 bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">14. Ethical ML: Bias, Fairness, and Explainability in Practice</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 103</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors: Mrs. Nancy Chitra Thilaga N </p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">15. Big Data Machine Learning: Leveraging AI, Big Data, and Cloud Computing for Real-World Impact</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 113</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors: Dr. M. Ramesh Kumar, Ms. N. Logeshwari, J. Ruby Elizabeth, A. Harini</p>
                    </div>
                    <div class="p-3 bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">16. Machine Learning Frontiers: Integrative Techniques, Scalable Systems, and Industry-Driven Use Cases</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 121</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors: U. L. Sindhu, Mrs. M. Mahabooba, Anju P, Sruthi P S</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">17. Hybrid AI Models for Dark Web Intelligence Gathering: Deep Learning, Behavioural Analysis & Scalable Cybercrime Detection</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 129</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors: Dr. E. Kavitha, Mrs. Divyamani M K</p>
                    </div>
                    <div class="p-3 bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">18. Machine Learning Frontiers in the Dark Web: Agent-Based Models, Embeddings, and Real-Time Illicit Activity Recognition</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 136</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors: Mrs K. Prabha, Mrs. S. Vanitha</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">19. Advancements in Machine Learning for Cybersecurity: Cutting-Edge Techniques, Emerging Trends, and Future Directions in AI-Driven Threat Detection and Prevention</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 142</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors: D. Usha Rani, S. Habeeb Mohamed Sathak Amina, R. Sudha Abirami, K. Annsheela</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-start">
                            <span class="font-medium text-gray-700">20. Machine Learning Innovations in Cybersecurity: Novel Approaches, Group Learning Approaches, and Adaptive Defense Mechanisms Against Evolving Cyber Threats</span>
                            <span class="text-blue-600 font-semibold flex-shrink-0 ml-4">Page 149</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Authors:Dr. C. P. Thamil Selvi, Priya B, C. Sandhiya, D. Sujeetha</p>
                    </div>
                </div>
            </div>

            <div id="tab-3" class="tab-content hidden">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Key Topics Covered</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-white p-4 rounded-lg border border-gray-200">
                        <h4 class="font-semibold text-blue-700 mb-2">Machine Learning Fundamentals</h4>
                        <ul class="list-disc pl-5 text-gray-700 space-y-1">
                            <li>Supervised and Unsupervised Learning</li>
                            <li>Reinforcement Learning</li>
                            <li>Neural Networks & Deep Learning</li>
                            <li>Classification & Regression Techniques</li>
                        </ul>
                    </div>
                    <div class="bg-white p-4 rounded-lg border border-gray-200">
                        <h4 class="font-semibold text-blue-700 mb-2">Advanced Applications</h4>
                        <ul class="list-disc pl-5 text-gray-700 space-y-1">
                            <li>IoT and Sensor Networks</li>
                            <li>Natural Language Processing</li>
                            <li>Computer Vision & Image Recognition</li>
                            <li>Predictive Analytics</li>
                        </ul>
                    </div>
                    <div class="bg-white p-4 rounded-lg border border-gray-200">
                        <h4 class="font-semibold text-blue-700 mb-2">Emerging Trends</h4>
                        <ul class="list-disc pl-5 text-gray-700 space-y-1">
                            <li>Explainable AI (XAI)</li>
                            <li>Federated Learning</li>
                            <li>AutoML & Neural Architecture Search</li>
                            <li>AI Ethics & Bias Mitigation</li>
                        </ul>
                    </div>
                    <div class="bg-white p-4 rounded-lg border border-gray-200">
                        <h4 class="font-semibold text-blue-700 mb-2">Technical Implementation</h4>
                        <ul class="list-disc pl-5 text-gray-700 space-y-1">
                            <li>Model Optimization Techniques</li>
                            <li>MLOps & Deployment Strategies</li>
                            <li>Edge Computing for ML</li>
                            <li>Performance Evaluation Metrics</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="tab-4" class="tab-content hidden">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Target Audience</h3>
                <div class="bg-blue-50 p-5 rounded-lg mb-6">
                    <p class="text-gray-700 mb-4">This book is designed for a wide range of readers interested in machine learning, from students to professionals and researchers.</p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white p-4 rounded-lg">
                            <h4 class="font-semibold text-blue-700 mb-2">Academic Readers</h4>
                            <ul class="list-disc pl-5 text-gray-700">
                                <li>Graduate and postgraduate students</li>
                                <li>Researchers in Computer Science</li>
                                <li>Academicians and faculty members</li>
                            </ul>
                        </div>
                        <div class="bg-white p-4 rounded-lg">
                            <h4 class="font-semibold text-blue-700 mb-2">Industry Professionals</h4>
                            <ul class="list-disc pl-5 text-gray-700">
                                <li>Data Scientists and ML Engineers</li>
                                <li>Software Developers</li>
                                <li>IT Managers and Decision Makers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Books Section -->
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Related Publications</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                    <div class="h-48 bg-gradient-to-r from-teal-500 to-cyan-600 flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <i class="fas fa-shield-alt text-4xl mb-2"></i>
                            <p class="font-bold">IoT Security Manual</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-700 text-sm">Comprehensive guide to securing Internet of Things ecosystems with practical implementation strategies.</p>
                        <a href="#" class="inline-block mt-3 text-blue-600 font-medium text-sm">View Details →</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                    <div class="h-48 bg-gradient-to-r from-purple-500 to-pink-600 flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <i class="fas fa-brain text-4xl mb-2"></i>
                            <p class="font-bold">Deep Learning Algorithms</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-700 text-sm">Advanced exploration of neural networks, convolutional networks, and recurrent networks with real-world applications.</p>
                        <a href="#" class="inline-block mt-3 text-blue-600 font-medium text-sm">View Details →</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                    <div class="h-48 bg-gradient-to-r from-amber-500 to-orange-600 flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <i class="fas fa-user-shield text-4xl mb-2"></i>
                            <p class="font-bold">Data Privacy & Ethics</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-700 text-sm">Essential reading on ethical AI development, data protection regulations, and privacy-preserving techniques.</p>
                        <a href="#" class="inline-block mt-3 text-blue-600 font-medium text-sm">View Details →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <script>
        // Tab functionality
        document.querySelectorAll('.tab-link').forEach(link => {
            link.addEventListener('click', function() {
                // Remove active class from all tabs and contents
                document.querySelectorAll('.tab-link').forEach(tab => {
                    tab.classList.remove('text-blue-600', 'border-blue-600');
                    tab.classList.add('text-gray-500', 'hover:text-gray-700');
                });

                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.remove('active');
                    content.classList.add('hidden');
                });

                // Add active class to clicked tab
                this.classList.remove('text-gray-500', 'hover:text-gray-700');
                this.classList.add('text-blue-600', 'border-blue-600');

                // Show corresponding content
                const tabId = this.getAttribute('data-tab');
                document.getElementById(tabId).classList.remove('hidden');
                document.getElementById(tabId).classList.add('active');
            });
        });
    </script>
</body>

</html>
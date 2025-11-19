<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pencil Bitz">

    <!-- ========== Page Title ========== -->
    <title>Pencil Bitz</title>

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
    <link href="assets/css/book-store.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3708edbb88.js" crossorigin="anonymous"></script>


</head>
<style>
    .rounded-lg {

        transition: transform 0.3s ease, box-shadow 0.3s ease;
        /* Smooth transition for hover effects */

    }

    .rounded-lg:hover {
        transform: translateY(-7px);
        /* Slightly lift the card on hover */
    }
</style>

<body>

    <!-- navbar file -->
    <?php require_once "navbar.php"; ?>
    <!-- navbar file  -->
    <!-- Home page 1 -->
    <div style="max-width: 1520px;" class="relative container ">

        <div class="container-books  overflow-hidden ">
            <nav class="mb-6  rounded-lg px-4 py-3">
                <ol class="flex items-center text-gray-700 space-x-2 text-sm font-medium">
                    <li class="flex items-center">
                        <a href="index.php" class="hover:underline text-blue-600 flex items-center">
                            <i class="fas fa-home mr-1"></i> Home
                        </a>
                        <span class="mx-2 text-gray-400"><i class="fas fa-chevron-right"></i></span>
                    </li>
                    <li class="flex items-center">
                        <a href="book-store.php" class="hover:underline text-blue-600 flex items-center">
                            <i class="fas fa-book mr-1"></i> Book Store
                        </a>
                        <span class="mx-2 text-gray-400"><i class="fas fa-chevron-right"></i></span>
                    </li>
                </ol>
            </nav>
            <div class="bg-green-50 border-l-4 border-blue-500 p-3 rounded-lg shadow-md max-w-4xl mx-auto mt-2 py-5 my-3">
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">Textbook Publication</h3>
                <p class="text-gray-700 text-center mb-4 text-lg">
                    For Textbook Proposal, Writing, and Publication Support, please contact:
                </p>
                <div class="flex justify-center gap-6">
                    <!-- Call Button -->
                    <a href="tel:+917200741307"
                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition flex items-center w-max">
                        <i class="fas fa-phone-alt mr-2 text-lg"></i>+91 7200741307
                    </a>
                    <!-- WhatsApp Button -->
                    <a href="https://wa.me/+917200741307" target="_blank" rel="noopener"
                        class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600 transition flex items-center">
                        <i class="fab fa-whatsapp mr-1 text-xl"></i> WhatsApp
                    </a>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 ">
                </div>

                <div class="row mt-5 ">
                    <h2 class="text-center lg:font-bold md:font-medium mb-1 text-5xl font-normal ">Book Store</h2>
                    <div class="col-lg-12">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 mt-10">
                            <?php
                            // Array of books
                            
                            
                            
                            $books = [

                                  // Fundamentals of Cyber Security
                                [
                                    'img' => 'assets/img/new/Fundamentals-of-Cyber-Security.png',
                                    'alt' => 'Fundamentals of Cyber Security',
                                    'title' => 'Fundamentals of Cyber Security',
                                    'authors' => 'Mrs.A.Subha Priyadharshini | Dr. Sam Abraham | Mr.P.John William | Mr.Anik Acharjee',
                                    'link' => 'Fundamentals-of-Cyber-Security-book.php',
                                    'btn' => 'Read More'
                                ],


                                  // Software Engineering @Nutshell
                                [
                                    'img' => 'assets/img/new/Software-Engineering-@Nutshell.png',
                                    'alt' => 'Software Engineering @Nutshell',
                                    'title' => 'Software Engineering @Nutshell',
                                    'authors' => 'Mrs. Sneh A. Nagaonkar | Dr Sudhakar D Bhoite',
                                    'link' => 'Software-Engineering-@Nutshell-book.php',
                                    'btn' => 'Read More'
                                ],

                                 //  Mastering Python Through Problem Solving
                                [
                                    'img' => 'assets/img/new/Mastering-Python-Through-Problem-Solving.png',
                                    'alt' => 'Mastering Python Through Problem Solving',
                                    'title' => 'Mastering Python Through Problem Solving',
                                    'authors' => 'Dr. Varun Tiwari | Mr.Perumala Maheshraj | Mr.RajendraPrasad M | Mr.D.Rajani Kumar',
                                    'link' => 'Mastering-Python-Through-Problem-Solving-book.php',
                                    'btn' => 'Read More'
                                ],

                                //   Financial Accounting
                                [
                                    'img' => 'assets/img/new/Financial-Accounting.png',
                                    'alt' => 'Financial Accounting',
                                    'title' => 'Financial Accounting',
                                    'authors' => 'Mrs. R. Kiruthika  | P. Gandhimathi | Dr.Priyadarshini. M | Mr.Sameer Ulla',
                                    'link' => 'Financial-Accounting-book.php',
                                    'btn' => 'Read More'
                                ],

                                //   Corporate Accounting
                                [
                                    'img' => 'assets/img/new/Corporate-Accounting-veena.png',
                                    'alt' => 'Corporate Accounting',
                                    'title' => 'Corporate Accounting',
                                    'authors' => 'Dr. Veena T S | Mrs. Shaheena Begum | Mr. Durgesh Motilal Bhavsar | Mr. Puneeth K',
                                    'link' => 'Corporate-Accounting-veena-book.php',
                                    'btn' => 'Read More'
                                ],

                                  //    Artificial Intelligence Essentials: A comprehensive Guide
                                [
                                    'img' => 'assets/img/new/Artificial-Intelligence-Essentials-A-Comprehensive-Guide.png',
                                    'alt' => 'Artificial Intelligence Essentials: A comprehensive Guide',
                                    'title' => 'Artificial Intelligence Essentials: A comprehensive Guide',
                                    'authors' => 'Mr.Dontala Kiran Kumar | Mr.Thota Paramesh |  Prof. Ashima Mahendra | Mrs. Jeethu Philip',
                                    'link' => 'Artificial-Intelligence-Essentials-A-Comprehensive-Guide-book.php',
                                    'btn' => 'Read More'
                                ],

                                 // A Journey Through English Literature:from Chaucer To Contemporary
                                [
                                    'img' => 'assets/img/new/A-Journey-Through-English-Literature-from-Chaucer-To-Contemporary.png',
                                    'alt' => 'A Journey Through English Literature:from Chaucer To Contemporary',
                                    'title' => 'A Journey Through English Literature:from Chaucer To Contemporary',
                                    'authors' => 'Dr. Mythili b | Dr.N.Sumathi | Dr.S.Revathi | Prof. Adisha Manna',
                                    'link' => 'A-Journey-Through-English-Literature-from-Chaucer-To-Contemporary-book.php',
                                    'btn' => 'Read More'
                                ],

                                 //Green Marketing
                                [
                                    'img' => 'assets/img/new/Green-Marketing.png',
                                    'alt' => 'Green Marketing',
                                    'title' => 'Green Marketing',
                                    'authors' => 'Dr.T.Kokilapriya | Dr.S.Kirubharani | Mrs.V.Abirami  | Ms.G.S.Gayathri',
                                    'link' => 'Green-Marketing-book.php',
                                    'btn' => 'Read More'
                                ],

                                //Quantitative Biology, Research Methodology And Bioinstrumentation
                                [
                                    'img' => 'assets/img/new/Quantitative-Biology-Research-Methodology-And-Bioinstrumentation.png',
                                    'alt' => 'Quantitative Biology, Research Methodology And Bioinstrumentation',
                                    'title' => 'Quantitative Biology, Research Methodology And Bioinstrumentation',
                                    'authors' => ' Dr. Pratibha Mishra | Dr. Shikha Tripathi | Dr. Rekha Shukla',
                                    'link' => 'Quantitative-Biology-Research-Methodology-And-Bioinstrumentation-book.php',
                                    'btn' => 'Read More'
                                ],
                                 
                                //Quantum Computing: Theory, Architecture and Practical Implementation
                                [
                                    'img' => 'assets/img/new/Quantum-Computing-Theory-Architecture-and-Practical-Implementation.png',
                                    'alt' => 'Quantum Computing: Theory, Architecture and Practical Implementation',
                                    'title' => 'Quantum Computing: Theory, Architecture and Practical Implementation',
                                    'authors' => 'Dr.R.Poornima | Mr.M.Jothimani | Mr.R.Veeramani | Mrs.D.Gowthami',
                                    'link' => 'Quantum-Computing-Theory-Architecture-and-Practical-Implementation-book.php',
                                    'btn' => 'Read More'
                                ],

                                //CEC358-Underwater Imaging Systems and Image Processing
                                [
                                    'img' => 'assets/img/new/CEC358-Underwater-Imaging-Systems-and-Image-Processing.png',
                                    'alt' => ' CEC358-Underwater Imaging Systems and Image Processing',
                                    'title' => 'CEC358-Underwater Imaging Systems and Image Processing',
                                    'authors' => 'Mrs.Muppudhathi Sutha.S | Dr. S.D.Jayavathi | Mr.Vinoth Rajkumar G | Ms.P.Stella Rose Malar',
                                    'link' => 'CEC358-Underwater-Imaging-Systems-and-Image-Processing-book.php',
                                    'btn' => 'Read More'
                                ],

                                //Corporate Accounting
                                [
                                    'img' => 'assets/img/new/Corporate-Accounting-monu.png',
                                    'alt' => ' Corporate Accounting',
                                    'title' => 'Corporate Accounting',
                                    'authors' => 'Dr. Monu Rathore | Ms. Pooja Jhala',
                                    'link' => 'Corporate-Accounting-monu-book.php',
                                    'btn' => 'Read More'
                                ],
                                // Blockchain and Cryptocurrency: Concepts, Technology, and Applications
                                [
                                    'img' => 'assets/img/new/blockchain-and-cryptocurrency-concepts-technology-and-pplications-11-11.png',
                                    'alt' => ' Blockchain and Cryptocurrency: Concepts, Technology, and Applications',
                                    'title' => 'Blockchain and Cryptocurrency: Concepts, Technology, and Applications',
                                    'authors' => 'CMA Dr.Jeelan Basha V | Sri.Kari Gooli',
                                    'flipkart' => 'https://www.flipkart.com/blockchain-cryptocurrency-concepts-technology-applications-1-disc/p/itmf08aa75492511?pid=9788199311862',
                                    'amazon' => 'https://www.amazon.in/dp/819931186X',
                                    'link' => 'blockchain-and-cryptocurrency-concepts-technology-and-pplications-11-11-book.php',
                                    'btn' => 'Read More'
                                ],


                                // Artificial Intelligence Essentials: A Comprehensive Guide
                                [
                                    'img' => 'assets/img/new/artificial-intelligence-essentials-comprehensive-guide-11-11.png',
                                    'alt' => ' Artificial Intelligence Essentials: A Comprehensive Guide',
                                    'title' => 'Artificial Intelligence Essentials: A Comprehensive Guide',
                                    'authors' => 'Dr. Swarna Surekha  | Dr. Payel Sengupta | Dr.V.Shanthi  | Dr. N.Thinaharan',
                                     'flipkart' => 'https://www.flipkart.com/artificial-intelligence-essentials-comprehensive-guide-1-disc/p/itm55572be7887d7?pid=9788199311817',
                                     'amazon' => 'https://www.amazon.in/dp/8199311819',
                                    'link' => 'artificial-intelligence-essentials-comprehensive-guide-11-11-book.php
                                    ',
                                    'btn' => 'Read More'
                                ],

                                // Business Laws
                                [
                                    'img' => 'assets/img/new/business-laws-11-11.png',
                                    'alt' => ' Business Laws',
                                    'title' => 'Business Laws',
                                    'authors' => 'Mr.Kari Gooli',
                                    'flipkart' => 'https://www.flipkart.com/business-laws-1-disc/p/itm8ce8927ab3b0e?pid=9788199311831',
                                   'amazon' => 'https://www.amazon.in/dp/8199311835',
                                    'link' => '/business-laws-kari-gooli-book.php',
                                    'btn' => 'Read More'
                                ],

                                // Ground Water Hydrology        
                                [
                                    'img' => 'assets/img/new/ground-water-hydralogy-11-11.png',
                                    'alt' => ' Ground Water Hydrology',
                                    'title' => 'Ground Water Hydrology ',
                                    'authors' => 'Dr.Chitaranjan Dalai',
                                    'link' => 'ground-water-hydralogy-11-11-book.php',
                                    'btn' => 'Read More'
                                ],


                                // Professional Ethics in Engineering        
                                [
                                    'img' => 'assets/img/new/professional-ethics-in-engeneering-11-11.png',
                                    'alt' => ' Professional Ethics in Engineering',
                                    'title' => 'Professional Ethics in Engineering ',
                                    'authors' => 'Dr.L.Jayakumar | Dr. Anjali | Dr. Sivaprakasam',
                                    'flipkart' => 'https://www.flipkart.com/professional-ethics-engineering-1-disc/p/itmabb4cf7364ed9?pid=9789389911688',
                                    'link' => 'professional-ethics-in-engeneering-11-11-book.php',
                                    'btn' => 'Read More'
                                ],


                                // Quantum Computing: Theory, Architecture and Practical Implementation        
                                [
                                    'img' => 'assets/img/new/quantum-computing-Theory-architecture-and-practical-implementation-11-11.png',
                                    'alt' => ' Quantum Computing: Theory, Architecture and Practical Implementation',
                                    'title' => 'Quantum Computing: Theory, Architecture and Practical Implementation ',
                                    'authors' => 'Mrs. Nivetha Kumaravel | Dr. N.Chandrakala | Dr. Yogita S. Patil |  Dr. Ganesh Kumar M',
                                    'flipkart' => 'https://www.flipkart.com/quantum-computing-theory-architecture-practical-implementation-1-disc/p/itm735c511a58c35?pid=9789389911725',
                                    'link' => 'quantum-computing-Theory-architecture-and-practical-implementation-11-11-book.php',
                                    'btn' => 'Read More'
                                ],



                                // Basics of Modern Management        
                                [
                                    'img' => 'assets/img/new/basics-of-modern-management-11-11.png',
                                    'alt' => ' Basics of Modern Management',
                                    'title' => 'Basics of Modern Management ',
                                    'authors' => 'Dr.L.Padmanabhan | Mr.Prathviraj | Dr. Mitali Palit | Dr.Priyanka Solanki',
                                    'flipkart' => 'https://www.flipkart.com/basics-modern-management-1-disc/p/itm463d16a111fd0?pid=9789389911398',
                                    'link' => '/basics-of-modern-management-11-11-book.php',
                                    'btn' => 'Read More'
                                ],

                                // Core Concepts in AI
                                [
                                    'img' => 'assets/img/new/core-concepts-in-AI-11-11.png',
                                    'alt' => ' Core Concepts in AI',
                                    'title' => 'Core Concepts in AI',
                                    'authors' => 'Prof. Gunwant Deoman Rahane | Prof. Vikas N. Nimbalkar | Prof. Manohar C. Chavan',
                                   'flipkart' => 'https://www.flipkart.com/core-concepts-ai-1-disc/p/itmaed3ab0ddb97c?pid=9789389911558',
                                    'link' => '/core-concepts-in-AI-11-11-book.php',
                                    'btn' => 'Read More'
                                ],
                                

                                // Business Laws
                                [
                                    'img' => 'assets/img/new/business-law-1-11-11.png',
                                    'alt' => ' Business Laws',
                                    'title' => 'Business Laws',
                                    'authors' => 'Dr.Prita Davidson | Ms.K.B.Aishwarya ',
                                    'flipkart' => 'https://www.flipkart.com/business-laws-1-disc/p/itm8ce8927ab3b0e?pid=9788199311831',
                                   'amazon' => 'https://www.amazon.in/dp/8199311835',
                                    'link' => '/business-laws-prita-davidson-book.php',
                                    'btn' => 'Read More'
                                ],

                              

                                // Corporate Accounting_II
                                [
                                    'img' => 'assets/img/new/corporate-accounting_II-11-11.png',
                                    'alt' => 'Corporate Accounting_II',
                                    'title' => 'Corporate Accounting_II',
                                    'authors' => 'Dr.K.Gokila | Ms.C.K.Nishana | Ms.M.Shalini | Ms.T.Divya Bharathi | Ms.M.S.Selva Preethi',
                                    'flipkart' => 'https://www.flipkart.com/corporate-accounting-ii-1-disc/p/itmdcb32ab313511?pid=9789389911817',
                                    'link' => 'corporate-accounting_II-11-11-book.php',
                                    'btn' => 'Read More'
                                ],
                                
                                // A Manual For Basics of Food Microbiology Practical
                                [
                                    'img' => 'assets/img/new/a-manual-for basic-of-food-microbiolagy-10-11.png',
                                    'alt' => ' A Manual For Basics of Food Microbiology Practical',
                                    'title' => 'A Manual For Basics of Food Microbiology Practical',
                                    'authors' => 'M.C. Anitha | R. Kalamani | C.Ajitha',
                                    'link' => 'manual-for-basics-of-food-microbiology-practical-10-11-book.php',
                                    'btn' => 'Read More'
                                ],
                                 

                               
                                //Business Analytics
                                [
                                    'img' => 'assets/img/new/business-analytics-10-11.png',
                                    'alt' => 'Business Analytics',
                                    'title' => 'Business Analytics',
                                    'authors' => 'Dr. Benita.S.Monica | Dr. Sohel Memon | Mrs. P. Rajitha | Mrs. Sagara M R',
                                    'link' => 'business-analytics-10-11-book.php',
                                    'btn' => 'Read More'
                                ],

                                //Environmental Chemistry
                                [
                                    'img' => 'assets/img/new/environmental-chemistry-10-11.png',
                                    'alt' => ' Environmental Chemistry',
                                    'title' => 'Environmental Chemistry ',
                                    'authors' => 'Dr. Preeti Nand Kumar |  Dr. Pratibha S.Kurup',
                                      'flipkart' => 'https://www.flipkart.com/environmental-chemistry-1-disc/p/itm92143dc5ed542?pid=9788199259928',
                                    'link' => 'environmental-chemistry-10-11-book.php',
                                    'btn' => 'Read More'
                                ],

                                //Internet of Things
                                [
                                    'img' => 'assets/img/new/internet-of-things-10-11.png',
                                    'alt' => ' Internet of Things',
                                    'title' => 'Internet of Things',
                                    'authors' => 'Dr.B. Dhanasekaran | Dr.G. Srinivasan | Dr.R. Gunasekaran | Dr.Ramakrishna Reddy K',
                                     'flipkart' => 'https://www.flipkart.com/internet-things-1-disc/p/itma96a74ccf43a1?pid=9788199223073',
                                    'link' => 'internet-of-things-10-11-book.php',
                                    'btn' => 'Read More'
                                ],

                                //International Trade
                                [
                                    'img' => 'assets/img/new/international-trade-10-11.png',
                                    'alt' => ' International Trade',
                                    'title' => 'International Trade',
                                    'authors' => 'Dr.K.DEVIKA | Dr.NIJINA JOSE | Ms.V.M.SAJITHA | Ms.P.REKHA',
                                    'link' => 'international-tragde-10-11-book.php',
                                    'btn' => 'Read More'
                                ],


                                //Discrete Structure
                                [
                                    'img' => 'assets/img/new/discrete-structure-10-11.png',
                                    'alt' => ' Discrete Structure',
                                    'title' => 'Discrete Structure',
                                    'authors' => 'Dr. Roopa R Anagod | Dr.M.Sneha Latha',
                                    'link' => 'discrete-structure-10-11-book.php',
                                    'btn' => 'Read More'
                                ],

                                //Natural Language Processing Principles and Applications
                                [
                                    'img' => 'assets/img/new/natural-languvage-rocessinng-10-11.png',
                                    'alt' => ' Natural Language Processing Principles and Applications',
                                    'title' => 'Natural Language Processing Principles and Applications',
                                    'authors' => 'Mrs. D Beulah pretty  | Mrs. Snigdha Smita Choubey | Dr.G.Chandrasekaran | Mrs. V.Maheswari Kumar',
                                     'flipkart' => 'https://www.flipkart.com/natural-language-processing-principles-applications-1-disc/p/itme782b3e08432f?pid=9789389911114',
                                    'link' => '/natural-languvage-processinng-10-11-book.php',
                                    'btn' => 'Read More'
                                ],

                                //Quantum Computing
                                [
                                    'img' => 'assets/img/new/quantum-computing-10-11.png',
                                    'alt' => ' Quantum Computing',
                                    'title' => 'Quantum Computing',
                                    'authors' => 'Dr.R. Krishnamoorthy | Dr.L.Godlin Atlas | Mrs.K.Sathiyapriya | Mrs.B. Benilin Leebha',
                                    'link' => '/quantum-computing-10-11-book.php',
                                    'btn' => 'Read More'
                                ],

                                //Financial Markets
                                [
                                    'img' => 'assets/img/new/financial-markets-10-11.png',
                                    'alt' => ' Financial Markets',
                                    'title' => 'Financial Markets',
                                    'authors' => 'Dr.Lavanya M.R | Dr. S.Jenifer Janani  | Dr.J.Franklin Jebaraj',
                                    'link' => '/financial-markets-10-11-book.php',
                                    'btn' => 'Read More'
                                ],


                                // Principles of Management
                                [
                                    'img' => 'assets/img/new/principle-of-things-10-11.png',
                                    'alt' => ' Principles of Management',
                                    'title' => 'Principles of Management',
                                    'authors' => 'Dr. Abdul Faraz | Ms. Arpita Sastri | Ms. Manisha G | Mr. Mir Faizan Hussain',
                                    'link' => '/principle-of-things-10-11-book.php',
                                    'btn' => 'Read More'
                                ],

                                // Fundamentals of Antenna Theory and Design
                                [
                                    'img' => 'assets/img/new/fundemental-of-antena-theory-and-design-10-11.png',
                                    'alt' => ' Fundamentals of Antenna Theory and Design',
                                    'title' => 'Fundamentals of Antenna Theory and Design',
                                    'authors' => 'Dr. S. Parameswari | Dr. C. Chitra | Dr. S. Leones Sherwin Vimalraj |  Dr. J. Lydia',
                                    'link' => 'fundemental-of-antena-theory-and-design-parameswari-book.php',
                                    'btn' => 'Read More'
                                ],
                                  // Architecture and the Metaverse: Designing the future of Digital Space
                                [
                                    'img' => 'assets/img/new/architecture-and-the-metaverse-11-11.png',
                                    'alt' => ' Architecture and the Metaverse: Designing the future of Digital Space',
                                    'title' => 'Architecture and the Metaverse: Designing the future of Digital Space',
                                    'authors' => 'Mr.R.Venkatesh | Mrs.Quba Jaslin C | Dr.L.Godlin Atlas | Dr.K.V. Shiny ',
                                    'link' => 'architecture-and-the-metaverse-11-11-book.php',
                                    'btn' => 'Read More'
                                ],
                               
                                 //Bionanotechnology
                                [
                                    'img' => 'assets/img/new/bio-nannotechnology-10-11.png',
                                    'alt' => ' Bionanotechnology',
                                    'title' => 'Bionanotechnology',
                                    'authors' => 'Dr C.Nirmala | Dr.M.Sridevi | Dr.A.Nirmala | Ms.S.Abinaya',
                                    'flipkart' =>'https://www.flipkart.com/bionanotechnology-1-disc/p/itm8ec1c96964a50?pid=9789389911893',
                                    'link' => 'bionanotechnology-10-11-book.php',
                                    'btn' => 'Read More'
                                ],                                                                                  
                                
                                 

                                //Mastering Communication and Soft Skills: A Holistic Guide to Personal and Professional Excellence
                                [
                                    'img' => 'assets/img/new/mastering-communication-and-skills-10-11.png',
                                    'alt' => 'Mastering Communication and Soft Skills: A Holistic Guide to Personal and Professional Excellence',
                                    'title' => 'Mastering Communication and Soft Skills: A Holistic Guide to Personal and Professional Excellence',
                                    'authors' => 'Mrs.Adisha Manna',
                                    'flipkart' => 'https://www.flipkart.com/mastering-communication-soft-skills-holistic-guide-personal-professional-excellence-1-disc/p/itmeb97f79662c94?pid=9788199259935',
                                    'link' => 'mastering-communication-and-skills-10-11-book.php',
                                    'btn' => 'Read More'
                                ],

                                 //Intellectual Property Rights
                                [
                                    'img' => 'assets/img/new/intellectual-property-rights.png',
                                    'alt' => ' Intellectual Property Rights',
                                    'title' => 'Intellectual Property Rights ',
                                    'authors' => 'Dr.Jemimah Winston | Dr.Mobi Rajendran | Dr. Jenifer Thangam J',
                                    'amazon' => 'https://www.amazon.in/dp/8199259957',
                                    'flipkart' => 'https://www.flipkart.com/intellectual-property-rights-1-disc/p/itmba47708a409ed?pid=9788199259959',
                                    'link' => 'intellectual-property-rights-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Probability and Queueing Theory
                                [
                                   
                                    'img' => 'assets/img/new/probability-and-queueing-theory.png',
                                    'alt' => ' Probability and Queueing Theory',
                                    'title' => 'Probability and Queueing Theory ',
                                    'authors' => 'Dr. Gautham Goud Ravula |Dr. Ameen Saheb Shaik | Dr.B.Vittal |Mr.R.Ashok',
                                    'amazon' => '',
                                    'flipkart' => '',
                                    'link' => 'probability-and-queueing-theory-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Natural Language Processing
                                [
                                    'img' => 'assets/img/new/natural-language-procesing.png',
                                    'alt' => ' Natural Language Processing',
                                    'title' => 'Natural Language Processing',
                                    'authors' => 'Dr. Swarna Surekha',
                                    'link' => 'natural-language-procesing-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Principles of Management
                                [
                                    'img' => 'assets/img/new/principles-of-management1.png',
                                    'alt' => ' Principles of Management',
                                    'title' => 'Principles of Management ',
                                    'authors' => 'Mr.M.Saravanan | Mr.S.Rajkamal',
                                    'link' => 'principles-of-management1-book.php',
                                    'btn' => 'Read More'
                                ],
                                //AUDITING AND CORPORATE GOVERNANCE
                                [
                                    'img' => 'assets/img/new/auditing-and-corporate-governance.png',
                                    'alt' => ' Auditing and Corporate Governance',
                                    'title' => 'Auditing and Corporate Governance ',
                                    'authors' => 'Dr.Prita Davidson | G.Sridevi',
                                    'amazon' => 'https://www.amazon.in/dp/8199223030',
                                    'flipkart' => 'https://www.flipkart.com/auditing-corporate-governance-1-disc/p/itmb28d97aa09554?pid=9788199223035',
                                    'link' => 'auditing-and-corporate-governance-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Mastering Deep Learning Architecture
                                [
                                    'img' => 'assets/img/new/mastering-deep-learning-Dr-SWARNA-SUREKHA.png',
                                    'alt' => ' Mastering Deep Learning Architecture',
                                    'title' => 'Mastering Deep Learning Architecture ',
                                    'authors' => 'Dr. Swarna Surekha ',
                                    'link' => 'mastering-deep-learning-swarna-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Java Programming : Unlocking the Power of Object Oriented Design
                                [
                                    'img' => 'assets/img/new/Java-Programming-Unlocking-the Power-of-Object Oriented-Design.png',
                                    'alt' => ' Java Programming : Unlocking the Power of Object Oriented Design',
                                    'title' => 'Java Programming : Unlocking the Power of Object Oriented Design    ',
                                    'amazon' => 'https://www.amazon.in/dp/819925999X',
                                    'flipkart' => 'https://www.flipkart.com/java-programming-unlocking-power-object-oriented-design-1-disc/p/itm375f0fae26798?pid=9788199259997',
                                    'authors' => 'Mr.K.Vimal | Mrs.Lakshmi K | Mrs.M.Niranjani | Ms.Priya Pandey',
                                    'link' => 'Java-Programming-Unlocking-the Power-of-Object Oriented-Design-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Corporate Accounting
                                [
                                    'img' => 'assets/img/new/corporate-accounting.png',
                                    'alt' => ' Corporate Accounting',
                                    'title' => 'Corporate Accounting ',
                                    'authors' => 'Dr. Suman Roy Barman | Dr. K. Uma Parameswari | Ms.Savitha.N.L | Mrs.Chaithanya B Ajay kumar',
                                    'amazon' => 'https://www.amazon.in/dp/8199169567',
                                    'flipkart' => 'https://www.flipkart.com/corporate-accounting-1-disc/p/itmc7aceebc0b60e?pid=9788199169562',
                                    'link' => 'corporate-accounting-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Organizational Behaviour : Leading with Emotional Intelligence
                                [
                                    'img' => 'assets/img/new/organizational-behaviour-leading-with.png',
                                    'alt' => ' Organizational Behaviour : Leading with Emotional Intelligence',
                                    'title' => 'Organizational Behaviour : Leading with Emotional Intelligence ',
                                    'authors' => 'Dr. Shruti Punj',
                                    'link' => 'organizational-behaviour-leading-with-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Quantum Computing the Next Frontier In Computer Science
                                [
                                    'img' => 'assets/img/new/quantum-computing-the-next-computer.png',
                                    'alt' => ' Quantum Computing the Next Frontier In Computer Science ',
                                    'title' => 'Quantum Computing the Next Frontier In Computer Science ',
                                    'authors' => 'Mrs. A. Praveena | Dr. E. S. Shamila | Dr. S. Usha | Dr. R N Devendra Kumar',
                                    'amazon' => 'https://www.amazon.in/dp/8199223049',
                                    'flipkart' => 'https://www.flipkart.com/quantum-computing-next-frontier-computer-science-1-disc/p/itmeab2afb61f63b?pid=9788199223042',
                                    'link' => 'quantum-computing-the-next-computer-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Mastering Deep Learning Architecture
                                [
                                    'img' => 'assets/img/new/mastering-deep-learning-arch.png',
                                    'alt' => ' Mastering Deep Learning Architecture ',
                                    'title' => 'Mastering Deep Learning Architecture  ',
                                    'authors' => 'L Sowjanya Upadhyayula',
                                    'link' => 'mastering-deep-learning-arch-book.php',
                                    'btn' => 'Read More'
                                ],
                                //PROBABILITY AND STATISTICS
                                [
                                    'img' => 'assets/img/new/probability-and-statistics.png',
                                    'alt' => ' Probability and statistics ',
                                    'title' => 'Probability and statistics  ',
                                    'authors' => 'Mrs. Sangeetha B | Dr. R Meganathan | Mrs. Malathi K | Dr. R Sathiya Shanthi',
                                    'amazon' => 'https://www.amazon.in/dp/8199223022',
                                    'flipkart' => 'https://www.flipkart.com/fundamentals-iot-1-disc/p/itmc434025019bab?pid=9789349129313',
                                    'link' => 'probability-and-statistics-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Core Concepts in Artificial Intelligence
                                [
                                    'img' => 'assets/img/new/core-concepts-in-artificial-intelligence.png',
                                    'alt' => ' Core Concepts in Artificial Intelligence ',
                                    'title' => 'Core Concepts in Artificial Intelligence ',
                                    'amazon' => 'https://www.amazon.in/dp/8199223081',
                                    'flipkart' => 'https://www.flipkart.com/core-concepts-artificial-intelligence-1-disc/p/itm1f4f1c6c17066?pid=9788199223080',
                                    'authors' => 'Dr.T.Kamaleshwar | L Sowjanya Upadhyayula | Dr.M.Kavitha | Dr. Sapna Singh"',
                                    'link' => '#',
                                    'btn' => 'Read More'
                                ],
                                //corporate-accounting_II
                                [
                                    'img' => 'assets/img/new/corporate-accounting_II.png',
                                    'alt' => ' corporate-accounting_II ',
                                    'title' => 'corporate-accounting_II ',
                                    'authors' => 'Dr.K.Gokila | Ms.C.K.Nishana | Ms.M.Shalini | Ms.T.Divya Bharathi | Ms.M.S.Selva Preethi',
                                    'link' => 'corporate-accounting_II-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Essentials of Financial Analytics using Excel and R
                                [
                                    'img' => 'assets/img/new/essentials-of-financial-analytics.png',
                                    'alt' => ' Essentials of Financial Analytics using Excel and R ',
                                    'title' => 'Essentials of Financial Analytics using Excel and R ',
                                    'amazon' => 'https://www.amazon.in/dp/9348556169',
                                    'flipkart' => 'https://www.flipkart.com/fundamentals-iot-1-disc/p/itmc434025019bab?pid=9789349129313',
                                    'authors' => 'Dr. Vinoth Kumar J',
                                    'link' => 'essentials-of-financial-analytics-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Advance Corporate Accounting
                                [
                                    'img' => 'assets/img/new/advanced-corporate-accounting-theertha.png',
                                    'alt' => ' Advanced Corporate Accounting ',
                                    'title' => 'Advanced Corporate Accounting',
                                    'authors' => 'Mr.Theertha Prasad K ',
                                    'link' => 'advanced-corporate-accounting-theertha-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Artificial Intelligence in Modern Approach
                                [
                                    'img' => 'assets/img/new/artificial-intelligence-in-modern-approach.png',
                                    'alt' => ' Artificial Intelligence in Modern Approach ',
                                    'title' => 'Artificial Intelligence in Modern Approach ',
                                    'authors' => 'Dr Jothimani Ponnusamy | Biju Thomas | P.Sakthiprakash | Ashok Kumar Manda',
                                    'amazon' => 'https://www.amazon.in/dp/819922309X',
                                    'flipkart' => 'https://www.flipkart.com/artificial-intelligence-modern-approach-1-disc/p/itm60501f39015ae?pid=9788199223097',
                                    'link' => 'artificial-intelligence-in-modern-approach-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Advance Corporate Accounting
                                [
                                    'img' => 'assets/img/new/advanced-corporate-accounting-jaykar.png',
                                    'alt' => ' Advanced Corporate Accounting ',
                                    'title' => 'Advanced Corporate Accounting',
                                    'authors' => 'Dr. Jaykar L. Jadhav | Dr. Anishkumar Karia |Shivaji Rajmane',
                                    'amazon' => 'https://www.amazon.in/dp/8199223057',
                                    'flipkart' => 'https://www.flipkart.com/advance-corporate-accounting-1-disc/p/itm8285b94da63e3?pid=9788199223059',
                                    'link' => 'advanced-corporate-accounting-jaykar-book.php',
                                    'btn' => 'Read More'
                                ],
                                //digital marketing
                                [
                                    'img' => 'assets/img/new/digital-marketing.png',
                                    'alt' => ' Digital Marketing ',
                                    'title' => 'Digital Marketing ',
                                    'amazon' => ' #',
                                    'flipkart' => 'https://www.flipkart.com/strategic-human-resource-management-1-disc/p/itm3ad6ea8feab13?pid=9789348556653',
                                    'authors' => 'K Vanitha | P Nirmala',
                                    'link' => 'digital-marketing-book.php',
                                    'btn' => 'Read More'
                                ],
                                // Strategic Human Resource Management
                                [
                                    'img' => 'assets/img/new/strategic-human-research-management-neelima.png',
                                    'alt' => ' Strategic Human Resource Management ',
                                    'title' => 'Strategic Human Resource Management ',
                                    'authors' => 'Mrs. Neelima Nishikant Bhoomkar | Dr. Tripti Arvind | Dr.J.Greeta Mary |Dr.K.Manikandarajan',
                                    'amazon' => 'https://www.amazon.in/dp/9348556657',
                                    'flipkart' => 'https://www.flipkart.com/strategic-human-resource-management-1-disc/p/itm3ad6ea8feab13?pid=9789348556653',
                                    'link' => 'strategic-human-resource-management-neelima-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Cloud Computing: Concepts and Practice
                                [
                                    'img' => 'assets/img/new/cloud-computing-concepts-and-practice.png',
                                    'alt' => ' Cloud Computing: Concepts and Practice ',
                                    'title' => 'Cloud Computing: Concepts and Practice ',
                                    'amazon' => 'https://www.amazon.in/dp/934855624X',
                                    'flipkart' => 'https://www.flipkart.com/cloud-computing-concepts-practice-1-disc/p/itmbed1a6fc31104?pid=9789348556240',
                                    'authors' => 'Atma Prakash Singh | E Jansirani | Dr Nanda Kishor S | Isha Das',
                                    'link' => 'cloud-computing-concepts-and-practice-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Advanced reinforced concrete design
                                [
                                    'img' => 'assets/img/new/advanced-reinforced-concrete-design.png',
                                    'alt' => ' Advanced Reinforced Concrete Design ',
                                    'title' => 'Advanced Reinforced Concrete Design ',
                                    'amazon' => 'https://www.amazon.in/dp/8199169575',
                                    'flipkart' => 'https://www.flipkart.com/advanced-reinforced-concrete-design-1-disc/p/itm619ebef96a49f?pid=9788199169579',
                                    'authors' => 'Dr A. Swetha',
                                    'link' => 'advanced-reinforced-concrete-design-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Digital Electronics and logic design
                                [
                                    'img' => 'assets/img/new/digital-electronics-and-logic-design.png',
                                    'alt' => ' Digital Electronics and logic design ',
                                    'title' => 'Digital Electronics and logic design ',
                                    'authors' => 'Prof. Gopika Fattepurkar | Prof. Rupali Wagh | Dr. Vandana Navale',
                                    'amazon' => 'https://www.amazon.in/dp/9348556231',
                                    'flipkart' => 'https://www.flipkart.com/digital-electronics-logic-design-1-disc/p/itm8cb8e3ab9acd9?pid=9789348556233',
                                    'link' => 'digital-electronics-and-logic-design-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Advanced Corporate Accounting
                                [
                                    'img' => 'assets/img/new/advanced-corporate-accounting.png',
                                    'alt' => ' Advanced Corporate Accounting ',
                                    'title' => 'Advanced Corporate Accounting',
                                    'authors' => 'Dr. S. Amudha | Dr. S. K. Arunkumar ',
                                    'link' => 'advanced-corporate-accounting-amudha-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Electronic Commerce
                                [
                                    'img' => 'assets/img/new/electronic-commerce.png',
                                    'alt' => ' Electronic Commerce ',
                                    'title' => 'Electronic Commerce ',
                                    'amazon' => 'https://www.amazon.in/dp/9348556762',
                                    'flipkart' => 'https://www.flipkart.com/electronic-commerce-1-disc/p/itm655a1597bfe40?pid=9789348556769',
                                    'authors' => 'Dr.S.Ramamurthy | Dr Ashok kumar T | Dr Priya S',
                                    'link' => 'electronic-commerce-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Operation Research
                                [
                                    'img' => 'assets/img/new/operation-research.png',
                                    'alt' => ' Operation Research ',
                                    'title' => 'Operation Research ',
                                    'authors' => 'Dr.M.Parimaladevi | Dr.T.Vanthana',
                                    'link' => 'operation-research-book.php',
                                    'btn' => 'Read More'
                                ],

                                //  HR Analytics - Data Driven Decision Making in Human Resources  
                                [
                                    'img' => 'assets/img/new/hr-analytics-data-driven.png',
                                    'alt' => ' HR Analytics - Data Driven Decision Making in Human Resources ',
                                    'title' => 'HR Analytics - Data Driven Decision Making in Human Resources ',
                                    'authors' => 'Dr.Arun Fred | Dr.Bini Marin',
                                    'link' => 'hr-analytics-data-driven-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Architecture and the Metaverse: Designing the Future of Digital Space  
                                [
                                    'img' => 'assets/img/new/architecture-and-the-metaverse.png',
                                    'alt' => ' Architecture and the Metaverse: Designing the Future of Digital Space ',
                                    'title' => 'Architecture and the Metaverse: Designing the Future of Digital Space ',
                                    'amazon' => 'https://www.amazon.in/dp/9348556274',
                                    'flipkart' => 'https://www.flipkart.com/architeture-metaverse-designing-furture-digital-space-1-disc/p/itmc50127473020e?pid=9789348556271',
                                    'authors' => 'Ar.Tauseef Rahi',
                                    'link' => 'architecture-and-the-metaverse-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Biomedical Signal Processing and Analysis: ECG & EEG Perspectives  
                                [
                                    'img' => 'assets/img/new/biomedical-signal-processing.png',
                                    'alt' => ' Biomedical Signal Processing and Analysis: ECG & EEG Perspectives ',
                                    'title' => 'Biomedical Signal Processing and Analysis: ECG & EEG Perspectives ',
                                    'amazon' => 'https://www.amazon.in/dp/9348556177',
                                    'flipkart' => 'https://www.flipkart.com/biomedical-signal-processing-1-disc/p/itm0e1e7021b0d4c?pid=9789348556172',
                                    'authors' => '	Dr.Manjunatha Siddappa,  | Mr.Ravi M V',
                                    'link' => 'biomedical-signal-processing-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Postcolonial Narratives in the World Literature  
                                [
                                    'img' => 'assets/img/new/postcolonial-narratives-in-world-literature.png',
                                    'alt' => 'Postcolonial Narratives in the World Literature',
                                    'title' => 'Postcolonial Narratives in the World Literature ',
                                    'amazon' => 'https://www.amazon.in/dp/9348556851',
                                    'flipkart' => 'https://www.flipkart.com/postcolonial-narratives-world-literature-1-disc/p/itme94209b9e7f47?pid=9789348556851',
                                    'authors' => 'Dr. A. Priya, |  Dr. J. Charles Arockiasamy',
                                    'link' => 'postcolonial-narratives-book.php',
                                    'btn' => 'Read More'
                                ],
                                //data-information-and-security  
                                [
                                    'img' => 'assets/img/new/data-information-and-security.png',
                                    'alt' => ' data-information-and-security ',
                                    'title' => 'data-information-and-security ',
                                    'authors' => 'Dr.G.Thangaraju | Dr. Santhosh Kumar G | Sundara Mohan S | Dr.Jothimani Ponnusamy',
                                    'link' => 'data-information-and-security-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Problem Solving with Python Programming  
                                [
                                    'img' => 'assets/img/new/problem-solving-with-python-programming.png',
                                    'alt' => ' Problem Solving with Python Programming ',
                                    'title' => 'Problem Solving with Python Programming ',
                                    'authors' => 'Dr.Vijayalakshmi V | Mr.Ghule Somnath Tukaram | Dr.D.Kerana Hanirex | Mrs.E.Sri Santhoshini',
                                    'link' => 'problem-solving-with-python-programming-book.php',
                                    'btn' => 'Read More'
                                ],
                                //Mastering Artificial Intelligence: Comphernsive Guide to Modern AI Technologies  
                                [
                                    'img' => 'assets/img/new/mastering-artifical-intelligence.png',
                                    'alt' => ' Mastering Artificial Intelligence: Comphernsive Guide to Modern AI Technologies ',
                                    'title' => 'Mastering Artificial Intelligence: Comphernsive Guide to Modern AI Technologies ',
                                    'authors' => 'Dr.M.Kavitha | Dr.M.Padmavathi | Mrs. J. Stephy Christina | Mrs N Sudha',
                                    'link' => 'mastering-artifical-intelligence-book.php',
                                    'btn' => 'Read More'
                                ],
                                // Network and Security  
                                [
                                    'img' => 'assets/img/new/network-and-security.png',
                                    'alt' => '  Network and Security ',
                                    'title' => ' Network and Security ',
                                    'authors' => 'RVS Praveen |  Sanjay arora |  Roshani phase',
                                    'link' => 'network-and-security-book.php',
                                    'btn' => 'Read More'
                                ],
                                // IoT Based Monitoring and Control System for Solar Power Plants  
                                [
                                    'img' => 'assets/img/new/iot-based-monitoring-and-control.png',
                                    'alt' => '  IoT Based Monitoring and Control System for Solar Power Plants ',
                                    'title' => ' IoT Based Monitoring and Control System for Solar Power Plants ',
                                    'amazon' => 'https://www.amazon.in/dp/9348556878',
                                    'flipkart' => 'https://www.flipkart.com/iot-based-monitoring-control-system-solar-power-plants-1-disc/p/itmb29e16a73d22d?pid=9789348556875',
                                    'authors' => 'Mr.John De Britto C | Dr. Arokiya Prasad P | Dr.Raja Elangovan | Dr. Neeraj Kumar',
                                    'link' => 'iot-based-monitoring-book.php',
                                    'btn' => 'Read More'
                                ],
                                // Design and Implementation of Smart Inverters for Solar Energy Grid Integration  
                                [
                                    'img' => 'assets/img/new/design-and-implementation-of-smart-inverters.png',
                                    'alt' => '  Design and Implementation of Smart Inverters for Solar Energy Grid Integration ',
                                    'title' => ' Design and Implementation of Smart Inverters for Solar Energy Grid Integration ',
                                    'authors' => 'Mr.John De Britto C  | Dr.Mamidala Vijay Karthik | Mr.P.Manikandan | Mr.Mahendiran C R',
                                    'amazon' => 'https://www.amazon.in/dp/934855607X',
                                    'flipkart' => '#',

                                    'link' => 'design-and-implementation-book.php',
                                    'btn' => 'Read More'
                                ],
                                //  Fundamentals of Sustainability in Civil Engineering  
                                [
                                    'img' => 'assets/img/new/fundamentals-of-sustainabilty.png',
                                    'alt' => '  Fundamentals of Sustainability in Civil Engineering   ',
                                    'title' => ' Fundamentals of Sustainability in Civil Engineering  ',
                                    'amazon' => 'https://www.amazon.in/dp/9348556363',
                                    'flipkart' => 'https://www.flipkart.com/fundamentals-sustainability-civil-engineering-1-disc/p/itma7fbce1274ef6?pid=9789348556363',
                                    'authors' => 'Dr. A. Tamilarasan | Dr. Dharanidharan S | Dr. Manikandan Periyasamy | Dr. Prem Kumar Vagestan',
                                    'link' => 'fundamentals-of-sustainability-book.php',
                                    'btn' => 'Read More'
                                ],
                                // Communicative English 
                                [
                                    'img' => 'assets/img/new/communicative-english.png',
                                    'alt' => ' Communicative English  ',
                                    'title' => 'Communicative English ',
                                    'authors' => 'Mrs. Swetha Balaji | Dr. Manoj Kumar Katual | Mrs. Saswati Jena | Dr. S.Reno',
                                    'link' => 'communicative-english-book.php',
                                    'btn' => 'Read More'
                                ],
                                // Fundamentals of IOT
                                [
                                    'img' => 'assets/img/new/fundamentals-of-iot.png',
                                    'alt' => ' Fundamentals of IOT ',
                                    'title' => 'Fundamentals of IOT',
                                    'authors' => 'Mr.Sankara Rao Allada | Ms.Navya Sai | Ms.Manasa.S | Dr.R.Raman ',
                                    'link' => 'fundamentals-of-iot-book.php',
                                    'btn' => 'Read More'
                                ],
                                // Basic Electrical Engineering
                                [
                                    'img' => 'assets/img/new/basic-electrical-engineering-isha-das.png',
                                    'alt' => ' Basic Electrical Engineering ',
                                    'title' => 'Basic Electrical Engineering',
                                    'authors' => 'Isha Das | Jarin Joe Rini J |  Gopika B S | Swathi Sankepally ',
                                    'link' => 'basic-electrical-engineering-isha-das-book.php',
                                    'btn' => 'Read More'
                                ],
                                // Advance Corporate Accounting
                                [
                                    'img' => 'assets/img/new/advance-corporate-accounting-vanitha.png',
                                    'alt' => ' Advance Corporate Accounting ',
                                    'title' => 'Advance Corporate Accounting',
                                    'authors' => 'Dr.A.Vanitha  | Dr.P.Sri Padma Abirami  | Ms.S.Sruthi ',
                                    'link' => 'advance-corporate-accounting-vanitha-book.php',
                                    'btn' => 'Read More'
                                ],
                                // Legal Aspects Of Business
                                [
                                    'img' => 'assets/img/new/legal-aspects-of-business.png',
                                    'alt' => ' Legal Aspects Of Business ',
                                    'title' => 'Legal Aspects Of Business',
                                    'authors' => 'Mr.A.Aravinth  | Mahalaxmi L.N | Venusha.R.S | Tamilezhili K  ',
                                    'link' => 'legal-aspects-of-business-book.php',
                                    'btn' => 'Read More'
                                ],

                                // AI in Robotics
                                [
                                    'img' => 'assets/img/new/artificial-intelligence-in-robotics.png',
                                    'alt' => ' AI in Robotics ',
                                    'title' => 'AI in Robotics',
                                    'authors' => 'R.Bhuvaneswari  | R.Tamilselvi | P.Abinaya  | R.Bhuvaneswari',
                                    'link' => 'ai-in-robotics-book.php',
                                    'btn' => 'Read More'
                                ],
                                // Research Methodology
                                [
                                    'img' => 'assets/img/new/research-methodology-deepa.png',
                                    'alt' => ' Research Methodology ',
                                    'title' => 'Research Methodology',
                                    'authors' => 'Dr.T.Deepa  | Dr.P.Nithya Devi  | Dr.M.Maheswari',
                                    'link' => 'research-methodology-deepa-book.php',
                                    'btn' => 'Read More'
                                ],
                                // Basic Electrical Engineering
                                [
                                    'img' => 'assets/img/new/basic-electrical-engineering.png',
                                    'alt' => ' Basic Electrical Engineering ',
                                    'title' => 'Basic Electrical Engineering',
                                    'authors' => 'Dr.Nidhi Mishra  | Prof.Dipanjali Padhi | Prof.ChetanaS.Kelkar ',
                                    'link' => 'basic-electrical-engineering-book.php',
                                    'btn' => 'Read More'
                                ],
                                // Essential Developmental Biology
                                [
                                    'img' => 'assets/img/new/essential-developmental-biology.png',
                                    'alt' => ' Essential Developmental Biology ',
                                    'title' => 'Essential Developmental Biology',
                                    'authors' => 'Dr.Jyothi Rani',
                                    'link' => 'essential-developmental-biology-book.php',
                                    'btn' => 'Read More'
                                ],
                                // Smart Farming An IoT Approach
                                [
                                    'img' => 'assets/img/new/smart-farming-an-iot-approach.png',
                                    'alt' => ' Smart Farming An IoT Approach ',
                                    'title' => 'Smart Farming An IoT Approach',
                                    'authors' => 'Prof.Sneh A. Nagaonkar  | Dr.Sudhakar D.Bhoite',
                                    'link' => 'smart-farming-an-iot-approach-book.php',
                                    'btn' => 'Read More'
                                ],

                                // Transmission Lines And Electromagnetic Fields
                                [
                                    'img' => 'assets/img/new/transmission-line-and-electromagnetic-fields.png',
                                    'alt' => ' Transmission Lines And Electromagnetic Fields ',
                                    'title' => 'Transmission Lines And Electromagnetic Fields',
                                    'authors' => 'Dr.Ravikiran R  | Prof. Shashikiran R',
                                    'link' => 'transmission-lines-and-electromegnetic-fields-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/essentials-of-biochemistry.png',
                                    'alt' => ' Essentials of Biochemistry ',
                                    'title' => 'Essentials of Biochemistry',
                                    'authors' => 'Dr.C.Caleb Johnson Paranjothi  |  Dr.R.Jeyapandi | Mrs. A.Helen Febial |  Dr. H. Jacena Begum',
                                    'link' => 'essentials-of-biochemistry-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/cloud-computing.png',
                                    'alt' => ' Cloud Computing ',
                                    'title' => 'Cloud Computing',
                                    'authors' => 'Dr.S. Brindha  | Dr. D. Suresh',
                                    'link' => 'cloud-computing-Brindha-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/e-business.png',
                                    'alt' => ' E-Business ',
                                    'title' => 'E-Business',
                                    'authors' => 'Dr. Prashantha Kumar O  | Mrs.Chaitra S  | Mr.Narendrakumar B  | Mrs.Chaithrakala R',
                                    'link' => 'e-business-book.php',
                                    'btn' => 'Read More'
                                ],

                                [
                                    'img' => 'assets/img/new/princples_of_management_thangaimani.png',
                                    'alt' => ' Principles of Management ',
                                    'title' => 'Principles of Management',
                                    'authors' => 'Dr.S.Thanigaimani  | Dr.M.Manimekalai',
                                    'link' => 'principles-of-management-thangaimani-book.php ',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/strategic-human-resource-management.png',
                                    'alt' => ' Strategic Human Resource Management ',
                                    'title' => 'Strategic Human Resource Management',
                                    'authors' => 'Ms.Parhana R | Dr.Hemasundari M | Dr.K.Santhanalakshmi',
                                    'link' => 'strategic-human-resource-management-parhana-book.php ',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/business-analytics-philomine.png',
                                    'alt' => ' Business Analytics ',
                                    'title' => 'Business Analytics',
                                    'authors' => 'Dr. G Philomine Joan of Arc',
                                    'flipkart' => 'https://www.flipkart.com/business-analytics-1-disc/p/itme90d71a61e5c9?pid=9789389911169',
                                    'link' => 'business-analytics-philomine-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/principles-of-management-mathuraswamy.png',
                                    'alt' => ' Principles of Management ',
                                    'title' => 'Principles of Management',
                                    'authors' => 'Dr.P. Mathuraswamy  | Dr.M.P. Prabakaran  | Dr.P. Maria Jesi  |Dr.P. Jeya Bright',
                                    'link' => 'principles-of-management-mathuraswamy-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/engineering-chemistry.png',
                                    'alt' => ' Engineering Chemistry ',
                                    'title' => 'Engineering Chemistry',
                                    'authors' => 'Dr. V. Usha | Isha Das | Dr. Renu S Nair | Dr. Meena Devi',
                                    'link' => 'engineering-chemistry-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/business-analytics_aug-1.png',
                                    'alt' => ' Business Analytics ',
                                    'title' => ' Business Analytics',
                                    'authors' => 'Mr. Sharathchandra Kamath K |  Mr. Subhash Kumar K |  Mrs.VK Durgadevi ',
                                    'link' => 'business-analytics-sharathchandra-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/principles-of-communication-systems.png',
                                    'alt' => ' Pricinples Of Communication System ',
                                    'title' => ' Principles Of Communication Systems',
                                    'authors' => ' Mr.Ravindra Kumar M  | Dr.Mohan Babu  | Mr.Ramegowda M ',
                                    'link' => 'principles-of-communication-systems-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/theory_of_computation.png',
                                    'alt' => 'Theory Of Computation ',
                                    'title' => 'Theory Of Computation',
                                    'authors' => 'Dr. Manoj Kumar G  | Dr. Smitha Vas P ',
                                    'link' => 'theory-of-computation-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/big-data-analytics.png',
                                    'alt' => 'Big Data Analytics ',
                                    'title' => 'Big Data Analytics ',
                                    'authors' => 'Dr.R.Kiruba Buri | Dr.B.Rajappa | Dr.K.Swaminathan',
                                    'link' => 'big-data-analytics-book.php',
                                    'flipkart' => 'https://www.flipkart.com/big-data-analytics-1-disc/p/itmcb7a00b3329c5?pid=9789348556950',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/computter-networks.png',
                                    'alt' => 'Computer Networks Concepts And Fundamentals',
                                    'title' => 'Computer Networks Concepts And Fundamentals',
                                    'authors' => 'K. Kalaichelve | Dr. Varalashmi K R | Dr. N.Gayathri Devi | Dr.Vimala D',
                                    'link' => 'computer-networks-concepts-and-fundamentals-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/adhoc.png',
                                    'alt' => 'Adhoc And Sencor Networks',
                                    'title' => 'Adhoc And Sencor Networks',
                                    'authors' => 'R. Dinesh Kumar | Dr.P.Chinniah',
                                    'link' => 'adhoc-and-sencor-networks-book.php',
                                    'flipkart' => 'https://www.flipkart.com/adhoc-sensor-networks-1-disc/p/itm2bc5ba6538d03?pid=9789348556189',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/java-programming.png',
                                    'alt' => 'Java Programming',
                                    'title' => 'Java Programming: Unlocking The Power of Object-Oriented Design',
                                    'authors' => 'Dr.R. Krishnamoorthy | Mrs. K. Sathiyapriya | Dr. I. Godlin Atlas | Dr. K.V. Shiny',
                                    'link' => 'java-programming-unlocking-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/business-analytics.png',
                                    'alt' => 'Business Analytics',
                                    'title' => 'Business Analytics',
                                    'authors' => 'Dr.Jaya Shankar | Ahalya. A | Nandana Jayakumar | Dr. Priya prasad',
                                    'link' => 'business-analytics-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/intelligent-systems.png',
                                    'alt' => 'Intelligent Systems',
                                    'title' => 'Intelligent Systems Ai Fundamentals And Applications',
                                    'authors' => 'Dr.D.Muruganandam | Dr.J.Jayapriya | Ryan A Pins',
                                     'amazon' => 'https://www.amazon.in/dp/9348556487',
                                    'flipkart' => 'https://www.flipkart.com/intelligent-systems-ai-fundamentals-applications-1-disc/p/itmdbdc135d6bc12?pid=9789348556486',
                                    'link' => 'intelligent-systems-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/ME_II.png',
                                    'alt' => 'Book 1',
                                    'title' => 'Medical Electronics',
                                    'authors' => 'Dr. M. Kavitha',
                                    'link' => 'Medical-Electronics-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/DL.png',
                                    'alt' => 'Book 1',
                                    'title' => 'Deep Learning',
                                    'authors' => 'M.A. Reetha Jeyarani,R. Roshan Joshua',
                                    'link' => 'Deep-Learning-book.php',
                                    'btn' => 'Read More'
                                ],

                                [
                                    'img' => 'assets/img/new/DLBABH.png',
                                    'alt' => 'Book 1',
                                    'title' => ' Deep Learning for Business Analytics Beginner s Handbook',
                                    'authors' => 'Dr.D. Ravindran,Dr. Vinothina V,Dr. Chandrakhanthan J,Dr. Jisha V G',
                                    'link' => 'deeplearning-business-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/ghsmi.png',
                                    'alt' => 'Book 1',
                                    'title' => 'Green chemistry sustainable methods and Innovations',
                                    'authors' => 'Dr. P. Sumathi ,V. Geetha, Dr. S. Prasad',
                                    'link' => 'green-chemistry-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/ME.png',
                                    'alt' => 'Book 1',
                                    'title' => 'Medical Electronics-II',
                                    'authors' => 'Dr. P. Chinniah ,R. Dinesh Kumar',
                                    'link' => 'Medical Electronics-II-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/CTFP.png',
                                    'alt' => 'Book 1',
                                    'title' => 'Corporate Taxation and Financial Planning',
                                    'authors' => 'Sapna Abhijeet Thakur',
                                    'link' => 'Corporate Taxation and Financial Planning-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/cloud-img.png',
                                    'alt' => 'Book 1',
                                    'title' => 'Cloud Computing',
                                    'authors' => 'V. Mahalakshmi, G. Ashish, R. Menagadevi, S.B.Narmada',
                                    'link' => 'cloud-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/p.png',
                                    'alt' => 'Book 2',
                                    'title' => 'R Programming',
                                    'authors' => 'Dr.M.Kamal, Mr.Z.Harith Ahamed, Mr.L.Imamdheen',
                                    'link' => 'R-Programming-book.php',
                                    'amazon' => 'https://www.amazon.in/example-amazon-link',
                                    'flipkart' => 'https://www.flipkart.com/r-programming-introduction-r-language-data-science-mastering-analysis-getting-started-power-science-statistics-made-easy/p/itm9b00af594aa36?pid=9789348556011',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/cryptography-img.png',
                                    'alt' => 'Book 3',
                                    'title' => 'Cryptography and Cyber Security',
                                    'authors' => 'Dr.Chandra Mouli Venkata Srinivas Akana, Dr. Chaya Kumari Divakarla',
                                    'link' => 'cacs-books.php',
                                    'btn' => 'Read More',

                                ],
                                [
                                    'img' => 'assets/img/new/RM.png',
                                    'alt' => 'Book 4',
                                    'title' => 'Research Methodology',
                                    'authors' => 'Prof. Sumaiya Fathima, Dr. Santhi. K, Dr. Sonia Riyat, Mrs. G. Nithya',
                                    'link' => 'research-methodology-book.php',
                                    'amazon' => 'https://www.amazon.in/example-amazon-link',
                                    'flipkart' => 'https://www.flipkart.com/research-methodology-foundations-essentials-methods-principles-design-introduction-techniques-methods-practical-guide-science-inquiry-approaches/p/itmaed48f8ff824f?pid=9789348556110',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/CCCF.png',
                                    'alt' => 'Book 5',
                                    'title' => 'Cloud Computing Concepts and Fundamentals',
                                    'authors' => 'Dr.Shashikala S, Mr.G.Mani, Dr.Mohamed Imtiaz N, Dr.V.Punitha',
                                    'link' => 'cloud-computing-book.php',
                                    'amazon' => 'https://www.amazon.in/example-amazon-link',
                                    'flipkart' => 'https://www.flipkart.com/cloud-computing-concepts-fundamentals-introduction-technologies-computing-concepts-models-services-basics-infrastructure-understanding-core/p/itmf2e916fe91796?pid=9789348556523',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/FWT.png',
                                    'alt' => 'Book 6',
                                    'title' => 'Fundamentals Of Web Technology',
                                    'authors' => 'Selvamanju E, Lekhaa V, Deepthi V',
                                    'link' => 'Fundamentals-of-web-technology-book.php',
                                    'amazon' => 'https://www.amazon.in/example-amazon-link',
                                    'flipkart' => 'https://www.flipkart.com/cryptography-cyber-security-secure-systems-cryptographic-techniques-213-disc/p/itmc5e3336535f1c?pid=9789348556370',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/CCS.png',
                                    'alt' => 'Book 7',
                                    'title' => 'Cryptography and Cyber Security',
                                    'authors' => 'Dr.B.Dhanasekaran, Dr.J.Jaganpradeep, M.Chamundeeswari, Mr.Pradip Sitaram Ingle',
                                    'link' => 'cryptography-and-cyber-security-book.php',
                                    'amazon' => 'https://www.amazon.in/example-amazon-link',
                                    'flipkart' => 'https://www.flipkart.com/cryptography-cyber-security-secure-systems-cryptographic-techniques-213-disc/p/itmc5e3336535f1c?pid=9789348556370',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/SHRM.png',
                                    'alt' => 'Book 8',
                                    'title' => 'Strategic Human Resource Management',
                                    'authors' => 'Dr. B. Sivaraj, MBA., Ph.D',
                                    'link' => 'strategic-human-resource-management-book.php',
                                    'amazon' => 'https://www.amazon.in/example-amazon-link',
                                    'flipkart' => 'https://www.flipkart.com/r-programming-introduction-r-language-data-science-mastering-analysis-getting-started-power-science-statistics-made-easy/p/itm9b00af594aa36?pid=9789348556011',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/CNS-S24.png',
                                    'alt' => 'Book 18',
                                    'title' => 'Cryptography and Network Security',
                                    'authors' => 'Dr.VR. Balasaraswathi, Dr.L. Mary Shamala',
                                    'link' => 'cryptography-and-network-security-book-s24.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/DC-sep-24.png',
                                    'alt' => 'Book 18',
                                    'title' => 'Digital Communication',
                                    'authors' => 'Dr. Gyanandre Tripathi, Dr.P. Jeya Brigth, Dr.P. Maria Jesi, Lalbabu Prashad',
                                    'link' => 'digital-communication-book.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/PP.png',
                                    'alt' => 'Book 9',
                                    'title' => 'Python Programming',
                                    'authors' => 'Dr.Ramadevi Chappala, R.Kanimozhi, Shahnazeer C K, B.Manjubashini',
                                    'link' => 'shrm-order.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/BBTI.png',
                                    'alt' => 'Book 10',
                                    'title' => 'Blockchain Basics A NO - Technical Introduction',
                                    'authors' => 'Thangavel Murugan, Dr. RVS Praveen, Brahma Mutya, Ravi Teja Aide',
                                    'link' => 'shrm-order.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/CMA.png',
                                    'alt' => 'Book 11',
                                    'title' => 'Cost And Management Accounting',
                                    'authors' => 'Dr.P.Uma Maheswari, Dr.J.Arputh Sahaya Raj, Dr.k.Ramasamy, Sumaiya Fathima',
                                    'link' => 'shrm-order.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/ESS.png',
                                    'alt' => 'Book 12',
                                    'title' => 'Environmental Science And Sustainability',
                                    'authors' => 'Dr.Challaraj Emmanuel E S, Dr.Arpita Mishra, Dr.Sangeeth Menon, Lt.Kushbu R',
                                    'link' => 'shrm-order.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/FDS.png',
                                    'alt' => 'Book 13',
                                    'title' => 'Foundations Of Data Science',
                                    'authors' => 'Dr.RVS Praveen',
                                    'link' => 'shrm-order.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/AIML.png',
                                    'alt' => 'Book 14',
                                    'title' => 'Artificial Intelligence and Machine Learning',
                                    'authors' => 'Dr.RVS Praveen, Brahma Mutya, RaviTeja Aida',
                                    'link' => 'shrm-order.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/IIT.png',
                                    'alt' => 'Book 15',
                                    'title' => 'Introduction to Internet of Things',
                                    'authors' => 'Dr.Jayeshkumar N.Modi, Dr.Sudha Rajesh, Rajesh Ramachandra Mane, Dr.Ravindrakumar Nagarale',
                                    'link' => 'shrm-order.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/UMLFTA.png',
                                    'alt' => 'Book 16',
                                    'title' => 'Understanding Machine Learing: From Theory to Algorithms',
                                    'authors' => 'Dr.RVS Praveen, Brahma Mutya, Ravi Teja Aida, Dr.Pokkuluri Kiran Sree',
                                    'link' => 'shrm-order.php',
                                    'btn' => 'Read More'
                                ],
                                [
                                    'img' => 'assets/img/new/SECA.png',
                                    'alt' => 'Book 17',
                                    'title' => 'Sofware Engineering Concepts & Applications',
                                    'authors' => 'Dr.J.Deepalakshmi, B.Lalithadevi, Dr.M.Chandran, Arunkumar C',
                                    'link' => 'shrm-order.php',
                                    'btn' => 'Read More'
                                ],

                            ];

                            foreach ($books as $book) {
                                echo '<div class="rounded-lg p-2 flex flex-col items-center h-full">';
                                echo '<a href="' . htmlspecialchars($book['link']) . '">';
                                echo '<img src="' . htmlspecialchars($book['img']) . '" alt="' . htmlspecialchars($book['alt']) . '" class="w-54 h-62 object-cover mb-4 rounded border-0">';
                                echo '</a>';
                                echo '<h5 class="font-semibold text-lg text-center mb-2">' . htmlspecialchars($book['title']) . '</h5>';
                                echo '<p class="text-gray-600 mb-4 text-center">' . htmlspecialchars($book['authors']) . '</p>';
                                echo '<div class="mt-auto w-full flex flex-col items-center justify-center gap-2">';
                                // Add Amazon and Flipkart links if available
                                if (!empty($book['amazon']) || !empty($book['flipkart'])) {
                                    echo '<div class="flex flex-col sm:flex-row gap-2 mt-2 items-center justify-center w-full ">';
                                    if (!empty($book['amazon'])) {
                                        echo '<a href="' . htmlspecialchars($book['amazon']) . '" target="_blank" rel="noopener" class="inline-flex items-center justify-center px-2 py-1 sm:px-3 sm:py-1 bg-yellow-400 hover:bg-yellow-500 text-black font-semibold rounded text-xs sm:text-sm transition-all duration-200"><i class="fab fa-amazon mr-1"></i>Amazon</a>';
                                    }
                                    if (!empty($book['flipkart'])) {
                                        echo '<a href="' . htmlspecialchars($book['flipkart']) . '" target="_blank" rel="noopener" class="inline-flex items-center justify-center px-2 py-1 sm:px-3 sm:py-1 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded text-xs sm:text-sm transition-all duration-200"><i class="fas fa-shopping-cart mr-1"></i>Flipkart</a>';
                                    }
                                    echo '</div>';
                                }
                                echo '<a href="' . htmlspecialchars($book['link']) . '" class="w-75 text-center bg-blue-200 hover:bg-blue-400 text-blue-700 font-semibold hover:text-gray-800 py-2 px-3 border-0 shadow-lg hover:border-transparent rounded transition-all duration-200">' . htmlspecialchars($book['btn']) . '</a>';

                                echo '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>



            <!-- Start Footer 
    ============================================= -->
            <?php require_once "footer.php"; ?>

        </div>
</body>
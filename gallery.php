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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4edf5 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 1400px;
            margin: 0 auto;
        }
              
        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #3498db;
            border-radius: 2px;
        }
        
        .subtitle {
            font-size: 1.2rem;
            color: #7f8c8d;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }
        
        .gallery-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .gallery-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }
        
        .card-image {
            height: 250px;
            overflow: hidden;
            position: relative;
        }
        
        .card-image img {
            position: absolute;
            top: -50%;
           
            object-fit: cover;
            transition: transform 0.5s ease;

        }
        
        .gallery-card:hover .card-image img {
            transform: scale(1.05);
        }
        
        .card-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .card-content h3 {
            font-size: 1.6rem;
            color: #2c3e50;
            margin-bottom: 8px;
        }
        
        .card-content h4 {
            font-size: 1.2rem;
            color: #3498db;
            margin-bottom: 8px;
            font-weight: 600;
        }
        
        .card-content p {
            color: #7f8c8d;
            line-height: 1.6;
            margin: 8px 0;
            flex-grow: 1;
        }
        
        .location {
            display: flex;
            align-items: center;
            color: #e74c3c;
            margin: 8px 0;
        }
        
        .location i {
            margin-right: 8px;
        }
        
        .btn {
            display: inline-block;
            background: #3498db;
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 20px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            text-align: center;
            width: fit-content;
        }
        
        .btn:hover {
            background: #2980b9;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }
        
        .btn i {
            margin-left: 5px;
        }
        
        .expanded-gallery {
            margin-top: 40px;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            display: none;
        }
        
        .expanded-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f1f2f6;
        }
        
        .expanded-header h2 {
            font-size: 1.8rem;
            color: #2c3e50;
        }
        
        .close-btn {
            background: #e74c3c;
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .close-btn:hover {
            background: #c0392b;
            transform: rotate(90deg);
        }
        
        .expanded-images {
          overflow: auto;
            display:flex;

            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .expanded-images img {
            width: 30%;
            height:auto;
            object-fit: cover;
            border: none;
            border-radius:8px;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .expanded-images img:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .modal.active {
            opacity: 1;
        }
        
        .modal-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
        }
        
        .modal-content img {
            max-width: 100%;
            max-height: 100vh;
            display: block;
            margin: 0 auto;
            border-radius: 8px;
            box-shadow: 0 0 30px rgba(255, 255, 255, 0.1);
        }
        
        .modal-caption {
            color: white;
            text-align: center;
            padding: 15px 0;
            font-size: 1.2rem;
        }
        
        .close-modal {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .close-modal:hover {
            color: #e74c3c;
            transform: scale(1.1);
        }
        
        .nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-size: 50px;
            cursor: pointer;
            background: rgba(0, 0, 0, 0.5);
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        
        .nav-btn:hover {
            background: rgba(52, 152, 219, 0.8);
        }
        
        .prev {
            left: 20px;
        }
        
        .next {
            right: 20px;
        }
        
        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: 1fr;
            }
            
            h1 {
                font-size: 2.2rem;
            }
            
            .subtitle {
                font-size: 1rem;
            }
            
            .nav-btn {
                font-size: 30px;
                width: 40px;
                height: 40px;
            }
        }
</style>

<body>

    <!-- navbar file -->
    <?php require_once "navbar.php"; ?>
    <!-- navbar file  -->
    <!-- Home page 1 -->
    <div style="max-width: 1520px;" class="relative container ">

            <nav class="mb-6  rounded-lg px-4 py-3">
                <ol class="flex items-center text-gray-700 space-x-2 text-sm font-medium">
                    <li class="flex items-center">
                        <a href="index.php" class="hover:underline text-blue-600 flex items-center">
                            <i class="fas fa-home mr-1"></i> Home
                        </a>
                        <span class="mx-2 text-gray-400"><i class="fas fa-chevron-right"></i></span>
                    </li>
                      <li class="flex items-center">
                        <a href="gallery.php" class="hover:underline text-blue-600 flex items-center">
                            <i class="fas fa-image mr-1"></i> Gallery
                        </a>
                        <span class="mx-2 text-gray-400"><i class="fas fa-chevron-right"></i></span>
                    </li>
                </ol>
            </nav>
            <div class="row">
            <h1 class="text-4xl font-semibold text-center text-blue-500">PencilBitz Gallery</h1>
            <p class="subtitle text-center font-mediam text-xl py-3">Explore our prestigious institutions through captivating imagery showcasing campuses, achievements, and campus life</p>
        
        
        <div class="gallery-grid">
            <!-- Card 1 -->
            <div class="gallery-card">
                <div class="card-image">
                    <img src="assets/img/gallery/pachappa/pachappa-5.jpg" alt="Pachappa College of Arts and Science" class="">
                </div>
                <div class="card-content">
                    <h3>✨ Milestone Delivered! ✨</h3>
                    <h4>Pachaiyappa's College for Men</h4>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <p> Kanchipuram, Tamil Nadu</p>
                    </div>
                    <p>We are delighted to share that the 75th Year Diamond Jubilee Souvenir copies have been successfully dispatched to Pachaiyappa’s College for Men, Kanchipuram — safely, securely, and right on schedule! 🎯📬

                        </p>
                    <button class="btn view-more-btn">View Gallery <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="gallery-card">
                <div class="">
                    <img class="bourder-0" src="assets/img/gallery/srikrishna/srikrishna-clg.jpg" alt="University Campus">
                </div>
                <div class="card-content">
                    <h3>Exciting Career Opportunity! Campus Drive</h3>
                    <h4>Sri Krishna Aditya Arts & Science College</h4>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Coimbatore, Tamil Nadu</p>
                    </div>
                    <p>We’re excited to share that Pencilbitz is visiting Sri Krishna Adithya College for a Campus Recruitment Drive!</p>
                    <button class="btn view-more-btn">View Gallery <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="gallery-card">
                <div class="">
                    <img class="bourder-0" src="assets/img/gallery/Diwali-2025/diwali-2025-p2.jpg" alt="College Library">
                </div>
                <div class="card-content">
                    <h3> Pencil Bitz Diwali 2025</h3>
                    <h4>Pencil Bitz Diwali 2025</h4>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Coimbatore, Tamil Nadu</p>
                    </div>
                    <p>The Pencil Bitz Diwali function was a joyful celebration filled with lights, laughter, and festive spirit, bringing the entire team together in harmony.</p>
                    <button class="btn view-more-btn">View Gallery <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        
        <!-- Expanded Gallery Section -->
        <div class="expanded-gallery" id="expandedGallery">
            <div class="expanded-header">
                <h2 id="galleryTitle">Additional Images</h2>
                <button class="close-btn" id="closeGallery">&times;</button>
            </div>
            <div class="expanded-images" id="galleryImages">
                <!-- Images will be populated by JavaScript -->
            </div>
        </div>
        
        <!-- Modal -->
        <div class="modal" id="imageModal">
            <span class="close-modal">&times;</span>
            <div class="nav-btn prev" id="prevBtn">&#10094;</div>
            <div class="nav-btn next" id="nextBtn">&#10095;</div>
            <div class="modal-content">
                <img id="modalImage" src="" alt="">
                <div class="modal-caption" id="modalCaption"></div>
            </div>
        </div>
        
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const viewMoreButtons = document.querySelectorAll('.view-more-btn');
            const expandedGallery = document.getElementById('expandedGallery');
            const galleryImages = document.getElementById('galleryImages');
            const galleryTitle = document.getElementById('galleryTitle');
            const closeGallery = document.getElementById('closeGallery');
            const imageModal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const modalCaption = document.getElementById('modalCaption');
            const closeModal = document.querySelector('.close-modal');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            
            // Local image sets for each college
            const imageSets = {
                "Pachaiyappa's College for Men": [
                    {src: "assets/img/gallery/pachappa/pachappa-11.jpg", caption: "Campus Building"},
                    {src: "assets/img/gallery/pachappa/pachappa-5.jpg", caption: "Campus Building"},
                    {src: "assets/img/gallery/pachappa/pachappa-6.jpg", caption: "Graduation Ceremony"},
                    {src: "assets/img/gallery/pachappa/pachappa-7.jpg", caption: "Library Interior"},
                    {src: "assets/img/gallery/pachappa/pachappa-8.jpg", caption: "Student Activity"},
                    
                ],
                "Sri Krishna Aditya Arts & Science College": [
                    
                    {src: "assets/img/gallery/srikrishna/3.jpg", caption: "Student Workshop"},
                    {src: "assets/img/gallery/srikrishna/4.jpg", caption: "Conference Hall"},
                    {src: "assets/img/gallery/srikrishna/5.jpg", caption: "Sports Event"},
                    {src: "assets/img/gallery/srikrishna/7.jpg ",caption: "Cultural Festival"},

                ],
                "Pencil Bitz Diwali 2025": [
                 {src: "assets/img/gallery/Diwali-2025/diwali-2025-p2.jpg", caption: "Entrance View"},
                 {src: "assets/img/gallery/Diwali-2025/diwali-2025-p1.jpg", caption: "Science Department"},
                 {src: "assets/img/gallery/Diwali-2025/diwali-2025-p3.jpg", caption: "Auditorium"},
                 {src: "assets/img/gallery/Diwali-2025/diwali-2025-p4.jpg", caption: "Student Gathering"},
                 {src: "assets/img/gallery/Diwali-2025/diwali-2025-p5.jpg", caption: "Art Exhibition"},
                ],
            };
            
            // For modal navigation
            let currentGallery = [];
            let currentIndex = 0;
            
            // Add click event to each view more button
            viewMoreButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const card = this.closest('.gallery-card');
                    const collegeName = card.querySelector('h4').textContent;
                    
                    // Set gallery title
                    galleryTitle.textContent = `${collegeName} `;
                    
                    // Clear previous images
                    galleryImages.innerHTML = '';
                    
                    // Add new images
                    imageSets[collegeName].forEach(imageObj => {
                        const imgContainer = document.createElement('div');
                        imgContainer.classList.add('image-container');
                        
                        const img = document.createElement('img');
                        img.src = imageObj.src;
                        img.alt = imageObj.caption;
                        img.dataset.caption = imageObj.caption;
                        img.dataset.college = collegeName;
                        
                        img.addEventListener('click', function() {
                            openModal(collegeName, this.src, this.dataset.caption);
                        });
                        
                        galleryImages.appendChild(img);
                    });
                    
                    // Store current gallery for modal
                    currentGallery = imageSets[collegeName];
                    
                    // Show expanded gallery
                    expandedGallery.style.display = 'block';
                    
                    // Scroll to gallery
                    expandedGallery.scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
            
            // Close expanded gallery
            closeGallery.addEventListener('click', function() {
                expandedGallery.style.display = 'none';
            });
            
            // Open modal function
            function openModal(college, src, caption) {
                modalImage.src = src;
                modalCaption.textContent = caption;
                imageModal.classList.add('active');
                document.body.style.overflow = 'hidden';
                
                // Set current index for navigation
                currentIndex = currentGallery.findIndex(img => img.src === src);
            }
            
            // Close modal
            closeModal.addEventListener('click', function() {
                imageModal.classList.remove('active');
                document.body.style.overflow = '';
            });
            
            // Modal navigation
            prevBtn.addEventListener('click', function() {
                currentIndex = (currentIndex - 1 + currentGallery.length) % currentGallery.length;
                updateModalImage();
            });
            
            nextBtn.addEventListener('click', function() {
                currentIndex = (currentIndex + 1) % currentGallery.length;
                updateModalImage();
            });
            
            // Update modal image
            function updateModalImage() {
                const image = currentGallery[currentIndex];
                modalImage.src = image.src;
                modalCaption.textContent = image.caption;
            }
            
            // Close modal when clicking outside
            imageModal.addEventListener('click', function(e) {
                if (e.target === imageModal) {
                    imageModal.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
            
            // Keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (imageModal.classList.contains('active')) {
                    if (e.key === 'ArrowLeft') {
                        currentIndex = (currentIndex - 1 + currentGallery.length) % currentGallery.length;
                        updateModalImage();
                    } else if (e.key === 'ArrowRight') {
                        currentIndex = (currentIndex + 1) % currentGallery.length;
                        updateModalImage();
                    } else if (e.key === 'Escape') {
                        imageModal.classList.remove('active');
                        document.body.style.overflow = '';
                    }
                }
            });
        });
    </script>
                </div>
            </div>


        



            <!-- Start Footer 
    ============================================= -->
            <?php require_once "footer.php"; ?>

        </div>
</body>
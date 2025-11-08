<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pencil Bitz">

    <title>Pencil Bitz</title>
    <link rel="shortcut icon" href="assets/img/new-logo-pencilbitz.jpg" type="image/x-icon">

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <style>

    .testimonial-slider {
        position: relative;
        max-width: 1520px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .slider-container {
        overflow: hidden;
        position: relative;
    }

    .slider-track {
        display: flex;
        transition: transform 0.6s cubic-bezier(0.22, 1, 0.36, 1);
        padding: 5px 0;
        touch-action: pan-y; /* Enable touch scrolling */
    }

    .testimonial-card {
        width: 300px;
        min-width: 300px;
        height: 340px;
        background: white;
        border-radius: 0.5rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        padding: 1.5rem;
        margin: 0 10px;
        display: flex;
        flex-direction: column;
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
        cursor: pointer;
        flex-shrink: 0; /* Prevent cards from shrinking */
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
    }

    .slider-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        z-index: 10;
        transition: all 0.3s ease;
        border: none;
        outline: none;
    }

    .slider-nav:hover {
        background: #f8f8f8;
        transform: translateY(-50%) scale(1.1);
    }

    .slider-nav.prev {
        left: -15px;
    }

    .slider-nav.next {
        right: -15px;
    }

    .slider-nav.disabled {
        opacity: 0.5;
        cursor: not-allowed;
        transform: translateY(-50%);
    }

    .review-content {
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: #e2e8f0 transparent;
        -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
    }

    .review-content::-webkit-scrollbar {
        width: 4px;
    }

    .review-content::-webkit-scrollbar-track {
        background: transparent;
    }

    .review-content::-webkit-scrollbar-thumb {
        background-color: #e2e8f0;
        border-radius: 20px;
    }

    /* Medium devices (tablets, 768px and up) */
    @media (max-width: 768px) {
        .testimonial-slider {
            padding: 0 10px;
        }

        .testimonial-card {
            width: 280px;
            min-width: 280px;
            height: 320px;
            margin: 0 8px;
        }

        .slider-nav {
            width: 36px;
            height: 36px;
        }

        .slider-nav.prev {
            left: -10px;
        }

        .slider-nav.next {
            right: -10px;
        }
    }

    /* Small devices (landscape phones, 576px and up) */
    @media (max-width: 576px) {
        .testimonial-slider {
            padding: 0 5px;
        }

        .testimonial-card {
            width: 85vw;
            min-width: 85vw;
            height: 300px;
            margin: 0 5px;
            padding: 1rem;
        }

        .slider-nav {
            width: 30px;
            height: 30px;
            top: 40%;
        }

        .slider-nav.prev {
            left: -5px;
        }

        .slider-nav.next {
            right: -5px;
        }

        /* Adjust text sizes for better mobile readability */
        .testimonial-card p.text-base {
            font-size: 15px;
        }
        
        .testimonial-card p.text-sm {
            font-size: 13px;
        }
        
        .testimonial-card p.text-xs {
            font-size: 11px;
        }
    }

    /* Extra small devices (portrait phones, less than 576px) */
    @media (max-width: 400px) {
        .testimonial-card {
            width: 85vw;
            min-width: 85vw;
            height: 320px;
        }
    }
</style>
</head>

<body class="bg-gray-200">
    <div class="py-12 bg-gray-200 ">
        <div class="text-center mb-10">
            <h3 class="text-3xl md:text-4xl font-semibold text-gray-800 mb-2">What People Say</h3>
            <div class="w-20 h-1 bg-orange-500 mx-auto"></div>
        </div>

        <!-- Testimonial Slider -->
        <div class="testimonial-slider">
            <div class="slider-container">
                <div class="slider-track" id="sliderTrack">
                    <?php
                    $testimonials = [
                             // Testimonilals
                        [
                            "image" => "jothimani.png",
                            "titel" => "Artificial Intelligence in Modern Approach ",
                            "author" => "Dr.Jothimani Ponnusamy ",
                            "designation" => " Professor of Practice",
                            "department" => " Computer Science and Engineering",
                            "college" => "Academy of Maritime Education and Training (AMET) ",
                            "location" => "Latur, Maharashtra ",
                            "review" => " Sincere thanks for you and your team for the professionalism, timely communication in the publishing journey. The process was a valuable learning experience, and I truly appreciate the editorial insights, cover design, and production quality.
The book Artificial Intelligence in Modern Approach wherein which I am the Lead author is a well-structured resource for understanding AI principles, basic concepts, problem solving, knowledge presentation and machine learning in a clear and concise manner.  Another Book Data, Information and Security (Fourth Author) is about focussed python concepts, logical and algorithmic thinking in solving real world problems.  
I look forward to continuing this journey together in the future and achieving quicker results in scheduled time. I truly appreciate the effort and dedication in completing the publication successfully",
                            "rating" => 5,
                        ],
                             
                             // Testimonilals
                        [
                            "image" => "priya.jpg",
                            "titel" => "Postcolonial Narratives in the World Literature",
                            "author" => "Dr. A. Priya  ",
                            "designation" => " Associate Professor",
                            "department" => "English",
                            "college" => "Holy Cross College (Autonomous)",
                            "location" => "Tiruchirappalli",
                            "review" => " It is a great pleasure to extend our gratitude for acknowledging our venture as Book authors. Everything is beautifully done. Thank you.With regards",
                            "rating" => 5,
                        ],
                           // Testimonilals
                        [
                            "image" => "Ghule-somnath-tukaram.jpg",
                            "titel" => "Problem Solving with Python Programming",
                            "author" => "Mr.Ghule Somnath Tukaram ",
                            "designation" => " Associate Professor",
                            "department" => "Mathematics",
                            "college" => " M.V.P. Samaj's K.S.K.W. Arts, Science and Commerce College",
                            "location" => " Cidco, Nashik",
                            "review" => "I am Somnath Ghule from KSKW College, Nashik, Maharashtra.I am pleased to share my feedback on the book “Problem Solving with Python Programming.” The content is excellent, covering all the basic concepts of Python in a clear and comprehensive manner. It serves as valuable guidance for students and learners interested in advancing their Python knowledge.The front and back covers are attractive, and the book provides practical insights and in-depth understanding of Python programming. My best wishes to all the staff members of Pencil Bits Publication for their commendable work and dedication.",
                            "rating" => 5,
                        ],
                           // Testimonilals -1
                        [
                            "image" => "roshani-sachin-phuse.jpg",
                            "titel" => " Network Security",
                            "author" => "Mrs.Roshani Sachin Phuse ",
                            "designation" => " Head of Department",
                            "department" => "Computer Engineering",
                            "college" => "G H Raisoni College of Engineering and Management ",
                            "location" => " Nagpur, Maharashtra",
                            "review" => "I would like to express my gratitude for the opportunity to work with your team on the publication of my book. The process was a valuable learning experience, and I truly appreciate the editorial insights, cover design, and production quality provided.",
                            "rating" => 5,
                        ],
                         // Testimonilals -1
                        [
                            "image" => "R.Suvetha.png",
                            "titel" => "Principles of Management",
                            "author" => "R.Suvetha ",
                            "designation" => " Associate Professor",
                            "department" => "Computer Application",
                            "college" => "Akshaya College of Arts and Science ",
                            "location" => "Kinathukadavu, Tamil Nadu",
                            "review" => "The book Principles of Management is a thorough and well-structured resource for understanding management principles. It covers key concepts, theories, and practices in a clear and concise manner. The inclusion of real-world examples, case studies, and illustrations enhances the learning experience. The book's organization and layout make it easy to follow and reference. Overall, it's a valuable resource for students, professionals, and anyone looking to develop their management skills. The authors have done an excellent job of presenting complex concepts in an accessible way. This book would be a great addition to any management course or professional development program. Its comprehensive coverage of management principles makes it a reliable reference for years to come.",
                            "rating" => 5,
                        ],
                        // Testimonilals -2
                        [
                            "image" => "vanathana.jpg",
                            "titel" => "Operation Research",
                            "author" => " Dr.T.Vanthana",
                            "department" => "Assistant Professor",
                            "designation" => "Business Administration",
                            "college" => "Sri Bharathi Arts and Science College for Women",
                            "location" => "Kaikurichi, Pudukkottai",
                            "review" => "The printing quality and cover design are very good, and I’m happy with the overall publishing experience with Pencil Bitz. However, I noticed that the book contains very few problems and more theoretical content. It would be better if more practical and numerical problems could be included in future editions. Overall, I appreciate the team’s effort and support.",
                            "rating" => 5,
                        ],
                         // Testimonilals -3
                        [
                            "image" => "Johnslin-sujitha.png",
                            "titel" => "Advanced Corporate Accounting ",
                            "author" => "Dr.G.Johnslin Sujitha ",
                            "designation" => "Assistant Professor",
                            "department" => "Commerce",
                            "college" => "St.Jerome’s College [Arts and Science]",
                            "location" => "Kanyakumari , Tamil Nadu",
                            "review" => "i'm happy and excited to be an author of the book Advanced Corporate Accounting and I am really satisfied with the service rendered by you. The cover page of the book was excellent and the contents were also very well presented. I truly appreciate the commitment of your team and I am grateful for the wonderful opportunity given to me. I look forward to continuing this wonderful association with you in future. Thank you so much",
                            "rating" => 4,  
                        ],
                            // Testimonilals -4
                        [
                            "image" => "Thanigaimani.png",
                            "titel" => "Principles of Management",
                            "author" => "Dr.S.Thanigaimani ",
                            "designation" => "Assistant Professor",
                            "department" => "Commerce",
                            "college" => "Srimad Andavan Arts And Science College",
                            "location" => "Tiruchirappalli, Tamil Nadu",
                            "review" => "Its my privilege to work with you and I am extremely happy and satisfied with all your services rendered during this publication process. Overall the printing quality and design of the cover page was good. Thank you",
                            "rating" => 4,  
                        ],
                              // Testimonilals -5
                        [
                            "image" => "Johnslin-sujitha.png",
                            "titel" => "Principles of Electronic Commerce",
                            "author" => "Dr.G.Johnslin Sujitha ",
                            "designation" => "Assistant Professor",
                            "department" => "Commerce",
                            "college" => "St.Jerome’s College [Arts and Science]",
                            "location" => "Kanyakumari ",
                            "review" => "Good afternoon mam  I sincerely thank you and your team for the excellent support throughout the publishing journey. Your professionalism, timely communication, and attention to detail made the process smooth and stress-free. The quality of the final book—both in content layout and design—has truly exceeded my expectations. I deeply appreciate your efforts in bringing my vision to life and look forward to future collaborations.",
                            "rating" => 4,  
                        ],
                            // Testimonilals -6
                        [
                            "image" => "usericon.png",
                            "titel" => "Digital Marketing",
                            "author" => "K. Vanitha ",
                            "designation" => "Assistant Professor",
                            "department" => "B.Com (Marketing Management)",
                            "college" => "Valliammal College for Women",
                            "location" => "Chennai",
                            "review" => "Good afternoon mam  I sincerely thank you and your team for the excellent support throughout the publishing journey. Your professionalism, timely communication, and attention to detail made the process smooth and stress-free. The quality of the final book—both in content layout and design—has truly exceeded my expectations. I deeply appreciate your efforts in bringing my vision to life and look forward to future collaborations.",
                            "rating" => 4,  
                        ],
                        // Testimonilals -2
                        [
                            "image" => "usericon.png",
                            "titel" => "examble",
                            "author" => "Hema H",
                            "department" => "Assistant Professor",
                            "designation" => "Computer Science and Engineering,",
                            "college" => "Mahaguru  Institute of Technology",
                            "location" => " Mavelikara Kerala",
                            "review" => "Excellent organization and execution of the FDP on Artificial Intelligence and Robotics The expert speakers and interactive discussions provided valuable insights",
                            "rating" => 4,
                        ],
                        // Testimonilals -3
                        [
                            "image" => "usericon.png",
                            "titel" => "examble",
                            "author" => "Name",
                            "designation" => "Computer Science and Engineering,",
                            "department" => "Associate Professor and   HoD, CSE",
                            "college" => "VNB & AGK College of Engineering",
                            "location" => "Gudivada, Andhra Pradesh",
                            "review" => "The Department of Computer Science and Engineering at Bishop Jerome Institute successfully organized a 5-day Faculty Development Program (FDP) on Algorithmic Thinking with Python in association with Pencil Bitz.",
                            "rating" => 4,
                        ],
                      
                        // Testimonilals -4
                        [
                            "image" => "usericon.png",
                            "titel" => "examble",
                            "author" => "Summaiya Fathima",
                            "designation" => "Principal",
                            "department" => "Computer Science",
                            "college" => "BET Sadathunnisa Degree College",
                            "location" => "Bangalore, Karnataka",
                            "review" => "Thank you your team for commitment to fostering excellence and for providing us with this FDP organizing support to complete in successful manner .",
                            "rating" => 5,
                        ],
                       // Testimonilals -5
                        [
                            "image" => "usericon.png",
                            "titel" => "Electronics  and communication Engineering",
                            "author" => "Dr. Prathiba M K",
                            "designation" => "Associate Professor ",
                            "department" => "Electronics  and communication Engineering",
                            "college" => "ATME College of Engineering, Mysuru",
                            "location" => "Mysuru, Karnataka",
                            "review" => "Thank you very much for your kind information and quick response. I truly appreciate your support and guidance, which motivates me to move forward with confidence. I look forward to continuing this journey together, learning, growing, and achieving greater success with mutual collaboration and shared commitment. ",
                            "rating" => 4,
                        ],
                        // Testimonilals -11
                        [
                            "image" => "usericon.png",
                            "titel" => "examble",
                            "author" => "Smitha Vas P",
                            "designation" => "Associate Professor",
                            "department" => "Computer Science Engineering",
                            "college" => "L B S Institute of Technology for Women",
                            "location" => "Trivandrum, Kerala",
                            "review" => "Thank you to your team for the sincere efforts, dedication, and consistent follow-up in ensuring that everything is properly managed and successfully published. Your commitment, attention to detail, and professional approach are truly appreciated. I deeply value the teamwork and support that made this achievement possible.",
                            "rating" => 5,
                        ],
                         // Testimonilals -11
                        [
                            "image" => "usericon.png",
                            "titel" => "examble",
                            "author" => "K.Vaishnavi",
                            "designation" => "Associate Professor",
                            "department" => "Artificial Intelligence and Data Science",
                            "college" => "Rajalakshmi Institute of technology",
                            "location" => "Chembarambakkam Chennai",
                            "review" => "I truly appreciate the effort and dedication you put into completing the publication successfully. Your prompt coordination and smooth handling of the process made everything very easy for me. Your service was professional and very helpful throughout.I really value your work and look forward to taking your support again in the future. Thankyou",
                            "rating" => 5,
                        ], 
                        // Testimonilals -15
                        [
                            "image" => "usericon.png",
                            "titel" => "book",
                            "author" => "Dr.I.John Parthiban ",
                            "designation" => "Assistant Professor",
                            "department" => " Physical Education",
                            "college" => "H.H The Rajah’s College",
                            "location" => "Pudukkottai, Tamil Nadu",
                            "review" => " I got Patent legal support for my own invention entitled Device for Heart Rate and Oxygen Saturation Monitoring through Book Bytes International Publication. The followup and service was really great.Patent is successfully granted in mentioned duration. your assistance  and help were invaluable for my career. Your help is very excellent throughout the entire process.",
                            "rating" => 5,  
                        ],
                          // Testimonilals -16
                        [
                            "image" => "usericon.png",
                            "titel" => "book",
                            "author" => "Padmaja c ",
                            "designation" => "Assistant Professor",
                            "department" => "  Computer Applications ",
                            "college" => "Acharya Institute of Graduate Studies ",
                            "location" => "Bangalore, India",
                            "review" => " I would like to express my sincere gratitude for the opportunity to contribute a chapter to the book Innovation in Machine Learning. It is a great honor to have my work included alongside such insightful and inspiring research contributions.",
                            "rating" => 5,  
                        ],



                    ];

                    foreach ($testimonials as $t) {
                        echo '<div class="testimonial-card">';
                        echo '<div class="flex items-start mb-3">';
                        echo '<img src="assets/img/testimonials/' . $t["image"] . '" alt="' . $t["author"] . '" class="w-24 h-24 rounded-3 mr-3 border border-gray-300 shadow-sm">';
                        echo '<div class="flex-1 min-w-0">';
                        echo '<p class=" text-xs font-semibold text-gray-800 truncate"><i class="fas fa-book-open text-sky-500 mr-1"></i>'. $t["titel"] . '</p>';
                        echo '<p class="text-base font-semibold text-gray-800 truncate">' . $t["author"] . '</p>';
                        echo '<p class="text-xs text-gray-500 truncate"><i class="fa-solid fa-building-user text-green-300 mr-1"></i>' . $t["department"] . '</p>';
                        echo '<p class="text-xs text-gray-500 truncate"><i class="fa-solid fa-user-gear text-pink-500 mr-1"></i>' . $t["designation"] . '</p>';
                        echo '<p class="text-xs text-gray-500 truncate"><i class="fa-solid fa-school text-sky-300 mr-1"></i>' . $t["college"] . '</p>';
                        if (!empty($t["location"])) {
                            echo '<p class="text-xs text-gray-500 truncate"><i class="fas fa-map-marker-alt text-orange-400 mr-1"></i>' . $t["location"] . '</p>';
                        }
                        echo '</div>';
                        echo '</div>';
                        echo '<p class="text-sm text-orange-600 font-semibold mb-2">Testimonial</p>';
                        echo '<p class="text-sm text-gray-700 mb-3 flex-grow review-content text-justify">' . substr($t["review"], 0, 250) . '...</p>';
                        echo '<div class="text-orange-400 text-sm">';
                        for ($i = 0; $i < $t["rating"]; $i++) echo '★';
                        for ($i = $t["rating"]; $i < 5; $i++) echo '☆';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <button class="slider-nav prev" id="prevBtn">
                <i class="fas fa-chevron-left text-gray-700"></i>
            </button>
            <button class="slider-nav next" id="nextBtn">
                <i class="fas fa-chevron-right text-gray-700"></i>
            </button>
        </div>

        <!-- Full Review Modal -->
        <div id="testimonialModal" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-lg shadow-xl p-6 relative max-w-md w-full mx-4 max-h-[90vh] overflow-y-auto">
                <button id="closeModal" class="absolute top-2 right-2 text-gray-700 hover:text-red-600 text-2xl">&times;</button>
                <p id="modalReview" class="text-base text-gray-800 mb-4"></p>
                <div id="modalAuthor" class="text-sm text-gray-600 text-left font-medium"></div>

            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const sliderTrack = document.getElementById('sliderTrack');
                const prevBtn = document.getElementById('prevBtn');
                const nextBtn = document.getElementById('nextBtn');
                const cards = document.querySelectorAll('.testimonial-card');
                const cardCount = cards.length;
                const cardWidth = cards[0].offsetWidth + 20; // card width + margin
                let currentPosition = 0;
                let autoSlideInterval;
                const slideDuration = 3000; // 3 seconds
                let isDragging = false;
                let startPos = 0;
                let currentTranslate = 0;
                let prevTranslate = 0;
                let animationID;
                let touchStartX = 0;
                let touchCurrentX = 0;

                // Calculate how many cards can fit in the viewport
                function getVisibleCards() {
                    const containerWidth = document.querySelector('.slider-container').offsetWidth;
                    return Math.min(Math.floor(containerWidth / cardWidth), cardCount);
                }

                let visibleCards = getVisibleCards();
                let maxPosition = cardCount - visibleCards;

                // Initialize slider
                updateSlider();
                startAutoSlide();

                // Handle window resize
                function handleResize() {
                    visibleCards = getVisibleCards();
                    maxPosition = Math.max(0, cardCount - visibleCards);
                    if (currentPosition > maxPosition) {
                        currentPosition = maxPosition;
                    }
                    updateSlider();
                }

                window.addEventListener('resize', handleResize);

                // Previous button click
                prevBtn.addEventListener('click', () => {
                    resetAutoSlide();
                    if (currentPosition > 0) {
                        currentPosition--;
                        updateSlider();
                    } else {
                        // Loop to end if at start
                        currentPosition = maxPosition;
                        updateSlider();
                    }
                });

                // Next button click
                nextBtn.addEventListener('click', () => {
                    resetAutoSlide();
                    if (currentPosition < maxPosition) {
                        currentPosition++;
                        updateSlider();
                    } else {
                        // Loop to start if at end
                        currentPosition = 0;
                        updateSlider();
                    }
                });

                // Update slider position and button states
                function updateSlider() {
                    sliderTrack.style.transform = `translateX(-${currentPosition * cardWidth}px)`;
                    updateButtonStates();
                }

                function updateButtonStates() {
                    prevBtn.classList.toggle('disabled', currentPosition === 0);
                    nextBtn.classList.toggle('disabled', currentPosition >= maxPosition);
                }

                // Auto slide functionality
                function startAutoSlide() {
                    autoSlideInterval = setInterval(() => {
                        if (currentPosition < maxPosition) {
                            currentPosition++;
                        } else {
                            currentPosition = 0; // Loop back to start
                        }
                        updateSlider();
                    }, slideDuration);
                }

                function resetAutoSlide() {
                    clearInterval(autoSlideInterval);
                    startAutoSlide();
                }

                // Pause auto slide on hover
                const sliderContainer = document.querySelector('.slider-container');
                sliderContainer.addEventListener('mouseenter', () => {
                    clearInterval(autoSlideInterval);
                });

                sliderContainer.addEventListener('mouseleave', () => {
                    startAutoSlide();
                });

                // Touch and drag functionality for mobile
                sliderTrack.addEventListener('touchstart', touchStart);
                sliderTrack.addEventListener('touchmove', touchMove);
                sliderTrack.addEventListener('touchend', touchEnd);

                sliderTrack.addEventListener('mousedown', dragStart);
                sliderTrack.addEventListener('mousemove', drag);
                sliderTrack.addEventListener('mouseup', dragEnd);
                sliderTrack.addEventListener('mouseleave', dragEnd);

                function touchStart(e) {
                    touchStartX = e.touches[0].clientX;
                    startPos = currentPosition;
                    isDragging = true;
                    clearInterval(autoSlideInterval);
                    animationID = requestAnimationFrame(animation);
                }

                function touchMove(e) {
                    if (!isDragging) return;
                    touchCurrentX = e.touches[0].clientX;
                    const diff = touchStartX - touchCurrentX;
                    if (Math.abs(diff) > 10) {
                        e.preventDefault();
                    }
                    currentTranslate = startPos * cardWidth + (touchStartX - touchCurrentX);
                    setSliderPosition();
                }

                function touchEnd() {
                    if (!isDragging) return;
                    isDragging = false;
                    cancelAnimationFrame(animationID);

                    const movedBy = touchCurrentX - touchStartX;

                    if (movedBy < -50 && currentPosition > 0) {
                        // Swipe left - move to previous
                        currentPosition--;
                    } else if (movedBy > 50 && currentPosition < maxPosition) {
                        // Swipe right - move to next
                        currentPosition++;
                    }

                    updateSlider();
                    startAutoSlide();
                }

                function dragStart(e) {
                    startPos = currentPosition;
                    currentTranslate = startPos * cardWidth;
                    prevTranslate = currentTranslate;
                    isDragging = true;
                    startPos = e.clientX;
                    clearInterval(autoSlideInterval);
                    animationID = requestAnimationFrame(animation);
                }

                function drag(e) {
                    if (!isDragging) return;
                    const currentPos = e.clientX;
                    currentTranslate = prevTranslate + (startPos - currentPos);
                    setSliderPosition();
                }

                function dragEnd() {
                    if (!isDragging) return;
                    isDragging = false;
                    cancelAnimationFrame(animationID);

                    const movedBy = currentTranslate - (currentPosition * cardWidth);

                    if (movedBy < -50 && currentPosition > 0) {
                        currentPosition--;
                    } else if (movedBy > 50 && currentPosition < maxPosition) {
                        currentPosition++;
                    }

                    updateSlider();
                    startAutoSlide();
                }

                function animation() {
                    setSliderPosition();
                    if (isDragging) requestAnimationFrame(animation);
                }

                function setSliderPosition() {
                    sliderTrack.style.transform = `translateX(-${currentTranslate}px)`;
                }

                // Modal logic
                const modal = document.getElementById('testimonialModal');
                const modalReview = document.getElementById('modalReview');
                const modalAuthor = document.getElementById('modalAuthor');
                const closeModal = document.getElementById('closeModal');

                cards.forEach(card => {
                    card.addEventListener('click', () => {
                        const review = card.querySelector('.review-content').textContent.replace('...', '').trim();
                        const name = card.querySelector('p.text-base').textContent.trim();
                        const college = card.querySelector('p:nth-of-type(4)').textContent.replace('🏫', '').trim();
                        const dept = card.querySelector('p:nth-of-type(2)').textContent.replace('🏛️', '').trim();
                        const designation = card.querySelector('p:nth-of-type(3)').textContent.replace('👨‍💼', '').trim();

                        modalReview.textContent = review;
                        modalAuthor.innerHTML = `
                            <p class="font-semibold text-orange-600">Name : ${name}</p>
                            <p> Designation : ${designation}</p>
                            <p> Department : ${dept}</p>
                            <p> College : ${college}</p>
                        `;
                        modal.classList.remove('hidden');
                        document.body.style.overflow = 'hidden';
                    });
                });

                closeModal.addEventListener('click', () => {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                });

                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        modal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }
                });

                // Clean up on unmount
                window.addEventListener('beforeunload', () => {
                    clearInterval(autoSlideInterval);
                    cancelAnimationFrame(animationID);
                });
            });
        </script>
    </div>
</body>

</html>
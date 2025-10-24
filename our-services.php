<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Services</title>
    <script src="https://kit.fontawesome.com/3708edbb88.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .mission-vision-style-one-area {
            padding: 60px 0;
        }
        
        .features h2 {
            color: #2d3748;
            margin-bottom: 40px;
            position: relative;
        }
        
        .features h2::after {
            content: '';
            display: block;
            width: 80px;
            height: 3px;
            background: #f97316;
            margin: 15px auto 0;
        }
        
        .feature-item {
            background:#E5E7EB;
            border-radius: 10px;
            padding: 30px 25px;
            margin: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: auto;
            display: flex;
            flex-direction: column;
        }
        
        .feature-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .feature-item i {
            font-size: 2rem;
            color:rgb(252, 38, 84);
            margin-bottom: 20px;
        }
        
        .feature-item h3 {
            color: #2d3748;
            font-size: 1.25rem;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .feature-item p {
            color: #4a5568;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 0;
            flex-grow: 1;
        }
        
        @media (max-width: 992px) {
            .feature-item {
                padding: 25px 20px;
            }
        }
        
        @media (max-width: 768px) {
              .feature-item {
            background:#E5E7EB;
            border-radius: 10px;
            padding: 10px 10px;
            margin: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .feature-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .feature-item i {
            font-size: 2rem;
            color:rgb(252, 38, 84);
            margin-bottom: 20px;
        }
        
        .feature-item h3 {
            color: #2d3748;
            font-size: 1.25rem;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .feature-item p {
            color: #4a5568;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 0;
            flex-grow: 1;
        }
            .feature-item {
                margin: 10px 0;
            }
            
            .features h2 {
                margin-bottom: 30px;
            }
        }
    </style>
</head>
<body>
<div class="mission-vision-style-one-area overflow-hidden bg-gray-200">
    <div class="container mx-auto  lg:px-4 sm:px-1">
        <div class="features">
            <h2 class="text-center text-3xl font-bold mb-4">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Service 1 -->
                <div class="feature-item">
                    <i class="fa-solid fa-pen-nib"></i>
                    <h3 class="font-semibold">Textbook Publications</h3>
                    <p class="text-justify text-sm sm:text-base">We publish high-quality academic textbooks, guiding authors through every stage — from editing to printing — to deliver impactful educational resources, with promotional support on platforms like Amazon and Flipkart.</p>
                </div>
                
                <!-- Service 2 -->
                <div class="feature-item">
                    <i class="fa-solid fa-handshake"></i>
                    <h3 class="font-semibold">Patent Grant Support</h3>
                    <p class="text-justify text-sm sm:text-base">We guide you through drafting, filing, and securing patents to protect and globally recognize your innovative ideas.</p>
                </div>
                
                <!-- Service 3 -->
                <div class="feature-item">
                    <i class="fa-solid fa-pen"></i>
                    <h3 class="font-semibold">Edited Book Chapters</h3>
                    <p class="text-justify text-sm sm:text-base">We offer complete support for book chapters, from content curation to technical editing, ensuring top academic standards.</p>
                </div>
                
                <!-- Service 4 -->
                <div class="feature-item">
                    <i class="fa-solid fa-passport"></i>
                    <h3 class="font-semibold">Ph.D. Assistance</h3>
                    <p class="text-justify text-sm sm:text-base">We support researchers in their Ph.D. journeys including research guidance, thesis editing, and publication assistance.</p>
                </div>
                
                <!-- Service 5 -->
                <div class="feature-item">
                    <i class="fa-solid fa-laptop"></i>
                    <h3 class="font-semibold">SCI & Scopus Publications</h3>
                    <p class="text-justify text-sm sm:text-base">We support publishing in SCI and Scopus journals, ensuring quality compliance and alignment with top academic standards.</p>
                </div>
                
                <!-- Service 6 -->
                <div class="feature-item">
                    <i class="fa-solid fa-list"></i>
                    <h3 class="font-semibold">Educational Events Organizing</h3>
                    <p class="text-justify text-sm sm:text-base">We organize various educational programs like Faculty Development Programs, workshops, and seminars to help educators and researchers gain knowledge, develop new skills, and promote innovation.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
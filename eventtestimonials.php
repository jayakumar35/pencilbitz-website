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
            padding: 0px;
        }

        .slider-container {
            overflow: hidden;
            position: relative;
        }

        .slider-track {
            display: flex;
            transition: transform 0.6s cubic-bezier(0.22, 1, 0.36, 1);
            padding: 5px 0;
        }

        .testimonial-card {
            width: 300px;
            min-width: 300px;
            height: 400px;
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
            left: 0;
        }

        .slider-nav.next {
            right: 0;
        }

        .slider-nav.disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: translateY(-50%);
        }

        .slider-dots {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .slider-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #ccc;
            margin: 0 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .slider-dot.active {
            background: #f97316;
            transform: scale(1.2);
        }

        .review-content {
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: #e2e8f0 transparent;
            flex-grow: 1;
            margin: 10px 0;
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

        .college-logo {
            width: 60px;
            height: 60px;
            object-fit: contain;
            margin: 0 auto 10px;
            border-radius: 50%;
            border: 1px solid #e2e8f0;
            padding: 5px;
            background: white;
        }

        .college-name {
            font-weight: 600;
            color: #2d3748;
            text-align: center;
            margin-bottom: 5px;
            font-size: 15px;
        }

        .professor-name {
            font-weight: 600;
            color: #f97316;
            text-align: center;
            margin-bottom: 3px;
            font-size: 14px;
        }

        .designation {
            font-size: 12px;
            color: #4a5568;
            text-align: center;
            margin-bottom: 10px;
            font-style: italic;
        }

        @media (max-width: 768px) {
            .testimonial-slider {
                padding: 0px;
            }

            .testimonial-card {
                width: 280px;
                min-width: 280px;
                height: 320px;
            }

            .slider-nav {
                width: 36px;
                height: 36px;
            }
        }

        @media (max-width: 480px) {
            .testimonial-slider {
                padding: 0px;
            }

            .testimonial-card {
                width: 260px;
                min-width: 260px;
                height: 300px;
                margin: 0 8px;
            }

            .slider-nav {
                width: 22px;
                height: 22px;
            }
        }
    </style>
</head>

<body class="bg-gray-200">
    <div class="py-12 bg-gray-200 px-2 sm:px-1 lg:px-3">
        <div class="text-center mb-10">
            <h3 class="text-3xl md:text-4xl font-semibold text-gray-800 mb-2">what institution say about pencilbitz</h3>
            <div class="w-20 h-1 bg-orange-500 mx-auto"></div>
        </div>

        <!-- Testimonial Slider -->
        <div class="testimonial-slider">
            <div class="slider-container">
                <div class="slider-track" id="sliderTrack">
                    <?php
                    $testimonials = [
                       // New Testimonilals October
                         //Testmonilals -10
                       [
                            "image" => "https://www.admissionduniya.com/assets/college/logo_1745100414_105.png",
                            "author" => " Mrs.Leena J P",
                            "department" => " English ",
                            "designation" => "Professor",
                            "college" => "BGS First Grade College, Adichunchanagiri University",
                            "location" => "Mysore, Karnataka",
                            "review" => "My deep appreciation to the FDP organizers for putting together an exceptional learning experience. Your tireless efforts, coordination, and attention to detail made this program a success.Very happy to be the part of this.....And also thankful for the immediate corrections and responses given by all the  team......🙏 ",
                            "rating" => 5,
                       ],
                        //Testmonilals -9
                       [
                            "image" => "https://www.skdc.edu.in/images/skit-logo.png",
                            "author" => "Kannan D. S., M.C.A., M.Phil.",
                            "department" => "Department of Computer Science ",
                            "designation" => "HOD ",
                            "college" => " Sri Krishna Degree College",
                            "location" => "Bengaluru",
                            "review" => "“Empowering Faculty with AI for Effective Ph.D. Research and Paper Publications”It was a privilege to have Dr. Nidhi Mishra as the Resource Person for our FDP.Her insightful and engaging session was truly inspiring and highly appreciated by all. 👏Special thanks to Pencil Britz for their wonderful support and association — and heartfelt appreciation to Regan and Revathi for their excellent coordination throughout. ",
                            "rating" => 5,
                       ],
                        //Testmonilals -8
                       [
                            "image" => "https://s3.collegedisha.com/collegedisha/institutes/college/logo/Sanskar_College_Of_Pharmacy_And_Research_logo_1.webp",
                            "author" => "MR. SUMIT KUMAR SAHA",
                            "department" => "Computer Engineering ",
                            "designation" => "Associate Professor",
                            "college" => " Sanskar College of Engineering and Technology",
                            "location" => "Ghaziabad . Uttar Pradesh",
                            "review" => "On behalf of Sanskar Educational Group, heartfelt thanks to Ms. S. Suruthi, Assistant Professor, Department of CSE, K.S.R. College of Engineering, for delivering an inspiring session in the One-Day FDP on “Generative AI in Teaching. Your insights on AI’s role in transforming education were truly enlightening. Special appreciation to Book Bytes International Publications and the Pencilbitz team for their excellent coordination and support in making the program a great success.",
                            "rating" => 5,
                       ],
                        //Testmonilals -7
                       [
                            "image" => "https://tse2.mm.bing.net/th/id/OIP.CrzBjSVYx7NMvkQHKmHonAHaHa?cb=12ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3",
                            "author" => "Mr. C SURESH",
                            "department" => " Electronics Engineering ",
                            "designation" => "HOD",
                            "college" => " Jayalakshmi Institute of Technology",
                            "location" => " Dharmapuri, Uttar Pradesh",
                            "review" => "The one-day online FDP on “AI and IoT for Smart Integration of Renewable Energy in Smart Grid” held on 11.10.2025 was insightful and engaging. Prof. S. Suruthi from KSR College of Engineering delivered an excellent session on AI and IoT applications in smart grids. The well-organized program provided valuable learning for faculty to enhance their teaching and research.",
                            "rating" => 5,
                       ],
                         //Testmonilals -6
                       [
                            "image" => "https://www.kgi.edu.in/assets/images/fav.png",
                            "author" => "  Prof.  Maria M | Mala J",
                            "department" => " Commerce",
                            "designation" => "Associate Professor",
                            "college" => " Koshys Institute of Management Studies ",
                            "location" => " Tirupati Andhra pradesh ",
                            "review" => "Mam, it was a good session, thanks to you and the entire team members, Pencilbitz for your encouragement, continuous follow up for conducting such a wonderful sessions.  My only suggestion is that to check the audiblility. In today’s session there was audiblility problem.",
                            "rating" => 4,
                       ],
                         //Testmonilals -5
                       [
                            "image" => "https://www.mymathews.com/media/institute_logo/Chadalawada_Ramanamma_Engineering_College_LOGO.JPG",
                            "author" => " Dr.M.Vijaya Laxmi",
                            "department" => "ECE ",
                            "designation" => "associate Professor",
                            "college" => " Chadalawada Ramanamma Engineering College ",
                            "location" => " Tirupati Andhra pradesh ",
                            "review" => "Mam, it was a good session, thanks to you and the entire team members, Pencilbitz for your encouragement, continuous follow up for conducting such a wonderful sessions.  My only suggestion is that to check the audiblility. In today’s session there was audiblility problem.",
                            "rating" => 4,
                       ],
                       [
                            "image" => "https://jyotigarde-27.github.io/Portfolio/img/DYPLogo.jpg",
                            "author" => " Archana Bansod ",
                            "department" => "computer engineering ",
                            "designation" => "associate Professor",
                            "college" => "Y.B.Patil Polytechnic, Akurdi ",
                            "location" => " pune maharashtra ",
                            "review" => "We truly appreciate the meticulous planning, smooth coordination, and high-quality execution by Pencilbitz  team and Reva  Ma’am for continuous coordination, guidance, and dedicated support throughout the successful conduction of the Faculty Development Program , which ensured the success of the FDP.",
                            "rating" => 4,
                       ],
                         //Testmonilals -2
                       [
                            "image" => "https://tse4.mm.bing.net/th/id/OIP.WXruj1_RjEeeUsVnedkfKQAAAA?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3",
                            "author" => "D.K.Kalai Vani | Mr.J.Jerin | Mr.K.Arun",
                            "department" => "Computer Science and Engineering ",
                            "designation" => "AP & Head   ,",
                            "college" => "Udaya School of Engineering ",
                            "location" => " Vellamodi Kanyakumari ",
                            "review" => "The FDP on “Federated Learning and Privacy in AI” was highly informative, offering clear insights into decentralized model training and data privacy. Dr. N. Devaram explained concepts, challenges, and real-world applications engagingly. Overall, it was a well-organized and enriching program—thank you for the valuable session.",
                            "rating" => 5,
                       ],
                       //Testmonilals -1
                       [
                            "image" => "https://noticebard.com/wp-content/uploads/2022/08/KBTCOE-Nashik-conference-2021.jpg",
                            "author" => " Mr. Rahul Tryambak Binnar,Mr. Sagar Jagannath Karve",
                            "department" => "Head, Department of Management",
                            "designation" => "Mathematic  ,",
                            "college" => "Maratha Vidya Prasarak Samaj's Arts, Commerce and Science College, Nandgaon",
                            "location" => " Nandgaon, Nashik",
                            "review" => "I would like to extend my sincere appreciation to the Pencil Bitz team for their excellent efforts in organizing the Faculty Development Program (FDP). The event was well-structured, informative, and engaging throughout.
                                         The team's professionalism, attention to detail, and commitment to providing a meaningful learning experience were clearly evident. From smooth coordination to high-quality content delivery, every aspect of the FDP reflected the team’s dedication and passion.
                                         Thank you once again for your hard work and for creating such a valuable platform for professional growth.",
                            "rating" => 5,
                       ],


                        // Testimonilals -1
                        [
                            "image" => "https://yt3.ggpht.com/ytc/AKedOLSeteDeObM31r-P8-o6izUGZgiLLU8KZNsG3tIFjw=s900-c-k-c0x00ffffff-no-rj",
                            "author" => "Nimy K C",
                            "department" => "associate Professor",
                            "designation" => "Computer Science and Engineering,",
                            "college" => "Bharathamatha College of Arts & Sci",
                            "location" => "Palakkad, Kerala",
                            "review" => "I would like to extend my heartfelt appreciation to the entire organizing team for successfully coordinating and conducting such a well-structured and insightful program. The schedule was well-managed, with timely sessions and clear communication throughout. The invited speakers were highly knowledgeable and delivered their content with clarity and Thank you pencil Bitz team.",
                            "rating" => 5,
                        ],
                        // Testimonilals -2
                        [
                            "image" => "https://is1-ssl.mzstatic.com/image/thumb/Purple211/v4/55/26/db/5526db28-3f5c-57d2-8c12-6de4e6bea59b/AppIcon-1x_U007emarketing-0-11-0-85-220-0.png/512x512bb.jpg",
                            "author" => "Bhagavathi Anusiya A",
                            "department" => "associate Professor",
                            "designation" => "English(S&H),",
                            "college" => "Adithya Institute of Technology",
                            "location" => "Coimbatore",
                            "review" => "I sincerely convey my heartfelt thank to the PencilBits team and the event manager for their exceptional efforts in organizing the  Faculty Development Program (FDP) on Strategies for publishing Scopus IndexedJournals..The event was meticulously planned and executed, providing a valuable learning experience for all.. Thank you so much, team Pencilbitzs. It's amazing the way organised and response our queries Thank you so much...",
                            "rating" => 4,
                        ],
                        //Testimonilals -3
                        [
                            "image" => "https://tse2.mm.bing.net/th/id/OIP.qUhEAp8sqqN71OK7tV4myAAAAA?rs=1&pid=ImgDetMain&o=7&rm=3",
                            "author" => "Dr Shaik Basheera",
                            "designation" => " ECE",
                            "department" => "HOD",
                            "college" => "Sri Eshwar College of Engineering",
                            "location" => "Coimbatore",
                            "review" => "From Eswar College of engineering, here i am giving thr feedback the session is good and informative, cooperation till now is very good. I thank pencil bitz for their cooperation.",
                            "rating" => 5,
                        ],
                        // Testimonilals -4
                        [
                            "image" => "https://media-exp1.licdn.com/dms/image/C510BAQG1YEpaR4ov-w/company-logo_200_200/0/1570867881447?e=2159024400&v=beta&t=3BpwqE9phdKhbNO7Q4cIbCCI45GqCJVpbXvNYvWoG4k",
                            "author" => "Dr.R.Megala",
                            "designation" => " Assistant Professor",
                            "department" => "Biotechnology",
                            "college" => "Hindusthan College of Arts and Science",
                            "location" => "Coimbatore",
                            "review" => "On behalf of Hindusthan College of Arts and Science, I wish to extend our sincere thanks and appreciation to PENCIL BITZ for the excellent organization and delivery of Resource person for the Faculty Development Programme on “AI Tools for Teaching and Academic Writing”, conducted on 21st June 2025.
                                         The FDP was very well-structured, informative, and engaging. The sessions provided valuable insights into the practical application of Artificial Intelligence in teaching and academic writing, which our faculty found highly relevant and impactful. 
                                         We truly appreciate the meticulous planning, prompt communication, and technical support provided by your team throughout the process. Your dedication ensured that the event was conducted smoothly and successfully.
                                        We look forward to more such meaningful collaborations with PENCIL BITZ in the future.",
                            "rating" => 5,
                        ],

                        // Testimonilals -5
                        [
                            "image" => "https://tse3.mm.bing.net/th/id/OIP.DBa54wKEuzy9mgIF7__i4AHaHa?rs=1&pid=ImgDetMain&o=7&rm=3",
                            "author" => "Prof. Jabeen Taj MK",
                            "designation" => "Assistant professor",
                            "department" => "MCA",
                            "college" => "Brindavan College of Engineering",
                            "location" => "Bengaluru Karnataka",
                            "review" => "We would like to extend our heartfelt gratitude to Pencilbitz and the resource person(s) for conducting an engaging and insightful Faculty Development Program (FDP) on 
                                         The session was extremely relevant and timely, providing our faculty with hands-on exposure to emerging AI tools that can be effectively integrated into the teaching-learning process. The resource person demonstrated deep expertise in the domain, and the delivery was clear, interactive, and practice-oriented. Participants appreciated the real-world examples, tool demonstrations, and the emphasis on practical applications in academic settings.",
                            "rating" => 5,
                        ],
                        // Testimonilals -6
                         [
                             "image" => "https://universitykart.b-cdn.net/Content/upload/admin/r4m2m44z.vyz.jpg",
                             "author" => "DR.S.Semmalar",
                             "designation" => "Associate Professor",
                            "department" => "ECE",
                            "college" => "Manakula Vinayagar Institute of Technology (MVIT)  ",
                            "location" => "Bengaluru, Karnataka",
                            "review" => "Thank you so much Pencilbitz team for giving me this opportunity,  the FDP was highly insightful and well-structured, offering valuable exposure to emerging trends in the field. The sessions were engaging, resourceful, and enriched our knowledge with practical applications. The expert speaker Dr. M. Vinoth and interactive discussions enhanced our understanding and encouraged collaborative learning. Overall, it was a rewarding experience that will benefit our teaching and research practices.Thank you",
                             "rating" => 4,
                         ],

                        // Testimonilals -7
                        [
                            "image" => "https://www.studyjankari.com/images/logo/81cd0709fc69912af8a89ec90d73c0d4.png",
                            "author" => "k. Gunasekaran ",
                            "designation" => "Professor ",
                            "department" => " Computer Application ",
                            "college" => "KSG College of Arts and Science",
                            "location" => "Coimbatore Tamil Nadu",
                            "review" => "I found the cybersecurity workshop to be informative and engaging, with relevant content that covered current threats and best practices. The trainer's use of real-world examples and good humor kept me interested throughout. One key takeaway for me was the importance of governance around cyber incident response and business continuity planning. I appreciated the breakout sessions, which allowed me to learn from others and think about practical applications.",
                            "rating" => 5,
                        ],
                         // Testimonilals -8
                        [
                            "image" => "https://d13loartjoc1yn.cloudfront.net/upload/institute/logo/medium/140116011648_74317_378310732265314_103373280_n.jpg",
                            "author" => " Madhushree ",
                            "designation" => "Professor ",
                            "department" => " Guest Lecturer Committee ",
                            "college" => "Sri Devaraj Urs Institute of Management,",
                            "location" => "Bangalore",
                            "review" => "Hello ma'm, I would like to thank Ms.Reshma and the Pencilbitz team for sponsoring such a wonderful session, which was very informative but a technical issue has occured at the beginning, so kindly make sure to check the Video call once from Resource Person side, apart from that everything was quite great, thanks once again to entire team",
                            "rating" => 5,
                        ],
                             // Testimonilals -9
                        [
                            "image" => "https://images.shiksha.com/mediadata/images/1596122338phpQj24eF.png",
                            "author" => "Mr. Abhishek Sharma Ph.D. (Computer Applications) ",
                            "designation" => "Research Scholar  ",
                            "department" => " Computing Sciences & Information Technology  ",
                            "college" => "Teerthanker Mahaveer University ,",
                            "location" => "Moradabad, Uttar Pradesh",
                            "review" => "I sincerely appreciate Pencil Bitz Organization for organizing an insightful Faculty Development Program on Generative AI. The session was engaging, blending concepts with practical demonstrations. Complex topics were explained clearly, supported by real-world applications, case studies, and interactive Q&A. Smooth organization, effective communication, and excellent technical arrangements made the program highly impactful.",
                            "rating" => 5,
                        ],
                              // Testimonilals -10
                        [
                            "image" => "https://targetstudy.com/files/img/2/41488/L_12087.gif",
                            "author" => " Dr. D Vasudha ",
                            "designation" => " professor",
                            "department" => " Computing Sciences ",
                            "college" => "Vignan Institute of Pharmaceutical Sciences ,",
                            "location" => "Nalgonda, Telangana",
                            "review" => "The Faculty Development Program on Advanced Pedagogy in Pharmacy: Leveraging AI for Active Learning, organized by VIPT and Pencil Bitz, was highly enriching. Expert sessions blended theory with real applications, showcasing AI-driven teaching methods. Smooth coordination, interactive activities, and live demonstrations made it impactful, equipping faculty with innovative strategies to enhance learning outcomes.",
                            "rating" => 5,
                        ],
                         // Testimonilals -11
                        [
                            "image" => "https://www.kgi.edu.in/assets/images/fav.png",
                            "author" => "  Prof Veeramuthu P ",
                            "designation" => " professor",
                            "department" => " Computing Sciences ",
                            "college" => "Koshys Institute of Management Studies",
                            "location" => "Bengaluru, Karnataka",
                            "review" => "Hi Team,The event was very well organized, with smooth coordination and timely execution. The resource persons delivered their topics effectively, and the participants were given good opportunities for interaction. Overall, it was a successful program, and I appreciate the pencil bitz team’s efforts in making it meaningful and impactful, Thankyou All",
                            "rating" => 4,
                        ],
                            // Testimonilals -12
                            [
                                "image" => "https://www.mymathews.com/media/institute_logo/Muthayammal_Logo.jpg",
                                "author" => " Ramesh.G ",
                                "designation" => " Associate Professor",
                                "department" => " EEE",
                                "college" => "Muthayammal Polytechnic Institution ,",
                                "location" => "Namakkal, Tamil Nadu",
                                "review" => "The Faculty Development Program was highly informative and well-structured. The sessions were engaging, practical, and provided valuable insights into the latest trends and innovative practices. The resource persons delivered the content with clarity and encouraged interactive participation, which enhanced the overall learning experience.Overall, the FDP was very beneficial, motivating, and has created a positive impact on our professional growth. I sincerely appreciate the organizers and resource persons for their efforts in conducting such a meaningful program",
                                "rating" => 5,
                            ],
                        // Testimonilals -13
                        [
                            "image" => "https://tse1.mm.bing.net/th/id/OIP.JmEBEYXMU7VN3DBGI1xV2wHaGp?rs=1&pid=ImgDetMain&o=7&rm=3",
                            "author" => " Dr.T.SUNDAR ",
                            "designation" => " Associate Professor",
                            "department" => " Computer Science",
                            "college" => "CHANDRASEKHARENDRA SARASWATHI VISWA MAHAVIDYALAYA ,",
                            "location" => "Kanchipuram, Tamil Nadu",
                            "review" => "We sincerely appreciate the efforts of the Pencilbitz team in organizing the One-Day Online FDP on “Smart City Technologies and IoT.” The coordination, timely communication, and technical support provided were excellent and ensured the smooth conduct of the program.Special thanks to Mr. Karthikeyan V.S. and Ms. Revathi P. for their dedicated involvement, professionalism, and constant assistance throughout the event. Your contribution played a vital role in making the FDP successful.We look forward to continued collaboration with Pencilbitz for future academic and professional development programs.",
                            "rating" => 5,
                        ],
                        // Testimonilals -14
                        [
                            "image" => "https://th.bing.com/th/id/R.1ee8927d7b1f2fc029042f17320cbe68?rik=izSVssTJ%2bFxWfw&riu=http%3a%2f%2fwww.vicas.org%2fimg%2flogo.png&ehk=sjCTNUe5EF8sgrqvldxmGKWgevpcTkq%2bCeVmAvne4T0%3d&risl=&pid=ImgRaw&r=0",
                            "author" => " Mrs.S.Vishalatchi ",
                            "designation" => " HOD",
                            "department" => "AI&DS",
                            "college" => "Vivekanandha Arts and Science College for Women,",
                            "location" => "Sankagiri, Tamil Nadu",
                            "review" => "On behalf of Vivekanandha Arts and Science College and The Department of Artificial Intelligence and Data Science, We take this opportunity to extend our gratitude to Pencil Bitz for their outstanding contribution and unwavering support towards the successful execution of the National Level Faculty Development Programme.Your team's professionalism, creativity, and technical expertise added remarkable value to the event. The seamless coordination, high-quality deliverables, and commitment to excellence greatly enhanced the overall impact and reach of the programme.We deeply appreciate your partnership in this academic initiative and look forward to continued collaboration in the future.",
                            "rating" => 4,
                        ],
                        // Testimonilals -15
                        [
                            "image" => "https://tse1.mm.bing.net/th/id/OIP.Jb-3XeXWjlIKVUL5SBZprQAAAA?rs=1&pid=ImgDetMain&o=7&rm=3",
                            "author" => " Saikumar Reddy.S ",
                            "designation" => " Associate Professor",
                            "department" => "CSE",
                            "college" => "SCSVMV Deemed to be University ,",
                            "location" => ", Kanchipuram, Tamil Nadu",
                            "review" => "The session was excellent, with highly informative and well-structured content. Its relevance to both academia and industry was very high. A suggestion is to include more advanced FDPs/workshops on XAI frameworks with hands-on sessions.",
                            "rating" => 5,
                        ],
                        // Testimonilals -16
                        [
                            "image" => "https://gyaanarth.com/wp-content/uploads/2022/07/MREC_logo-975x1024.png",
                            "author" => " Dr.J.Gladson Maria Britto ",
                            "designation" => " Associate Professor",
                            "department" => "CSE",
                            "college" => "Malla Reddy college of engineering and technology",
                            "location" => "Telangana",
                            "review" => "I would like to sincerely appreciate Pencilbizts organization and the dedicated event team led by Revathi ma’am for the smooth and efficient conduct of the Online Faculty Development Program on Quantum Computing. The session was excellently planned and executed without any technical difficulties, ensuring that participants could engage and learn seamlessly. The coordination, communication, and support provided throughout the FDP made the entire program highly effective and enriching.Heartfelt thanks and congratulations to the team pencilbizts",
                            "rating" => 5,
                        ],
                        // Testimonilals -17
                        [
                            "image" => "https://www.joonsquare.com/usermanage/image/business/krishnasamy-college-of-engineering-and-technology-cuddalore-15872/krishnasamy-college-of-engineering-and-technology-cuddalore-logo.jpg",
                            "author" => "Gopal E ",
                            "designation" => " Professor",
                            "department" => " Mechanical Engineering",
                            "college" => "Krishnasamy College of Engineering and Technology",
                            "location" => "Cuddalore, Tamil Nadu",
                            "review" => "The program covered key aspects of digital twin technologies in mechanical system with insightful sessions by expert. 
                                         The topics were relevant and provided valuable insights applicable to twin technologies Sessions was particularly engaging and informative.
                                         The organization was commendable, with good arrangements  Resource materials provided were useful.
                                         Suggestions: More hands-on sessions or case studies could further enhance the learning experience.
                                         Overall, the FDP was enriching and provided a good platform for networking and learning. I appreciate the efforts of the organizers.",
                            "rating" => 5,
                        ],
                        // Testimonilals -18
                        [
                            "image" => "assets/img/saiva-bhanu-kshatriya-college.png",
                            "author" => "Dr. V.THIRUVENI",
                            "designation" => "Associate Professor",
                            "department" => "Mathematics and Convener of Research Committee",
                            "college" => "Saiva Bhanu Kshatriya College",
                            "location" => "Aruppukottai",
                            "review" => "Thank you for an incredibly insightful Faculty Development Programme.  The Resource Person brilliantly integrated traditional Research Methodology Principles with cutting-edge digital Tools and Techniques. This FDP has significantly enhanced our skills and motivated us to integrate these new approaches into our Research.
                                         The meticulous planning and smooth execution of the organizers (PencilBitz) were exceptional. The organizers deserve commendation for creating a dynamic and interactive environment that fostered deep learning.",
                            "rating" => 4,
                        ],
                        // Testimonilals -19
                        [
                            "image" => "https://tse1.mm.bing.net/th/id/OIP.s_gdimjVtMT-bbOue2gNtgAAAA?rs=1&pid=ImgDetMain&o=7&rm=3",
                            "author" => "Dr. M. Sabarish",
                            "designation" => "Associate Professor",
                            "department" => "MCA",
                            "college" => "MEASI Institute of Information Technology ",
                            "location" => "#",
                            "review" => "On behalf of MEASI Institute of Information Technology, I sincerely thank the organising team of Pencilbitz for successfully conducting this Faculty Development Programme. Your meticulous planning, seamless coordination, and dedicated efforts made this programme a valuable and enriching experience for everyone. We truly appreciate the commitment and hard work that went into making this event a grand success.'",
                            "rating" => 5,
                        ],
                        // Testimonilals -20
                        [
                            "image" => "https://www.metsengg.ac.in/assets/front/images/mets_logo.png",
                            "author" => "Rekha M",
                            "designation" => " Professor & Head",
                            "department" => " AI and Data Science",
                            "college" => "MET'S School of Engineering",
                            "location" => "Thrissur, Kerala",
                            "review" => "It was a very useful session. The resource persons handled the session very effectively with proper materials and lecturing. Thanks a lot Pencilbitz team for arranging such a session for us. Hope we can organize more sessions in the future. Thank you",
                            "rating" => 5,
                        ],
                        // Testimonilals -21
                        [
                            "image" => "https://th.bing.com/th/id/R.63ba3025f3a244d19f3a39f5b1dd0784?rik=nC0qdxaMkvyXJA&riu=http%3a%2f%2fgascmlmd.in%2fimages%2ftngovt.png&ehk=GZEJHxAC3CLKTmcKK2hc9Wfd6kAGvV9Z8CWq3KaWD5U%3d&risl=&pid=ImgRaw&r=0",
                            "author" => " Dr.S.Uma",
                            "designation" => "Associate Professor & Head",
                            "department" => "PG Department of Computer Applications",
                            "college" => "Government Arts and Science College",
                            "location" => "Tirupattur, Tamil Nadu",
                            "review" => "The event was well organized and executed smoothly. The session was  highly informative and engaging. Coordination and arrangements were done in a professional manner.  It was a valuable and enriching experience.",
                            "rating" => 5,
                        ],
                        // Testimonilals -22
                        [
                            "image" => "https://akm-img-a-in.tosshub.com/sites/resources/campus/prod/img/logo/2023/10/logo392182759981.png",
                            "author" => " Dr A. Srikanth babu",
                            "designation" => "Associate Professor & Head",
                            "department" => "Computer Science and Engineering",
                            "college" => "priyadarshini institute of technology and science",
                            "location" => "Andhra pradesh",
                            "review" => "Data privacy in AI and machine learning is a critical concern for organizations, as these technologies require vast amounts of data to function effectively this is usefull to faculty in present days good session for all the staff , research scalars students, good team work, resource person explanation is very skillfull",
                            "rating" => 4,
                        ],
                        // Testimonilals -23
                        [
                            "image" => "#",
                            "author" => "  Dr S.D.Jayavathi",
                            "designation" => "Associate Professor & Head",
                            "department" => "Artificial Intelligence and Data Science Department ",
                            "college" => "J.P. College of Engineering",
                            "location" => " Tenkasi, Tamil Nadu",
                            "review" => "We the Artificial Intelligence and Data Science Department, J.P. College of Engineering , Tenkasi extend our sincere appreciation to Pencilbitz for organizing the one-day Faculty Development Program on ‘Generative AI in Teaching’. The meticulous planning, smooth coordination, and professional execution made the event highly productive and engaging.We also express our heartfelt thanks to the resource person Mrs.B.Mythreyee, Assistant Professor, Department of Computer Applications, Sona College of Arts and Science, Salem for her valuable contribution and insightful deliverance. Her expertise, clarity, and interactive approach enriched the participants with practical knowledge and inspired new perspectives in teaching and learning.Overall, the program was highly beneficial, and we look forward to more such impactful initiatives in the future. With thanks and regards,",
                            "rating" => 4,
                        ],
                        // Testimonilals -24
                        [
                            "image" => "https://tse2.mm.bing.net/th/id/OIP.AJIuMAZnJ0LQ9TCiq48FCAHaHP?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3",
                            "author" => "  Mr. Rahul Tryambak Binnar |Mr. Sagar Jagannath Karve",
                            "designation" => "Associate Professor & Head",
                            "department" => "Computer Science and Engineering",
                            "college" => "Sri Eshwar College of Engineering",
                            "location" => "Coimbatore, Tamil Nadu",
                            "review" => "On behalf of Sri Eshwar College of Engineering, I would like to extend my sincere gratitude to Pencilbitz for organizing the One-Day Online Faculty Development Programme on 'AI Tools for Teaching and Academic Writing'. The event was meticulously planned and executed, providing a valuable learning experience for all participants. The sessions were informative and engaging, covering relevant topics that are crucial in today's academic landscape. We truly appreciate the efforts of the Pencilbitz team in making this event a success and look forward to more such collaborations in the future.",
                            "rating" => 5,
                        ],
                    ];

                    foreach ($testimonials as $t) {
                        echo '<div class="testimonial-card">';
                        echo '<img src="' . $t["image"] . '" alt="' . $t["college"] . '" class="college-logo">';
                        echo '<p class="college-name">' . $t["college"] . '</p>';
                        echo '<p class="location text-center text-md text-sky-400"><i class="fas fa-map-marker-alt mr-1"></i>' .$t["location"] . '</p>';
                        echo '<p class="professor-name">' . $t["author"] . '</p>';
                        echo '<p class="designation">' . $t["designation"] . ' ' . $t["department"] . '</p>';
                        echo '<p class="review-content text-sm text-gray-700 text-justify">' . substr($t["review"], 0, 250) . '...</p>';
                        echo '<div class="text-orange-400 text-sm text-center">';
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
                <div class="text-center mb-4">
                    <img id="modalLogo" src="" alt="College Logo" class="college-logo mx-auto">
                    <h3 id="modalCollege" class="college-name"></h3>
                    <p id="modalProfessor" class="professor-name"></p>
                    <p id="modalDesignation" class="designation"></p>
                </div>
                <p id="modalReview" class="text-base text-gray-800 mb-4"></p>
                <div id="modalRating" class="text-orange-400 text-center"></div>
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
                const slideDuration = 2000; // 2 seconds
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
                const modalLogo = document.getElementById('modalLogo');
                const modalCollege = document.getElementById('modalCollege');
                const modalProfessor = document.getElementById('modalProfessor');
                const modalDesignation = document.getElementById('modalDesignation');
                const modalReview = document.getElementById('modalReview');
                const modalRating = document.getElementById('modalRating');
                const closeModal = document.getElementById('closeModal');

                cards.forEach(card => {
                    card.addEventListener('click', () => {
                        const logo = card.querySelector('img').src;
                        const college = card.querySelector('.college-name').textContent;
                        const professor = card.querySelector('.professor-name').textContent;
                        const designation = card.querySelector('.designation').textContent;
                        const review = card.querySelector('.review-content').textContent.replace('...', '').trim();
                        const ratingHTML = card.querySelector('.text-orange-400').innerHTML;

                        modalLogo.src = logo;
                        modalCollege.textContent = college;
                        modalProfessor.textContent = professor;
                        modalDesignation.textContent = designation;
                        modalReview.textContent = review;
                        modalRating.innerHTML = ratingHTML;

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
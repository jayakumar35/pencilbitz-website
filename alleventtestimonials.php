<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Testimonials</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .testimonial-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .testimonial-card:hover {
            transform: translateY(-5px);
        }
        .filter-btn.active {
            background-color: #3b82f6;
            color: white;
        }
        .star-rating {
            color: #fbbf24;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header Section -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-6">
            <h1 class="text-3xl font-bold text-gray-800 text-center">Customer Testimonials</h1>
            <p class="text-gray-600 text-center mt-2">See what our customers are saying about us</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Filter Section -->
        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Filter Testimonials</h2>
            <div class="flex flex-wrap gap-3">
                <button class="filter-btn active px-4 py-2 rounded-full border border-gray-300 hover:bg-blue-50 transition" data-filter="all">All Reviews</button>
                <button class="filter-btn px-4 py-2 rounded-full border border-gray-300 hover:bg-blue-50 transition" data-filter="5">
                    <i class="fas fa-star mr-1"></i> 5 Stars
                </button>
                <button class="filter-btn px-4 py-2 rounded-full border border-gray-300 hover:bg-blue-50 transition" data-filter="4">
                    <i class="fas fa-star mr-1"></i> 4 Stars
                </button>
                <button class="filter-btn px-4 py-2 rounded-full border border-gray-300 hover:bg-blue-50 transition" data-filter="3">
                    <i class="fas fa-star mr-1"></i> 3 Stars
                </button>
                <button class="filter-btn px-4 py-2 rounded-full border border-gray-300 hover:bg-blue-50 transition" data-filter="2">
                    <i class="fas fa-star mr-1"></i> 2 Stars
                </button>
                <button class="filter-btn px-4 py-2 rounded-full border border-gray-300 hover:bg-blue-50 transition" data-filter="1">
                    <i class="fas fa-star mr-1"></i> 1 Star
                </button>
            </div>
        </div>

        <!-- Testimonials Grid -->
        <div id="testimonials-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Testimonial cards will be dynamically inserted here -->
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button id="load-more" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-medium">
                Load More Testimonials
            </button>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2023 Company Name. All rights reserved.</p>
            <div class="mt-4 flex justify-center space-x-4">
                <a href="#" class="hover:text-blue-300">Privacy Policy</a>
                <a href="#" class="hover:text-blue-300">Terms of Service</a>
                <a href="#" class="hover:text-blue-300">Contact Us</a>
            </div>
        </div>
    </footer>

    <script>
        // Sample testimonials data (in a real application, this would come from a database)
        const testimonials = [
            {
                id: 1,
                name: "John Smith",
                rating: 5,
                text: "This service exceeded my expectations! The team was professional and delivered results faster than I anticipated. I would definitely recommend them to anyone looking for quality work.",
                date: "2023-05-15",
                avatar: "https://randomuser.me/api/portraits/men/32.jpg"
            },
            {
                id: 2,
                name: "Sarah Johnson",
                rating: 4,
                text: "Great experience overall. The communication was clear and the final product met our requirements. There were a few minor issues, but they were quickly resolved.",
                date: "2023-04-22",
                avatar: "https://randomuser.me/api/portraits/women/44.jpg"
            },
            {
                id: 3,
                name: "Michael Brown",
                rating: 5,
                text: "Outstanding service! The attention to detail and commitment to quality is impressive. I've worked with many providers, but this one stands out for their professionalism.",
                date: "2023-06-10",
                avatar: "https://randomuser.me/api/portraits/men/67.jpg"
            },
            {
                id: 4,
                name: "Emily Davis",
                rating: 3,
                text: "The service was adequate but took longer than expected. The final result was good, but I expected more based on the initial discussions.",
                date: "2023-03-18",
                avatar: "https://randomuser.me/api/portraits/women/68.jpg"
            },
            {
                id: 5,
                name: "Robert Wilson",
                rating: 5,
                text: "I'm extremely satisfied with the results. The team went above and beyond to ensure everything was perfect. Will definitely use their services again!",
                date: "2023-07-05",
                avatar: "https://randomuser.me/api/portraits/men/75.jpg"
            },
            {
                id: 6,
                name: "Lisa Anderson",
                rating: 2,
                text: "The service was below expectations. There were communication issues and the final deliverable required multiple revisions. Not sure if I would use them again.",
                date: "2023-02-28",
                avatar: "https://randomuser.me/api/portraits/women/26.jpg"
            },
            {
                id: 7,
                name: "David Miller",
                rating: 4,
                text: "Good quality work and responsive team. The project was completed on time and within budget. Would recommend for similar projects.",
                date: "2023-06-25",
                avatar: "https://randomuser.me/api/portraits/men/55.jpg"
            },
            {
                id: 8,
                name: "Jennifer Taylor",
                rating: 5,
                text: "Exceptional service from start to finish! The team understood our needs perfectly and delivered beyond our expectations. Highly recommended!",
                date: "2023-05-30",
                avatar: "https://randomuser.me/api/portraits/women/33.jpg"
            },
            {
                id: 9,
                name: "Christopher Lee",
                rating: 1,
                text: "Very disappointed with the service. Multiple deadlines were missed and the final product did not meet our specifications. Would not recommend.",
                date: "2023-01-15",
                avatar: "https://randomuser.me/api/portraits/men/22.jpg"
            }
        ];

        // Function to generate star rating HTML
        function generateStars(rating) {
            let stars = '';
            for (let i = 1; i <= 5; i++) {
                if (i <= rating) {
                    stars += '<i class="fas fa-star"></i>';
                } else {
                    stars += '<i class="far fa-star"></i>';
                }
            }
            return stars;
        }

        // Function to format date
        function formatDate(dateString) {
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            return new Date(dateString).toLocaleDateString(undefined, options);
        }

        // Function to render testimonials
        function renderTestimonials(filteredTestimonials) {
            const container = document.getElementById('testimonials-container');
            container.innerHTML = '';
            
            filteredTestimonials.forEach(testimonial => {
                const card = document.createElement('div');
                card.className = 'testimonial-card bg-white rounded-lg shadow p-6';
                card.setAttribute('data-rating', testimonial.rating);
                
                card.innerHTML = `
                    <div class="flex items-center mb-4">
                        <img src="${testimonial.avatar}" alt="${testimonial.name}" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h3 class="font-semibold text-gray-800">${testimonial.name}</h3>
                            <div class="star-rating text-yellow-400 mt-1">
                                ${generateStars(testimonial.rating)}
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">${testimonial.text}</p>
                    <div class="text-sm text-gray-500">${formatDate(testimonial.date)}</div>
                `;
                
                container.appendChild(card);
            });
        }

        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Initial render
            renderTestimonials(testimonials);
            
            // Filter buttons
            const filterButtons = document.querySelectorAll('.filter-btn');
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    if (filterValue === 'all') {
                        renderTestimonials(testimonials);
                    } else {
                        const filtered = testimonials.filter(testimonial => 
                            testimonial.rating === parseInt(filterValue)
                        );
                        renderTestimonials(filtered);
                    }
                });
            });
            
            // Load more button (simulated functionality)
            document.getElementById('load-more').addEventListener('click', function() {
                alert('In a real application, this would load more testimonials from the server.');
            });
        });
    </script>
</body>
</html>
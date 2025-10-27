<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pencil Bitz - Digital Marketing Book Order">

    <!-- ========== Page Title ========== -->
    <title>Digital Marketing Book Order | Pencil Bitz</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/PB-new-logo.png" type="image/x-icon">

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
    <link href="assets/css/index.css" rel="stylesheet">
    <link href="assets/css/book-store.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3708edbb88.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Razorpay Integration -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    
    <style>
        :root {
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --secondary: #10b981;
            --accent: #f59e0b;
            --light: #f8fafc;
            --dark: #1e293b;
            --gray: #64748b;
            --gray-light: #e2e8f0;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
            color: var(--dark);
        }
        
        .book-image-container {
            position: relative;
            max-width: 320px;
            margin: 0 auto;
        }
        
        .book-image {
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }
        
        .book-image:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }
        
        .order-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            border: 1px solid var(--gray-light);
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }
        
        .form-control {
            width: 100%;
            border: 1.5px solid var(--gray-light);
            border-radius: 10px;
            padding: 14px 16px;
            font-size: 1rem;
            transition: all 0.3s;
            background-color: white;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
            outline: none;
        }
        
        .payment-option {
            border: 2px solid var(--gray-light);
            border-radius: 12px;
            padding: 18px;
            margin-bottom: 16px;
            cursor: pointer;
            transition: all 0.3s;
            background: white;
        }
        
        .payment-option:hover {
            border-color: var(--primary);
            background-color: #f8faff;
        }
        
        .payment-option.selected {
            border-color: var(--primary);
            background-color: #f0f7ff;
            box-shadow: 0 5px 15px rgba(79, 70, 229, 0.1);
        }
        
        .payment-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 16px;
            font-size: 1.25rem;
        }
        
        .btn-razorpay {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            font-weight: 600;
            padding: 16px 24px;
            border-radius: 10px;
            transition: all 0.3s;
            border: none;
            width: 100%;
            font-size: 1rem;
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.2);
        }
        
        .btn-razorpay:hover {
            background: linear-gradient(135deg, var(--primary-dark), #3730a3);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(79, 70, 229, 0.3);
        }
        
        .btn-whatsapp {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            font-weight: 600;
            padding: 16px 24px;
            border-radius: 10px;
            transition: all 0.3s;
            border: none;
            width: 100%;
            font-size: 1rem;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.2);
        }
        
        .btn-whatsapp:hover {
            background: linear-gradient(135deg, #059669, #047857);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);
        }
        
        .price-tag {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--dark);
            line-height: 1;
        }
        
        .discount {
            text-decoration: line-through;
            color: var(--gray);
            font-size: 1rem;
            margin-left: 12px;
        }
        
        .save-badge {
            background: linear-gradient(135deg, var(--secondary), #059669);
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 700;
            font-size: 0.875rem;
            margin-left: 12px;
        }
        
        .breadcrumb {
            background: white;
            border-radius: 10px;
            padding: 16px 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
        }
        
        .breadcrumb-item a {
            color: var(--primary);
            text-decoration: none;
            transition: color 0.3s;
            font-weight: 500;
        }
        
        .breadcrumb-item a:hover {
            color: var(--primary-dark);
        }
        
        .book-details {
            background-color: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--gray-light);
        }
        
        .feature-list {
            list-style-type: none;
            padding: 0;
        }
        
        .feature-list li {
            padding: 10px 0;
            display: flex;
            align-items: flex-start;
        }
        
        .feature-list li i {
            color: var(--secondary);
            margin-right: 12px;
            margin-top: 4px;
            flex-shrink: 0;
        }
        
        .alert-success {
            background-color: #d1fae5;
            border: 1px solid #a7f3d0;
            color: #065f46;
            padding: 14px 18px;
            border-radius: 10px;
            margin-top: 20px;
        }
        
        .alert-error {
            background-color: #fef2f2;
            border: 1px solid #fecaca;
            color: #991b1b;
            padding: 14px 18px;
            border-radius: 10px;
            margin-top: 20px;
        }
        
        .order-summary {
            background: linear-gradient(135deg, #f8fafc, #f1f5f9);
            border-radius: 12px;
            padding: 20px;
            border: 1px solid var(--gray-light);
        }
        
        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 12px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            border-radius: 3px;
        }
        
        .contact-card {
            background: linear-gradient(135deg, #f8fafc, #f1f5f9);
            border-radius: 16px;
            padding: 32px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--gray-light);
        }
        
        .contact-link {
            display: inline-flex;
            align-items: center;
            padding: 12px 20px;
            background: white;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            margin: 0 8px 12px;
        }
        
        .contact-link:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        
        .contact-link.whatsapp {
            color: #10b981;
        }
        
        .contact-link.phone {
            color: var(--primary);
        }
        
        .contact-link.email {
            color: #8b5cf6;
        }
        
        .quantity-selector {
            display: flex;
            align-items: center;
            border: 1.5px solid var(--gray-light);
            border-radius: 10px;
            overflow: hidden;
            width: fit-content;
        }
        
        .quantity-btn {
            background: var(--light);
            border: none;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .quantity-btn:hover {
            background: var(--gray-light);
        }
        
        .quantity-input {
            width: 60px;
            text-align: center;
            border: none;
            background: white;
            font-weight: 600;
            font-size: 1rem;
        }
        
        .quantity-input:focus {
            outline: none;
        }
        
        @media (max-width: 768px) {
            .breadcrumb {
                padding: 12px 16px;
            }
            
            .price-tag {
                font-size: 2rem;
            }
            
            .discount {
                font-size: 1.25rem;
            }
            
            .book-image-container {
                max-width: 260px;
            }
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Header Section -->
    <div class="container mx-auto px-4 py-6">
        <nav class="breadcrumb">
            <ol class="flex items-center text-gray-700 space-x-2 text-sm font-medium flex-wrap">
                <li class="flex items-center">
                    <a href="index.php" class="hover:underline text-blue-600 flex items-center">
                        <i class="fas fa-home mr-2"></i> Home
                    </a>
                    <span class="mx-2 text-gray-400"><i class="fas fa-chevron-right text-xs"></i></span>
                </li>
                <li class="flex items-center">
                    <a href="book-store.php" class="hover:underline text-blue-600 flex items-center">
                        <i class="fas fa-book mr-2"></i> Book Store
                    </a>
                    <span class="mx-2 text-gray-400"><i class="fas fa-chevron-right text-xs"></i></span>
                </li>
                <li class="flex items-center">
                    <a href="digital-marketing-book.php" class="hover:underline text-blue-600 flex items-center">
                        <i class="fas fa-chart-line mr-2"></i> Digital Marketing
                    </a>
                    <span class="mx-2 text-gray-400"><i class="fas fa-chevron-right text-xs"></i></span>
                </li>
                <li class="flex items-center">
                    <span class="flex items-center text-blue-600 font-semibold">
                        <i class="fas fa-shopping-cart mr-2"></i> Order
                    </span>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Book Details Section -->
            <div class="lg:w-2/5">
                <div class="order-container p-6">
                    <div class="flex flex-col items-center">
                        <div class="book-image-container mb-6">
                            <img src="assets/img/new/book-page/digital-marketing-p3.png" class="book-image" alt="Digital Marketing Book">
                        </div>
                        <h1 class="text-3xl font-bold text-gray-800 text-center mb-3">Digital Marketing Mastery</h1>
                        <p class="text-gray-600 text-center mb-6 text-lg">Comprehensive guide to modern digital marketing strategies and techniques</p>
                        
                        <div class="flex items-center justify-center mb-6">
                            <span class="price-tag">₹1013</span>
                            <span class="discount">₹1113</span>
                        </div>
                        
                        <div class="book-details w-full mt-2">
                            <h3 class="text-xl font-semibold mb-4">What You'll Learn</h3>
                            <ul class="feature-list">
                                <li><i class="fas fa-check-circle"></i> Comprehensive digital marketing strategies</li>
                                <li><i class="fas fa-check-circle"></i> Latest SEO & SEM techniques</li>
                                <li><i class="fas fa-check-circle"></i> Social media marketing insights</li>
                                <li><i class="fas fa-check-circle"></i> Content marketing & email campaigns</li>
                                <li><i class="fas fa-check-circle"></i> Analytics and performance tracking</li>
                                <li><i class="fas fa-check-circle"></i> Practical case studies & real-world examples</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Form Section -->
            <div class="lg:w-3/5">
                <div class="order-container p-8">
                    <h2 class="section-title text-center">Complete Your Order</h2>
                    
                    <form id="orderForm">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Personal Information -->
                            <div class="form-group">
                                <label for="name" class="form-label">Full Name <span class="text-red-500">*</span></label>
                                <input id="name" type="text" class="form-control" placeholder="Enter your full name" required />
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="form-label">Email Address <span class="text-red-500">*</span></label>
                                <input id="email" type="email" class="form-control" placeholder="Enter your email" required />
                            </div>
                            
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone Number <span class="text-red-500">*</span></label>
                                <input id="phone" type="tel" class="form-control" placeholder="Enter your phone number" required />
                            </div>
                            
                            <div class="form-group">
                                <label for="quantity" class="form-label">Quantity <span class="text-red-500">*</span></label>
                                <div class="quantity-selector">
                                    <button type="button" class="quantity-btn" id="decreaseQty">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input id="quantity" type="number" min="1" value="1" class="quantity-input" required />
                                    <button type="button" class="quantity-btn" id="increaseQty">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Address Information -->
                            <div class="form-group md:col-span-2">
                                <label for="address" class="form-label">Street Address <span class="text-red-500">*</span></label>
                                <input id="address" type="text" class="form-control" placeholder="Enter your street address" required />
                            </div>
                            
                            <div class="form-group">
                                <label for="city" class="form-label">City <span class="text-red-500">*</span></label>
                                <input id="city" type="text" class="form-control" placeholder="Enter your city" required />
                            </div>
                            
                            <div class="form-group">
                                <label for="state" class="form-label">State <span class="text-red-500">*</span></label>
                                <input id="state" type="text" class="form-control" placeholder="Enter your state" required />
                            </div>
                            
                            <div class="form-group">
                                <label for="pincode" class="form-label">PIN Code <span class="text-red-500">*</span></label>
                                <input id="pincode" type="text" class="form-control" placeholder="Enter PIN code" required />
                            </div>
                            
                            <div class="form-group">
                                <label for="country" class="form-label">Country <span class="text-red-500">*</span></label>
                                <select id="country" class="form-control" required>
                                    <option value="">Select Country</option>
                                    <option value="India" selected>India</option>
                                    <option value="USA">United States</option>
                                    <option value="UK">United Kingdom</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Order Summary -->
                        <div class="mt-8 order-summary">
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">Order Summary</h3>
                            <div class="flex justify-between mb-2 py-2">
                                <span>Book Price (x<span id="summaryQuantity">1</span>):</span>
                                <span class="font-semibold">₹<span id="summaryPrice">499</span></span>
                            </div>
                            <div class="flex justify-between mb-2 py-2">
                                <span>Shipping:</span>
                                <span class="font-semibold">₹<span id="shippingCost">50</span></span>
                            </div>
                            <div class="flex justify-between font-bold text-lg mt-3 pt-3 border-t border-gray-300">
                                <span>Total Amount:</span>
                                <span class="text-blue-600">₹<span id="totalAmount">549</span></span>
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="mt-8 flex flex-col sm:flex-row gap-4">
                            <button type="button" id="razorpayButton" class="btn-razorpay flex items-center justify-center">
                                <i class="fas fa-lock mr-3"></i>paymant
                            </button>
                            <button type="button" id="whatsappButton" class="btn-whatsapp flex items-center justify-center">
                                <i class="fab fa-whatsapp mr-3"></i> Order via WhatsApp
                            </button>
                        </div>
                        
                        <div id="formSuccess" class="alert-success mt-4 hidden"></div>
                        <div id="formError" class="alert-error mt-4 hidden"></div>
                        
                        <div class="mt-6 text-center text-sm text-gray-500">
                            <i class="fas fa-lock me-2"></i> Your payment information is secure and encrypted
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="container mx-auto px-4 py-8 mt-8">
        <div class="contact-card">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Need Help With Your Order?</h3>
            <p class="text-gray-600 mb-6 text-lg">Our customer support team is here to assist you with any questions</p>
            
            <div class="flex flex-wrap justify-center">
                <a href="https://wa.me/917092108975?text=Hello%2C%20I%20need%20help%20with%20my%20book%20order." target="_blank" class="contact-link whatsapp">
                    <i class="fab fa-whatsapp text-xl mr-3"></i> WhatsApp Support
                </a>
                <a href="tel:+917092108975" class="contact-link phone">
                    <i class="fas fa-phone text-lg mr-3"></i> +91 7092108975
                </a>
                <a href="mailto:support@pencilbitz.com" class="contact-link email">
                    <i class="fas fa-envelope text-lg mr-3"></i>textbookmanager@pencilbitz.com
                </a>
            </div>
            
            <div class="mt-6 text-sm text-gray-500">
                <i class="fas fa-info-circle me-2"></i>
                For bulk or institutional orders, <a href="contact.php" class="text-blue-600 underline font-medium">contact us directly</a> for special pricing.
            </div>
        </div>
    </div>

    <script>
        // Book price configuration
        const bookPrice = 1013;
        const shippingCost = 50;
        
        // DOM elements
        const quantityInput = document.getElementById('quantity');
        const decreaseQtyBtn = document.getElementById('decreaseQty');
        const increaseQtyBtn = document.getElementById('increaseQty');
        const summaryQuantity = document.getElementById('summaryQuantity');
        const summaryPrice = document.getElementById('summaryPrice');
        const shippingCostElement = document.getElementById('shippingCost');
        const totalAmount = document.getElementById('totalAmount');
        const paymentOptions = document.querySelectorAll('.payment-option');
        const razorpayButton = document.getElementById('razorpayButton');
        const whatsappButton = document.getElementById('whatsappButton');
        const formSuccess = document.getElementById('formSuccess');
        const formError = document.getElementById('formError');
        
        // Update order summary when quantity changes
        function updateOrderSummary() {
            const quantity = parseInt(quantityInput.value) || 1;
            const subtotal = bookPrice * quantity;
            const total = subtotal + shippingCost;
            
            summaryQuantity.textContent = quantity;
            summaryPrice.textContent = subtotal;
            totalAmount.textContent = total;
        }
        
        // Quantity controls
        decreaseQtyBtn.addEventListener('click', function() {
            let quantity = parseInt(quantityInput.value) || 1;
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
                updateOrderSummary();
            }
        });
        
        increaseQtyBtn.addEventListener('click', function() {
            let quantity = parseInt(quantityInput.value) || 1;
            quantityInput.value = quantity + 1;
            updateOrderSummary();
        });
        
        quantityInput.addEventListener('input', updateOrderSummary);
        
        // Payment method selection
        paymentOptions.forEach(option => {
            option.addEventListener('click', function() {
                // Remove selected class from all options
                paymentOptions.forEach(opt => opt.classList.remove('selected'));
                // Add selected class to clicked option
                this.classList.add('selected');
            });
        });
        
        // Razorpay payment integration
        razorpayButton.addEventListener('click', function() {
            if (!validateForm()) return;
            
            const quantity = parseInt(quantityInput.value) || 1;
            const amount = (bookPrice * quantity + shippingCost) * 100; // Convert to paise
            
            const options = {
                "key": "rzp_test_RXaLr7AIuSBLCP", // Replace with your Razorpay Key ID
                "amount": amount,
                "currency": "INR",
                "name": "Pencil Bitz",
                "description": "Digital Marketing Book Order",
                "image": "assets/img/PB-new-logo.png",
                "handler": function(response) {
                    // Payment success handler
                    showMessage("Payment successful! Your order has been placed. Order ID: " + response.razorpay_payment_id, true);
                    // Here you would typically send the order details to your server
                    sendOrderToServer('razorpay', response.razorpay_payment_id);
                },
                "prefill": {
                    "name": document.getElementById('name').value,
                    "email": document.getElementById('email').value,
                    "contact": document.getElementById('phone').value
                },
                "notes": {
                    "address": document.getElementById('address').value,
                    "city": document.getElementById('city').value,
                    "state": document.getElementById('state').value,
                    "pincode": document.getElementById('pincode').value
                },
                "theme": {
                    "color": "#4f46e5"
                }
            };
            
            const rzp = new Razorpay(options);
            rzp.open();
        });
        
        // WhatsApp order function
        whatsappButton.addEventListener('click', function() {
            if (!validateForm()) return;
            
            const quantity = parseInt(quantityInput.value) || 1;
            const total = bookPrice * quantity + shippingCost;
            
            const message = `Hello, I would like to order the Digital Marketing book:
            
Name: ${document.getElementById('name').value}
Email: ${document.getElementById('email').value}
Phone: ${document.getElementById('phone').value}
Quantity: ${quantity}
Total: ₹${total}

Shipping Address:
${document.getElementById('address').value}
${document.getElementById('city').value}, ${document.getElementById('state').value}
${document.getElementById('pincode').value}, ${document.getElementById('country').value}

Please confirm my order and provide payment details.`;
            
            const encodedMessage = encodeURIComponent(message);
            window.open(`https://wa.me/919944307413?text=${encodedMessage}`, '_blank');
            
            showMessage("Your order has been sent via WhatsApp. We'll contact you shortly to confirm.", true);
            sendOrderToServer('whatsapp');
        });
        
        // Form validation
        function validateForm() {
            const requiredFields = [
                'name', 'email', 'phone', 'address', 
                'city', 'state', 'pincode', 'country'
            ];
            
            let isValid = true;
            
            requiredFields.forEach(fieldId => {
                const field = document.getElementById(fieldId);
                if (!field.value.trim()) {
                    field.style.borderColor = '#ef4444';
                    isValid = false;
                } else {
                    field.style.borderColor = '#e2e8f0';
                }
            });
            
            // Email validation
            const email = document.getElementById('email').value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                document.getElementById('email').style.borderColor = '#ef4444';
                isValid = false;
            }
            
            // Phone validation (basic)
            const phone = document.getElementById('phone').value;
            if (phone.length < 10) {
                document.getElementById('phone').style.borderColor = '#ef4444';
                isValid = false;
            }
            
            if (!isValid) {
                showMessage("Please fill in all required fields correctly.", false);
                return false;
            }
            
            return true;
        }
        
        // Show success/error message
        function showMessage(message, isSuccess = true) {
            if (isSuccess) {
                formSuccess.textContent = message;
                formSuccess.classList.remove('hidden');
                formError.classList.add('hidden');
            } else {
                formError.textContent = message;
                formError.classList.remove('hidden');
                formSuccess.classList.add('hidden');
            }
            
            setTimeout(() => {
                formSuccess.classList.add('hidden');
                formError.classList.add('hidden');
            }, 5000);
        }
        
        // Simulate sending order to server (in a real app, this would be an API call)
        function sendOrderToServer(paymentMethod, paymentId = null) {
            const orderData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                address: document.getElementById('address').value,
                city: document.getElementById('city').value,
                state: document.getElementById('state').value,
                pincode: document.getElementById('pincode').value,
                country: document.getElementById('country').value,
                quantity: parseInt(quantityInput.value) || 1,
                paymentMethod: paymentMethod,
                paymentId: paymentId,
                totalAmount: bookPrice * parseInt(quantityInput.value) + shippingCost
            };
            
            console.log('Order data to be sent to server:', orderData);
            // In a real application, you would send this data to your backend
            // Example: fetch('/api/orders', { method: 'POST', body: JSON.stringify(orderData) })
        }
        
        // Initialize order summary
        updateOrderSummary();
    </script>
</body>

</html>
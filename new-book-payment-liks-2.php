<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencil Bitz Publications - UPI Payment</title>
    <link rel="shortcut icon" href="assets/img/new-logo-pencilbitz.jpg" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        pencilbitz: {
                            primary: '#80D8C3',
                            secondary: '#4DA8DA',
                            dark: '#1F2937',
                            light: '#F0FDF4',
                            accent: '#FF6B6B'
                        }
                    },
                    boxShadow: {
                        'soft': '0 4px 24px rgba(0, 0, 0, 0.08)',
                        'hard': '0 2px 8px rgba(0, 0, 0, 0.12)',
                        'glow': '0 0 20px rgba(77, 168, 218, 0.3)'
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'bounce-slow': 'bounce 2s infinite'
                    }
                }
            }
        }

        function copyUPI(elementId, buttonId) {
            const upiId = document.getElementById(elementId).innerText;
            navigator.clipboard.writeText(upiId).then(() => {
                const copyBtn = document.getElementById(buttonId);
                copyBtn.innerHTML = '<i class="fas fa-check mr-1"></i> Copied!';
                copyBtn.classList.add('bg-green-500', 'text-white');
                setTimeout(() => {
                    copyBtn.innerHTML = '<i class="fas fa-copy mr-1"></i> Copy';
                    copyBtn.classList.remove('bg-green-500', 'text-white');
                }, 2000);
            });
        }

        function copyPhone() {
            const phone = document.getElementById("phone-number").innerText;
            navigator.clipboard.writeText(phone).then(() => {
                const phoneBtn = document.getElementById("phone-copy-btn");
                phoneBtn.innerHTML = '<i class="fas fa-check mr-1"></i>';
                setTimeout(() => {
                    phoneBtn.innerHTML = '<i class="fas fa-copy mr-1"></i>';
                }, 2000);
            });
        }
        
        // Initialize animations
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.payment-card');
            cards.forEach((card, index) => {
                // Add staggered animation
                card.style.animationDelay = `${index * 100}ms`;
            });
        });
    </script>
    <style type="text/css">
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .payment-card {
            animation: fadeIn 0.5s ease-out forwards;
            opacity: 0;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #4DA8DA 0%, #80D8C3 100%);
        }
        
        .qr-container {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.2) 100%);
            backdrop-filter: blur(10px);
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .bank-info-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(240, 253, 244, 0.9) 100%);
            backdrop-filter: blur(5px);
        }
        
        .highlight {
            position: relative;
            z-index: 1;
        }
        
        .highlight::after {
            content: '';
            position: absolute;
            bottom: 2px;
            left: 0;
            width: 100%;
            height: 30%;
            background-color: rgba(128, 216, 195, 0.3);
            z-index: -1;
            transition: height 0.3s ease;
        }
        
        .highlight:hover::after {
            height: 100%;
        }
        
        .copy-btn {
            transition: all 0.2s ease;
        }
        
        .copy-btn:active {
            transform: scale(0.95);
        }
        
        .payment-badge {
            position: absolute;
            top: -10px;
            right: 20px;
            z-index: 10;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-pencilbitz-light to-gray-100 font-sans min-h-screen p-4 sm:p-6">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <header class="text-center mb-12 pt-8">
            <div class="flex justify-center mb-4">
                <div class="relative">
                    <img src="assets/img/new-logo-pencilbitz.jpg" alt="Pencil Bitz Logo" 
                         class="w-24 h-24 object-contain rounded-full border-4 border-white shadow-xl mx-auto">
                </div>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Pencil Bitz Publications</h1>
            <p class="text-gray-600 font-semibold text-sky-500 max-w-2xl mx-auto">Patent</p>
        </header>
        
        <!-- Payment Cards Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
            <!-- Card 1 -->
            <div class="payment-card bg-white rounded-2xl shadow-soft overflow-hidden border border-gray-100 card-hover">
                <div class="relative">
                    <div class="gradient-bg py-6 px-8 flex flex-col items-center">
                        <div class="payment-badge bg-pencilbitz-accent text-white px-4 py-1 rounded-full font-bold text-sm mt-4">
                            Payment Link #1
                        </div>
                        <h2 class="text-xl font-bold text-white mb-4">PON SRIDHARAN KUMARA</h2>
                        <div class="qr-container p-4 rounded-xl mb-5 flex items-center justify-center shadow-hard">
                            <div class="w-52 h-52 bg-white rounded-lg flex items-center justify-center">
                                <img src="assets/img/pencilbitz.jpg" 
                                     alt="UPI QR Code" class="w-full h-full object-contain rounded-lg">
                            </div>
                        </div>
                        
                        <div class="text-center w-full mb-6">
                            <div class="flex flex-col sm:flex-row items-center justify-center">
                                <div class="bg-white bg-opacity-90 rounded-lg px-4 py-3 mb-3 sm:mb-0 sm:mr-3 w-full max-w-xs">
                                    <p id="upi-id-1" class="text-gray-800 font-bold text-lg truncate">pencilbitz@okicici</p>
                                </div>
                                <button id="copy-btn-1" onclick="copyUPI('upi-id-1', 'copy-btn-1')"
                                    class="copy-btn bg-pencilbitz-secondary text-white text-base px-4 py-3 rounded-lg flex items-center shadow hover:bg-pencilbitz-primary transition-colors">
                                    <i class="fas fa-copy mr-2"></i> Copy UPI
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <!-- Payment Apps -->
                        <div class="mb-6">
                            <h3 class="text-pencilbitz-dark font-semibold mb-4 text-center flex items-center justify-center text-sm uppercase tracking-wider">
                                <i class="fas fa-mobile-alt mr-2 text-pencilbitz-primary text-base"></i>
                                Accepts Payments Via
                            </h3>
                             <div class="flex justify-center space-x-4">
                                <div class="bg-gray-100 p-2 rounded-xl">
                                    <img src="assets/img/gpay.webp" alt="Google Pay" class="h-16 w-16 object-contain">
                                </div>
                                <div class="bg-gray-100 p-2 rounded-xl">
                                    <img src="assets/img/phonepe-new.png" alt="PhonePe" class="h-16 w-16 object-contain">
                                </div>
                                <div class="bg-gray-100 p-2 rounded-xl">
                                    <img src="assets/img/paytm.png" alt="Paytm" class="h-16 w-16 object-contain">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Account Information -->
                        <div class="bank-info-card rounded-xl p-5 border border-gray-200">
                            <h3 class="text-pencilbitz-dark font-bold mb-4 flex items-center text-lg">
                                <i class="fas fa-university mr-3 text-pencilbitz-primary"></i>
                                Bank Account Details
                            </h3>
                            
                            <div class="space-y-3">
                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/2 mb-3">
                                        <p class="text-gray-600 text-sm">Account Holder</p>
                                        <p class="font-medium text-gray-800">PON SRIDHARAN KUMARA</p>
                                    </div>
                                    <div class="w-full md:w-1/2 mb-3">
                                        <p class="text-gray-600 text-sm">Account Number</p>
                                        <p class="font-medium text-gray-800">1166155000229773</p>
                                    </div>
                                    <div class="w-full md:w-1/2">
                                        <p class="text-gray-600 text-sm">IFSC Code</p>
                                        <p class="font-medium text-gray-800">KVBL0001166 </p>
                                    </div>
                                    <div class="w-full md:w-1/2">
                                        <p class="text-gray-600 text-sm">Branch</p>
                                        <p class="font-medium text-gray-800"> MUSIRI</p>
                                    </div>
                                </div>
                                <div class="mt-4 pt-3 border-t border-gray-200">
                                    <p class="text-gray-600 text-sm">Account Type</p>
                                    <p class="font-bold text-pencilbitz-primary">SAVING ACCOUNT</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="payment-card bg-white rounded-2xl shadow-soft overflow-hidden border border-gray-100 card-hover">
                <div class="relative">
                    <div class="gradient-bg py-6 px-8 flex flex-col items-center">
                        <div class="payment-badge bg-pencilbitz-accent text-white px-4 py-1 rounded-full font-bold text-sm mt-4">
                            Payment Link #2
                        </div>
                        <h2 class="text-xl font-bold text-white mb-4">CITRAMENI</h2>
                        <div class="qr-container p-4 rounded-xl mb-5 flex items-center justify-center shadow-hard">
                            <div class="w-52 h-52 bg-white rounded-lg flex items-center justify-center">
                                <img src="assets/img/meni.jpg" 
                                     alt="UPI QR Code" class="w-full h-full object-contain rounded-lg">
                            </div>
                        </div>
                        
                        <div class="text-center w-full mb-6">
                            <div class="flex flex-col sm:flex-row items-center justify-center">
                                <div class="bg-white bg-opacity-90 rounded-lg px-4 py-3 mb-3 sm:mb-0 sm:mr-3 w-full max-w-xs">
                                    <p id="upi-id-2" class="text-gray-800 font-bold text-lg truncate">9943730317@axl</p>
                                </div>
                                <button id="copy-btn-2" onclick="copyUPI('upi-id-2', 'copy-btn-2')"
                                    class="copy-btn bg-pencilbitz-secondary text-white text-base px-4 py-3 rounded-lg flex items-center shadow hover:bg-pencilbitz-primary transition-colors">
                                    <i class="fas fa-copy mr-2"></i> Copy UPI
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <!-- Payment Apps -->
                        <div class="mb-6">
                            <h3 class="text-pencilbitz-dark font-semibold mb-4 text-center flex items-center justify-center text-sm uppercase tracking-wider">
                                <i class="fas fa-mobile-alt mr-2 text-pencilbitz-primary text-base"></i>
                                Accepts Payments Via
                            </h3>
                             <div class="flex justify-center space-x-4">
                                <div class="bg-gray-100 p-2 rounded-xl">
                                    <img src="assets/img/gpay.webp" alt="Google Pay" class="h-16 w-16 object-contain">
                                </div>
                                <div class="bg-gray-100 p-2 rounded-xl">
                                    <img src="assets/img/phonepe-new.png" alt="PhonePe" class="h-16 w-16 object-contain">
                                </div>
                                <div class="bg-gray-100 p-2 rounded-xl">
                                    <img src="assets/img/paytm.png" alt="Paytm" class="h-16 w-16 object-contain">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Account Information -->
                        <div class="bank-info-card rounded-xl p-5 border border-gray-200">
                            <h3 class="text-pencilbitz-dark font-bold mb-4 flex items-center text-lg">
                                <i class="fas fa-university mr-3 text-pencilbitz-primary"></i>
                                Bank Account Details
                            </h3>
                            
                            <div class="space-y-3">
                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/2 mb-3">
                                        <p class="text-gray-600 text-sm">Account Holder</p>
                                        <p class="font-medium text-gray-800">CITRAMENI</p>
                                    </div>
                                    <div class="w-full md:w-1/2 mb-3">
                                        <p class="text-gray-600 text-sm">Account Number</p>
                                        <p class="font-medium text-gray-800">50100805610357</p>
                                    </div>
                                    <div class="w-full md:w-1/2">
                                        <p class="text-gray-600 text-sm">IFSC Code</p>
                                        <p class="font-medium text-gray-800">HDFC0001588</p>
                                    </div>
                                    <div class="w-full md:w-1/2">
                                        <p class="text-gray-600 text-sm">Branch</p>
                                        <p class="font-medium text-gray-800">GANDHIPURAM</p>
                                    </div>
                                </div>
                                <div class="mt-4 pt-3 border-t border-gray-200">
                                    <p class="text-gray-600 text-sm">Account Type</p>
                                    <p class="font-bold text-pencilbitz-primary">SAVING ACCOUNT</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Payment Instructions -->
        <div class="bg-white rounded-2xl shadow-soft p-6 mb-8">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-info-circle mr-2 text-pencilbitz-secondary"></i>
                Payment Instructions
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="flex items-start p-4 bg-pencilbitz-light rounded-lg">
                    <div class="bg-pencilbitz-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 flex-shrink-0">
                        <span class="font-bold">1</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-1">Select Payment Method</h4>
                        <p class="text-gray-600 text-sm">Choose any UPI app (GPay, PhonePe, Paytm)</p>
                    </div>
                </div>
                <div class="flex items-start p-4 bg-pencilbitz-light rounded-lg">
                    <div class="bg-pencilbitz-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 flex-shrink-0">
                        <span class="font-bold">2</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-1">Enter Payment Details</h4>
                        <p class="text-gray-600 text-sm">Use the UPI ID or scan the QR code</p>
                    </div>
                </div>
                <div class="flex items-start p-4 bg-pencilbitz-light rounded-lg">
                    <div class="bg-pencilbitz-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 flex-shrink-0">
                        <span class="font-bold">3</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-1">Complete Payment</h4>
                        <p class="text-gray-600 text-sm">Enter the amount and complete the transaction</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <footer class="bg-pencilbitz-dark rounded-2xl px-6 py-6 text-center mt-8">
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-center mb-4">
                    <div class="mb-4 md:mb-0">
                        <h3 class="text-xl font-bold text-white mb-2">Pencil Bitz Publications</h3>
                        <p class="text-gray-300">Educational Excellence Through Quality Publications</p>
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-gray-700 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-pencilbitz-primary transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="bg-gray-700 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-pencilbitz-primary transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="bg-gray-700 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-pencilbitz-primary transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <p class="text-xs text-gray-400 font-medium pt-4 border-t border-gray-700">
                    © 2025 Pencil Bitz Publications. All Rights Reserved.<br>
                    Secure Payment Gateway • SSL Encrypted Transactions
                </p>
            </div>
        </footer>
    </div>
</body>
</html>
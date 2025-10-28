<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencil Bitz Publications - UPI Payment</title>
    <!-- ========== Favicon Icon ========== -->
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
                            light: '#F0FDF4'
                        }
                    },
                    boxShadow: {
                        'soft': '0 4px 24px rgba(0, 0, 0, 0.08)',
                        'hard': '0 2px 8px rgba(0, 0, 0, 0.12)'
                    }
                }
            }
        }

        function copyUPI() {
            const upiId = document.getElementById('upi-id').innerText;
            navigator.clipboard.writeText(upiId).then(() => {
                const copyBtn = document.getElementById('copy-btn');
                copyBtn.innerHTML = '<i class="fas fa-check mr-1"></i> Copied';
                setTimeout(() => {
                    copyBtn.innerHTML = '<i class="fas fa-copy mr-1"></i> Copy';
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
    </script>
    <style type="text/css">
        .qr-container {
            background: #10B981;
            background: linear-gradient(90deg, #4DA8DA 0%, #FFDCDC 100%);
        }

        .app-logo-container {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            filter: grayscale(30%) contrast(0.9);
        }

        .app-logo-container:hover {
            filter: grayscale(0%) contrast(1);
            transform: translateY(-3px);
        }

        .contact-item {
            transition: all 0.2s ease;
        }

        .contact-item:hover {
            transform: translateX(2px);
        }

        .copy-btn {
            transition: all 0.15s ease;
        }

        .copy-btn:active {
            transform: scale(0.95);
        }

        @media (max-width: 400px) {
            .upi-container {
                flex-direction: column;
            }

            .upi-id {
                margin-right: 0;
                margin-bottom: 0.5rem;
            }
        }
    </style>
</head>

<body class="bg-gray-50 font-sans min-h-screen flex items-center justify-center p-2 sm:p-6">
    <div class="containar-paymentbox">
        <div class="row">
             <h2>Payment Liks 1</h2>
            <div class="col-lg-6 col-md-6 col-sm-12 flex">
               
                <div class="  bg-white rounded-2xl shadow-soft overflow-hidden border border-gray-100 flex ">

                   

                    <!-- QR Section -->
                    <div class="qr-container p-6 sm:p-8 flex flex-col items-center flex">
                         <!-- Logo and Company Name -->
                    <div class="bg-green-100 py-4 px-6 border-b border-gray-200 flex flex-col items-center">
                        <img src="assets/img/new-logo-pencilbitz.jpg" alt="Pencil Bitz Logo" class="w-20 h-20 object-contain mb-2 rounded-full border border-green-500 shadow">
                        <h1 class="text-xl sm:text-2xl font-bold text-gray-800 tracking-tight">Pencil Bitz Publications</h1>
                        <p class="text-gray-600 text-sm sm:text-base mt-1">Text Book Publications Payment Link</p>
                    </div>
                        <div class="w-56 h-56 bg-white rounded-xl mb-5 flex items-center justify-center shadow-hard">
                            <!-- QR code placeholder - replace with actual QR image -->
                            <div class="w-full h-full flex items-center justify-center p-1">
                                <img src="assets/img/payment.jpg"
                                    alt="UPI QR Code" class="w-full h-full object-contain rounded-lg">
                            </div>
                        </div>

                        <div class="text-center w-full">
                            <h1 class="text-gray-800 text-xl font-semibold mb-3 tracking-tight">Sangeetha Subramaniam</h1>
                            <div class="flex upi-container items-center justify-center">
                                <div class="bg-white bg-opacity-20 rounded-lg px-4 py-2 upi-id">
                                    <p id="upi-id" class="text-gray-800 font-medium text-sm sm:text-base truncate max-w-xs">sangeethasubramaniam.pb@okaxis</p>
                                </div>
                                <button id="copy-btn" onclick="copyUPI()"
                                    class="copy-btn ml-2 bg-white text-gray-800 text-sm px-3 py-2 rounded-lg flex items-center shadow hover:bg-gray-50">
                                    <i class="fas fa-copy mr-1 text-gray-800"></i> Copy
                                </button>
                            </div>
                        </div>
                        <div class="px-6 pt-2 pb-1">
                            <h3 class="text-pencilbitz-dark font-semibold mb-4 text-center flex items-center justify-center text-sm uppercase tracking-wider">
                                <i class="fas fa-mobile-alt mr-2 text-pencilbitz-primary text-base"></i>
                                Accepts Payments
                            </h3>

                            <div class="grid grid-cols-3 gap-3 sm:gap-3 px-1 ">
                                <div class="app-logo-container flex items-center justify-center">
                                    <img src="assets/img/gpay.webp"
                                        alt="Google Pay" class="h-22 w-20  object-contain">
                                </div>
                                <div class="app-logo-container flex items-center justify-center ">
                                    <img src="assets/img/phonepe-new.png"
                                        alt="PhonePe" class="h-22 w-32 sm:h-12 object-contain">
                                </div>
                                <div class="app-logo-container flex items-center justify-center ">
                                    <img src="assets/img/paytm.png"
                                        alt="Paytm" class="h-10  w-32 sm:h-12 object-contain">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Details Card -->
                    <div class="mx-6 my-4 bg-pencilbitz-light rounded-xl p-3 border border-gray-200 shadow-inner">
                        <h3 class="text-pencilbitz-dark font-semibold mb-4 flex items-center text-base">
                            <i class="fas fa-id-card mr-2 text-pencilbitz-primary"></i>
                            Account Information
                        </h3>

                        <div class="space-y-3">

                            <ul>
                                <li class="font-medium text-md text-gray-800"><strong>Account Holder:</strong> <span> PARVESHMUZARAF R</span></li>
                                <li class="font-medium text-md text-gray-800"><strong>Account Number:</strong><span> 1150155000171459</span></li>
                                <li class="font-medium text-md text-gray-800"><strong>Account IFSC:</strong><span> KVBL0001150</span></li>
                                <li class="font-medium text-md text-gray-800"><strong>Account Branch:</strong><span> KULITHALAI </span></li>
                                <LI class="font-medium text-md text-gray-800"><strong>Account Type:</strong><span> SAVING </span></LI>

                            </ul>
                        </div>
                    </div>

            </div>
                    
        </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                <div class="max-w-full w-full bg-white rounded-2xl shadow-soft overflow-hidden border border-gray-100 flex">
                   


                    <!-- QR Section -->
                    <div class="qr-container p-6 sm:p-8 flex flex-col items-center">
                         <!-- Logo and Company Name -->
                    <div class="bg-green-100 py-4 px-6 border-b border-gray-200 flex flex-col items-center">
                        <img src="assets/img/new-logo-pencilbitz.jpg" alt="Pencil Bitz Logo" class="w-20 h-20 object-contain mb-2 rounded-full border border-green-500 shadow">
                        <h1 class="text-xl sm:text-2xl font-bold text-gray-800 tracking-tight">Pencil Bitz Publications</h1>
                    </div>
                        <div class="w-56 h-56 bg-white rounded-xl mb-5 flex items-center justify-center shadow-hard">
                            <!-- QR code placeholder - replace with actual QR image -->
                            <div class="w-full h-full flex items-center justify-center p-1">
                                <img src="assets/img/meni.jpg"
                                    alt="UPI QR Code" class="w-full h-full object-contain rounded-lg">
                            </div>
                        </div>

                        <div class="text-center w-full">
                            <h1 class="text-gray-800 text-xl font-semibold mb-3 tracking-tight">CITRAMENI</h1>
                            <div class="flex upi-container items-center justify-center">
                                <div class="bg-white bg-opacity-20 rounded-lg px-4 py-2 upi-id">
                                    <p id="upi-id" class="text-gray-800 font-medium text-sm sm:text-base truncate max-w-xs"> 9943730317@axl</p>
                                </div>
                                <button id="copy-btn" onclick="copyUPI()"
                                    class="copy-btn ml-2 bg-white text-gray-800 text-sm px-3 py-2 rounded-lg flex items-center shadow hover:bg-gray-50">
                                    <i class="fas fa-copy mr-1 text-gray-800"></i> Copy
                                </button>
                            </div>
                        </div>
                         <!-- Payment Apps Section -->
                    <div class="px-6 pt-2 pb-1">
                        <h3 class="text-pencilbitz-dark font-semibold mb-4 text-center flex items-center justify-center text-sm uppercase tracking-wider">
                            <i class="fas fa-mobile-alt mr-2 text-pencilbitz-primary text-base"></i>
                            Accepts Payments
                        </h3>

                        <div class="grid grid-cols-3 gap-3 sm:gap-3 px-1 ">
                            <div class="app-logo-container flex items-center justify-center">
                                <img src="assets/img/gpay.webp"
                                    alt="Google Pay" class="h-22 w-20  object-contain">
                            </div>
                            <div class="app-logo-container flex items-center justify-center ">
                                <img src="assets/img/phonepe-new.png"
                                    alt="PhonePe" class="h-22 w-32 sm:h-12 object-contain">
                            </div>
                            <div class="app-logo-container flex items-center justify-center ">
                                <img src="assets/img/paytm.png"
                                    alt="Paytm" class="h-10  w-32 sm:h-12 object-contain">
                            </div>
                        </div>
                    </div>

                    </div>

                   
                    <!-- Contact Details Card -->
                    <div class="mx-6 my-4 bg-pencilbitz-light rounded-xl p-3 border border-gray-200 shadow-inner">
                        <h3 class="text-pencilbitz-dark font-semibold mb-4 flex items-center text-base">
                            <i class="fas fa-id-card mr-2 text-pencilbitz-primary"></i>
                            Account Information
                        </h3>

                        <div class="space-y-3">
                            <!-- Phone -->
                            <ul>
                                <li class="font-medium text-md text-gray-800"><strong>Account Holder:</strong><span> CITRAMENI </span></li>
                                <li class="font-medium text-md text-gray-800"><strong>Account Number:</strong><span> 50100805610357</span></li>
                                <li class="font-medium text-md text-gray-800"><strong>Account IFSC:</strong><span> HDFC0001588</span></li>
                                <li class="font-medium text-md text-gray-800"><strong>Account Branch:</strong> <span> GANDHIPURAM </span></li>
                                <LI class="font-medium text-md text-gray-800"><strong>Account Type:</strong> <span> SAVING </span></LI>

                            </ul>
                        </div>
                    </div>

                    <!-- Footer -->
                

            </div>
            </div>

        <div class="bg-pencilbitz-dark px-6 py-3 text-center">
                        <p class="text-xs text-gray-300 font-medium">© 2025 Pencil Bitz Publications. All Rights Reserved.</p>
                    </div>

    </div>
</body>

</html>
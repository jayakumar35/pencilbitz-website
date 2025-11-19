<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencil Bitz Publications - Payment Portal</title>
    <link rel="shortcut icon" href="assets/img/new-logo-pencilbitz.jpg" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Poppins', 'sans-serif'] },
                    colors: {
                        pencilbitz: {
                            primary: '#10B981',
                            secondary: '#059669',
                            accent: '#34D399',
                            dark: '#111827',
                            light: '#F0FDF4'
                        }
                    }
                }
            }
        }
        function copyUPI() {
            const upiId = document.getElementById('upi-id').innerText;
            navigator.clipboard.writeText(upiId).then(() => {
                const copyBtn = document.getElementById('copy-btn');
                copyBtn.innerHTML = '<i class="fas fa-check"></i>';
                setTimeout(() => {
                    copyBtn.innerHTML = '<i class="fas fa-copy"></i>';
                }, 2000);
            });
        }
        function copyPhone() {
            const phone = document.getElementById("phone-number").innerText;
            navigator.clipboard.writeText(phone).then(() => {
                const phoneBtn = document.getElementById("phone-copy-btn");
                phoneBtn.innerHTML = '<i class="fas fa-check"></i>';
                setTimeout(() => {
                    phoneBtn.innerHTML = '<i class="fas fa-copy"></i>';
                }, 2000);
            });
        }
    </script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background: linear-gradient(135deg, #0F172A 0%, #1e3a1f 100%); font-family: 'Poppins', sans-serif; }
        .glass-effect { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); }
        .gradient-text { background: linear-gradient(135deg, #10B981, #059669); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .card-hover { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .card-hover:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(16, 185, 129, 0.2); }
        .btn-glow { transition: all 0.3s ease; position: relative; overflow: hidden; }
        .btn-glow:hover { box-shadow: 0 0 20px rgba(16, 185, 129, 0.5); transform: scale(1.02); }
        .btn-glow:active { transform: scale(0.98); }
        .copy-icon { cursor: pointer; transition: all 0.2s; }
        .copy-icon:hover { transform: scale(1.1) rotate(10deg); }
        .payment-badge { display: inline-block; padding: 8px 16px; background: linear-gradient(135deg, #10B981, #34D399); color: white; border-radius: 50px; font-size: 12px; font-weight: 600; }
        .info-card { background: linear-gradient(135deg, #F0FDF4, #DCFCE7); border-left: 4px solid #10B981; }
        .qr-glow { box-shadow: 0 0 30px rgba(16, 185, 129, 0.3); }
        .fade-in { animation: fadeIn 0.6s ease-in; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .pulse-border { animation: pulseBorder 2s infinite; }
        @keyframes pulseBorder { 0%, 100% { box-shadow: 0 0 20px rgba(16, 185, 129, 0.4); } 50% { box-shadow: 0 0 40px rgba(16, 185, 129, 0.8); } }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 sm:p-6">
    <div class="w-full max-w-2xl">
        <!-- Main Container -->
        <div class="glass-effect rounded-3xl shadow-2xl overflow-hidden fade-in">
            <!-- Header with Gradient -->
            <div class="relative h-32 bg-gradient-to-r from-pencilbitz-primary to-pencilbitz-secondary overflow-hidden">
                <div class="absolute inset-0 opacity-20">
                    <div class="absolute w-40 h-40 bg-pencilbitz-accent rounded-full -top-20 -left-20"></div>
                    <div class="absolute w-40 h-40 bg-pencilbitz-accent rounded-full -bottom-20 -right-20"></div>
                </div>
                <div class="relative h-full flex items-center justify-center">
                    <div class="text-center">
                        <h1 class="text-white text-3xl sm:text-4xl font-bold">Payment Portal</h1>
                        <p class="text-green-100 text-sm mt-1">Secure Payment Processing</p>
                    </div>
                </div>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-8">
                <!-- Left: QR & Person Info -->
                <div class="flex flex-col items-center space-y-6">
                    <!-- Profile Card -->
                    <div class="text-center w-full card-hover hover:rounded-2">
                        <img src="assets/img/new-logo-pencilbitz.jpg" alt="Logo" class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-pencilbitz-primary shadow-lg">
                        <h2 class="gradient-text text-3xl font-bold">PRAVEEN T</h2>
                        <p class="text-gray-600 text-sm mt-1">Payment Recipient</p>
                        <span class="payment-badge mt-3 mb-2">Verified Account</span>
                    </div>

                    <!-- QR Code -->
                    <div class="w-full flex justify-center">
                        <div class="relative p-4 bg-white rounded-2xl qr-glow pulse-border" style="width: 220px; height: 220px;">
                            <img src="assets/img/Praveen-pay-QR.jpeg" alt="UPI QR" class="w-full h-full rounded-xl object-contain">
                        </div>
                    </div>
                    <p class="text-gray-600 text-center text-sm"><i class="fas fa-mobile-alt text-pencilbitz-primary mr-2"></i>Scan to Pay</p>
                </div>

                <!-- Right: Payment Details -->
                <div class="space-y-6">
                    <!-- UPI Section -->
                    <div class="space-y-3">
                        <h3 class="font-bold text-lg text-gray-800 flex items-center">
                            <i class="fas fa-wallet text-pencilbitz-primary mr-2 text-xl"></i>Quick Pay
                        </h3>
                        <div class="info-card rounded-2xl p-4 space-y-3">
                            <div>
                                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wide">UPI ID</label>
                                <div class="flex items-center gap-2 mt-2 bg-white rounded-lg p-3">
                                    <code id="upi-id" class="text-gray-800 font-semibold flex-1 text-sm">praveen1kvb@okaxis</code>
                                    <button id="copy-btn" onclick="copyUPI()" class="copy-icon text-pencilbitz-primary text-lg hover:text-pencilbitz-secondary">
                                        <i class="fas fa-copy"></i>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wide">Phone</label>
                                <div class="flex items-center gap-2 mt-2 bg-white rounded-lg p-3">
                                    <span id="phone-number" class="text-gray-800 font-semibold flex-1 text-sm">+91 8248369578</span>
                                    <button id="phone-copy-btn" onclick="copyPhone()" class="copy-icon text-pencilbitz-primary text-lg hover:text-pencilbitz-secondary">
                                        <i class="fas fa-copy"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accepted Apps -->
                    <div>
                        <h3 class="font-bold text-lg text-gray-800 flex items-center mb-3">
                            <i class="fas fa-check-circle text-pencilbitz-primary mr-2 text-xl"></i>Payment Methods
                        </h3>
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-gray-50 rounded-xl p-4 flex items-center justify-center card-hover">
                                <img src="assets/img/gpay.webp" alt="Google Pay" class="h-12 object-contain">
                            </div>
                            <div class="bg-gray-50 rounded-xl p-4 flex items-center justify-center card-hover">
                                <img src="assets/img/phonepe-new.png" alt="PhonePe" class="h-12 object-contain">
                            </div>
                            <div class="bg-gray-50 rounded-xl p-4 flex items-center justify-center card-hover">
                                <img src="assets/img/paytm.png" alt="Paytm" class="h-12 object-contain">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bank Details Section -->
            <div class="mx-8 mb-8">
                <h3 class="font-bold text-lg text-gray-800 flex items-center mb-4">
                    <i class="fas fa-university text-pencilbitz-primary mr-2 text-xl"></i>Bank Account
                </h3>
                <div class="bg-gradient-to-br from-pencilbitz-light to-green-50 rounded-2xl border border-pencilbitz-primary border-opacity-30 p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="py-3 border-b md:border-b-0 md:border-r border-pencilbitz-primary border-opacity-20">
                            <p class="text-xs text-gray-600 font-semibold uppercase tracking-wide">Account Holder</p>
                            <p class="text-gray-900 font-bold text-lg mt-1">PRAVEEN T</p>
                        </div>
                        <div class="py-3 border-b md:border-b-0">
                            <p class="text-xs text-gray-600 font-semibold uppercase tracking-wide">Account Type</p>
                            <p class="text-gray-900 font-bold text-lg mt-1">Savings</p>
                        </div>
                        <div class="py-3 border-b md:border-b-0 md:border-r border-pencilbitz-primary border-opacity-20">
                            <p class="text-xs text-gray-600 font-semibold uppercase tracking-wide">Account Number</p>
                            <p class="text-gray-900 font-bold text-lg mt-1">1723054000000236</p>
                        </div>
                        <div class="py-3">
                            <p class="text-xs text-gray-600 font-semibold uppercase tracking-wide">IFSC Code</p>
                            <p class="text-gray-900 font-bold text-lg mt-1">KVBL0001723</p>
                        </div>
                        <div class="md:col-span-2 py-3">
                            <p class="text-xs text-gray-600 font-semibold uppercase tracking-wide">Branch</p>
                            <p class="text-gray-900 font-bold text-lg mt-1">MOHANUR</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Security Badge & Footer -->
            <div class="bg-gradient-to-r from-gray-900 to-gray-800 px-8 py-6 text-center border-t border-gray-700">
                <div class="flex items-center justify-center gap-2 mb-3">
                    <i class="fas fa-shield-alt text-pencilbitz-accent text-lg"></i>
                    <p class="text-gray-300 text-sm font-medium">Secure Payment Processing</p>
                </div>
                <p class="text-gray-500 text-xs">© 2025 Pencil Bitz Publications. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>
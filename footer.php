<footer class="w-full py-10 relative bg-gray-900 overflow-hidden">
    <!-- Background gradient glow -->
    <div class="absolute inset-0 -z-30 bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 opacity-20 blur-3xl animate-animateGradient"></div>

    <!-- Faint Company Logo Watermark (Smaller, Left side) -->
    <div class="absolute inset-0 flex justify-start items-center opacity-10 -z-20 pl-16">
        <img src="assets/img/new-logo-pencilbitz.jpg" alt="Watermark Logo"
            class="w-[250px] h-auto object-contain blur-[1px]">
    </div>

    <!-- Background watermark text (Centered but slightly shifted right) -->
    <div class="absolute inset-0 -z-10 flex justify-center items-center opacity-10 translate-x-20">
        <span class="text-[8rem] font-bold text-white uppercase select-none pointer-events-none tracking-widest">
            PENCIL BITZ
        </span>
    </div>

    <!-- Footer Content -->
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-white relative z-10">
        <!-- Logo & Description -->
        <div class="flex flex-col space-y-4">
            <a href="index.php" class="flex items-center mb-4">
                <img src="assets/img/new-logo-pencilbitz.jpg" alt="Company Logo"
                    class="h-20 w-auto me-3 rounded-5" style="max-width:210px; max-height:65px;">
            </a>
            <p>Welcome to PencilBitz – your trusted partner for publication and patent grant services. We help innovators and researchers bring their ideas to life.</p>
        </div>

        <!-- Our Company -->
        <div>
            <h4 class="text-green-300 font-semibold mb-4">Our Company</h4>
            <ul class="space-y-2">
                <li><a href="our-company.php" class="hover:text-green-400 transition-colors">About us</a></li>
                <li><a href="contact.php" class="hover:text-green-400 transition-colors">Contact us</a></li>
            </ul>
        </div>

        <!-- Our Services -->
        <div>
            <h4 class="text-green-300 font-semibold mb-4">Our Services</h4>
            <ul class="space-y-2">
                <li><a href="book-store.php" class="hover:text-green-400 transition-colors">Patent Grant Support</a></li>
                <li><a href="Publications.php" class="hover:text-green-400 transition-colors">Text Book Publication</a></li>
                <li><a href="event.php" class="hover:text-green-400 transition-colors">Journal Publication</a></li>
                <li><a href="patent.php" class="hover:text-green-400 transition-colors">PhD Assistance</a></li>
                <li><a href="patent.php" class="hover:text-green-400 transition-colors">Academic Events Management</a></li>
            </ul>
        </div>

        <!-- Newsletter & Social -->
        <div>
            <h4 class="text-green-300 font-semibold mb-4">Newsletter</h4>
            <div class="flex space-x-3 mb-4">
                <a href="javascript:;" class="w-8 h-8 rounded-full flex justify-center items-center bg-blue-500 hover:bg-blue-400 transition-all"><i class="fab fa-facebook-f text-white"></i></a>
                <a href="javascript:;" class="w-8 h-8 rounded-full flex justify-center items-center bg-pink-500 hover:bg-pink-400 transition-all"><i class="fab fa-instagram text-white"></i></a>
                <a href="javascript:;" class="w-8 h-8 rounded-full flex justify-center items-center bg-blue-700 hover:bg-blue-600 transition-all"><i class="fab fa-linkedin-in text-white"></i></a>
                <a href="javascript:;" class="w-8 h-8 rounded-full flex justify-center items-center bg-red-600 hover:bg-red-500 transition-all"><i class="fab fa-youtube text-white"></i></a>
            </div>
            <p class="text-gray-200"><strong>Address:</strong> 92 A, Sanganoor Rd, Ganapathy, Coimbatore, Tamil Nadu 641006</p>
            <p class="text-gray-200"><strong>Contact:</strong> +91 99443 07413 | <strong>Email:</strong> pencilbitz@gmail.com</p>
        </div>
    </div>

    <div class="text-center mt-8 text-gray-300 text-sm relative z-10">
        &copy; <?php echo date('Y'); ?> <a href="https://www.pencilbitz.com" class="underline hover:text-white">pencilbitz</a> | Terms | Privacy | Cookies
    </div>
</footer>

<style>
@keyframes animateGradient {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.animate-animateGradient {
    background-size: 300% 300%;
    animation: animateGradient 15s ease infinite;
}
</style>

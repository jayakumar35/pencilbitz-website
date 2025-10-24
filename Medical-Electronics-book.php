<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ========== Meta Tags ========== -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Pencil Bitz">

  <!-- ========== Page Title ========== -->
  <title>Book Page</title>

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
  <script src="https://kit.fontawesome.com/3708edbb88.js" crossorigin="anonymous"></script>



  </script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <!-- navbar file -->
  <?php require_once "navbar.php"; ?>
  <!-- navbar file  -->

  <div  style="max-width: 1520px; background-image: none;" class="container my-10 ">
    <div class="row mx-auto  shadow-xl rounded-lg p-2 flex flex-col md:flex-row">
    <nav class="mb-6 bg-gray-50 rounded-lg px-4 py-3 ">
      <ol class="flex flex-wrap items-center text-gray-700 space-x-2 text-sm font-medium">
      <li class="flex items-center">
        <a href="index.php" class="hover:underline text-blue-600 flex items-center">
        <i class="fas fa-home mr-1"></i> Home
        </a>
        <span class="mx-2 text-gray-400"><i class="fas fa-chevron-right"></i></span>
      </li>
      <li class="flex items-center">
        <a href="book-store.php" class="hover:underline text-blue-600 flex items-center">
        <i class="fas fa-book mr-1"></i> Book Store
        </a>
        <span class="mx-2 text-gray-400"><i class="fas fa-chevron-right"></i></span>
      </li>
    <li class="flex items-center">
      <a href="strategic-human-resource-management-book.php" class="hover:underline text-blue-600 flex items-center">
      <i class="fas fa-microscope mr-1"></i>
      <i class="fas fa-heartbeat mr-1"></i>
      Medical Electronics
      </a>
      <span class="mx-2 text-gray-400"><i class="fas fa-chevron-right"></i></span>
    </li>
    </ol>
    </nav>

      <!-- Left: Multiple Images (Flipkart style) -->
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 flex flex-row items-center md:items-start">
        <div class="flex flex-col gap-2 mb-4">
          <!-- Thumbnails -->
          <img
        src="assets/img/new/book-page/Medical Electronics-p1.png"
        class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 object-contain rounded border-2 cursor-pointer bg-white border-gray-200 transition-all"
        style="image-rendering: auto;"
        onclick="
          document.getElementById('main-book-img').src=this.src;
          // Remove highlight from all thumbnails
          var thumbs = this.parentElement.querySelectorAll('img');
          thumbs.forEach(function(img) {
            img.classList.remove('border-red-600');
            img.classList.add('border-gray-200');
          });
          // Add highlight to clicked thumbnail
          this.classList.remove('border-gray-200');
          this.classList.add('border-red-600');
        "
        alt="Thumbnail 1">
          <img
        src="assets/img/new/book-page/Medical Electronics-p2.png"
        class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 object-contain rounded border-2 cursor-pointer bg-white border-gray-200 transition-all"
        style="image-rendering: auto;"
        onclick="
          document.getElementById('main-book-img').src=this.src;
          var thumbs = this.parentElement.querySelectorAll('img');
          thumbs.forEach(function(img) {
            img.classList.remove('border-red-600');
            img.classList.add('border-gray-200');
          });
          this.classList.remove('border-gray-200');
          this.classList.add('border-red-600');
        "
        alt="Thumbnail 2">
                  <img
        src="assets/img/new/book-page/Medical Electronics-p4.jpg"
        class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 object-contain rounded border-2 cursor-pointer bg-white border-gray-200 transition-all"
        style="image-rendering: auto;"
        onclick="
          document.getElementById('main-book-img').src=this.src;
          var thumbs = this.parentElement.querySelectorAll('img');
          thumbs.forEach(function(img) {
            img.classList.remove('border-red-600');
            img.classList.add('border-gray-200');
          });
          this.classList.remove('border-gray-200');
          this.classList.add('border-red-600');
        "
        alt="Thumbnail 2">
          <img
        src="assets/img/new/book-page/Medical Electronics-p5.jpg"
        class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 object-contain rounded border-2 cursor-pointer bg-white border-gray-200 transition-all"
        style="image-rendering: auto;"
        onclick="
          document.getElementById('main-book-img').src=this.src;
          var thumbs = this.parentElement.querySelectorAll('img');
          thumbs.forEach(function(img) {
            img.classList.remove('border-red-600');
            img.classList.add('border-gray-200');
          });
          this.classList.remove('border-gray-200');
          this.classList.add('border-red-600');
        "
        alt="Thumbnail 2">

        </div>
        <!-- Main Book Image -->
        <img
          id="main-book-img"
          src="assets/img/new/book-page/Medical Electronics-p1.png"
          class="w-75 h-auto sm:w-56 sm:h-56 md:w-72 md:h-72 object-contain rounded border shadow-lg p-3 m-2 border-gray-200 mb-2 transition-all"
          alt="Book Main Image"
          style="image-rendering: auto;">
      </div>
      <!-- Right: Book Details -->
      <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6 flex flex-col justify-between pl-0 md:pl-8 mt-6 md:mt-0">
        <div>
          <h2 id="book-name" class="text-3xl font-semibold text-red-600 mb-2">Medical Electronics</h2>
          <div class="mb-3">
            <h5 class="text-lg font-semibold text-gray-700 mb-1 underline">Authors</h5>
            <ul class="list-disc list-inside text-gray-700">
                <li class="uppercase">Dr. M.Kavitha</li>
              <li><div class="mb-2 text-gray-800">ISBN: <span class="font-mono">978-93-48556-31-8| 2025 |</span></div></li>
            </ul>
          </div>
        <!-- Book More Details -->
        <div class="mt-3 border-t pt-2">
            <h3 class="text-xl font-semibold mb-2">Key Features</h3>
            <ul class="list-disc list-inside text-gray-700 mb-2 text-md ps-3 text-justify text-sm sm:text-base">
            <li>Comprehensive introduction to medical electronics and its applications.</li>
            <li>Explains biomedical sensors, transducers, and instrumentation in detail.</li>
            <li>Covers diagnostic and therapeutic equipment such as ECG, EEG, and defibrillators.</li>
            <li>Focus on safety standards and regulations in medical electronics.</li>
            <li class="hidden" id="more-features">
              Includes block diagrams and circuit explanations for key medical devices.<br>
              Discusses patient monitoring systems and imaging technologies.<br>
              Real-world examples and case studies for practical understanding.<br>
              Useful for students, educators, and professionals in biomedical engineering.<br>
              Practice questions and review exercises at the end of each chapter.
            </li>
            </ul>
          <button id="read-more-btn" class="text-blue-500 text-lg  focus:outline-none" onclick="toggleFeatures()">Read more...</button>
          <script>
            function toggleFeatures() {
              var more = document.getElementById('more-features');
              var btn = document.getElementById('read-more-btn');
              if (more.classList.contains('hidden')) {
          more.classList.remove('hidden');
          btn.textContent = 'Read less';
              } else {
          more.classList.add('hidden');
          btn.textContent = 'Read more...';
              }
            }
          </script>
        </div>
            <div class="text-2xl font-bold text-purple-900 mb-3">
            <p class="text-black-400 font-medium ">MRP: <span class="text-gray-600 mb-2"> ₹1013</span></p>
           
            <span class="text-base text-gray-500 line-through ml-2">₹1113</span>
            <span class="text-xs text-gray-600 ml-2">(Inclusive of all taxes)</span>
            </div>
            <a href="Medical-Electronics-order.php" class="mt-2 inline-block w-full md:w-auto text-white bg-red-600 font-bold py-2 px-6 rounded transition text-center hover:text-white hover:bg-red-800">
            <span class="mr-2"><i class="fas fa-arrow-right"></i></span>Buy Now  
            </a>
        </div>
        <!-- Product Details Section -->
        <div class="mt-6 pt-4 border border-gray-200 rounded-t-lg ps-3 shadow-md">
          <h3 class="text-lg font-semibold mb-2 border border-start inline bg-gray-200 text-gray-900 p-2 py-2 rounded-t">Product Details</h3>
          <ul class="list-disc list-inside text-gray-700 text-sm space-y-1 mt-2 text-justify text-sm sm:text-base">
            <li><span class="font-semibold">Publisher:</span> Pencil Bitz Publications</li>
            <li><span class="font-semibold">Edition:</span> 1st Edition</li>
            <li><span class="font-semibold">Language:</span> English</li>
            <li><span class="font-semibold">Binding:</span> Paperback</li>
            <li><span class="font-semibold">Pages:</span> 193</li>
            <li><span class="font-semibold">Dimensions:</span> 24 x 18 x 1.5 cm</li>
            <li><span class="font-semibold">Weight:</span> 250g</li>
          </ul>
        </div>

        <!-- Social Media & Contact -->
        <div class="mt-8 flex flex-col md:flex-row md:items-center gap-4">
          <div class="flex gap-4">
            <a href="https://wa.me/919944307413?text=Hello%2C%20I%20would%20like%20to%20order%20Cloud%20Computing%20book." target="_blank" class="text-green-600 text-2xl" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.facebook.com/pencilbitz" target="_blank" class="text-blue-700 text-2xl" title="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/pencilbitz" target="_blank" class="text-pink-500 text-2xl" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="mailto:info@pencilbitz.com" class="text-yellow-500 text-2xl" title="Email"><i class="fas fa-envelope"></i></a>
            <a href="tel:+919944307413" class="text-blue-700 text-2xl" title="Call"><i class="fas fa-phone-alt"></i></a>
          </div>
          <div class="text-sm text-gray-500 mt-2 md:mt-0 md:ml-6">
            For bulk or institutional orders, <a href="contact.php" class="text-primary underline">contact us</a>.
          </div>
        </div>
        <div class="mt-4 text-sm text-gray-600">
          <span class="font-semibold">Contact:</span> +91 99443 07413 | <span class="font-semibold">Email:</span> info@pencilbitz.com
        </div>
      </div>
    </div>
  </div>
</body>

</html>

</div>
</body>
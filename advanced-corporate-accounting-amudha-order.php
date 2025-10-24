<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ========== Meta Tags ========== -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Pencil Bitz">

  <!-- ========== Page Title ========== -->
  <title>Book Order Page</title>

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
</head>

<body class="bg-gray-100 ">
  <div class="row mx-auto">
    <nav class="mb-6 rounded-lg px-4 py-3">
      <ol class="flex items-center text-gray-700 space-x-2 text-sm font-medium">
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
      <a href="advanced-corporate-accounting-amudha-book.php" class="hover:underline text-blue-600 flex items-center">
        <i class="fas fa-building mr-1"></i>
        <i class="fas fa-coins mr-1"></i>
       Advanced Corporate Accounting
      </a>
      <span class="mx-2 text-gray-400"><i class="fas fa-chevron-right"></i></span>
    </li>
        <li class="flex items-center">
          <span class="flex items-center text-blue-600">
            <i class="fas fa-shopping-cart mr-1"></i> Order
          </span>
        </li>
      </ol>
    </nav>
  </div>
    
  <div class="flex items-center justify-center min-h-screen">
    <div style="background-image: none;"  class="container max-w-lg">
      <div class="bg-white shadow-xl rounded-lg p-8 flex flex-col items-center">
        <img src="assets/img/new/book-page/advanced-corporate-accounting-amudha-p3.png" class="w-100 h-auto rounded border-0 shadow-md mb-4" alt="Cloud Computing Book">
        <h2 id="book-name" class="text-2xl font-bold mt-2 mb-4 text-center"> Advanced Corporate Accounting </h2>
        <h2 class="fw-bold fs-3 text-gray-800 mb-3">Book Order</h2>
        <div class="w-full space-y-4">
          <div>
            <label class="block text-gray-700 font-semibold mb-1">Name</label>
            <input id="name" type="text" class="w-full border border-gray-300 rounded p-2" placeholder="Enter your name" />
          </div>
          <div>
            <label class="block text-gray-700 font-semibold mb-1">Address</label>
            <input id="address" type="text" class="w-full border border-gray-300 rounded p-2" placeholder="Enter your address" />
          </div>
          <div>
            <label class="block text-gray-700 font-semibold mb-1">Contact Number</label>
            <input id="contact" type="text" class="w-full border border-gray-300 rounded p-2" placeholder="Enter your contact number" />
          </div>
          <div>
            <label class="block text-gray-700 font-semibold mb-1">Order Quantity</label>
            <input id="quantity" type="number" min="1" class="w-full border border-gray-300 rounded p-2" placeholder="Enter quantity" />
          </div>
        </div>
        <button onclick="sendWhatsAppOrder()" class="mt-6 w-full bg-green-600 text-white font-bold py-2 px-4 rounded hover:bg-green-700 transition">
          Buy on WhatsApp
        </button>
        <div id="formSuccess" class="alert alert-success mt-3 d-none"></div>
        <div class="custom-icons mt-4 flex space-x-4">
          <a href="https://wa.me/919944307413?text=Hello%2C%20I%20would%20like%20to%20inquire%20about%20your%20services." target="_blank" class="text-green-600 text-2xl">
            <i class="fab fa-whatsapp "></i>
          </a>
          <a href="tel:+919944307413" class="text-blue-600 text-2xl">
            <i class="fas fa-phone mt-2"></i>
          </a>
        </div>
        <div class="mt-4 text-sm text-gray-500 text-center">
          <i class="fas fa-info-circle me-1"></i>
          For bulk or institutional orders, <a href="contact.php" class="text-primary underline">contact us</a>.
        </div>
      </div>
    </div>
  </div>
</body>

</html>

</div>
</body>
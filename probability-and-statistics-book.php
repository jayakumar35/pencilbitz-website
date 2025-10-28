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

  <div style="max-width: 1520px; background-image: none;" class="container my-10 ">
    <div class="row mx-auto  shadow-xl rounded-lg flex flex-col md:flex-row">
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
            <a href="artifical-intelligence-in-modern-approach-book.php" class="hover:underline text-blue-600 flex items-center">
              <i class="fas fa-building mr-1"></i>
              <i class="fas fa-coins mr-1"></i>
              Probability and Statistics
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
            src="assets/img/new/book-page/probability-and-statistics-1.png"
            class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 object-contain rounded border-2 cursor-pointer bg-white border-gray-200 transition-all"
            style="image-rendering: auto;"
            onclick="
          document.getElementById('main-book-img').src=this.src;
          // Remove highlight from all thumbnails
          var thumbs = this.parentElement.querySelectorAll('img');
          thumbs.forEach(function(img) {
            img.classList.remove('border-orange-500');
            img.classList.add('border-gray-200');
          });
          // Add highlight to clicked thumbnail
          this.classList.remove('border-orange-500');
          this.classList.add('border-gray-600');
        "
            alt="Thumbnail 1">
          <img
            src="assets/img/new/book-page/probability-and-statistics-2.png"
            class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 object-contain rounded border-2 cursor-pointer bg-white border-gray-200 transition-all"
            style="image-rendering: auto;"
            onclick="
          document.getElementById('main-book-img').src=this.src;
          var thumbs = this.parentElement.querySelectorAll('img');
          thumbs.forEach(function(img) {
            img.classList.remove('border-orange-500');
            img.classList.add('border-gray-200');
          });
          this.classList.remove('border-orange-500');
          this.classList.add('border-gray-600');
        "
            alt="Thumbnail 2">
          <img
            src="assets/img/new/book-page/probability-and-statistics-3.png"
            class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 object-contain rounded border-2 cursor-pointer bg-white border-gray-200 transition-all"
            style="image-rendering: auto;"
            onclick="
          document.getElementById('main-book-img').src=this.src;
          var thumbs = this.parentElement.querySelectorAll('img');
          thumbs.forEach(function(img) {
            img.classList.remove('border-orange-500');
            img.classList.add('border-gray-200');
          });
          this.classList.remove('border-gray-200');
          this.classList.add('border-gray-600');
        "
            alt="Thumbnail 2">




        </div>
        <!-- Main Book Image -->
        <img
          id="main-book-img"
          src="assets/img/new/book-page/probability-and-statistics-3.png"
          class="w-75 h-auto sm:w-56 sm:h-56 md:w-72 md:h-72 object-contain rounded border shadow-lg p-3 m-2 border-gray-200 mb-2 transition-all"
          alt="Book Main Image"
          style="image-rendering: auto;">
      </div>
      <!-- Right: Book Details -->
      <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6 flex flex-col justify-between pl-0 md:pl-8 mt-6 md:mt-0">
        <div>
          <h2 id="book-name" class="text-3xl font-semibold text-sky-500 mb-2">Probability and Statistics </h2>
          <div class="mb-3">
            <h5 class="text-lg font-semibold text-gray-700 mb-1 underline">Authors</h5>
            <ul class="list-disc list-inside text-gray-700">
              <li class="uppercase">Mrs.SANGEETHA B | Dr.R MEGANATHAN,Mrs.MALATHI K | Dr.R SATHIYA SHANTHI" </li>
              <li>
                <div class="mb-2 text-gray-800">ISBN: <span class="font-mono">978-81-992230-2-8| 2025 |</span></div>
              </li>
            </ul>
            <div class="flex flex-wrap gap-4 items-center mt-3">
              <!-- Flipkart -->
              <a href="https://www.flipkart.com/artificial-intelligence-modern-approach-1-disc/p/itm60501f39015ae?pid=9788199223097" target="_blank"
                class="flex items-center gap-2 text-blue-600 hover:text-blue-800 font-semibold transition">
                <i data-lucide="shopping-bag"></i>
                <span>Flipkart</span>
              </a>

              <!-- Amazon -->
              <a href="https://www.amazon.in/dp/819922309X" target="_blank"
                class="flex items-center gap-2 text-yellow-500 hover:text-yellow-700 font-semibold transition">
                <i data-lucide="shopping-cart"></i>
                <span>Amazon</span>
              </a>

              <!-- Get Certificate -->
              <!-- Trigger Button -->
              <div class="flex justify-center">
                <button id="openPopupBtn"
                  class="px-4 py-1 bg-sky-500 text-white text-lg rounded-lg shadow hover:bg-sky-600 transition">
                  Get Certificate
                </button>
              </div>

              <!-- Popup Modal -->
              <div id="certificatePopup"
                class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50 transition">
                <div class="bg-white p-6 rounded-2xl shadow w-full max-w-md relative">

                  <!-- Close Button -->
                  <button id="closePopupBtn"
                    class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-xl font-bold">&times;</button>

                  <h2 class="text-xl font-semibold mb-4">Get Your Certificate</h2>

                  <label class="block mb-3">
                    <span class="text-sm text-gray-600">Enter Author Phone Number</span>
                    <input id="authorPhoneNumber" type="text" maxlength="10"
                      placeholder="Enter 10-digit phone number"
                      class="mt-2 block w-full rounded border border-gray-300 p-2 focus:ring-2 focus:ring-indigo-500" />
                  </label>

                  <div id="message" class="text-sm text-red-600 mb-3 hidden"></div>

                  <button id="verifyBtn"
                    class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                    Verify
                  </button>

                  <!-- Download Section (Hidden Initially) -->
                  <div id="downloadSection" class="mt-5 hidden">
                    <p class="text-sm text-gray-600 mb-2">Download your certificate:</p>

                    <!-- Author 1 -->
                    <div id="author1" class="hidden flex gap-4 flex-wrap">
                      <a href="assets/img/books-certificate/Artificial Intelligence in Modern Approach a1.pdf" download
                        class="px-3 py-2 bg-green-600 text-white rounded hover:bg-green-700">Dr Jothimani Ponnusamy - PDF</a>
                      <!-- <a href="assets/img/books-certificate/author1.jpg" download
          class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Dr. Vinoth Kumar J - JPG</a> -->
                    </div>

                    <!-- Author 2 -->
                    <div id="author2" class="hidden flex gap-4 flex-wrap">
                      <a href="assets/img/books-certificate/Artificial Intelligence in Modern Approach a2.pdf" download
                        class="px-3 py-2 bg-green-600 text-white rounded hover:bg-green-700"> Biju Thomas - PDF</a>
                      <!-- <a href="assets/img/books-certificate/author2.jpg" download
          class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Dr. Saravanan - JPG</a> -->
                    </div>

                    <!-- Author 3 -->
                    <div id="author3" class="hidden flex gap-4 flex-wrap">
                      <a href="assets/img/books-certificate/Artificial Intelligence in Modern Approach a3.pdf" download
                        class="px-3 py-2 bg-green-600 text-white rounded hover:bg-green-700"> P.Sakthiprakash - PDF</a>
                      <!-- <a href="assets/img/books-certificate/author3.jpg" download
          class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Dr. Priya Kumar - JPG</a> -->
                    </div>

                    <!-- Author 4 -->
                    <div id="author4" class="hidden flex gap-4 flex-wrap">
                      <a href="assets/img/books-certificate/Artificial Intelligence in Modern Approach a4.pdf" download
                        class="px-3 py-2 bg-green-600 text-white rounded hover:bg-green-700">Ashok Kumar Manda - PDF</a>
                      <!-- <a href="assets/img/books-certificate/author4.jpg" download
          class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Dr. David Raj - JPG</a> -->
                    </div>
                  </div>
                </div>
              </div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  // Popup controls
                  const openPopupBtn = document.getElementById("openPopupBtn");
                  const closePopupBtn = document.getElementById("closePopupBtn");
                  const certificatePopup = document.getElementById("certificatePopup");

                  openPopupBtn.addEventListener("click", () => {
                    certificatePopup.classList.remove("hidden");
                    certificatePopup.classList.add("flex");
                  });

                  closePopupBtn.addEventListener("click", () => {
                    certificatePopup.classList.add("hidden");
                    certificatePopup.classList.remove("flex");

                    // Reset form when popup closes
                    resetForm();
                  });

                  // Author phone verification
                  const input = document.getElementById("authorPhoneNumber");
                  const message = document.getElementById("message");
                  const verifyBtn = document.getElementById("verifyBtn");
                  const downloadSection = document.getElementById("downloadSection");

                  // Author database (phone => section ID)
                  const authors = {
                    "8056742812": "author1",
                    "9496720475": "author2",
                    "9443368277": "author3",
                    "8985359277": "author4"
                  };

                  verifyBtn.addEventListener("click", () => {
                    const phone = input.value.trim();
                    const phoneRegex = /^[0-9]{10}$/;

                    if (!phoneRegex.test(phone)) {
                      message.textContent = "Please enter a valid 10-digit phone number.";
                      message.classList.remove("hidden");
                      return;
                    }

                    // Hide all author sections before showing correct one
                    Object.values(authors).forEach(id => {
                      document.getElementById(id).classList.add("hidden");
                    });

                    if (authors[phone]) {
                      message.classList.add("hidden");
                      downloadSection.classList.remove("hidden");
                      document.getElementById(authors[phone]).classList.remove("hidden");

                      input.disabled = true;
                      verifyBtn.disabled = true;
                      verifyBtn.textContent = "Verified ✅";

                      // Add click listener to reset form when a download link is clicked
                      document.getElementById(authors[phone]).querySelectorAll("a").forEach(link => {
                        link.addEventListener("click", () => {
                          setTimeout(() => resetForm(), 100); // small delay to allow download
                        });
                      });

                    } else {
                      message.textContent = "Invalid Author Phone Number!";
                      message.classList.remove("hidden");
                    }
                  });

                  // Hide error message when typing again
                  input.addEventListener("input", () => {
                    message.classList.add("hidden");
                  });

                  function resetForm() {
                    input.value = "";
                    input.disabled = false;
                    verifyBtn.disabled = false;
                    verifyBtn.textContent = "Verify";
                    message.classList.add("hidden");
                    downloadSection.classList.add("hidden");
                    Object.values(authors).forEach(id => {
                      document.getElementById(id).classList.add("hidden");
                    });
                  }
                });
              </script>
            </div>

          </div>
          <!-- Book More Details -->
          <div class="text-2xl font-bold text-purple-900 mb-3">
            <p class="text-black-400 font-medium ">MRP: <span class="text-gray-600 mb-2"> ₹1126</span></p>

            <span class="text-base text-gray-500 line-through ml-2">₹1226</span>
            <span class="text-xs text-gray-600 ml-2">(Inclusive of all taxes)</span>
          </div>
          <a href="probability-and-statistics-order.php" class="mt-2 inline-block w-full md:w-auto text-white bg-orange-500 font-bold py-2 px-6 rounded transition text-center hover:text-white hover:bg-yellow-600">
            <span class="mr-2"><i class="fas fa-arrow-right"></i></span>Buy Now
          </a>
        </div>
        <div class="mt-6 pt-4 border border-gray-200 rounded-t-lg ps-3 shadow-md">
          <h2 class="text-2xl font-semibold text-indigo-700 mb-3 border-b pb-2">📘 Summary</h2>
          <p class="text-gray-700 leading-relaxed p-2">
            <span class="font-medium text-gray-800">Probability and statistics study randomness, data, and uncertainty, using models and inference to describe patterns and make predictions. Core ideas include distributions, expected value, variance, hypothesis testing, and confidence intervals to quantify what we know and what we don’t.
          </p>
        </div>

        <!-- Product Details Section -->
        <div class="mt-6 pt-4 border border-gray-200 rounded-t-lg ps-3 shadow-md">
          <h3 class="text-xl font-semibold mb-2 border border-start inline bg-gray-200 text-gray-900 p-2 py-2 rounded-t">Product Details</h3>
          <ul class="list-disc list-inside text-gray-700 text-md space-y-1 mt-2 text-justify text-sm sm:text-base">
            <li><span class="font-semibold">Publisher:</span> Pencil Bitz Publications</li>
            <li><span class="font-semibold">Edition:</span> 1st Edition</li>
            <li><span class="font-semibold">Language:</span> English</li>
            <li><span class="font-semibold">Binding:</span> paperback</li>
            <li><span class="font-semibold">Pages:</span>213</li>
            <li><span class="font-semibold">Dimensions:</span> 24 x 18 x 1.5 cm</li>
            <li><span class="font-semibold">Weight:</span> 320g</li>
          </ul>
        </div>

        <!-- Social Media & Contact -->
        <div class="mt-8 flex flex-col md:flex-row md:items-center gap-4">
          <div class="flex gap-4 ps-5">
            <a href="https://wa.me/919944307413?text=Hello%2C%20I%20would%20like%20to%20order%20Cloud%20Computing%20book." target="_blank" class="text-green-600 text-2xl" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.facebook.com/pencilbitz" target="_blank" class="text-blue-600 text-2xl" title="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/pencilbitz" target="_blank" class="text-pink-500 text-2xl" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="mailto:info@pencilbitz.com" class="text-orange-500 text-2xl" title="Email"><i class="fas fa-envelope"></i></a>
            <a href="tel:+919944307413" class="text-blue-600 text-2xl" title="Call"><i class="fas fa-phone-alt"></i></a>
          </div>
          <div class="text-sm text-gray-500 mt-2 md:mt-0 md:ml-6">
            For bulk or institutional orders, <a href="contact.php" class="text-primary underline">contact us</a>.
          </div>
        </div>
        <div class="mt-4 text-sm text-gray-600">
          <span class="font-semibold">Contact:</span> +91 99443 07413 | <span class="font-semibold">Email:</span> Eventmanager@pencilbitz.com
        </div>
      </div>
    </div>
  </div>
</body>

</html>

</div>
</body>
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


    <style>
        .mycol {
            background: linear-gradient(to right, #00bfae, #004d99) !important;
            -webkit-background-clip: text;
            color: transparent;
            margin-left: 5px;
        }

        /* Common button styling */
        .btn-small {

            padding: 5px 15px;
            font-size: 14px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            color: #fff;
            background-size: 200% auto;
            /* For smooth transition */
            transition: background-position 0.3s ease, color 0.3s ease;
        }

        /* Blue and red merging gradient button */
        .btn-blue-red-gradient {
            background-image: linear-gradient(to right, #0b57e3, #e30b0b);
            background-position: 0% 0%;
        }

        .btn-blue-red-gradient:hover {
            background-position: 100% 0%;
            color: #fff !important;
        }
    </style>
    <!-- ========== End Stylesheet ========== -->

</head>

<body>

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->


    <!-- Navbar -->
    <?php require_once "navbar.php"; ?>
    <!-- End  file  -->
    <!-- Home page 1 -->
    <div class="container ">
        <!-- Book Order - Booking Process Section -->
        <div class="container-event overflow-hidden ">
            <div class="row align-items-center py-3">
                <!-- Book Image / Illustration -->
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <!-- Make the image clickable and open a larger view in a modal -->
                        <img src="assets/img/book-order.jpg" alt="Book Order" class="img-fluid rounded-4 shadow-lg border border-0 shadow-lg cursor-pointer"
                             style="max-height: 420px; object-fit: cover; cursor:pointer;"
                             id="bookImage">
                    </div>
                </div>
                <!-- Booking Process Details -->
                <div class="col-lg-6 col-md-12">
                    <div class="event-content px-2">
                        <div class="mb-4">
                            <h2 class="fw-bold fs-3 text-gray-800 mb-3">Book Order</h2>
                        </div>
                        <form id="bookOrderForm" class="space-y-3">
                            <div class="mb-2">
                                <label for="book_title" class="form-label fw-bold">Book Title</label>
                                <input type="text" class="form-control" id="book_title" name="book_title" required placeholder="Enter the book title">
                            </div>
                            <div class="mb-2">
                                <label for="name" class="form-label fw-bold">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your name">
                            </div>
                            <div class="mb-2">
                                <label for="phone" class="form-label fw-bold">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required placeholder="Enter your phone number">
                            </div>
                            <div class="mb-2">
                                <label for="quantity" class="form-label fw-bold">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" min="1" value="1" required placeholder="Enter quantity">
                            </div>
                            <button type="submit"
                                onclick="handleBookNowClick(event)"
                                class="btn-small btn-blue-red-gradient shadow fw-bold px-4 py-2 flex items-center gap-2 transition-all duration-200 hover:scale-105">
                                Book Now <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                            <script>
                                function handleBookNowClick(e) {
                                    e.preventDefault();
                                    document.getElementById('bookOrderForm').dispatchEvent(new Event('submit', {
                                        cancelable: true,
                                        bubbles: true
                                    }));
                                }
                            </script>
                        </form>
                        <div id="formSuccess" class="alert alert-success mt-3 d-none"></div>
                        <div class="custom-icons mt-3">
                            <a href="https://wa.me/919944307413?text=Hello%2C%20I%20would%20like%20to%20inquire%20about%20your%20services." target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="tel:+919944307413">
                                <i class="fas fa-phone-alt"></i>
                            </a>
                        </div>
                        <div class="mt-3 text-sm text-gray-500">
                            <i class="fas fa-info-circle me-1"></i>
                            For bulk or institutional orders, <a href="contact.php" class="text-primary underline">contact us</a>.
                        </div>
                    </div>
                </div>
                <script>
                    document.getElementById('bookOrderForm').addEventListener('submit', function(e) {
                        e.preventDefault();
                        // Collect form data
                        var bookTitle = document.getElementById('book_title').value;
                        var name = document.getElementById('name').value;
                        var phone = document.getElementById('phone').value;
                        var quantity = document.getElementById('quantity').value;

                        // WhatsApp message
                        var waMsg = encodeURIComponent(
                            "Book Title: " + bookTitle + "\n" +
                            "Name: " + name + "\n" +
                            "Phone: " + phone + "\n" +
                            "Quantity: " + quantity
                        );
                        var waUrl = "https://wa.me/919944307413?text=" + waMsg;

                        // Directly redirect to WhatsApp with the message
                        window.location.href = waUrl;
                    });

                    // Modal logic for book image
                    document.addEventListener('DOMContentLoaded', function() {
                        var img = document.getElementById('bookImage');
                        var modal = document.getElementById('bookImageModal');
                        var modalImg = document.getElementById('modalBookImg');
                        var closeBtn = document.getElementById('closeBookModal');

                        img.onclick = function() {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                        }
                        closeBtn.onclick = function() {
                            modal.style.display = "none";
                        }
                        window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </div>

    <!-- Modal for Book Image -->
    <div id="bookImageModal" style="display:none; position:fixed; z-index:9999; left:0; top:0; width:100vw; height:100vh; background:rgba(0,0,0,0.8); align-items:center; justify-content:center;">
        <span id="closeBookModal" style="position:absolute;top:30px;right:40px;font-size:40px;color:#fff;cursor:pointer;">&times;</span>
        <img id="modalBookImg" src="" alt="Book Image" style="display:block; margin:auto; max-width:90vw; max-height:80vh; border-radius:12px; box-shadow:0 0 30px #000;">
    </div>
    <!-- Start Footer 
    ============================================= -->
    <?php require_once "footer.php"; ?>

    </div>
</body>
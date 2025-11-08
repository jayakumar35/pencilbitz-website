 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pencil Bitz">
    <title>Event Page</title>
    <link rel="shortcut icon" href="assets/img/PB-new-logo.png" type="image/x-icon">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3708edbb88.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar -->
    <?php require_once "navbar.php"; ?>

    <!-- Event Section -->
    <div class="container py-5">
        <div class="row align-items-center">

            <!-- Event Image -->
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 text-center">
                <img src="assets/img/upcomeing-event/Sanketika-Vidya-Parishad-Engineering-College2-28-10.jpg" 
                     alt="Event Image" class="img-fluid rounded-4 shadow-lg" style="max-height: 600px; object-fit: cover;">
            </div>

            <!-- Event Details -->
            <div class="col-lg-6 col-md-12">
                <div class="event-content px-2 position-relative">
                    <h3 class="text-gray-500">College</h3>
                    <h1 class="text-gray-700 fw-semibold mb-3">SANKETIKA VIDYA PARISHAD ENGINEERING COLLEGE</h1>

                    <h3 class="text-gray-500">Topic</h3>
                    <h1 class="text-red-500 fw-semibold mb-3">AI Tools For Creativity, Invention And Innovation For The Nep 2020 Teachers</h1>

                    <h3 class="text-gray-500">Details</h3>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-calendar-alt me-2 text-primary"></i> <strong>Date:</strong> 26 December 2025</li>
                        <li class="mb-2"><i class="fas fa-clock me-2 text-primary"></i> <strong>Time:</strong> 6:30PM To 8:30PM</li>
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2 text-primary"></i> <strong>Location:</strong> Visakhapatnam, Andhra Pradesh</li>
                        <li class="mb-2"><i class="fas fa-user-tie me-2 text-primary"></i> <strong>Speaker:</strong> +91 77088 28673</li>
                    </ul>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-between flex-wrap gap-3">
                        <a  class="btn text-gray-800 font-semibold py-2 px-4 rounded shadow d-inline-flex align-items-center gap-2" href="https://forms.gle/4L7ijdDqMB5CLkNR9" 
                           class="btn btn-light shadow fw-bold px-4 py-2">
                            Register Now <i class="fas fa-arrow-right ms-2"></i>
                        </a>


                        <?php /*

                        <!-- Navigate to Certificate Page -->
                        <a href="/erode-sengunthar-engineering -college-event-cerificate-dowload.php" 
                           class="btn text-gray-800 font-semibold py-2 px-4 rounded shadow d-inline-flex align-items-center gap-2"
                           style="background: linear-gradient(to right, #a7f3d0,  #fbcfe8);">
                            <i class="fas fa-download"></i> Download Certificate
                        </a>
                        */ ?>
                    </div>

                    <p class="mt-4">
                        If you need an FDP, Workshop, or Seminar in association with Pencil Bitz,<br>
                        for your institution kindly contact 
                        <a href="tel:+919361313822" class="text-blue-600 underline">+91 77088 28673</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require_once "footer.php"; ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pencil Bitz Event</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome for icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    /* Body background animation */
    body {
      background: linear-gradient(270deg, #d9f99d, #bae6fd, #fbcfe8);
      background-size: 600% 600%;
      animation: gradientBG 15s ease infinite;
    }
    @keyframes gradientBG {
      0% {background-position: 0% 50%;}
      50% {background-position: 100% 50%;}
      100% {background-position: 0% 50%;}
    }

    /* Button hover gradient */
    .btn-gradient {
      transition: all 0.3s ease;
    }
    .btn-gradient:hover {
      transform: scale(1.05);
      background: linear-gradient(90deg, #bbf7d0, #93c5fd, #fbcfe8);
      color: #111827;
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    /* Circle container */
    .circle-container {
      position: relative;
      width: 400px;
      height: 400px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .company-logo {
      width: 150px;
      height: 150px;
      border-radius: 9999px;
      overflow: hidden;
      z-index: 10;
    }

    /* Content circle styling */
    .content-circle {
      position: absolute;
      width: 110px;
      height: 110px;
      border-radius: 9999px;
      background: linear-gradient(135deg, #d9f99d, #bae6fd, #fbcfe8);
      box-shadow: 0 10px 15px rgba(0,0,0,0.1);
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      font-size: 0.8rem;
      color: #1f2937;
      font-weight: 600;
      transform-origin: center;
      animation: orbit 28s linear infinite;
      transition: transform 0.3s, box-shadow 0.3s, background 0.3s;
      cursor: pointer;
    }

    .content-circle:hover {
      transform: scale(1.15) rotate(0deg);
      box-shadow: 0 15px 25px rgba(0,0,0,0.2);
      background: linear-gradient(135deg, #e0fdf4, #c7d2fe, #fcd5e0);
    }

    @keyframes orbit {
      0%   { transform: rotate(0deg) translate(0, -180px) rotate(0deg); }
      100% { transform: rotate(-360deg) translate(0, -180px) rotate(360deg); }
    }

    /* Staggered animation for circles */
    .circle-1 { animation-delay: 0s; }
    .circle-2 { animation-delay: 4s; }
    .circle-3 { animation-delay: 8s; }
    .circle-4 { animation-delay: 12s; }
    .circle-5 { animation-delay: 16s; }
    .circle-6 { animation-delay: 20s; }
    .circle-7 { animation-delay: 24s; }

    /* Right side content styling */
    .event-title {
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      font-size: 2.5rem;
      color: #065f46; /* dark green */
      margin-bottom: 0.5rem;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }

    .event-subtitle {
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 1.75rem;
      color: #b91c1c; /* red */
      margin-bottom: 1.25rem;
      letter-spacing: 0.5px;
    }

    .event-details li {
      font-family: 'Roboto', sans-serif;
      font-weight: 500;
      font-size: 1.1rem;
      color: #374151; /* dark gray */
      padding: 0.25rem 0;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .event-details li i {
      color: #2563eb; /* blue icon */
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center">

  <div class="max-w-7xl w-full flex flex-col lg:flex-row items-center lg:items-start gap-12 p-8">

    <!-- Left Side: Circles -->
    <div class="lg:w-3/5 flex justify-center items-center h-full">
      <div class="circle-container">
        <div class="company-logo">
          <img src="/assets/img/pencilbitz-logo.webp" alt="Pencil Bitz" class="w-full h-full object-cover">
        </div>

        <!-- Content Circles -->
        <div class="content-circle circle-1">Textbook Publications</div>
        <div class="content-circle circle-2">Patent Support</div>
        <div class="content-circle circle-3">Trademarks & Copyrights</div>
        <div class="content-circle circle-4">IEEE Conference</div>
        <div class="content-circle circle-5">Scopus Books</div>
        <div class="content-circle circle-6">Ph.D. Assistance</div>
        <div class="content-circle circle-7">Research Paper Writing</div>
      </div>
    </div>

    <!-- Right Side: Event Details -->
    <div class="lg:w-2/5 flex flex-col justify-between h-full">
      <div>
        <h2 class="event-title">ERODE SENGUNTHAR ENGINEERING COLLEGE</h2>
        <h3 class="event-subtitle">AI Tools For Education</h3>
        <ul class="event-details space-y-3">
          <li><i class="fas fa-calendar-alt"></i> <strong>Date:</strong> 02 November 2025</li>
          <li><i class="fas fa-clock"></i> <strong>Time:</strong> 6:00PM To 8:00PM</li>
          <li><i class="fas fa-map-marker-alt"></i> <strong>Location:</strong> Erode, Tamil Nadu</li>
          <li><i class="fas fa-user-tie"></i> <strong>Speaker:</strong> +91 77088 28673</li>
        </ul>
      </div>

      <!-- Download Certificate Button -->
      <div class="mt-9 flex justify-center">
        <a href="/assets/img/complete-event/certificate-import-image.png" download
           class="btn-gradient bg-gradient-to-r from-green-200 via-blue-200 to-pink-200 text-gray-800 font-semibold py-3 px-7 rounded-2xl shadow-lg flex items-center gap-2 text-lg">
          Download Certificate
          <i class="fas fa-download ml-2"></i>
        </a>
      </div>
    </div>

  </div>

</body>
</html> 

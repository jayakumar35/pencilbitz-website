<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pencil Bitz Event</title>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>
  /* Static light gradient background */
  body {
    background: linear-gradient(135deg, #f0fdf4, #dcfce7, #f3f4f6); /* soft light green + gray */
  }

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

  .content-circle {
    position: absolute;
    width: 130px;
    height: 130px;
    border-radius: 9999px;
    background: linear-gradient(135deg, #86efac, #4ade80); /* light green gradient */
    box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-size: 0.9rem;
    color: #065f46; /* dark green text */
    font-weight: 600;
    transform-origin: center;
    animation: chainOrbit 14s linear infinite;
    cursor: pointer;
    transition: transform 0.3s, box-shadow 0.3s, background 0.3s;
  }

  .content-circle:hover {
    transform: scale(1.15);
    box-shadow: 0 15px 25px rgba(0,0,0,0.25);
    background: linear-gradient(135deg, #a7f3d0, #22c55e); /* brighter green on hover */
  }

  @keyframes chainOrbit {
    0% { transform: rotate(0deg) translate(180px) rotate(0deg); }
    100% { transform: rotate(360deg) translate(180px) rotate(-360deg); }
  }

  .circle-1 { animation-delay: 0s; }
  .circle-2 { animation-delay: 2s; }
  .circle-3 { animation-delay: 4s; }
  .circle-4 { animation-delay: 6s; }
  .circle-5 { animation-delay: 8s; }
  .circle-6 { animation-delay: 10s; }
  .circle-7 { animation-delay: 12s; }

  .event-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 2.5rem;
    color: #065f46; /* dark green */
    margin-bottom: 0.5rem;
  }

  .event-subtitle {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 1.75rem;
    color: #16a34a; /* medium green */
    margin-bottom: 1.25rem;
    letter-spacing: 0.5px;
  }

  .event-details li {
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    font-size: 1.1rem;
    color: #1f2937;
    padding: 0.25rem 0;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .event-details li i {
    color: #22c55e; /* green icon */
  }

  .btn-gradient {
    transition: all 0.3s ease;
  }

  .btn-gradient:hover {
    transform: scale(1.05);
    background: linear-gradient(90deg, #86efac, #4ade80);
    color: #065f46;
    box-shadow: 0 10px 20px rgba(0,0,0,0.25);
  }
</style>
</head>
<body class="min-h-screen flex items-center justify-center">

<div class="max-w-7xl w-full flex flex-col lg:flex-row items-center lg:items-start gap-12 p-8">

  <!-- Left Side: Circle Chain -->
  <div class="lg:w-1/2 flex justify-center items-center h-full">
    <div class="circle-container">
      <div class="company-logo">
        <img src="/assets/img/pencilbitz-logo.webp" alt="Pencil Bitz" class="w-full h-full object-cover">
      </div>

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

    <div class="mt-9 flex justify-center">
      <a href="/assets/img/complete-event/certificate-import-image.png" download
         class="btn-gradient bg-gradient-to-r from-green-200 via-green-300 to-green-400 text-green-900 font-semibold py-3 px-7 rounded-2xl shadow-lg flex items-center gap-2 text-lg">
        Download Certificate
        <i class="fas fa-download ml-2"></i>
      </a>
    </div>
  </div>

</div>

</body>
</html>

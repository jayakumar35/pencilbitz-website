<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pencil Bitz">

    <!-- ========== Page Title ========== -->
    <title>Pencil Bitz</title>

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
    <link href="assets/css/our-company.css" rel="stylesheet">

</head>

<body>

    <div class="w-full bg-gray-100 border-b-4 border-gray-200 overflow-hidden relative rounded-3 text-center">
         <span class=" font-bold text-gray-700 mr-6 flex-shrink-0 "> Acquisition of Book Bytes International Publications by Pencil Bitz</span>
        <div id="news-ticker" class="whitespace-nowrap flex items-center h-12">
           
            <div id="news-ticker-content" class="inline-block"></div>
        </div>
    </div>
     <script>
        // News items array
        const newsItems = [
            "🎉 We hereby give formal notice that Pencil Bitz, a duly registered Eminent Edutech organization headquartered in South India, has acquired full ownership and operational control of Book Bytes International Publications!🎉"
        ];

        // Build the ticker content
        const tickerContent = document.getElementById('news-ticker-content');
        tickerContent.innerHTML = newsItems.map(item => `<span class="mx-8">${item}</span>`).join('');
        // Duplicate for seamless loop
        tickerContent.innerHTML += tickerContent.innerHTML;

        // Animation logic
        let ticker = document.getElementById('news-ticker-content');
        let tickerWidth = ticker.scrollWidth / 2;
        let pos = 0;
        function animateTicker() {
            pos -= 1; // speed
            if (Math.abs(pos) >= tickerWidth) pos = 0;
            ticker.style.transform = `translateX(${pos}px)`;
            requestAnimationFrame(animateTicker);
        }
        ticker.style.willChange = 'transform';
        animateTicker();
    </script>
    <style>
    #news-ticker {
        height: 3rem;
        line-height: 3rem;
        font-size: 1.1rem;
    }
    #news-ticker-content {
        display: inline-block;
        white-space: nowrap;
        transition: none;
    }
    </style>
</body>
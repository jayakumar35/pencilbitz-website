<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Keeping basic box styling for visual appeal */
        .box {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">
    <main class="max-w-8xl mx-auto px-4 py-8">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <?php
            // Sample event data - this is the source of your images and info
            $events = [
                // 29-10-2025
                [
                    'image' => 'assets/img/complete-event/21-july-25.png',
                    'title' => 'Teerthanker Mahaveer University',
                    'date' => '2025-07-21',
                    'location' => 'Moradabad, Uttar Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/21-july-25.jpeg',
                    'title' => 'TMU',
                    'date' => '2025-07-21',
                    'location' => 'Moradabad, Uttar Pradesh',
                ],

                [
                    'image' => 'assets/img/complete-event/14-july-25.png',
                    'title' => 'Haribhai V. Desai College of Arts and Commerce',
                    'date' => '2025-07-14',
                    'location' => 'pune, Maharashtra',
                ],
                [
                    'image' => 'assets/img/complete-event/07-july-25.png',
                    'title' => 'Vidya pratishthan polytechnic College',
                    'date' => '2025-07-07',
                    'location' => 'Indapur, Pune',
                ],




            ];

            // Generate event cards
            foreach ($events as $event) {
                $formattedDate = date('F j, Y', strtotime($event['date']));

                echo "
                <div class='box bg-white rounded-xl shadow-md overflow-hidden'>
                    <div class='relative overflow-hidden'>
                        <img src='{$event['image']}' alt='{$event['title']}' class='w-full h-fit object-cover transition-transform duration-500 hover:scale-105 border-0'>
                        <div class='absolute top-0 right-0 bg-indigo-600 text-white px-3 py-1 m-2 rounded-lg text-sm font-semibold'>
                            {$formattedDate}
                        </div>
                    </div>
                    <div class='p-4'>
                        <h3 class='text-lg font-bold text-gray-800 mb-2'>{$event['title']}</h3>
                        <div class='flex items-center text-gray-600 mb-3'>
                            <i class='fas fa-map-marker-alt mr-2 text-indigo-500'></i>
                            <span>{$event['location']}</span>
                        </div>
                    </div>
                </div>
                

                ";
            }
            ?>
        </div>
    </main>
</body>

</html>
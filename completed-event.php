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
                    'image' => 'assets/img/complete-event/29-oct-25.jpg',
                    'title' => "Sri Krishna Degree College ",
                    'date' => '2025-10-29',
                    'location' => ' Bengaluru, Karnataka',
                ],
                [
                    'image' => 'assets/img/complete-event/28-oct-25.jpg',
                    'title' => "Shree Venkateshwara Hi-Tech Engineering College ",
                    'date' => '2025-10-28',
                    'location' => 'Gobichettipalayam, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/27-oct-25.jpg',
                    'title' => "BGS First Grade College ",
                    'date' => '2025-10-27',
                    'location' => 'Mysore, Karnataka',
                ],
                 [
                    'image' => 'assets/img/complete-event/26-oct-25-1.jpg',
                    'title' => "Sanketika Vidya Parishad Engineering College",
                    'date' => '2025-10-26',
                    'location' => 'Visakhapatnam, Andhra Pradesh',
                ],
                 [
                    'image' => 'assets/img/complete-event/26-oct-25-2.jpg',
                    'title' => "Annapoorana Engineering College",
                    'date' => '2025-10-26',
                    'location' => 'Tamil nadu',
                ],
                 [
                    'image' => 'assets/img/complete-event/26-oct-25.jpg',
                    'title' => "Annapoorana Engineering College",
                    'date' => '2025-10-26',
                    'location' => 'Tamil nadu',
                ],


                [
                    'image' => 'assets/img/complete-event/25-oct-25.jpg',
                    'title' => "JKK Munirajah College of Technology",
                    'date' => '2025-10-25',
                    'location' => 'Tamil nadu',
                ],
                
                [
                    'image' => 'assets/img/complete-event/20-oct-25.jpg',
                    'title' => "Kandula Lakshumma Memorial College of Engineering for Women",
                    'date' => '2025-10-20',
                    'location' => ' Krishnapuram, Andhra Pradesh',
                ],
                 

                [
                    'image' => 'assets/img/complete-event/17-oct-25.jpg',
                    'title' => "East West College Of Managment",
                    'date' => '2025-10-17',
                    'location' => 'Bengaluru, Karnataka'
                ],
                [
                    'image' => 'assets/img/complete-event/15-oct-25-2.jpg',
                    'title' => "Siddartha Educational Academy Group of Institutions",
                    'date' => '2025-10-15',
                    'location' => 'Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/14-oct-25-1.jpg',
                    'title' => "Sanskar Educational Group",
                    'date' => '2025-10-14',
                    'location' => 'Parson, Uttar Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/13-oct-25-1.jpg',
                    'title' => "VSB College of Engineering & Technical Campus",
                    'date' => '2025-10-13',
                    'location' => 'Coimbatore',
                ],

                [
                    'image' => 'assets/img/complete-event/11-oct-25.jpg',
                    'title' => "Sri Harshini College of Engineering and Technology for women",
                    'date' => '2025-10-11',
                    'location' => ' Ongole, Andhra Pradesh',
                ],

                [
                    'image' => 'assets/img/complete-event/08-oct-25.jpg',
                    'title' => "Chadalawada Ramanamma Engineering College",
                    'date' => '2025-10-08',
                    'location' => ' Tirupati, Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/06-oct-25.jpg',
                    'title' => "SVS Institute of Pharmacy",
                    'date' => '2025-10-06',
                    'location' => ' Mungase, Maharashtra',
                ],
                [
                    'image' => 'assets/img/complete-event/06-oct-25-1.jpg',
                    'title' => "Sri Parasakthi College For Women",
                    'date' => '2025-10-06',
                    'location' => ' Courtallam, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/04-oct-25.jpg',
                    'title' => "Brahmdevdada Mane Polytechnic",
                    'date' => '2025-10-04',
                    'location' => ' Maharashtra',
                ],




                //  29-10-2025 finish
                [
                    'image' => 'assets/img/complete-event/29-sep-25.jpg',
                    'title' => 'Izee Business School',
                    'date' => '29-09-2025',
                    'location' => 'Bangalore, karnataka',
                ],
                [
                    'image' => 'assets/img/complete-event/23-sep-25.jpg',
                    'title' => 'Government Arts and Science College',
                    'date' => '2025-09-23',
                    'location' => 'Tirupattur, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/20-sep-25.jpg',
                    'title' => 'Chadalawada Ramanamma Engineering College',
                    'date' => '2025-09-20',
                    'location' => 'New Delhi, India',
                ],
                [
                    'image' => 'assets/img/complete-event/20-sep-25-1.jpg',
                    'title' => 'Mets School of engineering',
                    'date' => '2025-09-20',
                    'location' => 'Thrissur, kerala',
                ],
                [
                    'image' => 'assets/img/complete-event/18-sep-25.jpg',
                    'title' => 'M.S. Bidve Engineering College',
                    'date' => '2025-09-18',
                    'location' => 'Latur, Maharashtra',
                ],
                [
                    'image' => 'assets/img/complete-event/11-sep-25.jpg',
                    'title' => 'KVSR Siddhartha college of pharmaceeutical sciences',
                    'date' => '2025-09-11',
                    'location' => 'andhra pradesh, India',
                ],
                [
                    'image' => 'assets/img/complete-event/2-sep-25.png',
                    'title' => 'Mangalam College of Engineering',
                    'date' => '2025-09-02',
                    'location' => 'kerala, India',
                ],
                //August 2025
                [
                    'image' => 'assets/img/complete-event/23-aug-25.png',
                    'title' => 'Muthayammal Engineering College',
                    'date' => '2025-08-23',
                    'location' => 'namakkal, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/23-aug-25-1.png',
                    'title' => 'Muthayammal Polytechnic institution',
                    'date' => '2025-08-23',
                    'location' => 'Tiruchengode, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/20-aug-25.png',
                    'title' => 'Vinayaka Mission research foundation',
                    'date' => '2025-08-20',
                    'location' => 'salem, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/20-aug-25-1.png',
                    'title' => 'Bharatiya Engineering College',
                    'date' => '2025-08-20',
                    'location' => 'andhra pradesh, India',
                ],
                [
                    'image' => 'assets/img/complete-event/14-aug-25.png',
                    'title' => 'Dayanand Anglo-vedic (PG) College ',
                    'date' => '2025-08-14',
                    'location' => 'kanpur, Uttar Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/13-aug-25.png',
                    'title' => 'Government First Grade College',
                    'date' => '2025-08-13',
                    'location' => 'Bangalore, Karnataka',
                ],
                [
                    'image' => 'assets/img/complete-event/13-aug-25-1.png',
                    'title' => 'Mohammed Ali Shihab Thangal Memorial College',
                    'date' => '2025-08-13',
                    'location' => 'mallapuram, Kerala',
                ],
                [
                    'image' => 'assets/img/complete-event/12-aug-25.png',
                    'title' => 'Vignan Institute of Pharmaceutical Technology',
                    'date' => '2025-08-12',
                    'location' => 'visakhapatnam, Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/10-aug-25.png',
                    'title' => 'PVKK Institute of Technology',
                    'date' => '2025-08-10',
                    'location' => 'Anantapur, Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/09-aug-25.png',
                    'title' => 'VITB Vishnu Institute of Technology',
                    'date' => '2025-08-09',
                    'location' => 'Bhimavaram, Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/09-aug-25-1.png',
                    'title' => 'Chaitanya Bharathi Institute of Technology',
                    'date' => '2025-08-09',
                    'location' => 'proddatur, Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/06-aug-25.png',
                    'title' => 'Sri Bhagawan Mahaveer Jain Frist Grade College',
                    'date' => '2025-08-06',
                    'location' => 'kolar, Karnataka',
                ],
                [
                    'image' => 'assets/img/complete-event/04-aug-25.png',
                    'title' => 'Arulmigu Arthanareeswarar Arts and Science College',
                    'date' => '2025-08-04',
                    'location' => 'namakkal, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/04-aug-25-1.png',
                    'title' => 'Ballari Institute of Technology and Management',
                    'date' => '2025-08-04',
                    'location' => 'Ballari, Karnataka',
                ],
                [
                    'image' => 'assets/img/complete-event/01-aug-25.png',
                    'title' => 'PVKK Institute of Technology',
                    'date' => '2025-08-01',
                    'location' => 'Anantapur, Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/01-aug-25-1.png',
                    'title' => 'Vishwakarma Institute of  Technology',
                    'date' => '2025-08-01',
                    'location' => 'Pune, Maharashtra',
                ],
                //July 2025
                [
                    'image' => 'assets/img/complete-event/29-july-25.png',
                    'title' => 'Sri Devaraj Urs Institute of Management',
                    'date' => '2025-07-29',
                    'location' => 'Doduballapur, Karnataka',
                ],
                [
                    'image' => 'assets/img/complete-event/28-july-25.png',
                    'title' => 'Pimpri Chinchwad Polytechnic',
                    'date' => '2025-07-28',
                    'location' => 'mumbai, Maharashtra',
                ],
                [
                    'image' => 'assets/img/complete-event/28-july-25-1.png',
                    'title' => 'Christian education society college of engineering',
                    'date' => '2025-07-28',
                    'location' => 'Oddanchatram, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/26-july-25.png',
                    'title' => 'Smt.Kusumatai Wankhede Institute of Pharmacy College',
                    'date' => '2025-07-26',
                    'location' => 'Nagpur, Maharashtra',
                ],
                [
                    'image' => 'assets/img/complete-event/25-july-25.png',
                    'title' => 'Krishnasamy College of Engineering and Technology',
                    'date' => '2025-07-25',
                    'location' => 'cuddalore, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/25-july-25-1.png',
                    'title' => 'Ksg College of Arts and Science',
                    'date' => '2025-07-25',
                    'location' => 'Coimbatore, Tamil Nadu',
                ],

                [
                    'image' => 'assets/img/complete-event/17-july-25.png',
                    'title' => "Acharya Institute Of Graduate Studies",
                    'date' => '2025-07-17',
                    'location' => 'Soladevanahalli, Karnataka',
                ],
                [
                    'image' => 'assets/img/complete-event/17-july-25.jpg',
                    'title' => 'Sethu Institute of Technology',
                    'date' => '2025-07-17',
                    'location' => 'pulloor, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/17-july-25-1.png',
                    'title' => 'Arunai Engineering College',
                    'date' => '2025-07-17 ',
                    'location' => 'Thiruvannamalai, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/17-july-25-2.png',
                    'title' => 'PSG Engineering College',
                    'date' => '2025-07-17',
                    'location' => 'Chennai, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/16-july-25.png',
                    'title' => 'Chadalawada Ramanamma Engineering College',
                    'date' => '2025-07-16',
                    'location' => 'Tirupati, Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/15-july-25.png',
                    'title' => 'Dr. B.R. Ambedkar University',
                    'date' => '2025-07-15',
                    'location' => 'Srikakulam, Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/15-july-25.jpeg',
                    'title' => 'Islamiah Women\'s Arts and Science College',
                    'date' => '2025-07-15',
                    'location' => 'Vaniyambadi, Tamil Nadu',
                ],

                [
                    'image' => 'assets/img/complete-event/12-july-25.jpg',
                    'title' => 'Sanketika Vidya Parishad Engineering College',
                    'date' => '2025-07-12',
                    'location' => 'Visakhapatnam, Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/11-july-25.png',
                    'title' => 'Swami Keshwanand Rajasthan Agricultural University',
                    'date' => '2025-07-11',
                    'location' => 'Bikaner, Rajasthan',
                ],
                [
                    'image' => 'assets/img/complete-event/10-july-25.png',
                    'title' => 'TAGORE Institute of Engineering and Technology',
                    'date' => '2025-07-10',
                    'location' => 'Chennai, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/10-july-25-1.png',
                    'title' => 'TAGORE Institute of Engineering and Technology',
                    'date' => '2025-07-10',
                    'location' => 'Chennai',
                ],
                [
                    'image' => 'assets/img/complete-event/07-july-25.png',
                    'title' => 'Vidya pratishthan polytechnic College',
                    'date' => '2025-07-07',
                    'location' => 'Indapur, Pune',
                ],
                [
                    'image' => 'assets/img/complete-event/05-july-25.jpg',
                    'title' => 'CMR Engineering College',
                    'date' => '2025-07-05',
                    'location' => 'Hyderabad',
                ],
                //June 2025
                [
                    'image' => 'assets/img/complete-event/28-jun-25.png',
                    'title' => 'Vivekananda College Of Engineering For Woman ',
                    'date' => '2025-06-28',
                    'location' => 'Namakkal, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/28-jun-25.jpeg',
                    'title' => 'Brindavan College Of Engineering',
                    'date' => '2025-06-28',
                    'location' => 'Yelahanka, Bangaloru',
                ],
                [
                    'image' => 'assets/img/complete-event/26-jun-25.png',
                    'title' => 'Bharathamatha College',
                    'date' => '2025-06-26',
                    'location' => 'Palakkadu, kerala',
                ],
                [
                    'image' => 'assets/img/complete-event/26-jun-25.jpg',
                    'title' => 'Malla Reddy College Of Engineering',
                    'date' => '2025-06-26',
                    'location' => 'Secunderabad, Telangana',
                ],
                [
                    'image' => 'assets/img/complete-event/26-jun-25-1.jpg',
                    'title' => 'Eswar College Of Engineering',
                    'date' => '2025-06-26',
                    'location' => 'Palandu, Andra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/25-jun-25.jpg',
                    'title' => 'Institute Of Agri Business Management ',
                    'date' => '2025-06-25',
                    'location' => 'Bikaner, New Delhi',
                ],
                [
                    'image' => 'assets/img/complete-event/23-jun-25.jpg',
                    'title' => 'PVKK Institute Of Technology',
                    'date' => '2025-06-23',
                    'location' => 'Anantapuramu, Andhra Pradesh,',
                ],
                [
                    'image' => 'assets/img/complete-event/21-jun-25.jpeg',
                    'title' => 'Hindusthan College Of Aris & Science',
                    'date' => '2025-06-23',
                    'location' => 'Anantapuramu, Andhra Pradesh,',
                ],
                [
                    'image' => 'assets/img/complete-event/20-jun-25.jpg',
                    'title' => 'Adithya Institute Of Technology',
                    'date' => '2025-06-20',
                    'location' => 'Chennai,',
                ],
                [
                    'image' => 'assets/img/complete-event/19-jun-25.png',
                    'title' => 'Manakula Vinayagar Institute of Technology',
                    'date' => '2025-06-19',
                    'location' => 'Puducherry',
                ],
                [
                    'image' => 'assets/img/complete-event/17-jun-25.jpg',
                    'title' => 'Swami Keshwanand Rajasthan Agricultural University',
                    'date' => '2025-06-17',
                    'location' => 'Bikaner, Rajasthan',
                ],
                [
                    'image' => 'assets/img/complete-event/17-jun-25.png',
                    'title' => 'Aravali College Of Engineering & Management',
                    'date' => '2025-06-17',
                    'location' => 'Faridabad, Haryana',
                ],
                [
                    'image' => 'assets/img/complete-event/16-jun-25.jpg',
                    'title' => 'St. Thomas College Of Engineering & Technology',
                    'date' => '2025-06-16',
                    'location' => 'Kannur, kerala',
                ],
                [
                    'image' => 'assets/img/complete-event/14-jun-25-1.jpg',
                    'title' => 'Morning Star College Angamaly',
                    'date' => '2025-06-14',
                    'location' => 'ernakulam, kerala',
                ],
                [
                    'image' => 'assets/img/complete-event/14-jun-25.jpg',
                    'title' => 'AMC Engineering College',
                    'date' => '2025-06-14',
                    'location' => 'Bangaluru, karnataka',
                ],
                [
                    'image' => 'assets/img/complete-event/13-jun-25.jpg',
                    'title' => 'Sri Chandrasekharendra Saraswathi Viswa Mahavidyalaya',
                    'date' => '2025-06-17',
                    'location' => 'Kanchipuram',
                ],
                [
                    'image' => 'assets/img/complete-event/04-jun-25.png',
                    'title' => 'Malineni Lakshmaiah Women Engineering College',
                    'date' => '2025-06-04',
                    'location' => 'Prakasam, Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/4-jun-25.png',
                    'title' => 'AVP College Of Arts And Science',
                    'date' => '2025-06-04',
                    'location' => 'T M Poondi Tirupur',
                ],
                [
                    'image' => 'assets/img/complete-event/03-jun-25.jpg',
                    'title' => 'Sri Krishna Adithya College Of Arts & Science',
                    'date' => '2025-06-03',
                    'location' => 'Coimbatore',
                ],
                [
                    'image' => 'assets/img/complete-event/03-jun-25.jpg',
                    'title' => 'Spurthy College Of Science Management Studies',
                    'date' => '2025-06-03',
                    'location' => 'Bangalore, Karnataka. ',
                ],
                [
                    'image' => 'assets/img/complete-event/31-may-25.jpg',
                    'title' => 'Inderprastha Dental College And Hospital',
                    'date' => '2025-05-31',
                    'location' => 'Ghaziabad, Uttar Pradesh.',
                ],
                [
                    'image' => 'assets/img/complete-event/31-may-25.png',
                    'title' => 'R P Sarathy Institute Of Technology',
                    'date' => '2025-05-31',
                    'location' => 'Salem, Tamil Nadu.',
                ],
                [
                    'image' => 'assets/img/complete-event/31-may-25-1.jpg',
                    'title' => 'Sanketika Vidya Parishad Engineering College',
                    'date' => '2025-05-31',
                    'location' => 'Visakhapatnam, Andhra Pradesh.',
                ],
                [
                    'image' => 'assets/img/complete-event/29-may-25.jpg',
                    'title' => 'Adithya Institute Of Technology',
                    'date' => '2025-05-29',
                    'location' => 'Kurumbapalayam SSKulam, Tamil Nadu.',
                ],
                [
                    'image' => 'assets/img/complete-event/29-may-25-1.jpg',
                    'title' => 'Eswar College Of Engineering',
                    'date' => '2025-05-29',
                    'location' => 'Guntur ,Andhra Pradesh.',
                ],
                [
                    'image' => 'assets/img/complete-event/28-may-25.jpg',
                    'title' => 'GRT Institute of Engineering and Technology',
                    'date' => '2025-05-28',
                    'location' => 'Tiruvallur ,Tamil Nadu ',
                ],
                [
                    'image' => 'assets/img/complete-event/23-may-25.jpg',
                    'title' => 'Nehru College Of Management',
                    'date' => '2025-05-23',
                    'location' => 'Coimbatore ,Tamil Nadu ',
                ],
                [
                    'image' => 'assets/img/complete-event/20-may-25.jpeg',
                    'title' => 'Swami Keshwanand Rajasthan Agricultural University',
                    'date' => '2025-05-20',
                    'location' => 'Beechhwal Rural, Rajasthan',
                ],
                [
                    'image' => 'assets/img/complete-event/09-may-25.jpg',
                    'title' => "St. Ann's College of Engineering & Technology",
                    'date' => '2025-05-09',
                    'location' => 'Nayani Palli Rural, Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/01-apr-25.jpg',
                    'title' => "Guru Nanak Institute of Technology",
                    'date' => '2025-04-01',
                    'location' => 'Khardaha, West Bengal',
                ],
                [
                    'image' => 'assets/img/complete-event/30-mar-25.jpg',
                    'title' => "V.K.R, V.N.B & A.G.K College Of Engineering",
                    'date' => '2025-03-30',
                    'location' => 'Gudivada, Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/28-mar-25.jpg',
                    'title' => "United Institute Of Technology",
                    'date' => '2025-03-28',
                    'location' => 'Periyanaickenpalayam, coimbatore',
                ],
                [
                    'image' => 'assets/img/complete-event/28-mar-25-1.jpg',
                    'title' => "BEL First Grade College",
                    'date' => '2025-03-28',
                    'location' => 'Bengaluru, Karnataka',
                ],
                [
                    'image' => 'assets/img/complete-event/24-mar-25.jpg',
                    'title' => "C Kandaswami Naidu College for Men",
                    'date' => '2025-03-24',
                    'location' => 'Chennai, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/24-mar-25-1.jpg',
                    'title' => "Ethiraj College For Women",
                    'date' => '2025-03-24',
                    'location' => 'Chennai, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/23-mar-25.jpg',
                    'title' => "V.K.R, V.N.B & A.G.K College Of Engineering",
                    'date' => '2025-03-23',
                    'location' => 'Gudivada, Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/21-mar-25.jpg',
                    'title' => "United Institute Of Technology",
                    'date' => '2025-03-21',
                    'location' => 'Periyanaickenpalayam, coimbatore',
                ],
                [
                    'image' => 'assets/img/complete-event/11-mar-25.jpg',
                    'title' => "Arulmigu Palaniandavar College of Arts and Culture",
                    'date' => '2025-03-11',
                    'location' => 'Sivagiripatti, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/10-mar-25.jpg',
                    'title' => "Sri Kanyaka Parameswari Arts and Science College for Women",
                    'date' => '2025-03-10',
                    'location' => 'Chennai, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/10-mar-25.jpg',
                    'title' => "Sri Kanyaka Parameswari Arts and Science College for Women",
                    'date' => '2025-03-10',
                    'location' => 'Chennai, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/10-mar-25-1.jpg',
                    'title' => "Guru Nanak Institute of Technology",
                    'date' => '2025-03-10',
                    'location' => 'Khardaha, West Bengal',
                ],
                [
                    'image' => 'assets/img/complete-event/09-mar-25.jpg',
                    'title' => "St.Xavier's College",
                    'date' => '2025-03-09',
                    'location' => 'Tirunelveli, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/08-mar-25.jpg',
                    'title' => "Joginpally B.R. Engineering College",
                    'date' => '2025-03-08',
                    'location' => 'Telangana',
                ],
                [
                    'image' => 'assets/img/complete-event/03-mar-25.jpg',
                    'title' => "Dhaanish Ahmed Institute of Technology",
                    'date' => '2025-03-03',
                    'location' => 'Pichanur, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/10-mar-25-1.jpg',
                    'title' => "Sri Kanyaka Parameswari Arts and Science College for Women",
                    'date' => '2025-03-03',
                    'location' => 'Chennai, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/20-feb-25.jpg',
                    'title' => "Adithya Institute Of Technology",
                    'date' => '2025-02-20',
                    'location' => 'Kurumbapalayam SSKulam, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/17-feb-25.jpg',
                    'title' => "KG Reddy College of Engineering and Technology",
                    'date' => '2025-02-17',
                    'location' => 'Telangana',
                ],
                [
                    'image' => 'assets/img/complete-event/15-feb-25.jpg',
                    'title' => "R P Sarathy Institute of Technology",
                    'date' => '2025-02-15',
                    'location' => 'Tamil nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/15-feb-25-1.jpg',
                    'title' => "Dhaanish Ahmed Institute of Technology",
                    'date' => '2025-02-15',
                    'location' => 'Pichanur, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/12-feb-25.jpg',
                    'title' => "BET Sadathunnisa Degree College",
                    'date' => '2025-02-12',
                    'location' => 'Bengaluru, Karnataka',
                ],
                [
                    'image' => 'assets/img/complete-event/10-feb-25.jpg',
                    'title' => "Sri Kanyaka Parameswari Arts and Science College for Women",
                    'date' => '2025-02-10',
                    'location' => 'Chennai , Tamil nadu ',
                ],
                [
                    'image' => 'assets/img/complete-event/20-jan-25.jpg',
                    'title' => "AGURCHAND MANMULL JAIN COLLEGE",
                    'date' => '2025-01-20',
                    'location' => 'Chennai , Tamil nadu ',
                ],
                [
                    'image' => 'assets/img/complete-event/09-jan-25.jpg',
                    'title' => "Ramachandra College of Engineering Eluru",
                    'date' => '2025-01-09',
                    'location' => 'Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/06-jan-25.jpg',
                    'title' => "Sancheti College of science and commerce",
                    'date' => '2025-01-06',
                    'location' => 'Pimpri-Chinchwad, Maharashtra',
                ],
                [
                    'image' => 'assets/img/complete-event/27-dec-24.jpg',
                    'title' => "S.J.C. Institute of Technology",
                    'date' => '2024-12-27',
                    'location' => 'Kothanoor, Karnataka',
                ],
                [
                    'image' => 'assets/img/complete-event/27-dec-24.jpg',
                    'title' => "Noble Women's College, Manjeri",
                    'date' => '2024-12-21',
                    'location' => 'Kerala',
                ],
                [
                    'image' => 'assets/img/complete-event/17-dec-24.jpg',
                    'title' => "Ramachandra College of Engineering Eluru",
                    'date' => '2024-12-17',
                    'location' => 'Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/16-dec-24.jpg',
                    'title' => "Vinayaka Mission's Kirupananda Variyar Engineering College",
                    'date' => '2024-12-16',
                    'location' => 'Salem, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/13-dec-24.jpg',
                    'title' => "BET Sadathunnisa Degree College",
                    'date' => '2024-12-13',
                    'location' => 'Bengaluru, Karnataka',
                ],
                [
                    'image' => 'assets/img/complete-event/09-dec-24.jpg',
                    'title' => "Sri Kanyaka Parameswari Arts and Science College for Women",
                    'date' => '2024-12-09',
                    'location' => 'Chennai , Tamil nadu ',
                ],
                [
                    'image' => 'assets/img/complete-event/02-dec-24.jpg',
                    'title' => "Sree Narayana Institute of Technology",
                    'date' => '2024-12-02',
                    'location' => 'Kerala',
                ],
                [
                    'image' => 'assets/img/complete-event/26-nav-24.jpg',
                    'title' => "BR Institute of Technology and Management Sciences",
                    'date' => '2024-11-26',
                    'location' => ' Edulapalem, Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/15-nav-24.jpg',
                    'title' => "V.K.R, V.N.B & A.G.K College Of Engineering",
                    'date' => '2024-11-15',
                    'location' => 'Andhra Pradesh',
                ],
                [
                    'image' => 'assets/img/complete-event/11-nav-24.jpg',
                    'title' => "Mar Baselios Christian College of Engineering and Technology",
                    'date' => '2024-11-11',
                    'location' => 'Kerala',
                ],
                [
                    'image' => 'assets/img/complete-event/01-nav-24.jpg',
                    'title' => "KG Reddy College of Engineering and Technology",
                    'date' => '2024-11-01',
                    'location' => 'Telangana',
                ],
                [
                    'image' => 'assets/img/complete-event/18-oct-24.jpg',
                    'title' => "Pencil Bitz",
                    'date' => '2024-10-18',
                    'location' => 'Comibatore',

                ],
                [
                    'image' => 'assets/img/complete-event/05-oct-24.jpg',
                    'title' => "Srinivasan College Of Arts And Science",
                    'date' => '2024-10-05',
                    'location' => 'Perambalur, Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/01-oct-24.jpg',
                    'title' => "MET's School of Engineering",
                    'date' => '2024-10-01',
                    'location' => 'Kerala',
                ],
                [
                    'image' => 'assets/img/complete-event/26-sep-24.jpg',
                    'title' => "Pencil Bitz",
                    'date' => '2024-09-26',
                    'location' => 'Coimbatore',
                ],
                [
                    'image' => 'assets/img/complete-event/11-sep-24.jpg',
                    'title' => "Pencil Bitz",
                    'date' => '2024-09-11',
                    'location' => 'Coimbatore',
                ],
                [
                    'image' => 'assets/img/complete-event/07-sep-24.jpg',
                    'title' => "Bishop Jerome Institute",
                    'date' => '2024-09-07',
                    'location' => 'Kollam, Kerala',
                ],
                [
                    'image' => 'assets/img/complete-event/24-aug-24.jpg',
                    'title' => "Gnyanamani Educational Institutions",
                    'date' => '2024-08-24',
                    'location' => 'Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/21-aug-24.jpg',
                    'title' => "Pencil Bitz",
                    'date' => '2024-08-21',
                    'location' => 'Coimbatore',
                ],
                [
                    'image' => 'assets/img/complete-event/15-aug-24.jpg',
                    'title' => "Pencil Bitz",
                    'date' => '2024-08-15',
                    'location' => 'Coimbatore',
                ],
                [
                    'image' => 'assets/img/complete-event/26-july-24.jpg',
                    'title' => "Providence College for Women",
                    'date' => '2024-07-26',
                    'location' => 'Tamil Nadu',
                ],
                [
                    'image' => 'assets/img/complete-event/9-july-24.jpg',
                    'title' => "Pencil Bitz",
                    'date' => '2024-07-09',
                    'location' => 'Coimbatore',
                ],
                [
                    'image' => 'assets/img/complete-event/08-july-24.jpg',
                    'title' => "Pencil Bitz",
                    'date' => '2024-07-08',
                    'location' => 'Coimbatore',
                ],

                [
                    'image' => 'assets/img/complete-event/24-jun-24.jpg',
                    'title' => "Pencil Bitz",
                    'date' => '2024-06-24',
                    'location' => 'Coimbatore',
                ],
                [
                    'image' => 'assets/img/complete-event/21-jun-24.jpg',
                    'title' => "Pencil Bitz",
                    'date' => '2024-06-21',
                    'location' => 'Coimbatore',
                ],
                [
                    'image' => 'assets/img/complete-event/2-jun-24.jpg',
                    'title' => "Pencil Bitz",
                    'date' => '2024-06-2',
                    'location' => 'Coimbatore',
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
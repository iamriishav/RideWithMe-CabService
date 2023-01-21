<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // header("location: index.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/utils.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Ride With Me - Cab Service</title>
</head>

<body>
    <header>
        <div class="navbar">
            <ul class="nav-items">
                <a href="home.php">
                    <h2>Ride With Me</h2>
                </a>
                <li><a href="" class="active">Home</a></li>
                <li><a href="bookcab.php">Book Cab</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <div class="icon">
                <a href="profile.php"><img src="Assets/images/man.png" alt="Profile"></a>
            </div>
        </div>
    </header>
    <div class="main">
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-bold text-gray-900 mx-10">Book a Taxi to your
                        <br class="hidden lg:inline-block flex">destination
                        <img src="Assets/images/trip.png" alt="trip" class="h-8 px-2 lg:inline-block ">
                    </h1>
                    <p class="mb-8 leading-relaxed mx-10 text-black font-medium">Choose from a range of categories and
                        prices <br class="hidden lg:inline-block">We are the India’s fastest-growing taxi service
                        provider. Now running
                        operations in more than 100
                        cities.</p>
                    <div class="flex justify-center">
                        <a href="bookcab.php"><button class="btn inline-flex border-0 py-2 px-6 focus:outline-none rounded text-lg mx-10">Book
                                Cab</button></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="/JavaScript/index.js"></script>
</body>

</html>
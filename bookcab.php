<?php

session_start();

include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pickup = $_POST['pickup'];
    $drop = $_POST['drop'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "INSERT INTO `bookcab` (`user`, `pickup`, `dropto`, `date`, `time`) VALUES ('$_SESSION[username]','$pickup', '$drop', '$date', '$time')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>
            alert("Cab Booked Successfully From ' . $pickup . ' To ' . $drop . ' on ' . $date . ' at ' . $time . '");
            </script>';
    } else {
        echo '<script>
            alert("Cab not booked."); 
            </script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/bookcab.css">
    <link rel="stylesheet" href="CSS/utils.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="JavaScript/main.js"></script>
    <title>Ride With Me - Book Cab</title>
</head>

<body>
    <header>
        <div class="navbar">
            <ul class="nav-items">
                <a href="home.php">
                    <h2>Ride With Me</h2>
                </a>
                <li><a href="home.php">Home</a></li>
                <li><a href="" class="active">Book Cab</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <div class="icon">
                <a href="profile.php"><img src="Assets/images/man.png" alt="Profile"></a>
            </div>
        </div>
    </header>
    <section class="main text-black center body-font relative">
        <form name="myForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="container px-5 py-6 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-black">Your everyday travel partner
                    </h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-bold-800 text-black">AC Cabs for point to point travel
                    </p>
                </div>
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="pickup" class="leading-7 text-sm text-black">PICKUP</label>
                                <input type="text" id="pickup" name="pickup" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Enter Pickup Location" required>
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="drop" class="leading-7 text-sm text-black">DROP</label>
                                <input type="text" id="drop" name="drop" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Enter Drop Location" required>
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="date" class="leading-7 text-sm text-black">DATE</label>
                                <input type="date" id="date" name="date" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="time" class="leading-7 text-sm text-black">TIME</label>
                                <input type="time" id="time" name="time" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <button type="submit" class="btn flex mx-auto text-white border-0 py-2 px-10 focus:outline-none rounded text-lg" id="bookcabbtn" onclick="bookCab()">Book Now</button>
                    </div>
        </form>
    </section>
</body>

</html>
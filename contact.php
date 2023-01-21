<?php

session_start();

include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    $sql = "INSERT INTO `query` (`name`, `email`, `message`) VALUES ('$name', '$email', '$msg')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>
        alert('Message sent successfully! Thank you')
        </script>";
    }else {
        echo "<script>
        alert('Message not sent.')
        </script>";
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
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/contact.css">
    <link rel="stylesheet" href="CSS/utils.css">
    <script src="JavaScript/main.js"></script>
    <title>Ride With Me - Contact Us</title>
</head>

<body>
    <header>
        <div class="navbar">
            <ul class="nav-items">
                <a href="home.php">
                    <h2>Ride With Me</h2>
                </a>
                <li><a href="home.php">Home</a></li>
                <li><a href="bookcab.php">Book Cab</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="" class="active">Contact Us</a></li>
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
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-black">You can find us here</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-bold-800 text-black">Find help for your queries here:
                    </p>
                </div>
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-black">Name</label>
                                <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-black">Email</label>
                                <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="message" class="leading-7 text-sm text-black">Message</label>
                                <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-800 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" required></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button type="submit" class="btn flex mx-auto text-white border-0 py-2 px-8 focus:outline-none rounded text-lg">Send</button>
                        </div>
        </form>
    </section>
</body>

</html>
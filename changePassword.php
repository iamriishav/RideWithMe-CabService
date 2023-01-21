<?php
session_start();

include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $oldPass = $_POST['currentPass'];
    $newPass = $_POST['newPass'];
    $cPass = $_POST['cPass'];
    $email = $_POST['email'];

    $check_email = "SELECT * FROM `user947` WHERE email = '$email'";
    $email_query = mysqli_query($conn, $check_email);

    $data = mysqli_fetch_assoc($email_query);

    $email_count = mysqli_num_rows($email_query);

    $hashed_password = $data['password'];

    $verify = password_verify($oldPass, $hashed_password);

    if ($verify) {
        if ($newPass == $cPass) {
            $new_hashed_pass = password_hash($newPass, PASSWORD_BCRYPT);

            $query = "UPDATE `user947` SET `password` = '$new_hashed_pass' WHERE email = '$email'";

            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "<script>
                alert('Password updated successfully!');
                alert('Please login to Continue.');
                location = 'index.php';
                </script>";
            } else {
                echo "<script>
                alert('Error updating password: ');
                location = 'changePassword.php';
                </script>" . mysqli_error($conn);
            }
        } else {
            echo "<script> 
            alert('New password and Confirm Password does not matched!');
            </script>";
        }
    } else {
        echo "<script>
        alert('Old password does not matched!');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Assets/images/logo.png" type="image/x-icon">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/login.css" />
    <link rel="stylesheet" type="text/css" href="CSS/utils.css">
    <script src="JavaScript/main.js"></script>
    <script>
        function valid() {
            if (document.myform.newPass.value != document.yform.cPass.value) {
                alert("Password and Confirm Password Field do not match  !!");
                document.myform.cPass.focus();
                return false;
            }
            return true;
        }
    </script>
    <title>Ride With Me - Change Password</title>
</head>

<body>
    <div class="main">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-16 mx-auto flex flex-wrap items-center">
                <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
                    <h1 class="title-font font-bold text-3xl text-black">Ride With Me - Cab Service
                    </h1>
                    <p class="leading-relaxed mt-4 text-black">Change Your Password.</p>
                </div>
                <form class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0" name="myform" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                    <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Change Password</h2>
                    <div class="relative mb-4">
                        <label for="currentPass" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required value="<?php echo  $_SESSION['email']; ?>">
                    </div>
                    <div class="relative mb-4">
                        <label for="currentPass" class="leading-7 text-sm text-gray-600">Old Password</label>
                        <input type="password" id="currentPass" name="currentPass" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                    </div>
                    <div class="relative mb-4">
                        <label for="password" class="leading-7 text-sm text-gray-600">New Password</label>
                        <input type="password" id="password" name="newPass" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                    </div>
                    <div class="relative mb-4">
                        <label for="password" class="leading-7 text-sm text-gray-600">Confirm Password</label>
                        <input type="password" id="password" name="cPass" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                    </div>
                    <button class="btn text-white border-0 py-2 px-8 focus:outline-none rounded text-lg" onclick="login()">Change Password</button>
                    <a class="text-xs mx-auto text-gray-500 mt-3" href="profile.php">Back</a>
                </form>
            </div>
    </div>
    </section>
    </div>
    <script src="/JavaScript/login.js"></script>
</body>

</html>
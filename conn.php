<?php
$conn = mysqli_connect("localhost", "root", "", "bookcab");
if (!$conn) {
    die("Can't Connect to databse: " . mysqli_connect_error());
}
?>
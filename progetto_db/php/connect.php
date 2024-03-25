<?php

$servername = "localhost";
$username = "lucabandieraa";
$password = "";
$dbname = "my_lucabandieraa";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>

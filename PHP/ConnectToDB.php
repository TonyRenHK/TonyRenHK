<?php
$servername = "fdb7.biz.nf";
$username = "2124138_tony";
$password = "hk20140923";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

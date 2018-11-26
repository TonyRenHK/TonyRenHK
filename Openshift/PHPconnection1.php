<!doctype html>
<?php
$servername = "127.4.84.130";
$username = "admin841kCjI";
$password = "PGgsSU6QD9J3";
$dbname = "tony";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, Name, WechatId FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["id"]. " - Name: ". $row["Name"]. " " . $row["WechatId"] . "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>WTony</title>


</head>
<body>

<h1>This is a heading</h1>
<p>This is a paragraph.</p>

</body>
</html>

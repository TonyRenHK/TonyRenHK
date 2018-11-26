<!DOCTYPE html>
<html>
<body>

<?php
$servername = "fdb7.biz.nf";
$username = "2124138_tony";
$password = "hk20140923";
$dbname = "2124138_tony";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, Remark FROM User";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " " . $row["Remark"] . "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html> 

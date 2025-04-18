<!DOCTYPE html>
<html> 

<body> 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guestDB";

 
$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>


</body>

</html>
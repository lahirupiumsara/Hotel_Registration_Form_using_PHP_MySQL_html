<!DOCTYPE html>
<html> 

<body> 

<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guestDB";


$conn = new mysqli($servername, $username, $password, $dbname);

 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE guests (
    guestname VARCHAR(40),
    address VARCHAR(60),
    email VARCHAR(50),
    phone_no VARCHAR(20),
    room_type VARCHAR(15),
    arri_date TIMESTAMP,
    dept_date TIMESTAMP NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table guests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>

</body>

</html>
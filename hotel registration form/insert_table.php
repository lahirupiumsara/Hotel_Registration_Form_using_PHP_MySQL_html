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


$sql = "INSERT INTO guests (guestname, address, email, phone_no, room_type, arri_date, dept_date)
VALUES ('Nimali Peris', '45/2 main st', 'nimal1234@gmail@gmail.com', '0771245120', 'Double room', '2023-11-10 10:00:00', '2023-11-12 12:00:00'),
        ('Sanithu Shamel', 'first rd, High St', 'sanathu565@gmail.com', '0771336790', 'Double room', '2023-11-11 11:00:00', '2023-11-13 13:00:00'),
        ('Kusal Mendis', 'School rd', 'kusal1999@gmail@gmail.com', '0743458975', 'Single room', '2023-11-12 12:00:00', '2023-11-14 14:00:00'),
        ('Kanegi Sivaraja', '4/C2, main st', 'kanegi898@gmail.com', '0703456234', 'Queen room', '2023-11-13 13:00:00', '2023-11-15 15:00:00'),
        ('Robet Andrew', '65/A Main rd', 'robert2005@gmail.com', '0748765732', 'Single room', '2023-11-14 14:00:00', '2023-11-16 16:00:00')";

if ($conn->query($sql) === TRUE) {
    echo "Records inserted successfully";
} else {
    echo "Error inserting records: " . $conn->error;
}


$conn->close();
?>

</body>

</html>
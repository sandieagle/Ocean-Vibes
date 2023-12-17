<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ocean";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

$name=$_POST['name'];
$nic=$_POST['nic'];
$email=$_POST['email'];
$restHouse=$_POST['restHouse'];
$checkIn=$_POST['checkIn']; 
$checkOut=$_POST['checkOut'];  

$sql = "INSERT INTO rooms (Name,NIC,Email,Resthouse,CheckInDate,CheckOutDate)
VALUES ('$name', '$nic','$email','$restHouse', '$checkIn', '$checkOut')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Saved Succefully!");</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
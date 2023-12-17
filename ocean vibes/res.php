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
$email=$_POST['email'];
$age=$_POST['age'];
$contact=$_POST['contact'];
$msg=$_POST['msg'];  
 

$sql = "INSERT INTO resgister (Name,Email,Age,Contact,Message)
VALUES ('$name', '$email','$age','$contact','$msg')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Saved Succefully!");</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
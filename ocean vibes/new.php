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

$questions=$_POST['questions'];
$help_area=$_POST['help_area']; 

$sql = "INSERT INTO newcase (Question,Requestedhelp)
VALUES ('$questions', '$help_area')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Saved Succefully!");</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
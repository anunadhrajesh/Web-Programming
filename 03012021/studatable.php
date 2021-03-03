<?php
$servername = "localhost";
$username = "20mca015";
$password = "2394";
$dbname = "20mca015"

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) 
echo "Connected successfully";

$sql = "INSERT INTO STUDENTS (name, branch, mark)
VALUES ('Qwerty', 'MCA', '100')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
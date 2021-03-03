 <?php
$servername = "localhost";
$username = "20mca015";
$password = "2394";
$dbname = "20mca015";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO STUDENTS (name, branch, mark)
VALUES ('efgh', 'MBA', '04');";
$sql .= "INSERT INTO STUDENTS (name, branch, mark)
VALUES ('ijkl', 'MBA', '05');";
$sql .= "INSERT INTO STUDENTS (name, branch, mark)
VALUES ('mnop', 'MCA', '06')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 
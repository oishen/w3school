<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$passcode=$_POST['passcode'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO employee (id, names, Email, passcode)
VALUES ($id, '$name', '$email', $passcode)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
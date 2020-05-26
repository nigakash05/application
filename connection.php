<?php
$servername = "akashserver5.mariadb.database.azure.com";
$username = "rootadmin@akashserver5";
$password = "Akash1234567";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"studentsinfo");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
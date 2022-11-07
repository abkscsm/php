<?php 
$servername = "localhost";
$username = "bbaca";
$password = "Admin@12";
$db = 'info';
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
  die("<br>Connection failed: " . $conn->connect_error);
}
?>
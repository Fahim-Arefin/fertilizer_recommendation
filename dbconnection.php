<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fertilizer_recommendation";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    // echo "Connection Successful<br>";
}
?>
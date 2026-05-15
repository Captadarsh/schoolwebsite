<?php
$servername = "localhost";
$username = "zcontact";
$password = "E-Commerce123";
$dbname = "zcontact";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";





?>
<?php
$servername = "localhost";
$username = "id18527295_root";
$password = "&=5w01Fa$^]H|^Fr";
$dbname = "id18527295_signup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

?>
<?php
// Database credentials
$server   = 'localhost';
$username = 'root';
$password = '';
$database = 'digital_store';
$port     = 3307;

// Create connection
$conn = mysqli_connect($server, $username, $password, $database, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optional: set character set to UTF-8
mysqli_set_charset($conn, "utf8");
?>

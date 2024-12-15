<?php
$servername = "localhost";
$username = "u627256117_travelmate";
$password = "thisWASNTmytrue#3";
$dbname = "u627256117_travelmate";

// Attempt connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>

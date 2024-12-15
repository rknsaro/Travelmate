<?php
// Database connection details
$servername = "localhost"; // Change to your server host, e.g., 127.0.0.1 or domain name
$username = "root";        // Change to your MySQL username
$password = "";            // Change to your MySQL password
$dbname = "travelmate";    // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = $conn->real_escape_string($_POST['fullName']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Server-side validation for passwords
    if ($password !== $confirmPassword) {
        // If passwords don't match, display an error message and stop the signup
        echo '<script>alert("Passwords do not match!"); window.history.back();</script>';
        exit;
    }

    // Hash the password before saving to the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO users (fullName, email, password) VALUES ('$fullName', '$email', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "Account created successfully!";
        // Redirect to homepage after successful signup
        header("Location: homepage.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
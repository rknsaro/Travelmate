<?php
// Database connection details
$conn = new mysqli("localhost", "root", "", "your_database_name");

// Insert a test user
$name = "Test User";
$email = "test@example.com";
$password = password_hash("testpassword", PASSWORD_DEFAULT); // Hash the password
$role = "Tourist";

$sql = "INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $password, $role);

if ($stmt->execute()) {
    echo "Test user created successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$conn->close();
?>

<?php
session_start();

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection details
$servername = "localhost";
$username = "u627256117_travelmate";
$password = "thisWASNTmytrue#3";
$dbname = "u627256117_travelmate";

// // Include any other necessary config
// include '../php/config.php';

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Handle login request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $role = trim($_POST['role']);

    // Validate and retrieve user
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("SQL preparation error: " . $conn->error);
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            // Check role
            if ($user['role'] === $role) {
                // Store user information in the session
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['loggedin'] = true;

                // Redirect to homepage
                header("Location: homepage.php");
                exit();
            } else {
                echo "Invalid role. Please select the correct role.";
            }
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No account found with that email.";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Back!</title>
    <link rel="stylesheet" href="/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Poppins, sans-serif;
            background-image: url('/Assets/BG\ 2.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            font-weight: bold;
            color: #045145;
        }

        form {
            text-align: left;
            color: #045145;
        }

        label {
            margin-bottom: 5px;
            font-weight: 500;
            color: #045145;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .button-group {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        button {
            background-color: #045145;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        p {
            margin-top: 10px;
        }

        a {
            color: #045145;
            font-weight: bold;
            text-decoration: none;
        }

        /* Responsive Design */
        @media screen and (max-width: 480px) {
            .container {
                padding: 15px;
                margin: 20px;
            }

            h1 {
                font-size: 24px;
            }

            input[type="email"],
            input[type="password"] {
                padding: 8px;
            }

            .button-group {
                flex-direction: column;
                gap: 10px;
            }

            button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome Back!</h1>

        <form method="GET" action="index.html" id="login-form">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        
            <div class="button-group">
                <button type="submit">Log In</button>
            </div>
        </form>
        <p>
        Don’t have an account yet?
        <a href="http://localhost/TRAVELMATE/php/signup.php">Sign up</a>
    </p>
    </div>
</body>
</html>

</body>
</html>

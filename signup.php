<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
    <link rel="stylesheet" href="style.css">
    <style>
      body {
        font-family: Poppins, sans-serif;
        background-image: url('./Assets/BG\ 2.jpg');
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
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
        text-align: center;
      }

      h1 {
        color: #045145;
      }

      form {
        text-align: left;
        color: #045145;
      }

      label {
        /* display: block; */
        margin-bottom: 5px;
        font-weight: 500;
      }

      input[type="text"],
      input[type="email"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
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

        input[type="text"],
        input[type="email"],
        input[type="password"] {
          padding: 8px;
        }

        button {
          padding: 12px 25px;
        }
      }
    </style>
</head>
<body>
  <div class="container">
    <h1>Create an Account</h1>
    <form action="./homepage.html" method="get">
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
        
        <button type="submit" class="signup-btn">Sign Up</button>
    </form>
    <p >
      Already have an account? 
      <a href="/Log In/login.html">Login</a>
  </p>
</div>

    <script>
        function validatePassword() {
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirmPassword").value;
            const submitButton = document.getElementById("submitButton");
            const passwordError = document.getElementById("passwordError");

            if (password.length < 8) {
                passwordError.textContent = "Password must be at least 8 characters long.";
                submitButton.disabled = true;
            } else if (password !== confirmPassword) {
                passwordError.textContent = "Passwords do not match.";
                submitButton.disabled = true;
            } else {
                passwordError.textContent = ""; // Clear any error messages
                submitButton.disabled = false; // Enable the submit button
            }
        }
    </script>
</body>
</html>

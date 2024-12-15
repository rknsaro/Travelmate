<?php
// Example of setting dynamic data (these would normally come from a database or form)
$username = "John Carlo Orlina";
$email = "rknsaro@gmail.com";
$phone = "09812713504";
$address = "San Vicente, Batangas";
$profile_image = "/Assets/Male Icon - Copy.jpeg"; // Image path can be dynamic based on user data
$bg_image = "images/bg.jpg"; // Background image can also be dynamic
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css'>
    <link rel="stylesheet" href="profile.css">
</head>
<style>
    
</style>
<body>
<nav class="navbar">
        <div class="navbar-container">
            <div class="logo">
                <a class="navbar-brand" href="#">TravelMate</a>
            </div>
            <ul class="nav-links">
                <li><a href="./index.html" class="active">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#locationModal">Location</a></li>
                    </ul>
                </li>
                <li><a href="./Book Now/book.html" class="active">Book Now</a></li>
                <li><a href="http://localhost/TRAVELMATE/php/profile.php" class="active">Account</a></li>
            </ul>
            <div class="auth-menu">
                <div class="auth-icons">
                    <a href="http://localhost/TRAVELMATE/php/login.php" class="auth-link">Log In</a>/
                    <a href="" class="auth-link">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="main-body">
        <br>
        <br>
            <!-- Breadcrumb -->
            <!-- <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="/Assets/Male Icon - Copy.jpeg">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav> -->
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="/Assets/Male Icon - Copy.jpeg" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4><?php echo $username; ?></h4>
                                    <p class="text-secondary mb-1">Tourist</p>
                                    <p class="text-muted font-size-sm"><?php echo $address; ?></p>
                                    <!-- <button class="btn btn-primary">Follow</button> -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <button class="btn btn-outline-primary">Make a Review</button>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $username; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $email; ?>
                                </div>
                            </div>
                            <hr>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Mobile</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $phone; ?>
                                </div>
                            </div>
                            <hr>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info" target="__blank" href="#">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

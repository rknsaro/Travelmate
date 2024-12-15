<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Batangas Adventure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .modal-header {
            background-color: #007bff;
            color: white;
        }
        .modal-title {
            font-weight: bold;
        }
        .form-section {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        .btn-primary {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-secondary {
            width: 100%;
            padding: 12px;
            background-color: #6c757d;
            border-color: #6c757d;
            border-radius: 5px;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #5a6268;
        }
    </style>
</head>
<body>

    <!-- Trigger Button for Modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal">
        Book Your Adventure
    </button>

    <!-- Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <!-- <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">Book Your Batangas Adventure</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->

                <!-- Modal Body -->
                <div class="modal-body">

                    <form>

                        <!-- Personal Information Section -->
                        <div class="form-section">
                            <h2>Personal Information</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="full-name" class="col-form-label">Full Name:</label>
                                    <input type="text" id="full-name" name="full-name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="col-form-label">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="phone-number" class="col-form-label">Phone Number:</label>
                                    <input type="tel" id="phone-number" name="phone-number" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="address" class="col-form-label">Address:</label>
                                    <input type="tel" id="address" name="address" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <!-- Trip Details Section -->
                        <div class="form-section">
                            <h2>Trip Details</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="destination" class="col-form-label">Destination:</label>
                                    <select id="destination" name="destination" class="form-control" required>
                                        <option value="">Select a destination</option>
                                        <option value="option1">Talisay</option>
                                        <option value="option2">San Juan, Batangas</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="travel-date" class="col-form-label">Travel Date:</label>
                                    <input type="date" id="travel-date" name="travel-date" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="travel-time" class="col-form-label">Time:</label>
                                    <input type="time" id="travel-time" name="travel-time" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="num-travelers" class="col-form-label">Number of Travelers:</label>
                                    <input type="number" id="num-travelers" name="num-travelers" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <!-- Special Requests Section -->
                        <div class="form-section">
                            <h2>Special Requests</h2>
                            <textarea id="special-requests" name="special-requests" class="form-control" placeholder="Any special requirements or requests..." rows="4"></textarea>
                        </div>

                    </form>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    
                    <button type="submit" class="btn btn-primary">Book Now</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</body>
</html>

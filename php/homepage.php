<?php
session_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: http://localhost/TRAVELMATE/php/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelmate</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
</head>
<style>
  .favorite-icon {
    font-size: 20px;
    color: #ccc; /* Initial color for the unselected heart */
    cursor: pointer;
    transition: color 0.3s ease;
  }

  .favorite-icon.filled {
    color: #49b974; /* Color for the selected heart */
  }

  .favorite-icon.favorited {
    color: #49b974;;
  }

  /* .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
  } */

  /* .map-container {
    text-align: center;
}

.google-map-js {
    width: 100%;
    height: 450px;
    border: none;
} */
/* Styles for the map image */
.map-image {
    width: 100%;
    height: 350px;
    border-radius: 5px;
    cursor: pointer; /* Makes it clear the image is clickable */
    transition: opacity 0.3s ease;
}

/* Optional hover effect */
.map-image:hover {
    opacity: 0.8;
}


</style>

<body>
  <section>
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
                    <a href="" class="auth-link">Log In</a>/
                    <a href="" class="auth-link">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>
</section>

    <!-- Location Modal -->
    <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="locationModalLabel">Our Location</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- Static Image of the Map with a Clickable Link -->
                   <p style="text-align: center;">Batangas State University Malvar</p>
                  <a href="https://www.google.com/maps/place/Batangas+State+University+Jose+P.+Laurel+Polytechnic+College/@14.0449448,121.1533783,17z/data=!3m1!4b1!4m6!3m5!1s0x33bd6ed9735068d7:0x97fd25b226e150e7!8m2!3d14.0449448!4d121.1559532!16s%2Fg%2F11d_889hb0!5m1!1e1?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoJLDEwMjExMjMzSAFQAw%3D%3D" 
                     target="_blank" 
                     rel="noopener noreferrer">
                      <img 
                          src="./Assets/BSU MAP.png" 
                          alt="Batangas State University Malvar" 
                          class="map-image">
                  </a>
              </div>              
                                          
            </div>
        </div>
    </div>
  <section>
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">

        <!-- Destinations -->
        <section class="destinations">
            <h1>Where to go next?</h1>
            <p class="centered-text">Let our booking options inspire your next adventure.</p>
            <div class="cards">

              <!-- Solano Hotel -->
              <div class="card">
                <div class="image-slider">
                    <div class="image-container">
                        <img src="./Assets/Hotels/Solano Hotel.jpeg" alt="Solano Hotel">
                        <img src="./Assets/Hotels/Solano 2.jpeg" alt="Solano Hotel">
                        <img src="./Assets/Hotels/Solano 3.jpeg" alt="Solano Hotel">
                    </div>
                    <button class="prev-btn">&lt;</button>
                    <button class="next-btn">&gt;</button>
                </div>
                <div class="card-content">
                    <h3>Solano Hotel
                      <i class="bi bi-heart favorite-icon" id="favorite-icon"></i>
                    </h3> 
                    
                    <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star text-muted"></i>
                    </div>
                    <p>
                        Location: Gen. Luna St., Lipa, 4217 Batangas 
                        <br>
                        <br>
                        Rate: 7,000 per night
                    </p>
                    <a href="http://localhost/TRAVELMATE/php/book.php">
                        <button type="button">Book now</button>
                    </a>
                </div>
            </div>
          
              <!-- Destino Beach Resort and Hotel -->
              <div class="card">
                <div class="image-slider">
                  <div class="image-container">
                    <img src="./Assets/Hotels/Destino Hotel.jpeg" alt="Destino Beach Resort and Hotel">
                    <img src="./Assets/Hotels/Destino Hotel 2.jpeg" alt="Destino Beach Resort and Hotel">
                    <img src="./Assets/Hotels/Destino Hotel 3.jpeg" alt="Destino Beach Resort and Hotel">
                  </div>
                  <button class="prev-btn">&lt;</button>
                  <button class="next-btn">&gt;</button>
                </div>
                <div class="card-content">
                  <div class="header">
                    <h3>Destino Hotel
                      <i class="bi bi-heart favorite-icon" id="favorite-icon"></i>
                    </h3>
                  </div>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star text-muted"></i>
                  </div>
                  <p>
                    Location: Sitio Nangkaan, Brgy Locloc, Bauan, Philippines, 4201 
                    <br>
                    <br>
                    Rate: 3,500 per night
                  </p>
                  <a href="http://localhost/TRAVELMATE/php/book.php">
                    <button type="button">Book now</button>
                  </a>
                </div>
              </div>


          
              <!-- JVJ Hotel -->
              <div class="card">
                <div class="image-slider">
                  <div class="image-container">
                    <img src="./Assets/Hotels/JVJ Hotel.jpeg" alt="JVJ Hotel">
                    <img src="./Assets/Hotels/JVJ Hotel 2.jpeg" alt="JVJ Hotel">
                    <img src="./Assets/Hotels/JVJ Hotel 3.jpeg" alt="JVJ Hotel">
                  </div>
                  <button class="prev-btn">&lt;</button>
                  <button class="next-btn">&gt;</button>
                </div>
                <div class="card-content">
                  <h3>JVJ Hotel <i class="bi bi-heart favorite-icon" id="favorite-icon"></i></h3>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star text-muted"></i>
                </div>
                  <p>
                    Location: Purok 4, Brgy. Sta. Clara, 4200 Batangas City, Philippines
                    <br>
                    <br>
                    Rate: 1,500 per night</p>
                  <a href="http://localhost/TRAVELMATE/php/book.php">
                    <button type="button">Book now</button>
                </a>
                </div>
              </div>
          
              <!-- SM Travelodge -->
              <div class="card">
                <div class="image-slider">
                  <div class="image-container">
                    <img src="./Assets/Hotels/SM Travelodge.jpeg" alt="SM Travelodge">
                    <img src="./Assets/Hotels/SM Travelodge 2.jpeg" alt="SM Travelodge">
                    <img src="./Assets/Hotels/SM Travelodge 3.jpeg" alt="SM Travelodge">
                  </div>
                  <button class="prev-btn">&lt;</button>
                  <button class="next-btn">&gt;</button>
                </div>
                <div class="card-content">
                  <h3>SM Travelodge <i class="bi bi-heart favorite-icon" id="favorite-icon"></i></h3>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star text-muted"></i>
                </div>
                  <p>
                    Location: Barangay Tingga, Labac, Batangas City
                    <br>
                    <br>
                    Rate: 1,805 per night</p>
                  <a href="http://localhost/TRAVELMATE/php/book.php">
                    <button type="button">Book now</button>
                </a>
                </div>
              </div>
          
              <!-- Legends Hotel -->
              <div class="card">
                <div class="image-slider">
                  <div class="image-container">
                    <img src="./Assets/Hotels/Legends Hotel.jpeg" alt="Legends Hotel">
                    <img src="./Assets/Hotels/Legends Hotel 2.jpeg" alt="Legends Hotel">
                    <img src="./Assets/Hotels/Legends Hotel 3.jpeg" alt="Legends Hotel">
                  </div>
                  <button class="prev-btn">&lt;</button>
                  <button class="next-btn">&gt;</button>
                </div>
                <div class="card-content">
                  <h3>Legends Hotel <i class="bi bi-heart favorite-icon" id="favorite-icon"></i></h3>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star text-muted"></i>
                </div>
                  <p>
                    Location: Justicia St, Lemery, 4209 Batangas
                    <br>
                    <br>
                    Rate: 2,363 per night</p>
                  <a href="http://localhost/TRAVELMATE/php/book.php">
                    <button type="button">Book now</button>
                </a>
                </div>
              </div>
          
              <!-- Bicotels Hotel -->
              <div class="card">
                <div class="image-slider">
                  <div class="image-container">
                    <img src="./Assets/Hotels/Bicotels Hotel.jpeg" alt="Bicotels Hotel">
                    <img src="./Assets/Hotels/Bicotels Hotel 2.jpeg" alt="Bicotels Hotel">
                    <img src="./Assets/Hotels/Bicotels Hotel 3.jpeg" alt="Bicotels Hotel">
                  </div>
                  <button class="prev-btn">&lt;</button>
                  <button class="next-btn">&gt;</button>
                </div>
                <div class="card-content">
                  <h3>Bicotels Hotel <i class="bi bi-heart favorite-icon" id="favorite-icon"></i></h3>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star text-muted"></i>
                </div>
                  <p>
                    Location: Santuray Road, Kumintang Ibaba, Batangas City
                    <br>
                    <br>
                    Rate: 2,573 per night</p>
                  <a href="http://localhost/TRAVELMATE/php/book.php">
                    <button type="button">Book now</button>
                </a>
                </div>
              </div>
            </div>
          </section>

          <!-- Reviews -->
        <div class="ribyus">
            <div class="review-section">
              <h5>Customer Reviews</h5>
              <p>See what our satisfied customers have to say!</p>
              <div class="review-slider"></div>
                <div class="review-container">
                  <!-- Review 1 -->
                  <div class="review">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <!-- <i class="bi bi-star text-muted"></i> -->
                    </div>
                    <p>"Efficient, user-friendly, and reliable—highly recommend!"</p>
                    <img src="./Assets/Male Icon - Copy.jpeg" alt="Lorenzo Gonzales" class="review-img">
                    <div>
                      <strong>Lorenzo Gonzales</strong><br>
                      <span>Tourist</span>
                    </div>
                  </div>
              
                  <!-- Review 2 -->
                  <div class="review">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star text-muted"></i>
                    </div>
                    <p>"The booking process was seamless, and all my travel needs were met."</p>
                    <img src="./Assets/Male Icon - Copy.jpeg" alt="Earl Mercado" class="review-img">
                    <div>
                      <strong>Lucas Lee</strong><br>
                      <span>Tourist</span>
                    </div>
                  </div>
              
                  <!-- Review 3 -->
                  <div class="review">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                    <p>"The platform made finding family-friendly destinations simple."</p>
                    <img src="./Assets/Male Icon - Copy.jpeg" alt="Samuel Samoza" class="review-img">
                    <div>
                      <strong>Samuel Larusso</strong><br>
                      <span>Tourist</span>
                    </div>
                  </div>
            
            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            
            <script>
              
            document.addEventListener("DOMContentLoaded", function () {
            const sliders = document.querySelectorAll(".image-slider");

            sliders.forEach((slider) => {
            const imageContainer = slider.querySelector(".image-container");
            const prevBtn = slider.querySelector(".prev-btn");
            const nextBtn = slider.querySelector(".next-btn");
            const images = slider.querySelectorAll("img");

            let currentIndex = 0;

            function updateSliderPosition() {
            const slideWidth = images[0].clientWidth;
            imageContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
            }

            nextBtn.addEventListener("click", () => {
            if (currentIndex < images.length - 1) {
                currentIndex++;
            } else {
                currentIndex = 0; // Loop back to the start
            }
            updateSliderPosition();
            });

            prevBtn.addEventListener("click", () => {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = images.length - 1; // Loop to the end
            }
            updateSliderPosition();
            });

            // Initial position
            updateSliderPosition();
        });
        });
        function initMap() {
            // Location coordinates for Batangas State University
            const location = { lat: 14.05974895, lng: 121.13260865 };

            // Create the map
            const map = new google.maps.Map(document.getElementById("map"), {
                center: location,
                zoom: 15
            });

            // Add a marker
            const marker = new google.maps.Marker({
                position: location,
                map: map,
                title: "Batangas State University Malvar Campus"
            });
        }
    </script>

    <!-- Google Maps API Script -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>



        </script>
              
  </section>
    
</section>
          <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="af29a419-15ce-4818-b987-2eb321f79669";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
          <!-- <script>
            document.addEventListener('DOMContentLoaded', () => {
              const favoriteIcons = document.querySelectorAll('.favorite-icon');
              favoriteIcons.forEach(icon => {
                icon.addEventListener('click', () => {
                  icon.classList.toggle('favorited');
                });
              });
            });
          </script> -->
          <script>
            document.addEventListener('DOMContentLoaded', () => {
              const favoriteIcons = document.querySelectorAll('.favorite-icon');
          
              favoriteIcons.forEach(icon => {
                icon.addEventListener('click', () => {
                  if (icon.classList.contains('bi-heart')) {
                    icon.classList.remove('bi-heart');
                    icon.classList.add('bi-heart-fill', 'filled');
                  } else {
                    icon.classList.remove('bi-heart-fill', 'filled');
                    icon.classList.add('bi-heart');
                  }
                });
              });
            });
          </script>
          
<body>
        <!-- FOOTER -->
        <footer class="container">
            <p class="float-start">© 2024 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
            <p class="float-end"><a href="#">Back to top</a></p>
        </footer>  
        </main>

        <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<body>
</body>
</html>
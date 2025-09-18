<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VAHAN - Booking</title>
    <link rel="stylesheet" href="bus_info.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap"
      rel="stylesheet"
    />
    <style>
      .logo {
        font-family: "Bungee Shade", cursive;
        font-size: 5rem;
      }
    </style>
  </head>
  <body>
    <div class="header">
      <div class="logo-container">
        <div class="logo">VAHAN</div>
        <div class="subtitle">Compare, Choose, and Ride Smart!</div>
      </div>
      <div class="menu-icon" id="menuToggle">☰</div>
    </div>

    <!-- Navigation Bar -->
    <nav class="nav-container">
      <ul class="nav-menu" id="navMenu">
        <li><a href="ride_selection.html">Home</a></li>
        <li>
          <a href="#" class="nav-link"
            >My Rides <i class="fas fa-angle-down"></i
          ></a>
          <div class="dropdown-menu">
            <a href="#">Current Ride</a>
            <a href="#">Ride History</a>
            <a href="#">Schedule a Ride</a>
            <a href="#">Saved Routes</a>
          </div>
        </li>
        <li>
          <a href="#" class="nav-link"
            >Help <i class="fas fa-angle-down"></i
          ></a>
          <div class="dropdown-menu">
            <a href="#">FAQ</a>
            <a href="#">Contact Support</a>
            <a href="#">Report an Issue</a>
            <a href="#">Safety Tips</a>
          </div>
        </li>
        <li>
          <a href="#" class="nav-link"
            >Notifications <i class="fas fa-angle-down"></i
          ></a>
          <div class="dropdown-menu">
            <a href="#">Unread</a>
            <a href="#">Promotions</a>
            <a href="#">Updates</a>
            <a href="#">Settings</a>
          </div>
        </li>
        <li>
          <a href="#" class="nav-link"
            >Settings <i class="fas fa-angle-down"></i
          ></a>
          <div class="dropdown-menu">
            <a href="#">Profile</a>
            <a href="#">Payment Methods</a>
            <a href="#">Privacy</a>
            <a href="#">Preferences</a>
          </div>
        </li>
      </ul>
    </nav>

    <?php include 'config.php'; ?>
    <?php include 'pickup.php'; ?>

    <nav class="pickup-drop">
      <span class="location" style="text-transform:capitalize;"><?php echo $pickup . " to " . $drop; ?></span>
      <span class="date"><?php echo $date; ?></span>
    </nav>
    <!-- Bus Listings -->
    

<section class="bus-list">
  <?php
    $sql = "SELECT * FROM bus_info where from_city='$pickup' AND to_city='$drop'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
  ?>
    <div class="bus-card">

      <div class="bus-info">
        <div class="bus-header">
          <span class="bus-name"><?php echo $row['name']; ?></span>
          <span class="price-container">
            <span class="price">Rs.<?php echo $row['price']; ?></span>
            <span class="onwards">Onwards</span>
          </span>
        </div>
        <p><strong><?php echo $row['seats_left']; ?> Seats Left</strong></p>
        <p><?php echo $row['type']; ?></p>
        <a href="<?php echo $row['details_link']; ?>" class="details">More Details...</a>
      </div>
      <div class="bus-timing">
        <p><?php echo $row['departure_time']; ?> - <?php echo $row['arrival_time']; ?></p>
        <p class="duration"><?php echo $row['duration']; ?></p>
        <p class="duration" style="text-transform:capitalize;"><?php echo $pickup ." to " . $drop; ?></p>
        <a href="<?php echo $row['booking_link']; ?>" class="img-container">
          <img src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['name']; ?>" />
        </a>
      </div>
    </div>
  <?php
      }
    } else {
      echo "<p>No buses found.</p>";
    }

    $conn->close();
  ?>
</section>


    <!-- Footer Buttons -->
    <div class="footer">
      <div class="social-icons">
        <span><i class="fab fa-instagram"></i></span>
        <span><i class="fas fa-envelope"></i></span>
        <span><i class="fab fa-twitter"></i></span>
        <span><i class="fab fa-facebook"></i></span>
      </div>
      <div class="footer-links">
        <a href="#">Terms & Conditions</a>
        <a href="#">Privacy Policy</a>
        <a href="#">About Us</a>
        <a href="#">Careers</a>
      </div>
      <div class="copyright">
        © 2025 VAHAN Transportation. All Rights Reserved.
      </div>
    </div>

    <script>
      // JavaScript for mobile menu toggle
      document
        .getElementById("menuToggle")
        .addEventListener("click", function () {
          document.getElementById("navMenu").classList.toggle("active");
        });

      // JavaScript for dropdown menus
      const navLinks = document.querySelectorAll(".nav-link");
      navLinks.forEach((link) => {
        link.addEventListener("click", function (e) {
          if (window.innerWidth <= 768) {
            e.preventDefault();
            this.nextElementSibling.classList.toggle("show");
          }
        });
      });
    </script>
  </body>
</html>
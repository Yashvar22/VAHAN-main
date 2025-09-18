<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VAHAN - Booking</title>
    <link rel="stylesheet" href="profile.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
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

    <nav class="nav-container" >
      <ul class="nav-menu" id="navMenu">
        <li><a href="ride_selection.html" class="active">Home</a></li>
        <li>
          <a href="#" class="nav-link">My Rides 
          <i class="fas fa-angle-down"></i></a>
          <div class="dropdown-menu">
            <a href="#">Current Ride</a>
            <a href="#">Ride History</a>
            <a href="#">Schedule a Ride</a>
            <a href="#">Saved Routes</a>
          </div>
        </li>
        <li>
          <a href="#" class="nav-link">Help <i class="fas fa-angle-down"></i></a>
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
    <?php 
        //include "config.php";
        include "login.php";


        // if(isset($_POST['sb'])) {
        //   $Email = $_POST['Email'];
        //   $Password = $_POST['Password'];

        //   $sql = "SELECT * FROM signup WHERE Email='$Email' AND Password='$Password'";
        //   $result = $conn->query($sql);

        //   if ($result->num_rows > 0) {
        //     while($row = $result->fetch_assoc()) {

    ?>
    <div class="page-title">My Profile</div>
    
    <div class="profile-container">
      <div class="profile-pic">
        <span style="font-size: 40px; color: #888">👤</span>
      </div>
      <div class="profile-name"><?php echo "<div style='text-transform:capitalize;'>".$_SESSION['Name']."<br>". $_SESSION['phone']."<br>". $_SESSION['Gender']."</div>"; ?></div>
    </div>
    <!-- For the buttons -->
    <a href="ride_selection.php" class="btn btn-book-ride">Book My Ride</a>
    <a href="#" class="btn btn-current-ride">Current Ride</a>
    <a href="#" class="btn btn-previous-rides">Previous Rides</a>
    <a href="#" class="btn btn-settings">Settings</a>
    <a href="#" class="btn btn-safety">Safety Policies</a>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

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
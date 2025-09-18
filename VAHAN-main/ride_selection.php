<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VAHAN - Select Your Ride</title>
  <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="ride_selection.css">
</head>
<body>
  <div class="header">
    <div>
      <div class="logo">VAHAN</div>
      <div class="subtitle">Compare, Choose, and Ride Smart!</div>
    </div>
    <div class="menu-icon">
      <a href="profile.php"><i class="fas fa-user-circle"></i></a>
    </div>
  </div>

  <?php include "login.php"; ?>


  <div class="main-content">
    <h1><?php echo "<span style='text-transform:capitalize;'>Hey!, ".$_SESSION['Name']."</span>"; ?></h1>
    <h2>Select Your Ride</h2>
    <div class="ride-options">
      <div class="ride-option" style="margin-left: 150px;">
       <a href="pick_drop.html"> <img src="images/bus.jpg" alt="Bus" style="border-radius: 100%;height:100px;width:100px;"> </a>
        <p>Bus</p>
      </div>
      <div class="ride-option" style="margin-left: 100px;">
        <a href="pick_drop.html"><img src="images/cab.jpg" alt="Cab" style="border-radius: 100%;height:100px;width:100px;"> </a>
        <p>Cab</p>
      </div>
      <div class="ride-option" style="margin-left: 50px;">
        <a href="pick_drop.html"><img src="images/bike.jpg" alt="Bike" style="border-radius: 100%;height:100px;width:100px;"></a>
        <p>Bike</p>
      </div>
      <div class="ride-option" style="margin-left: 300px;">
        <a href="pick_drop.html"><img src="images/auto.jpg" alt="Auto" style="border-radius: 100%;height:100px;width:100px;"></a>
        <p>Auto</p>
      </div>
      <div class="ride-option" style="margin-left: 300px;">
        <a href="pick_drop.html"><img src="images/s_cab.jpg" alt="Shared Cab" style="border-radius: 100%;height:100px;width:100px;"></a>
        <p>Shared Cab</p>
      </div>
    </div>
  </div>

  <div class="footer">
    <i class="fab fa-instagram"></i>
    <i class="fas fa-envelope"></i>
    <i class="fab fa-twitter"></i>
    <i class="fab fa-facebook"></i>
  </div>
</body>
</html>
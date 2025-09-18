<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
  
include 'config.php';

if(isset($_POST['sb'])) {
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $sql = "SELECT * FROM signup WHERE Email='$Email' AND Password='$Password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['Name'] = $row['Name'];  
        $_SESSION['Email'] = $row['Email']; 
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['Gender'] = $row['Gender'];
        echo "<script>window.location.href='profile.php';</script>";
    } else {
        echo "<script>window.location.href='login.html';</script>";
    }

    $conn->close();
}
?>

<?php
$host = 'localhost';
$db = 'vahan';
$user = 'root';
$pass = 'Yash@1234';

$conn = new mysqli($host, $user, $pass, $db,'3306');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
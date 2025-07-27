<?php
$host = 'localhost';
$db   = 'u348991914_orgTestDB';
$user = 'u348991914_orgtestdb';
$pass = '8h;jbovE$FO'; // Replace with actual

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

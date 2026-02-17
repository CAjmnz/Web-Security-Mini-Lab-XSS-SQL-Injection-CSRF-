<?php
$host = "localhost";
$user = "labuser";
$pass = "labpass123";
$db   = "web_security_lab";  // Must match actual DB name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<?php
session_start();

// Simulate logged-in user
$_SESSION['username'] = "admin";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_email = $_POST['email'];
    echo "<h3>Email changed to: $new_email</h3>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CSRF Vulnerable Demo</title>
</head>
<body>

<h2>CSRF Demo (Vulnerable)</h2>

<p>Logged in as: <?php echo $_SESSION['username']; ?></p>

<form method="POST">
    New Email:
    <input type="text" name="email">
    <input type="submit" value="Change Email">
</form>

</body>
</html>

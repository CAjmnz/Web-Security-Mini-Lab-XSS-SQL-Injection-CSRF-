
<?php
session_start();

// Simulate logged-in user
$_SESSION['username'] = "admin";

// Generate CSRF token
if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
        die("CSRF validation failed!");
    }

    $new_email = $_POST['email'];
    echo "<h3>Email securely changed to: $new_email</h3>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CSRF Secure Demo</title>
</head>
<body>

<h2>CSRF Demo (Secure Version)</h2>

<p>Logged in as: <?php echo $_SESSION['username']; ?></p>

<form method="POST">
    New Email:
    <input type="text" name="email">
    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
    <input type="submit" value="Change Email">
</form>

</body>
</html>

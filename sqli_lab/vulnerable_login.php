<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>SQL Injection Vulnerable Login</title>
</head>
<body>

<h2>SQL Injection Demo (Vulnerable)</h2>

<form method="POST">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="text" name="password"><br><br>
    <input type="submit" name="login" value="Login">
</form>

<?php
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // ❌ VULNERABLE QUERY
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h3>Login Successful!</h3>";
    } else {
        echo "<h3>Invalid Credentials</h3>";
    }
}
?>

</body>
</html>


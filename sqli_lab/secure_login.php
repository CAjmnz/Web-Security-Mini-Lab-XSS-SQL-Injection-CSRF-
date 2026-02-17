<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>SQL Injection Secure Login</title>
</head>
<body>

<h2>SQL Injection Demo (Secure Version)</h2>

<form method="POST">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="text" name="password"><br><br>
    <input type="submit" name="login" value="Login">
</form>

<?php
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // ✅ PREPARED STATEMENT
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h3>Login Successful!</h3>";
    } else {
        echo "<h3>Invalid Credentials</h3>";
    }

    $stmt->close();
}
?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>XSS Secure Demo</title>
</head>
<body>

<h2>Reflected XSS Demo (Secure Version)</h2>

<p>
This page properly sanitizes user input before displaying it.
</p>

<form method="GET">
    Enter your name:
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<hr>

<?php
/*
|--------------------------------------------------------------------------
| FIX EXPLANATION
|--------------------------------------------------------------------------
| htmlspecialchars() converts special characters into HTML entities.
| This prevents the browser from executing injected scripts.
*/

if (isset($_GET['name'])) {

    $name = htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8'); // ✅ Escaped input

    echo "<h3>Hello, $name</h3>";
}
?>

</body>
</html>


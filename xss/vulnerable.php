
<!DOCTYPE html>
<html>
<head>
    <title>XSS Vulnerable Demo</title>
</head>
<body>

<h2>Reflected XSS Demo (Vulnerable Version)</h2>

<p>
This page reflects user input directly into the HTML response.
It does NOT sanitize or encode user input.
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
| VULNERABILITY EXPLANATION
|--------------------------------------------------------------------------
| The application directly outputs user input without sanitization.
| This allows attackers to inject JavaScript code.
|
| Example payload:
| <script>alert('XSS')</script>
*/

if (isset($_GET['name'])) {

    $name = $_GET['name']; // ❌ Raw user input

    echo "<h3>Hello, $name</h3>"; // ❌ Direct output (Vulnerable)
}
?>

</body>
</html>

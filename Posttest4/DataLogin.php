<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="DataLogin.css">
    <title>Login</title>
</head>
<body>
<?php require_once "Header.php"; ?>
<h1>Daftar Login</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $masked_password = str_repeat('*', strlen($password));

        // $password = $_POST["password"];
        
        echo "<p>Username: " . $username . "</p>";
        echo "<p>Email: " . $email . "</p>";
        echo "<p>Password: " . $masked_password . "</p>";

        // Jangan tampilkan password dalam hasil
    }
    ?>
    <script src="Script.js"></script>
</body>
</html>
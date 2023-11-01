<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="../style/HasilForm.css">
    <title>Pesan Masuk</title>
    
</head>
<body>
    <?php require_once "Header.php"; ?>
    <div class="content">
    <h1>Hasil Contact</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $tel = $_POST["phone"];
        $message = $_POST["message"];
        $date = $_POST["date"];
    

        echo "<p>Name: " . $name . "</p>";
        echo "<p>Email: " . $email . "</p>";
        echo "<p>Message: " . $message . "</p>";
        echo "<p>Phone Number: " . $tel . "</p>";
        echo "Date: " . $date . "<br>";
        // Jangan tampilkan password dalam hasil
        
    }
    ?>
    </div>
</body>
</html>

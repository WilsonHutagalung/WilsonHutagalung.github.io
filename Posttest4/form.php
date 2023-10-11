<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Form.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> 
    <title>Pesan Masuk</title>
    
</head>
<body>
<?php require_once "Header.php"; ?>
    <h1>Hasil Contact</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $tel = $_POST["phone"];
        $message = $_POST["message"];
        $date = $_POST["date"];
        // $password = $_POST["password"];
        if (isset($_FILES['file'])) {
            $file = $_FILES['file'];

            if ($file['error'] === UPLOAD_ERR_OK) {
                $file_name = $file['name'];
                $file_temp = $file['tmp_name'];
    
                // Simpan gambar ke direktori yang Anda inginkan
                $upload_dir = 'htdocs/Posttest 4';
                $file_path = $upload_dir . $file_name;
    
                if (move_uploaded_file($file_temp, $file_path)) {
                    echo "Image uploaded successfully.<br>";
                    // Menampilkan gambar yang diunggah
                    echo '<img src="' . $file_path . '" alt="Uploaded Image" style="max-width: 400px;">';
                } else {
                    echo "Error uploading the image.";
                }
            } else {
                echo "Error during file upload. Error code: " . $file['error'];
            }
        }
        
        echo "<p>Name: " . $name . "</p>";
        echo "<p>Email: " . $email . "</p>";
        echo "<p>Message: " . $message . "</p>";
        echo "<p>Phone Number: " . $tel . "</p>";
        echo "Date: " . $date . "<br>";
        // Jangan tampilkan password dalam hasil
        
    }
    ?>
</body>
</html>

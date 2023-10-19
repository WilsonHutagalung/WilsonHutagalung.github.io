<?php
require 'Koneksi.php';

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $img = $_FILES["file"]["name"];
    $tempName = $_FILES["file"]["tmp_name"];
    move_uploaded_file($tempName, "image/" . $img);

    
    $query = "INSERT INTO sparepart VALUES ('','$nama', '$harga', '$stok','$img')";
    if (mysqli_query($conn, $query)) {
        echo "
        <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = '../views/Database.php'
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = '../views/Update.php'
        </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link rel="stylesheet" href="../style/style3.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Tambah Data</h1><hr><br>
            <form action="" method="POST" name="tambah" enctype="multipart/form-data">
                <label for="nama">Nama Sparepart</label>
                <input type="text" name="nama" class="textfield" required>
                <label for="harga">Harga</label>
                <input type="text" name="harga" class="textfield" required>
                <label for="stok">Stok</label>
                <input type="number" name="stok" class="textfield" required>
                <!-- BIKIN UNTUKINPUTAN FILE -->
                <p>add image : <input type="file" name="file" required> </p>
                <input type="submit" name="tambah" name="spn" value="Tambah Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>
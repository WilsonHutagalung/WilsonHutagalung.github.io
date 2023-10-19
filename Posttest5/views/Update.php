<?php
require 'Koneksi.php';

$id = $_GET['id'];

if (isset($_POST['edit'])) {
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $img = $_FILES["file"]["name"];
    $tempName = $_FILES["file"]["tmp_name"];
    move_uploaded_file($tempName, "image/" . $img);

    
    $result = mysqli_query($conn, "UPDATE sparepart SET  Nama_Sparepart = '$nama', Stok = '$stok', Harga = '$harga', Gambar = '$img' WHERE id = '$id' ");
    if ($result) {
        echo "
        <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = '../views/Database.php'
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = '../views/update.php?id=$id'
        </script>";
        }
    }
$result = mysqli_query($conn, "SELECT * FROM sparepart where Id=$id");
$sparepart = [];

while ($row = mysqli_fetch_assoc($result)) {
    $sparepart[] = $row;
}

$sparepart = $sparepart[0];
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
            <h1>Edit Data</h1><hr><br>
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="nama">Nama Sparepart</label>
                <input type="text" name="nama" value="<?php echo $sparepart['Nama_sparepart']?>" class="textfield" >
                <label for="stok">Stok</label>
                <input type="number" name="stok" value="<?php echo $sparepart['Stok']?>" class="textfield">
                <label for="harga">Harga</label>    
                <input type="text" name="harga" value="<?php echo $sparepart['Harga']?>" class="textfield" >
                <!-- BIKIN UNTUKINPUTAN FILE -->
                <p>Update Image: <input type="file" name="file" required> </p>
                <input type="submit" name="edit" value="Edit Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>
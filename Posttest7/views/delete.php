<?php
    require "koneksi.php";
    $id = $_GET['id'];


    $get_foto = mysqli_query($conn, "SELECT Gambar FROM sparepart WHERE id = $id");

    $data_old = mysqli_fetch_array($get_foto);
    unlink("image/".$data_old['file']);



    $result = mysqli_query($conn,"DELETE FROM sparepart   WHERE id = '$id'");
    $sparepart = [];


    if ($result) {
        echo "
        <script>
            alert('Data berhasil Hapus!');
            document.location.href = '../views/Database.php'
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Hapus!');
            document.location.href = '../views/Database.php'
        </script>";
    }

?>
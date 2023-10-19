<?php
require "koneksi.php";
$id = $_GET['id'];


$result = mysqli_query($conn,"DELETE FROM sparepart   WHERE id = '$id'");

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
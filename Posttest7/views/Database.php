<?php
session_start();
require '../views/koneksi.php';
date_default_timezone_set("Asia/Makassar");

if (!isset($_SESSION['login'])) {
    header('Location: Login.php');
    exit;
}

$result = mysqli_query($conn, "SELECT * FROM sparepart");

$sparepart = [];

while ($row = mysqli_fetch_assoc($result)){
    $sparepart[] = $row;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style4.css">
    <script src="../scripts/datetime.js"></script>
</head>
<body>
<header class="header">
<nav class="nav">
        <div class="logo">
            <img src="../assets/Logo.png" alt="" class="icon">
            <h4>PartExpress</h4>
        </div>
        <ul class="nav-menu">
            <p id="current-date"></p>
            <p id="current-time"></p>
            <p id="time-zone"></p>
            <li><a href="../views/Logout.php">Logout</a></li>
        </ul>
    </nav>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table border="1" cellpadding="5" width="95%" height="auto" style="margin-left: auto; margin-right: auto;">
    <caption style="font-size: 50px;"><b>Data Sparepart</b>     
    <div class="row gy-4"><a id="button-feature1" href="Create.php" class="btn-buy"><h4 class="tulisan">+ Tambah</h4></a>
     <br>
    </div></caption>
    <tr class="table-cadangan">
        <td width="auto"><h3 class="tulisan-tabel">No</h3></td>
        <td width="auto"><h3 class="tulisan-tabel">Nama Sparepart</h3></td>
        <td width="auto"> <h3 class="tulisan-tabel">Harga</h3></td>
        <td width="auto"><h3 class="tulisan-tabel">Stok</h3></td>
        <td width="auto"><h3 class="tulisan-tabel">Gambar</h3></td>
        <td width="110"><h3 class="tulisan-tabel">Aksi</h3></td>
    </tr>

    <?php
    $i = 1;
    
    foreach ($sparepart as $spart) :
    ?>
        <tr style="font-size: 20px;text-align: center">
            <td style="font-weight: bold;"><?php echo $i ?></td>
            <td><?php echo $spart["Nama_sparepart"] ?></td>
            <td>Rp.<?php echo $spart["Harga"] ?></td>
            <td><?php echo $spart["Stok"] ?></td>
            <td>
                <img class="" src="image/<?php echo $spart['Gambar']; ?>" width="80px" alt="Foto Sparepart">
            </td>
            <td class="action">
            <a href="Update.php?id=<?php echo $spart["Id"] ?>"><button class="edit-btn" id="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/></svg></button></a>
                <a href="delete.php?id=<?php echo $spart["Id"] ?>"><button name="hapus" class="delete-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>
            </td>
        </tr>
            <?php $i++;
        endforeach;
        ?>
</table>

</div>  
<script src="../scripts/Script.js"></script>
</body>
</html>
<?php
session_start();
require 'koneksi.php';

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
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> 
    <title>POSTTEST 3</title>
</head>
<body>
<header>
        <nav class="nav">
            <div class="logo">
                <img src="../assets/Logo.png" alt="" class="icon">
                <h4 id="Brands">PartExpress</h4>
            </div>
            <ul class="nav-menu">
                <li><a href="#Home">Home</a></li>
                <li><a href="#About">About Us</a></li>
                <li><a href="#Product">Product</a></li>
                <li><a href="#Contact">Contact</a></li>
                <li><a href="../views/index2.php">About Me</a></li>
                <?php
                if (isset($_SESSION['login'])) {
                    echo "<li><a href='Logout.php' style='margin-top: 19px;'>Logout</a><h3></h3></li>"; 
                } else {
                    echo "<li><a href='Login.php' style='margin-top: 19px;'>Login</a><h3></h3></li>";
                }
                ?>
            </ul>
            <div class="mode-toggle">
                <button id="mode-toggle-button" class="toggle-button"></button>
            </div>
              
        </nav>
    </header>
    <main>
        <div class="main-page">
            <section class="home" id="Home"> 
              <h2 class="home-content"><p>Welcome To PartsExpress Website</p></h2>
            </section>
        </div>   
        <div class="about-us" id="About">
            <section class="about-us-title">
                <h1 class="title">ABOUT US</h1>
            </section>
            <section class="about-us-content">
                <div class="content-1">
                    <img src="../assets/Sparepart.png" alt="">
                    <p>
                        PartsExpress adalah platform One-Stop-Shopping yang menyediakan SparePart atau Suku Cadang motor terlengkap dengan jaminan keaslian produk untuk Bisnis ataupun keperluan anda.
                        PartsExpress berkomitmen secara profesional untuk menyediakan produk berkualitas dengan harga terbaik, pengiriman yang tepat waktu serta pelayanan yang memberi kemudahan akses dan komunikasi dan transparansi harga yang diberikan kepada pelanggan.
                        Sebab Sukucadang palsu dan kurangnya transparansi harga cukup merugikan banyak masyrakat.
                    </p>
                </div>
            </section>
        </div>
        <div class="Product-us" id="Product">
            <section class="product-us-title">
                <h1 class="ptitle">PRODUCT</h1>
            </section>
            <div class="image">
            <?php
            $i = 1;
            foreach ($sparepart as $spart) :
            ?>
                <div class="images">
                    <img class="image" src="image/<?php echo $spart['Gambar']; ?>" width="100px" alt="Foto Profil">
                    <h1><?php echo $spart["Nama_sparepart"] ?></h1>
                    <p><h2>Stok: <?php echo $spart["Stok"] ?></h2></p>
                    <p><h2>Rp.<?php echo $spart["Harga"] ?></h2></p>
                    <button class="buyButton" id="buyButton" onclick="alert('Belum tersedia atau belum bisa diakses')">Beli</button>
                </div>
            <?php $i++;
            endforeach;
            ?>
            </div>
        </div>
    </form>
        <div class="contact-us" id="Contact">
            <section class="contact-us-title">
                <h1 class="ctitle">CONTACT US</h1>
            </section>
            <section class="contact-us-content">
                <div class="contact-info">
                    <h2>Contact Information</h2>
                    <p>Email: PartsExpress@gmail.com</p>
                    <p>Phone: +621346817967</p>
                    <p>Address: Berau</p>
                </div>
                <div class="contact-form">
                    <h2>Contact Form</h2>
                    <form action="form.php" method="post" enctype="multipart/form-data>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
        
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="phone">Phone Number:</label>
                        <input type="tel" id="phone" name="phone" required pattern="[0-9]+">
                        
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                        
                        <label for="date">Date:</label>
                        <input type="date" id="date" name="date" required>

                        <!-- <label for="image">Image:</label>
                        <input type="file" id="file"   name="file"> -->

                        <button type="submit" value="Submit">Submit</button>
                    </form>
                </div>
            </section>
        </div>        
    </main>
    <footer>
        <div class="footer-container">
            <p>Copyright ©️ 2023 PartExpress</p>
        </div>
    </footer>
    <script src="../scripts/Script.js"></script>
    <!-- Penggunaan JQuery -->
    <script>
        $('#Brands').on('click', () => {
            $('#Brands').css('color', 'orange')
        })
    </script>
</body>
</html>
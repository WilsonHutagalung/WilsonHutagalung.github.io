<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> 
    <title>POSTTEST 3</title>
</head>
<body>
<header>
        <nav class="nav">
            <div class="logo">
                <img src="Logo.png" alt="" class="icon">
                <h4 id="Brands">PartsExpress</h4>
            </div>
            <ul class="nav-menu">
                <li><a href="#Home">Home</a></li>
                <li><a href="#About">About Us</a></li>
                <li><a href="#Product">Product</a></li>
                <li><a href="#Contact">Contact</a></li>
                <!-- Pop up Box -->
                <li><a href="Login.php">Login/Daftar</a></li>
                <li><a href="index2.php">About Me</a></li>
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
                    <img src="Sparepart.png" alt="">
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
                <div class="images">
                    <img src="OIL.png" alt="">
                    <h1>AHM OIL SPX-2 0.65L</h1>
                    <p><h2>Rp. 42.000</h2></p>
                </div>
                <div class="images">
                    <img src="Ban.png" alt="">
                    <h1>Ban Sport MP76 Ring 17</h1>
                    <p><h2>Rp. 450.000</h2></p>
                </div>
                <div class="images">
                    <img src="Kampas.png" alt="">
                    <h1>Kampas Rem Motor</h1>
                    <p><h2>Rp. 21.000</h2></p>
                </div>
                <div class="images">
                    <img src="Aki.png" alt="">
                    <h1>Aki Motor</h1>
                    <p><h2>Rp. 145.650</h2></p>
                </div>
                <div class="images">
                    <img src="Rantai.png" alt="">
                    <h1>Rantai Motor</h1>
                    <p><h2>Rp. 69.000</h2></p>
                </div>
                <div class="images">
                    <img src="Bearing Roda.png" alt="">
                    <h1>Bearing Roda</h1>
                    <p><h2>Rp. 8.000</h2></p>
                </div>
                <div class="images">
                    <img src="Busi.png" alt="">
                    <h1> Busi NGK C7HSA</h1>
                    <p><h2>Rp. 5.400</h2></p>
                </div>
                <div class="images">
                    <img src="Karburator.png" alt="">
                    <h1>Karburator</h1>
                    <p><h2>Rp. 113.800</h2></p>
                </div>
                <div class="images">
                    <img src="Bohlam LED.png" alt="">
                    <h1>Bohlam LED</h1>
                    <p><h2>Rp. 33.700</h2></p>
                </div>
                <div class="images">
                    <img src="Gear.png" alt="">
                    <h1>Gear Tipis 415</h1>
                    <p><h2>Rp. 123.000</h2></p>
                </div>
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

                        <label for="image">Image:</label>
                        <input type="file" id="file"   name="file">

                        <button type="submit" value="Submit">Submit</button>
                    </form>
                </div>
            </section>
        </div>        
    </main>
    <footer>
        <div class="footer-container">
            <p>Copyright ©️ 2023 PartsExpress</p>
        </div>
    </footer>
    <script src="Script.js"></script>
    <!-- Penggunaan JQuery -->
    <script>
        $('#Brands').on('click', () => {
            $('#Brands').css('color', 'orange')
        })
    </script>
</body>
</html>
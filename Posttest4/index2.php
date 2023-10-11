<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> 
    <title>About Me</title>
</head>
<body>
    <nav class="nav">
        <div class="logo">
            <img src="Logo.png" alt="" class="icon">
            <h4 id="Brand">PartsExpress</h4>
        </div>
        <ul>
            <li><a href="index.php">Website PartsExpress</a></li>
            <div class="mode-toggle">
                <button id="mode-toggle-button" class="toggle-button"></button>
            </div>
        </ul>
    </nav>
    <div class="about" id="About">
        <section class="about-title">
            <h1 class="title">ABOUT ME</h1>
        </section>
        <section class="about-content">
            <div class="content-1">
                <img src="Pas Foto.jpg" alt="">
                <table class="tabel">
                    <tr>
                        <td>Nama</td>
                        <td>: Wilson Boyaron Hutagalung</td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>: 2209106035</td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td>: Berau, 26 Januari 2004</td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>: Indonesia</td>
                    </tr>
                    <tr>
                        <td>Hobi</td>
                        <td>: Bermain Game dan Mendengarkan Musik</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: wboyaron@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>: Informatika</td>
                    </tr>
                    <tr>
                        <td>Perguruan Tinggi</td>
                        <td>: Universitas Mulawarman</td>
                    </tr>
                </table>
            </div>
        </section>
    </div>
    <?php require_once "footer.php"; ?>
    <script src="Script.js"></script>
    <script>
        $('#Brand').on('click', () => {
            $('#Brand').css('color', 'orange')
        })
    </script>
</body>
</html>
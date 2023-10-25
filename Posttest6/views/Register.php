<?php
require 'Koneksi.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $query = "INSERT INTO akunuser VALUES ('','$username', '$email', '$password')";
    if (mysqli_query($conn, $query)) {
        echo "
        <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = '../views/Login.php'
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

<html>
<head>
  <meta charset="utf-8">
  <title>PartExpress: Sign in</title>
  <link rel="stylesheet" type="text/css" href="../style/Login.css">
</head>
<body>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="" rel="dofollow">PartsExpress</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Sign Up to your account</span>
              <form id="stripe-login" action="" method="POST">
                  <div class="field padding-bottom--24">
                    <label for="username">Username</label>
                    <input type="username" id="username" name="username" required>
                  </div>
                  <div class="field padding-bottom--24">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                  </div>
                  <div class="field padding-bottom--24">
                  <div class="grid--50-50"> 
                </div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                </div>
                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                </div>
                <div class="field padding-bottom--24">
                  <button type="submit" name="submit" value="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <div class="footer-link padding-top--24">
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="index.php">© PartsExpress</a></span>
              <span><a href="#" onclick="alert('Belum tersedia atau belum bisa diakses')">Contact</a></span>
              <span><a href="#" onclick="alert('Belum tersedia atau belum bisa diakses')">Privacy & terms</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
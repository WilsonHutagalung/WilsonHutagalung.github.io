<?php
require '../views/koneksi.php';

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if($password == $cpassword){
      $password = password_hash($password,PASSWORD_DEFAULT);
      $result  = mysqli_query($conn,"SELECT username from akun WHERE username = '$username' ");
      if(mysqli_fetch_assoc($result) || $username == 'admin'){
          echo "<script> alert('username sudah ada !!!');
          document.location.href='Register.php';
          </script>";
      }else{
        $query = "INSERT INTO akun VALUES ('','$username', '$password')";
        $result_query = mysqli_query($conn, $query);
        if(mysqli_affected_rows($conn) > 0){
          echo "<script> alert( 'Registrasi Berhasil!!');
          document.location.href='Login.php';
          </script>";
          }else{
              echo "<script> alert( 'Registrasi gagal!!');
              document.location.href='Register.php';
              </script>";
          }
      }
    }else {
      echo "<script> alert('password tidak sama !!!');
      document.location.href='Register.php';
      </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="../style/Form.css">
</head>
<body>
    <div class="wrapper">
        <form action="" method="POST">
            <h1>Sign Up</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-box">
                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" autocomplete="off"  required>
            </div>
            <button type="submit" name="submit" class="btn">Register</button>
        </form>
    </div>
</body>
</html>
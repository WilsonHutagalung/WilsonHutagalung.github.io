<?php
session_start();
require 'koneksi.php'; 

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'Admin' && $password === 'Admin') {
      // Jika username dan password adalah admin, berikan akses
      $_SESSION['login'] = true;
      header("Location:Database.php");
      exit;
    } 

    // Jika bukan admin, cek ke database
    $result = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username'");
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;
            header("Location: index.php");
            exit;
        }
    }

    // Jika tidak cocok dengan admin atau data yang ada di database, set error
    $error = true;
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
    <?php echo isset($row); ?>
    <div class="wrapper">
        <?php
        if(isset($error)){
            echo "<p style='color:red';> username atau password anda salah </p>";
        }?>
        <form action="" method="POST">
            <h1>Sign In</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="username" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" onclick="alert('Belum tersedia atau belum bisa diakses')">Remember me</label>
                <a href="ChangePass.php">Forgot Password?</a>
            </div>
            <button type="submit" name="login" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="Register.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>
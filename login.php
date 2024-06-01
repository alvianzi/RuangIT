<?php


require 'koneksi.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username'");

    //cek username
    if (mysqli_num_rows($result) === 1) {

        # cek password 
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            //session 
           

            header("Location: dashboard.php");
        }
    }

    $error = true;
    
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang IT</title>
    <link rel="stylesheet" href="style2.css">
    <script type="text/javascript" src="jquery.js"></script>
    <link href="gambar/logo1.png" rel="shorcut icon">
    
</head>

<body>
    <section class="latar">
        <div class="container">
            <div class="title">HALAMAN LOGIN ...</div>
            <div class="content">
                <form action="" method="post">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Username</span>
                            <input type="text" placeholder="Enter your Username" name="username" id="username" required>
                        </div><br><br>
                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="password" class="password" placeholder="Enter your Password" name="password" id="password" required>
                        </div>
                        <div class="check-box">
                            <input type="checkbox" class="form-checkbox"> Show Password
                        </div>

                        <?php if (isset($error)) : ?>
                            <p style="color: red; font-style:italic; ">username / password salah</p>
                        <?php endif; ?>

                    </div>
                    <div class="button">
                        <input type="submit" value="LOGIN" name="login">
                        <br>
                        </br>
                        <center>
                            <p>Belum Punya Akun ? <a href="registrasi.php">Sign Up </a>sekarang.
                            <p>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </section>



</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('.form-checkbox').click(function() {
            if ($(this).is(':checked')) {
                $('.password').attr('type', 'text');
            } else {
                $('.password').attr('type', 'password');
            }
        });
    });
</script>


</html>
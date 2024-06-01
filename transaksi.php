<?php
require 'conn.php';
$nama = "";
if (isset($_POST["submit"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $paket = htmlspecialchars($_POST["paket"]);
    $tanggal = htmlspecialchars($_POST["tanggal"]);

    $create_sql = "INSERT INTO transaksi VALUES ('','$nama','$email','$paket','$tanggal')";
    $result = mysqli_query($conn, $create_sql);

    if ($result) {
        echo "<script>
            alert('Transaksi Berhasil!');
            document.location.href = 'hasil.php?nama=$nama&email=$email&paket=$paket&tanggal=$tanggal';
        </script>";
    } else {
        echo "<script>
            alert('Transaksi gagal!');
            document.location.href = 'transaksi.php';
        </script>";
    }
}
?>

<html><!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beli Paket</title>
        <link rel="stylesheet" href="style2.css">
        <link href="gambar/logo1.png" rel="shorcut icon">
            </head>




    </head>
    <body>
    <section class="latar">
<div class="container">
<div class="content">
            <h1>Transaksi</h1>
           <center> <form action="" method="post">
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama" required><br><br>
        <label for="email">Email </label><br>
        <input type="text" name="email" id="email" required><br><br>
        <label for="paket">Paket</label><br>
        <input type="radio" name="paket" id="paket" value="Front END Develooper">Front END Develooper(Rp. 200.000,00)
        <input type="radio" name="paket" id="paket" value="IOS Developper">IOS Developper(Rp. 400.000,00)
        <input type="radio" name="paket" id="paket" value="Back END Develooper">Back END Develooper(Rp. 150.000,00)<br><br>
        <label for="tanggal">Tanggal</label><br>
        <input type="date" name="tanggal" id="tanggal"><br><br>
       </center>
        <button class="btn" type="submit"  name="submit">Konfirmasi</button>
        <a href="index.php" class="btn">Home</a>
    </form>
</div>
</div>
</selection>


    </body>

    


</html>
                   
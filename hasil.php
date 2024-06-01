<?php
    $nama = htmlspecialchars($_GET["nama"]);
    $email = htmlspecialchars($_GET["email"]);
    $paket = htmlspecialchars($_GET["paket"]);
    $tanggal = htmlspecialchars($_GET["tanggal"]);

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link href="gambar/logo1.png" rel="shorcut icon">
    <title>STRUK TRANSAKSI</title>
</head>
<body>
<section class="latar">
<div class="container">
<div class="content">
    <center><p>Nama: <?=$nama?> <br> Email: <?=$email?> <br>Jenis Paket:<?=$paket?><br> Tanggal:<?=$tanggal?>
            </p>
            <a href="index.php" class="btn">Home</a>
            </center>
           
            <script>
            window.print();
            </script> 
            </div>
            </div>
</selection>
</body>
</html>
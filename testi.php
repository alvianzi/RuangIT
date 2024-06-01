<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUANG IT</title>

    <!-- untuk sambung ke css -->
    <link rel="stylesheet" href="style1.css">
    
    <!-- untuk akses ikon di font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="gambar/logo1.png" rel="shorcut icon">
</head>
<body>
     <!-- HEADER -->
     <section class="sub-header">
        <nav>
            <!-- untuk logonya -->
            <h1><a href="index.php">RUANG IT</a></h1>
            
            <!-- untuk navigasi bar -->
            <div class="navbar" id="navbars">
                <!-- untuk masukin ikon close (aktif ketika layar mengecil) -->
                <i class="fas fa-times" onclick="hideMenu()"></i>    
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="kursus.php">Kursus Online</a></li>
                    <li><a href="testi.php">Testimonial</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="transaksi.php">Beli Paket</a></li>
                    <li><a href="login.php">Masuk/Daftar</a></li>
                </ul>
            </div>
        
            <!-- untuk masukin icon menu navbar -->
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="rows">
            <div class="col-3">
                <img src="gambar/ban1.png" alt="banner">
            </div>
            <div class="col-4">
                <h1>Testimonial</h1>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL -->
    <section class="testi">
        <h1>Alumni Ruang IT</h1>
        <div class="row">
            <div class="testi-col">
                <img src="gambar/p1.jpg" alt="Irene">
                <div class="com">
                    <p>Banyak insight baru saat proses belajar. Penjelasan yang simple tapi terstruktur, mulai dari yang mudah sampai bagian tersulit, telah diuraikan dengan baik. Belajar jadi terasa menantang namun tetap menyenangkan.</p>
                    <h3>Irene</h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="testi-col">
                <img src="gambar/p2.jpg" alt="Andrew">
                <div class="com">
                    <p>Materinya cukup lengkap. Penjelasannya juga mudah dimengerti. Belajar jadi lebih menyenangkan dan tidak membosankan. Cocok untuk pemula seperti saya.</p>
                    <h3>Andrew Matt</h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </section>

   
    <!-- FOOTER -->
    <section class="footer">
        <hr>
        <p><i class="far fa-copyright"></i>2021. Ruang IT</p>
    </section>


    <!-- JS toggle menu -->
    <script>
        var navbars = document.getElementById("navbars");
        function showMenu(){
            navbars.style.right = "0";
        }
        function hideMenu(){
            navbars.style.right = "-200px";
        }
    </script>
</body>
</html>
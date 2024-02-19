<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raicab | Unduh Berkas</title>
    <link rel="stylesheet" href="styleunduh.css">
    <!-- Google Fonts Links For Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
</head>
<body>
    <header>
    <nav class="navbar">
    <img src="image/OFC_WHITE Logo Raicab.png" alt="Raimuna Cabang III Kota Depok">
        <div class="logo" href="#">RAIMUNA CABANG III KOTA DEPOK</div>
        <ul class="menu-links">
        <span id="close-menu-btn" class="material-symbols-outlined">close</span>
            <li><a href="home.php" class="active">BERANDA</a></li>
            <li><a href="tentang.php">TENTANG</a></li>
            <li><a href="mediaunduh.php">MEDIA UNDUH</a></li>
            <li><a href="kegiatan.php">KEGIATAN</a></li>
            <div><a href="login.php" class="action_btn">MASUK</a></div>
        </ul>
        <!-- <a href="#" class="action_btn">MASUK</a> -->
        <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
    </nav>
    </header>

    <!-- services section start -->
    <section class="services" id="media-unduh">
        <div class="max-width">
            <h2 class="title">Silahkan Unduh Berkas Di Bawah Ini!</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                    <a href="pdf/SERTIFIKAT.pdf" download><img src="image/iconunduh.png" alt="Download"></a>
                        <div class="text">Surat Edaran</div>
                        <p>Silahkan tekan icon diatas untuk mengunduh <b>Surat Edaran.</b></p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <a href="pdf/SERTIFIKAT.pdf" download><img src="image/iconunduh.png" alt="Download"></a>
                        <div class="text">Juklak & Juknis</div>
                        <p>Silahkan tekan icon diatas untuk mengunduh <b>Juklak dan Juknis.</b></p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <a href="pdf/SERTIFIKAT.pdf" download><img src="image/iconunduh.png" alt="Download"></a>
                        <div class="text">GSM</div>
                        <p>Silahkan tekan icon diatas untuk mengunduh <b>SGM.</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="asset/navbar.js"></script>
    <script src="asset/activenavbar.js"></script>
</body>
</html>
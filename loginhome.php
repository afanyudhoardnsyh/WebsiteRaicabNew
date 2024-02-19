<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raicab | Home</title>
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts Links For Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
</head>
<body>
    <header>
    <nav class="navbar">
    <img src="image/OFC_WHITE Logo Raicab.png" alt="Raimuna Cabang III Kota Depok">
        <div class="logo" href="#">RAIMUNA CABANG III KOTA DEPOK</div>
        <ul class="menu-links">
        <span id="close-menu-btn" class="material-symbols-outlined">close</span>
            <li><a href="#home" class="active">BERANDA</a></li>
            <li><a href="tentang.php">TENTANG</a></li>
            <li><a href="mediaunduh.php">MEDIA UNDUH</a></li>
            <li><a href="kegiatan.php">KEGIATAN</a></li>
            <div><a href="login.php" class="action_btn">LOGOUT</a></div>
        </ul>
        <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
    </nav>
    </header>
    <!-- halaman depan section start -->
    <section class="hero-section" id="home">
        <div class="content">
        <div class="gambar">
            <img src="image/Tenda.png">
        </div>
            <h2>Selamat Datang !! <br> Di Website Raicab.</h2>
            <p>
                Sekarang, mulailah jejak petualangan anda.<br> 
                Jelajahi situs web baru kami dan temukan sumber daya yang<br> mendalam, kegiatan seru, 
                dan panduan yang akan menginspirasi<br> perjalanan pramuka Anda. Mari bersama-sama membangun<br> jejak petualangan yang tak terlupakan. 
                <br>#sipalingraicab #AksiRaicab
            </p>
            <img src="image/gps-white.png">
            <h6><b> 00 s.d. 00 Juni 2024</b><br> 
                    Buperta Cibubur, Jakarta Timur</h6>
        </div>
    </section>

    <!-- Beranda section start -->
    <section class="home" id="beranda">
        <div class="max-width">
            <div class="home-content">
                <img src="image/OFC_Logo_Raicab.png">
                <div class="text-1">RAIMUNA CABANG III</div>
                <div class="text-2">KOTA DEPOK</div>
                <div class="text-3">2024</div>
                <p>
                    Raimuna adalah pertemuan Pramuka berbentuk perkemahan yang diselenggarakan untuk Pramuka Penegak dan Pramuka Pandega
                    baik putera maupun puteri dari berbagai satuan Pramuka. Tujuan Raimuna adalah membina dan mengembangkan persaudaraan dan persatuan 
                    di kalangan para Pramuka Penegak dan Pramuka Pandega serta memberikan kepada mereka kegiatan kreatif, rekreatif dan produktif yang 
                    bersifat edukatif. Raimuna Cabang III kota Depok Akan dihadiri seluruh penegak dan pandega yang ada di 11 kwartir ranting. 
                    Raimuna Cabang III kota Depok tahun 2024 dirancang dan dikemas dalam bentuk kegiatan perkemahan dengan berbagai aktivitas yang 
                    bersifat aktif, kreatif, produktif, inovatif, dan rekreatif.
                </p>
                <div class="home-content-btn">
                    <a href="tentang.php">TENTANG RAICAB</a>
                </div>
            </div>
        </div>  
    </section>

    <!-- countdown section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">HITUNG MUNDUR</h2>
            <p class="text1"> Sebagai sarana informasi terkait waktu pelaksanaan</p>
            <p class="text2"> Kegiatan Raimuna Cabang III Kota Depok akan segera tiba, pada</p>
        </div>
        <div class="countdown">
            <div class="time">
                <span id="days">00</span>
                <span>Hari</span>
            </div>
            <div class="semicolon">:</div>
            <div class="time">
                <span id="hours">00</span>
                <span>Jam</span>
            </div>
            <div class="semicolon">:</div>
            <div class="time">
                <span id="minutes">00</span>
                <span>Menit</span>
            </div>
            <div class="semicolon">:</div>
            <div class="time">
                <span id="seconds">00</span>
                <span>Detik</span>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <div class="contact-content">
                <div class="column left">
                    <img src="image/OFC_Logo_Raicab_Polos.png">
                    <div class="text-1">RAIMUNA CABANG III</div>
                    <div class="text-2">KOTA DEPOK</div>
                    <div class="text-3">2024</div>
                    <P> Ini adalah situs resmi Raimuna Cabang lll Tahun 2024. Konten yang tercantum di situs ini dimaksudkan untuk tujuan informasional, 
                        bukan tujuan komersial. Setiap penjualan yang ditampilkan dimaksudkan sebagai tanda kemitraan dan selalu akan mengarahkan Anda 
                        ke situs mitra kami.
                    </P>
                </div>
                <div class="column right">
                    <img src="image/REHAN OLENG png.png">
                </div>

            </div>
        </div>
    </section>
        
    <script src="asset/countdown.js"></script>
    <script src="asset/navbar.js"></script>
    <script src="asset/activenavbar.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata dasar halaman -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BagItUp</title>
    <!-- Menyertakan library ikon dan stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Bagian Header dengan logo dan menu navigasi-->
    <section id="header">
        <a href="#"><img src="img/bagitup.png" class="logo" alt=""></a>
        <div>
            <!-- Navigasi utama -->
            <ul id="navbar">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="shop.php">Produk</a></li>
                <li><a class="active" href="about.php">Tentang Kami</a></li>
                <li><a href="contact.php">Hubungi Kami</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <li><a href="user.php"><i class="fa-solid fa-user"></i></a></li>
                <li><a href="login.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- Bagian Header Halaman Tentang Kami -->
    <section id="page-header" class="about-header">
        <h2>Baca Selengkapnya</h2>
        <p>Baca semua studi kasus tentang kami!</p>
    </section>
    <!-- Teks Berjalan -->
    <marquee class="marquee" bgcolor="#pink" loop="-1" scrollamount="" width="100%">
        Selamat datang di halaman "Tentang Kami"! Di sini, kami dengan senang hati memperkenalkan website kami serta tim hebat yang bekerja keras di balik kesuksesan platform ini.
    </marquee><br>    
    <!-- Bagian Tentang Kami -->
    <section id="about-head" class="section-p1 hidden">
        <img src="img/bahan/bg.jpg" alt="">
        <div>
            <h2>Tentang Kami</h2>
            <p>Selamat datang di BagItUp, tempat Anda menemukan koleksi tas berkualitas tinggi untuk berbagai kebutuhan. Kami hadir untuk memberikan solusi bagi Anda yang mencari tas dengan desain stylish, fungsional, dan tahan lama.</p>
            <p>Kami memahami bahwa tas bukan hanya sekedar pelengkap, tetapi juga bagian penting dari aktivitas dan gaya hidup Anda. Oleh karena itu, kami selalu berkomitmen untuk menghadirkan koleksi tas yang mengutamakan fungsionalitas, kenyamanan, dan estetika.</p>
            <p>Terima kasih telah mempercayai BagItUp sebagai partner perjalanan Anda. Temukan tas favorit Anda sekarang dan jadilah bagian dari komunitas kami!</p>
        </div>
    </section>
    <!-- Bagian Informasi Anggota Tim, disempurnakan hni -->
    <div class="container hidden">
        <h2 style="animation: slideIn 1s ease-in-out;">Anggota kami di BagItUp</h2>
        <div class="team-members">
            <div class="chef-card">
                <img src="img/bahan/yuki.jpg" alt="Gambar 1">
                <h3>Muhamad Yuki</h3>
                <p>Full Stack Developer</p>
            </div>
            <div class="chef-card">
                <img src="img/bahan/raihan.jpg" alt="Gambar 2">
                <h3>Muhammad Raihan Fauzan</h3>
                <p>Back End Developer</p>
            </div>
            <div class="chef-card">
                <img src="img/bahan/hani.jpg" alt="Gambar 3">
                <h3>Hanifah Dwi Cahayarani</h3>
                <p>Front End Developer</p>
            </div>
            <div class="chef-card">
                <img src="img/bahan/naylah.jpg" alt="Gambar 4">
                <h3>Naylah Amirah Az Zikra</h3>
                <p>Back End Developer</p>
            </div>
            <div class="chef-card">
                <img src="img/bahan/annisa.jpg" alt="Gambar 5">
                <h3>Annisa Fadilla Efendi</h3>
                <p>Back End Developer</p>
            </div>
            <div class="chef-card">
                <img src="img/bahan/anggi.jpg" alt="Gambar 6">
                <h3>Masitoh Anggina</h3>
                <p>Front End Developer</p>
            </div>
        </div>
    </div>
    <!-- Footer Halaman -->
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/bagitup.png" alt="BagItUp Logo">
            <h4>Kontak</h4>
            <p><strong>Alamat:</strong> Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
            <p><strong>Telepon:</strong> +62 821 4423 2308</p>
            <p><strong>Jam Operasional:</strong> 10:00 - 18.00, Senin - Sabtu</p>
            <div class="follow">
                <h4>Ikuti Kami</h4>
                <div class="icon">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-x-twitter"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                    <i class="fa-brands fa-snapchat"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>Tentang</h4>
            <a href="#">Tentang Kami</a>
            <a href="#">Informasi Pengiriman</a>
            <a href="#">Kebijakan Privasi</a>
            <a href="#">Syarat & Ketentuan</a>
            <a href="#">Hubungi Kami</a>
        </div>
        <div class="col">
            <h4>Akun Saya</h4>
            <a href="#">Masuk</a>
            <a href="#">Lihat Keranjang</a>
            <a href="#">Dompet Saya</a>
            <a href="#">Lacak Pesanan Saya</a>
            <a href="#">Bantuan</a>
        </div>
        <div class="copyright">
            <p>2024, PiayuPride</p>
        </div>
    </footer>
    <!-- Menyertakan skrip eksternal -->
    <script src="script.js"></script>
</body>
</html>

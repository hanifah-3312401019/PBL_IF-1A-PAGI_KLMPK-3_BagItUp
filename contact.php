<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata dasar halaman -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BagItUp</title>
    <!-- Menyertakan library ikon dan stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Bagian Header dengan logo dan menu navigasi -->
    <section id="header">
        <a href="#"><img src="img/bagitup.png" class="logo" alt="BagItUp Logo"></a>
        <div>
            <!-- Navigasi utama -->
            <ul id="navbar">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="shop.php">Produk</a></li>
                <li><a href="about.php">Tentang Kami</a></li>
                <li><a class="active" href="contact.php">Hubungi Kami</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <li><a href="user.php"><i class="fa-solid fa-user"></i></a></li>
                <li><a href="login.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- Bagian Header untuk Halaman Kontak -->
    <section id="page-header" class="about-header">
        <h2>Yuk, Beri Pesan!</h2>
        <p>Tinggalkan Pesan, Kami Senang Mendengarnya</p>
    </section>
    <!-- Bagian Kontak Kami: Detail dan Peta Lokasi -->
    <section id="contact-details" class="section-p1 hidden">
        <div class="details">
            <span>HUBUNGI KAMI</span>
            <h2>Kunjungi salah satu Kantor Agensi Kami atau Hubungi Kami Hari Ini.</h2>
            <h3>Kantor Pusat</h3>
            <div>
                <!-- Informasi Kontak: Alamat, Email, Telepon, Jam Operasional -->
                <ul>
                    <li>
                        <i class="fa-solid fa-map"></i>
                        <p>Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam</p>
                    </li>
                    <li>
                        <i class="far fa-envelope"></i>
                        <p>bagitup1@gmail.com</p>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <p>+62 821 4423 2308</p>
                    </li>
                    <li>
                        <i class="far fa-clock"></i>
                        <p>Senin-Sabtu: 10.00-18.00</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Menampilkan Peta Lokasi Kantor -->
        <div class="map hidden">
            <iframe src="https://www.google.com/maps/embed?pb=..."></iframe>
        </div>      
    </section>
    <!-- Bagian Formulir Kontak, disempurnakan hni -->
    <section id="form-details">
        <form action="https://api.web3forms.com/submit" method="post">
            <span>Yuk, Beri Pesan</span><br>
            <h2>Tinggalkan Pesan, Kami Senang Mendengarnya</h2><br>
            <!-- Input data pengunjung -->
            <input type="hidden" name="access_key" value="2b5eea5c-91e0-4922-ab2c-8d31f69ed252">
            <input type="text" name="nama" placeholder="Nama">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="kategori" placeholder="Kategori">
            <input type="hidden" name="redirect" value="https://web3forms.com/success">
            <textarea name="message" cols="30" rows="10" placeholder="Tuliskan Pesan Anda" required></textarea>
            <button class="normal">Kirim</button>
        </form>
        <!-- Tim Kontak -->
        <div class="people hidden">
            <!-- Kontak untuk masing-masing anggota tim -->
            <div>
                <img src="img/bahan/yuki.jpg" alt="Muhammad Yuki">
                <p><span>Muhammad Yuki</span>Full Stack Developer<br> 
                    Telp: +62 852 7436 6826 <br> Email: yuki@gmail.com</p>
            </div>
            <!-- Anggota tim lainnya (Raihan, Naylah, Annisa, Hani, Anggi) -->
            <div>
                <img src="img/bahan/raihan.jpg" alt="Muhammad Raihan">
                <p><span>Muhammad Raihan Fauzan</span>Back End Developer<br> 
                    Telp: +62 895 3279 52831 <br> Email: raihan@gmail.com</p>
            </div>
            <div>
                <img src="img/bahan/naylah.jpg" alt="Naylah Amirah">
                <p><span>Naylah Amirah Az Zikra </span>Back End Developer<br> 
                    Telp: +62 822 8769 0013 <br> Email: naylah@gmail.com</p>
            </div>
            <div>
                <img src="img/bahan/annisa.jpg" alt="Annisa Fadilla">
                <p><span>Annisa Fadilla Efendi Harahap </span>Back End Developer<br> 
                    Telp: +62 895 2386 4950 <br> Email: Annisa@gmail.com</p>
            </div>
            <div> 
                <img src="img/bahan/hani.jpg" alt="Hanifah Dwi Cahayarani">
                <p><span>Hanifah Dwi Cahayarani </span> Front End Developer<br> 
                    Telp: +62 896 4355 3834 <br> Email: hnfhdwichyrni@gmail.com</p>
            </div>
            <div>
                <img src="img/bahan/anggi.jpg" alt="Masitoh Anggina">
                <p><span>Masitoh Anggina </span> Front End Developer <br> 
                    Telp: +62 821 7213 3728 <br> Email: masitoh@gmail.com</p>
            </div> 
        </div>
    </section>
    <!-- Bagian Newsletter untuk pengunjung mendaftar -->
    <section id="newsletter" class="section-p1"> 
        <div class="newstext">
            <h4>Daftar untuk Info Terbaru</h4>
            <p>Dapatkan Pembaruan Email Tentang Toko Terbaru Kami dan <span>Penawaran Spesial.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Alamat Email Anda">
            <button class="normal">Masuk</button>
        </div>
    </section>
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

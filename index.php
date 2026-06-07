<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galeri Furniture</title>
    <link rel="stylesheet" href="CSS/Beranda.css" />
</head>
<body>
    <nav class="navbar">
        <div class="logo"> GALERI<span class="warna">FURNITURE</span></div>
        </div> <ul class="nav-links">
            <li><a href="index.php" class="testbtn">Beranda</a></li>
            <li><a href="#" class="testbtn" id="katalogBtn">Katalog</a></li>
            <li><a href="Tentang.php" class="testbtn">Tentang</a></li>
            <li><a href="Kontak.php" class="testbtn">Kontak</a></li>
        </ul>
    </nav>

    <hr class="divider">

    <div class="popup" id="popupKatalog">
        <ul class="popupbtn">
            <li><a href="MejaMakan.php" class="popupbtn">Meja Makan</a></li>
            <li><a href="MejaKantor.php" class="popupbtn">Meja Kantor</a></li>
            <li><a href="Kasur.php" class="popupbtn">Kasur</a></li>
            <li><a href="RakSepatu.php" class="popupbtn">Rak Sepatu</a></li>
        </ul>
    </div>

    <header class="home">
        <div class="home-content">  
            <h1>Koleksi Interior Terbaru</h1>
            <p class="subtitle">Temukan Interior Terbaik Untuk Rumah Anda</p>
            <p class="description">
                Temukan Interior paling menarik sesuai dengan rumah Anda, dan dapatkan
                penawaran harga spesial untuk Anda.
            </p>
        </div>

        <div class="product-grid">
            <div class="product-card">
                <img src="Aset/Beranda - 2.jpeg" />
                <h3>MT 120</h3>
                <p>1200 x 595 x 720 cm</p>
                <p>Warna: Coklat Walnut</p>
            </div>

            <div class="product-card">
                <img src="Aset/beranda - 1.jpeg" />
                <h3>MT 120</h3>
                <p>1200 x 595 x 720 cm</p>
                <p>Warna: Putih Sonoma</p>
            </div>
        </div>
    </header>
    <script src="JS/Katalog.js"></script>
</body>
</html>
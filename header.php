<?php 
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <hr>

    <div class="popup" id="popupKatalog">
        <ul class="popupbtn">
            <li><a href="MejaMakan.php" class="popupbtn">Meja Makan</a></li>
            <li><a href="MejaKantor.php" class="popupbtn">Meja Kantor</a></li>
            <li><a href="Kasur.php" class="popupbtn">Kasur</a></li>
            <li><a href="RakSepatu.php" class="popupbtn">Rak Sepatu</a></li>
        </ul>
    </div>
</body>
</html>

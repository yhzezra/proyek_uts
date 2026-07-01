<?php 
include 'koneksi.php';

$queryKategori = mysqli_query(
    $koneksi,
    "SELECT * FROM kategori ORDER BY nama_kategori ASC"
);
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
            <?php while ($kategori = mysqli_fetch_assoc($queryKategori)){?>
                <li>
                    <a href="Product.php?kategori=<?= $kategori['slug']; ?>" class="popupbtn">
                        <?= $kategori['nama_kategori']; ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>

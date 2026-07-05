<?php
 include "header.php";
 include "koneksi.php";
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galeri Furniture</title>
    <link rel="stylesheet" href="CSS/index.css" />
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>
<body>
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
            <?php
            $sql = "SELECT * FROM produk LIMIT 2";
            $query = mysqli_query($koneksi, $sql);
            while($row = mysqli_fetch_assoc($query)):
            ?>
                <div class="product-card">
                    <img src="Aset/<?= $row['gambar']; ?>" />
                    <h3><?= $row['nama_produk']; ?></h3>
                    <p><?= $row['ukuran']; ?></p>
                    <p><?= $row['warna']; ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    </header>
   


    <script src="JS/Katalog.js"></script>
</body>
</html>

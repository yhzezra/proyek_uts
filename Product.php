<?php

include "header.php";
include "koneksi.php";

$slug = $_GET['kategori'] ?? '';

$sql = "
    SELECT
        p.*,
        k.nama_kategori
    FROM produk p
    JOIN kategori k
        ON p.id_kategori = k.id_kategori
    WHERE k.slug = '$slug'
";

$query = mysqli_query($koneksi, $sql);

$kategoriData = mysqli_fetch_assoc($query);

?>

<link rel="stylesheet" href="CSS/Product.css">


<div class="container">
    <?php if($kategoriData): ?>
        <h1 class="product-title" style="text-align: center; margin-bottom: 20px;">
            <?= $kategoriData['nama_kategori']; ?>
        </h1>
        <div class="product-grid">
            <?php
            mysqli_data_seek($query, 0);
            while($row = mysqli_fetch_assoc($query)):
            ?>
                <div class="product-card">
                    <img
                        src="Aset/<?= $row['gambar']; ?>"
                        alt="<?= $row['nama_produk']; ?>"
                    >
                    <div class="product-info">
                        <h3><?= $row['nama_produk']; ?></h3>
                        <p>
                            <strong>Ukuran:</strong>
                            <?= $row['ukuran']; ?>
                        </p>
                        <p>
                            <strong>Warna:</strong>
                            <?= $row['warna']; ?>
                        </p>
                        <p>
                            <?= $row['deskripsi']; ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else: ?>

        <h2 class="not-found">
            Kategori tidak ditemukan
        </h2>

    <?php endif; ?>
</div>

<script src="JS/Katalog.js"></script>

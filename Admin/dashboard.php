<?php

include "security.php";
include "../koneksi.php";

$totalKategori = mysqli_num_rows(
    mysqli_query($koneksi, "SELECT * FROM kategori")
);

$totalProduk = mysqli_num_rows(
    mysqli_query($koneksi, "SELECT * FROM produk")
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../CSS/dashboard.css" />
</head>
<body>

<div class="navbar">
    <h2>Dashboard Admin Galeri Furniture</h2>
</div>

<div class="container">

    <div class="card">
        <h3>Selamat Datang <?= $_SESSION['username']; ?></h3>
    </div>

    <div class="card">
        <h3>Total Kategori : <?= $totalKategori; ?></h3>
        <h3>Total Produk : <?= $totalProduk; ?></h3>
    </div>

    <div class="menu">

        <a href="kategori/index.php">
            Manajemen Kategori
        </a>

        <a href="produk/index.php">
            Manajemen Produk
        </a>

        <a href="logout.php">
            Logout
        </a>

    </div>

</div>

</body>
</html>
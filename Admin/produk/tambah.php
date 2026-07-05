<?php

include "../security.php";
include "../../koneksi.php";

if(isset($_POST['simpan'])){

    $id_kategori = $_POST['id_kategori'];
    $nama = $_POST['nama_produk'];
    $ukuran = $_POST['ukuran'];
    $warna = $_POST['warna'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];

    mysqli_query(
        $koneksi,
        "INSERT INTO produk
        (
            id_kategori,
            nama_produk,
            ukuran,
            warna,
            deskripsi,
            gambar
        )
        VALUES
        (
            '$id_kategori',
            '$nama',
            '$ukuran',
            '$warna',
            '$deskripsi',
            '$gambar'
        )"
    );

    header("Location:index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="../../CSS/tambah_produk.css">
</head>
<body>

<div class="container">

    <h2>Tambah Produk</h2>

    <form method="POST">

        <label>Kategori</label>

        <select name="id_kategori">

            <?php

            $kategori = mysqli_query($koneksi,"SELECT * FROM kategori");

            while($k = mysqli_fetch_assoc($kategori)){

            ?>

                <option value="<?= $k['id_kategori']; ?>">
                    <?= $k['nama_kategori']; ?>
                </option>

            <?php } ?>

        </select>

        <label>Nama Produk</label>
        <input
            type="text"
            name="nama_produk"
            placeholder="Masukkan nama produk"
            required>

        <label>Ukuran</label>
        <input
            type="text"
            name="ukuran"
            placeholder="Masukkan ukuran"
            required>

        <label>Warna</label>
        <input
            type="text"
            name="warna"
            placeholder="Masukkan warna"
            required>

        <label>Deskripsi</label>
        <textarea
            name="deskripsi"
            placeholder="Masukkan deskripsi"></textarea>

        <label>Nama File Gambar</label>
        <input
            type="text"
            name="gambar"
            placeholder="Contoh: meja.jpg"
            required>

        <div class="action-group">

            <button
                type="submit"
                name="simpan"
                class="btn-simpan">
                Simpan
            </button>

            <a href="index.php" class="btn-kembali">
                Kembali
            </a>

        </div>

    </form>

</div>

</body>
</html>
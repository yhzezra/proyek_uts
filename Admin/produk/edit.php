<?php

include "../security.php";
include "../../koneksi.php";

$id = $_GET['id'];

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM produk
    WHERE id_produk='$id'"
);

$data = mysqli_fetch_assoc($query);

if(isset($_POST['update'])){

    $id_kategori = $_POST['id_kategori'];
    $nama = $_POST['nama_produk'];
    $ukuran = $_POST['ukuran'];
    $warna = $_POST['warna'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];

    mysqli_query(
        $koneksi,
        "UPDATE produk SET

        id_kategori='$id_kategori',
        nama_produk='$nama',
        ukuran='$ukuran',
        warna='$warna',
        deskripsi='$deskripsi',
        gambar='$gambar'

        WHERE id_produk='$id'"
    );

    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>

<body>
    <h2>Edit Produk</h2>
<form method="POST">
    <p>
        Kategori
        <br>
        <select name="id_kategori">
        <?php
        $kategori = mysqli_query($koneksi,"SELECT * FROM kategori");
        while($k = mysqli_fetch_assoc($kategori)){
        ?>
            <option
                value="<?= $k['id_kategori']; ?>"
                <?= ($k['id_kategori']==$data['id_kategori']) ? "selected" : ""; ?>
            >
                <?= $k['nama_kategori']; ?>
            </option>
        <?php } ?>
        </select>
    </p>

    <p>
        Nama Produk
        <br>
        <input
            type="text"
            name="nama_produk"
            value="<?= $data['nama_produk']; ?>"
            required
        >
    </p>

    <p>
        Ukuran
        <br>
        <input
            type="text"
            name="ukuran"
            value="<?= $data['ukuran']; ?>"
            required
        >
    </p>

    <p>
        Warna
        <br>
        <input
            type="text"
            name="warna"
            value="<?= $data['warna']; ?>"
            required
        >
    </p>

    <p>
        Deskripsi
        <br>
        <textarea
            name="deskripsi"
            rows="5"
            cols="50"
        ><?= $data['deskripsi']; ?></textarea>
    </p>

    <p>
        Gambar
        <br>
        <input
            type="text"
            name="gambar"
            value="<?= $data['gambar']; ?>"
            required
        >
    </p>

    <button type="submit" name="update">
        Simpan Perubahan
    </button>

    <button type="submit" name="update">
        <a href="index.php">Batal</a>
    </button>

</form>
</body>
</html>

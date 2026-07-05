<?php

include "../security.php";
include "../../koneksi.php";

if(isset($_POST['simpan'])){

    $nama = trim($_POST['nama_kategori']);

    $slug = strtolower($nama);
    $slug = str_replace(" ", "", $slug);

    $sql = "
    INSERT INTO kategori
    (nama_kategori, slug)
    VALUES
    ('$nama', '$slug')
    ";

    mysqli_query($koneksi, $sql);

    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kategori</title>
    <link rel="stylesheet" href="../../CSS/tambah_kategori.css" />
</head>
<body>

<form method="POST">

    <label>Nama Kategori</label>
    <input
        type="text"
        name="nama_kategori"
        required
    >

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
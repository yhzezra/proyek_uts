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
</head>
<body>

<h2>Tambah Kategori</h2>

<form method="POST">

    <label>Nama Kategori</label>
    <br>

    <input
        type="text"
        name="nama_kategori"
        required
    >

    <br><br>

    <button
        type="submit"
        name="simpan"
    >
        Simpan
    </button>

</form>

<br>

<a href="index.php">
    Kembali
</a>

</body>
</html>
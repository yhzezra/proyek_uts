<?php

include "../security.php";
include "../../koneksi.php";

$id = $_GET['id'];

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM kategori
     WHERE id_kategori='$id'"
);

$data = mysqli_fetch_assoc($query);

if(isset($_POST['update'])){

    $nama = trim($_POST['nama_kategori']);

    $slug = strtolower($nama);
    $slug = str_replace(" ", "", $slug);

    mysqli_query(
        $koneksi,
        "UPDATE kategori
         SET
            nama_kategori='$nama',
            slug='$slug'
         WHERE id_kategori='$id'"
    );

    header("Location:index.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Kategori</title>
</head>

<body>
    
<h2>Edit Kategori</h2>

<form method="POST">

    <label>Nama Kategori</label>
    <br>

    <input
        type="text"
        name="nama_kategori"
        value="<?= $data['nama_kategori']; ?>"
        required
    >

    <br><br>

    <button
        type="submit"
        name="update"
    >
        Update
    </button>

</form>

<br>

<a href="index.php"> Kembali </a>

</body>
</html>

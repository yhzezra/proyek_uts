<?php

include "../security.php";
include "../../koneksi.php";

$id = $_GET['id'];

$cek = mysqli_query(
    $koneksi,
    "SELECT * FROM produk
     WHERE id_kategori='$id'"
);

if(mysqli_num_rows($cek) > 0){

    echo "
    <script>
        alert('Kategori tidak dapat dihapus karena masih memiliki produk');
        window.location='index.php';
    </script>
    ";

    exit;
}

mysqli_query(
    $koneksi,
    "DELETE FROM kategori
     WHERE id_kategori='$id'"
);

<<<<<<< HEAD
header("Location:index.php");
=======
header("Location:index.php");
>>>>>>> d3b3d1e4415bef11bd794b6d821302a9dc4f1a38

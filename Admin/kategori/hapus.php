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

header("Location:index.php");
exit;



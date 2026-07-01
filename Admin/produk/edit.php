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
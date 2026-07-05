<?php

$nama = $_POST['nama'];
$nomor = $_POST['nomor'];
$produk = $_POST['produk'];
$pesan = $_POST['pesan'];

$isiPesan =

"Halo Admin Galeri Furniture,

Perkenalkan saya:
Nama : $nama
Nomor WA : $nomor

Saya ingin bertanya mengenai produk berikut.
Produk : $produk

Pertanyaan :
$pesan

Terima kasih.";

$isiPesan = urlencode($isiPesan);

header("Location: https://wa.me/6282250769250?text=".$isiPesan);

exit;

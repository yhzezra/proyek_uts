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
}

?>

<h2>Tambah Produk</h2>

<form method="POST">

<label>Kategori</label>
<br>

<select name="id_kategori">

<?php

$kategori = mysqli_query(
    $koneksi,
    "SELECT * FROM kategori"
);

while($k=mysqli_fetch_assoc($kategori)){

?>

<option value="<?= $k['id_kategori']; ?>">

    <?= $k['nama_kategori']; ?>

</option>

<?php } ?>

</select>

<br><br>

<input
    type="text"
    name="nama_produk"
    placeholder="Nama Produk"
    required>

<br><br>

<input
    type="text"
    name="ukuran"
    placeholder="Ukuran"
    required>

<br><br>

<input
    type="text"
    name="warna"
    placeholder="Warna"
    required>

<br><br>

<textarea
    name="deskripsi"
    placeholder="Deskripsi"></textarea>

<br><br>

<input
    type="text"
    name="gambar"
    placeholder="Nama File Gambar"
    required>

<br><br>

<button
    type="submit"
    name="simpan">
    Simpan
</button>

<<<<<<< HEAD
</form>
=======
</form>
>>>>>>> d3b3d1e4415bef11bd794b6d821302a9dc4f1a38

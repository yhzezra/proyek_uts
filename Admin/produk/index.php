<?php

include "../security.php";
include "../../koneksi.php";

$sql = "
SELECT
p.*,
k.nama_kategori
FROM produk p
JOIN kategori k
ON p.id_kategori = k.id_kategori
";

$query = mysqli_query($koneksi,$sql);

?>

<!DOCTYPE html>
<html>
<head>
<   title>Manajemen Produk</>
    <link rel="stylesheet" href="../../CSS/index_produk.css" />
</head>

<body>

<h2>Manajemen Produk</h2>

    <a href="tambah.php" class="btn tambah"> Tambah Produk </a>
    <a href="../dashboard.php" class="btn dashboard"> Dashboard </a>

<br><br>

<table>
    <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Ukuran</th>
        <th>Warna</th>
        <th>Aksi</th>
    </tr>

<?php
    $no=1;
    while($row=mysqli_fetch_assoc($query)){
?>

<tr>
        <td><?= $no++; ?></td>

        <td>
            <img src="../../Aset/<?= $row['gambar']; ?>">
        </td>

        <td><?= $row['nama_produk']; ?></td>

        <td><?= $row['nama_kategori']; ?></td>

        <td><?= $row['ukuran']; ?></td>

        <td><?= $row['warna']; ?></td>

    <td>

        <a
            href="edit.php?id=<?= $row['id_produk']; ?>"
            class="btn edit">
            Edit
        </a>

        <a
            href="hapus.php?id=<?= $row['id_produk']; ?>"
            class="btn hapus"
            onclick="return confirm('Yakin ingin menghapus produk?')">
            Hapus
        </a>

    </td>

</tr>

<?php } ?>

</table>

</body>
</html>

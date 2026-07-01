<?php

include "../security.php";
include "../../koneksi.php";

$sql = "SELECT * FROM kategori";
$query = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Kategori</title>
    <link rel="stylesheet" href="../../CSS/index_kategori.css" />
</head>

<body>

<h2>Manajemen Kategori</h2>

<a href="tambah.php" class="btn btn-tambah"> Tambah Kategori </a>
<a href="../dashboard.php" class="btn btn-dashboard"> Dashboard </a>

<table>

<tr>
    <th>No</th>
    <th>Nama Kategori</th>
    <th>Slug</th>
    <th>Aksi</th>
</tr>

<?php
    $no = 1;
    while($row = mysqli_fetch_assoc($query)){
?>

<tr>

    <td><?= $no++; ?></td>

    <td><?= $row['nama_kategori']; ?></td>

    <td><?= $row['slug']; ?></td>

    <td>

        <a
            href="edit.php?id=<?= $row['id_kategori']; ?>"
            class="btn btn-edit"
        >
            Edit
        </a>

        <a
            href="hapus.php?id=<?= $row['id_kategori']; ?>"
            class="btn btn-hapus"
            onclick="return confirm('Yakin ingin menghapus kategori ini?')"
        >
            Hapus
        </a>

    </td>

</tr>

<?php } ?>

</table>

</body>
</html>

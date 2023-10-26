<?php

include 'koneksi.php';

$judul = $_POST['judul'];
$id = $_POST['id'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];

$query = mysqli_query(
    $konek,
    "Update buku SET judul_buku = '$judul', penulis = '$penulis', penerbit ='$penerbit' where  id_buku = '$id'"
)
    or die(mysqli_error($konek));

if ($query) {
    header('location:tampil_buku.php');
} else {
    echo "Gagal input";
}

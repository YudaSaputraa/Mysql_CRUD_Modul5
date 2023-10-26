<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$id = $_POST['id'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];

$query = mysqli_query(
    $konek,
    "INSERT INTO buku values('$id', '$judul', '$penulis', '$penerbit')"
)
    or die(mysqli_error($konek));

if ($query) {
    echo "Proses input berhasil, ingin lihat hasil
    <a href = tampil_buku.php> disini </a>";
} else {
    echo "Gagal input";
}

<?php
include "koneksi.php";
$id = $_GET['id'];
$kueri = "DELETE FROM buku WHERE id_buku = $id";
$query = mysqli_query($konek, $kueri);

if ($query) {
    header("location:tampil_buku.php");
} else {
    echo "Hapus buku gagal";
}

<?php
include 'koneksi.php';
$query = "select * from buku";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border=1>
        <tr>
            <td>Id Buku</td>
            <td>Judul Buku</td>
            <td>Penulis</td>
            <td>Penerbit</td>
            <td>Action</td>
        </tr>

        <?php
        $kueri = mysqli_query($konek, $query);
        while ($data = mysqli_fetch_array($kueri)) { ?>
            <tr>
                <td> <?php echo $data['id_buku']; ?></td>
                <td> <?php echo $data['judul_buku']; ?></td>
                <td> <?php echo $data['penulis']; ?></td>
                <td> <?php echo $data['penerbit']; ?></td>
                <td>
                    <a href="form_edit.php?id=<?= $data['id_buku'] ?>">Edit</a>
                    <a href="hapus.php?id=<?= $data['id_buku'] ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
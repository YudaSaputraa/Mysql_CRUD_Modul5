<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $kueri = "select * from buku where id_buku = $id";
    $query = mysqli_query($konek, $kueri);
    $data = mysqli_fetch_array($query);
    ?>


    <form method="POST" action="update.php">
        Id Buku : <br> <input type="hidden" value="<?= $data['id_buku'] ?>" name="id"><br>
        Judul Buku : <br> <input type="text" value="<?= $data['judul_buku'] ?>" name="judul"><br>
        Penulis : <br> <input type="text" value="<?= $data['penulis'] ?>" name="penulis"><br>
        Penerbit: <br> <input type="text" value="<?= $data['penerbit'] ?>" name="penerbit"><br>

        <input type="submit" name="submit" value="kirim">
    </form>
</body>

</html>
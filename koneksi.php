<?php 
$hostname = "localhost"; //hostname
$username = "root"; //username untuk login ke MySQL
$password = "";
$database = "perpustakaan";

$konek = new mysqli($hostname, $username, $password, $database);

if ($konek -> connect_error)
{
    // Jika terjadi error, proses akan dimatikan dengan die() atau exit ()
    die('Maaf koneksi gagal : '. $konek->connect_error);
}

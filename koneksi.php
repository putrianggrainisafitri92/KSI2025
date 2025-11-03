<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_latihan");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil!";
?>


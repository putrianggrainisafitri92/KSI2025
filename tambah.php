<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $query = "INSERT INTO mahasiswa (npm, nama, prodi) VALUES ('$npm', '$nama', '$prodi')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='mahasiswa.php';</script>";
    } else {
        echo "<script>alert('Gagal menambah data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Mahasiswa</title>
</head>
<body>
  <h2>Tambah Data Mahasiswa</h2>
  <form method="POST">
    <label>NPM:</label><br>
    <input type="text" name="npm" required><br><br>
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>
    <label>Program Studi:</label><br>
    <input type="text" name="prodi" required><br><br>
    <button type="submit" name="submit">Tambah</button>
  </form>
</body>
</html>

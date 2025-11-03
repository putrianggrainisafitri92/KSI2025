<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
  $npm  = $_POST['npm'];
  $nama = $_POST['nama'];
  $prodi = $_POST['prodi'];

  $sql = "INSERT INTO mahasiswa (npm, nama, prodi) VALUES ('$npm', '$nama', '$prodi')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='mahasiswa.php';</script>";
  } else {
    echo "<script>alert('Gagal menambah data!');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container py-5">
    <h2 class="text-center mb-4">Tambah Data Mahasiswa</h2>
    <form method="post">
      <div class="mb-3">
        <label class="form-label">NPM</label>
        <input type="text" name="npm" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Program Studi</label>
        <input type="text" name="prodi" class="form-control" required>
      </div>
      <button type="submit" name="submit" class="btn btn-success">Simpan</button>
    </form>
  </div>
</body>
</html>

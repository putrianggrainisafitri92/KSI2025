<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container py-5">
    <h2 class="text-center mb-4">Daftar Mahasiswa</h2>
    <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered">
      <thead class="table-primary">
        <tr>
          <th>No</th>
          <th>NPM</th>
          <th>Nama</th>
          <th>Prodi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM mahasiswa");
        while ($data = mysqli_fetch_assoc($query)) {
          echo "<tr>
                  <td>{$no}</td>
                  <td>{$data['npm']}</td>
                  <td>{$data['nama']}</td>
                  <td>{$data['prodi']}</td>
                </tr>";
          $no++;
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>

<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container py-5">
    <h2 class="text-center mb-4">Daftar Mahasiswa</h2>

    <!-- Tombol Tambah Data -->
    <a href="tambah.php" class="btn btn-success mb-3">+ Tambah Data</a>

    <!-- Tabel Mahasiswa -->
    <table class="table table-bordered table-striped">
      <thead class="table-primary text-center">
        <tr>
          <th>No</th>
          <th>NPM</th>
          <th>Nama</th>
          <th>Program Studi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;

        // Pastikan koneksi benar
        $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

        if (mysqli_num_rows($query) > 0) {
          while ($data = mysqli_fetch_assoc($query)) {
            echo "<tr>
                    <td class='text-center'>{$no}</td>
                    <td>{$data['npm']}</td>
                    <td>{$data['nama']}</td>
                    <td>{$data['prodi']}</td>
                  </tr>";
            $no++;
          }
        } else {
          echo "<tr><td colspan='4' class='text-center text-muted'>Belum ada data mahasiswa</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

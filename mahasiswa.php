<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="index.php">KSI2025</a>
    </div>
  </nav>

  <div class="container py-5">
    <h2 class="text-center mb-4">Daftar Mahasiswa</h2>
    <table class="table table-bordered table-striped">
      <thead class="table-primary">
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

  <footer class="bg-dark text-white text-center py-3 mt-5">
    <small>&copy; 2025 KSI2025</small>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

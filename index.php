<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Mahasiswa</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">
</head>

<body class="bg-light">
<div class="container mt-5">
<h2 class="mb-4 text-center">Daftar Mahasiswa</h2>
<a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Mahasiswa</a>
<table class="table table-bordered table-striped">
<thead class="table-dark"><tr><th>No</th><th>NIM</th><th>Nama</th><th>Prodi</th><th>Alamat</th><th>Aksi</th></tr></thead>
<tbody>
<?php
$no = 1;
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?= $no++ ?></td>
<td><?= $row['nim'] ?></td>
<td><?= $row['nama'] ?></td>
<td><?= $row['prodi'] ?></td>
<td><?= $row['alamat'] ?></td>
<td>
<a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
<a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
</td>
</tr>
<?php } ?>
</tbody></table></div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body></html>

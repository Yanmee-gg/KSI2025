<?php include 'koneksi.php'; ?>
<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><title>Tambah Mahasiswa</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet"></head><body class="bg-light">
<div class="container mt-5"><h3 class="mb-4">Tambah Data Mahasiswa</h3>
<form method="POST" action="">
<div class="mb-3"><label>NIM</label><input type="text" name="nim" class="form-control" required></div>
<div class="mb-3"><label>Nama</label><input type="text" name="nama" class="form-control" required></div>
<div class="mb-3"><label>Prodi</label><input type="text" name="prodi" class="form-control" required></div>
<div class="mb-3"><label>Alamat</label><textarea name="alamat" class="form-control" required></textarea></div>
<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
<a href="index.php" class="btn btn-secondary">Kembali</a></form></div>
<?php
if (isset($_POST['simpan'])) {
$nim=$_POST['nim'];$nama=$_POST['nama'];$prodi=$_POST['prodi'];$alamat=$_POST['alamat'];
$q="INSERT INTO mahasiswa (nim,nama,prodi,alamat) VALUES ('$nim','$nama','$prodi','$alamat')";
if(mysqli_query($conn,$q)){echo "<script>alert('Data berhasil disimpan');window.location='index.php';</script>";}}
?>
</body></html>

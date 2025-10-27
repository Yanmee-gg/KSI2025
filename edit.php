<?php include 'koneksi.php'; $id=$_GET['id'];$data=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id='$id'"));?>
<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><title>Edit Mahasiswa</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet"></head><body class="bg-light">
<div class="container mt-5"><h3 class="mb-4">Edit Data Mahasiswa</h3>
<form method="POST" action="">
<div class="mb-3"><label>NIM</label><input type="text" name="nim" class="form-control" value="<?= $data['nim'] ?>" required></div>
<div class="mb-3"><label>Nama</label><input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required></div>
<div class="mb-3"><label>Prodi</label><input type="text" name="prodi" class="form-control" value="<?= $data['prodi'] ?>" required></div>
<div class="mb-3"><label>Alamat</label><textarea name="alamat" class="form-control" required><?= $data['alamat'] ?></textarea></div>
<button type="submit" name="update" class="btn btn-primary">Update</button>
<a href="index.php" class="btn btn-secondary">Kembali</a></form></div>
<?php
if(isset($_POST['update'])){
$nim=$_POST['nim'];$nama=$_POST['nama'];$prodi=$_POST['prodi'];$alamat=$_POST['alamat'];
$q="UPDATE mahasiswa SET nim='$nim',nama='$nama',prodi='$prodi',alamat='$alamat' WHERE id='$id'";
if(mysqli_query($conn,$q)){echo "<script>alert('Data berhasil diupdate');window.location='index.php';</script>";}}
?>
</body></html>
<?php
session_start();
if($_SESSION['username']=='')
{
    header("location:login.php");
}

include 'koneksi.php';
include 'header.php';
$id_mhs = $_GET["id_mhs"];
$query = mysqli_query($koneksi, ("SELECT * FROM mahasiswa where id_mhs = $id_mhs"));
$mahasiswa = mysqli_fetch_assoc($query);
?>
<style type="text/css">
.card{
  margin-top: 50px;
  margin-right: -50px;
  margin-bottom: 0;
  margin-left: 250px;
}
</style>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
  <center><h1>Selamat Datang <?php echo $_SESSION['username']?></h1></center>
	<div class="container justify-content-center">
   <div class="row">
    <div class="col-md-9">
     <div class="card bg-dark mb-3">
      <div class="card-header">
      <h2 class="text-white"><i class="fas fa-edit"></i> Edit Data</h2>
					</div>
					<div class="card-body">
					<form action="edit-proses.php" method="post">
						<input type="hidden" name="id_mhs" value="<?= $mahasiswa['id_mhs']; ?>">
							<div class="form-group">
							 <label class="text-white">Nama</label>
							 <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="<?= $mahasiswa['nama']?>" required>
							</div>
							<div class="form-group">
								<label class="text-white">NIM</label>
 							 <input type="number" class="form-control" name="nim" placeholder="Masukkan NIM" value="<?= $mahasiswa['nim']?>"required>
							</div>
							<div class="form-group">
								<label class="text-white">Asal</label>
 							 <input type="text" class="form-control" name="asal" placeholder="Asal" value="<?= $mahasiswa['asal']?>" required>
							</div>
							<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
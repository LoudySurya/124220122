<?php
session_start();
 if($_SESSION['username']=='')
{
    header("location:login.php");
}

include 'header.php';
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
	<title>Tambah Anggota</title>
</head>
<body>
  <center><h1>Selamat Datang Petugas <?php echo $_SESSION['username']?></h1></center>
	<div class="container justify-content-center">
	 <div class="row">
	  <div class="col-md-9">
	   <div class="card bg-dark mb-3">
	    <div class="card-header">
						<h2 class="card-title text-white"><i class="fas fa-edit"></i> Tambah Data</h2>
					</div>
					<div class="card-body ">
			         <form method="post" action="tambah-proses.php">
			                <div class="form-group">
			                 <label class="text-white">Nama</label>
			                 <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
			                </div>

			                <div class="form-group">
			                 <label class="text-white">NIM</label>
			                 <input type="number" class="form-control" name="nim" placeholder="Masukkan NIM" required>
			                </div>

			                <div class="form-group">
			                 <label class="text-white">Asal</label>
			                 <input type="text" class="form-control" name="asal" placeholder="Masukkan Asal" required></input>
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
<?php
session_start();
if($_SESSION['username']=='')
{
    header("location:login.php");
}

include 'koneksi.php';
include 'header.php';

$sql = "SELECT * FROM mahasiswa ORDER BY nama";

$res = mysqli_query($koneksi, $sql);

$user = array();

while ($data = mysqli_fetch_assoc($res)) {
  $user[] = $data;
}
?>
<title>Daftar Mahasiswa</title>
<center><h1>Selamat Datang  <?php echo $_SESSION['username']?></h1></center>
<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      <div class="card bg-dark mb-3">
        <div class="card-header">
          <h2 class="card-title text-white"><i class="fas fa-book"></i> Data Mahasiswa</h2>
          <a href="tambah.php" class="btn btn-outline-light"><i class="fas fa-plus"></i> Tambah Data</a>
         </div>
        <div class="card-body">
          <table class="table table-hover">
  <thead>
    <tr style="background-color: #4e4e4e;">
      <th scope="col" class="text-white">No</th>
      <th scope="col" class="text-white">Nama</th>
      <th scope="col" class="text-white">NIM</th>
      <th scope="col" class="text-white">Asal</th>
      <th scope="col" class="text-white">Opsi</th>
    </tr>
  </thead>
  <tbody>
  <?php
 $no = 1;
 foreach ($user as $u) { ?>

   <tr>
     <th scope="row" class="text-white"><?= $no ?></th>
     <td class="text-white"><?= $u['nama'] ?></td>
     <td class="text-white"><?= $u['nim'] ?></td>
     <td class="text-white"><?= $u['asal'] ?></td>
     <td>
     <a href="edit.php?id_mhs=<?= $u["id_mhs"];?>" class="badge badge-success text-white">Edit</a>
     <a href="hapus.php?id_mhs=<?= $u["id_mhs"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="badge badge-danger">Hapus</a>
     </td>
   <?php
  $no++;
}
    ?>
</tbody>
</table>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php 
include 'footer.php';
?>



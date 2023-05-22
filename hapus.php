<?php

include 'koneksi.php';

$id_mhs = $_GET['id_mhs'];

$query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE mahasiswa.id_mhs='$id_mhs' ");

if($query>0){
    echo "<script> alert('Data Berhasil Dihapus'); document.location.href='daftar_mhs.php';
          </script>";
}else{
}

?>

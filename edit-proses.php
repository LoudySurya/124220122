<?php
include 'koneksi.php';

if (isset($_POST['simpan']))
{
	$id_mhs 			= $_POST['id_mhs'];
	$nama				= $_POST['nama'];
	$nim	 		= $_POST['nim'];
	$asal 			= $_POST['asal'];

	$sql =	"UPDATE mahasiswa SET nama='$nama', nim='$nim', asal='$asal' WHERE id_mhs='$id_mhs'";

	$res = mysqli_query($koneksi, $sql);
	$count = mysqli_affected_rows($koneksi);

	if ($res>0) {
		echo "
			<script>
				alert('Data Berhasil Diubah');
				document.location.href='daftar_mhs.php';
			</script>
		";
	}
}
?>

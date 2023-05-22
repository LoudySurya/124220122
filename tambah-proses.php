<?php
include 'koneksi.php';

if (isset($_POST['simpan']))
{
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$asal = $_POST['asal'];

	$sql = "INSERT INTO mahasiswa (nama, nim, asal)
			VALUES ('$nama', '$nim', '$asal')";

	$res = mysqli_query($koneksi, $sql);

	$count = mysqli_affected_rows($koneksi);

	if ($count == 1)
	{
		echo "
			<script>
				alert('Data Berhasil Ditambahkan');
				document.location.href='daftar_mhs.php';
			</script>
		";
	}
	else
	{
		header("Location: tambah.php");
	}
}
else
{
	header("Location: tambah.php");
}
?>

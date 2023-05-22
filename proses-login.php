<?php
include 'koneksi.php';
$username   = $_POST['username'];
$password   = $_POST['password'];
$user = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($user);
if($cek>0)
{
    session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['username'] = $row['username'];
        echo "
            <script>
                alert('Berhasil Login');
                document.location.href='daftar_mhs.php';
            </script>
          ";
}else
{
    echo "
        <script>
            alert('Username / Password Salah');
            document.location.href='login.php';
        </script>
      ";
}
?>

    
<?php 
$user = $_POST['user'];
$pass = $_POST['password'];
include 'koneksi.php';
$cek = "select * from petugas where nama='".$user."' and password ='".$pass."' ";
$hasil = $conn->query($cek);
if ($hasil->num_rows > 0) {

	//echo "Berhasil Login";
	header("location: tampilan.php");
}

	else {
		header ("location: login.php");
		
	}

//@author by : miun
?>
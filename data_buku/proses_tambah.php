<?php 
include '../koneksi.php';
if(isset($_POST['kode_buku']) && $_POST['kode_buku'] !=''){
	$kode_buku=$_POST['kode_buku'];
	$judul=$_POST['judul_buku'];
	$penerbit=$_POST['penerbit'];
	$tahun=$_POST['tahun_penerbit'];
	$pengarang=$_POST['pengarang'];
	$jumlah=$_POST['jumlah_buku'];
	$sql ="insert into data_buku values ('$kode_buku', '$judul', '$penerbit', '$tahun', '$pengarang', '$jumlah')";
}
if ($conn->query($sql) === TRUE) {
	echo "<center>Berhasil Menambahkan Data</center><br>";
	echo "<center><a href='tambah.php>Kembali</a></center>'";
} else {
	echo "<center>Data Tidak Valid</center><br>".$sql."<br>".$conn->error;
}

$conn->close();
?>
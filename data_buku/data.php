<center><h2>Data Buku</h2></center>
<table>
		<tr>
			<td>Kode Buku</td>
			<td>Judul Buku</td>
			<td>Penerbit</td>
			<td>Tahun Penerbit</td>
			<td>Pengarang</td>
			<td>Jumlah Buku</td>
		</tr>
		<!--perintah untuk pengambilan data-->
<?php  
include '../koneksi.php';
$no=1;
$sql2= mysql_query("SELECT * FROM data_buku ORDER BY kode_buku ASC ");
while($r=mysql_fetch_row($sql2)){
	$no++;
?>
<tr>
	<td><?php echo $no; ?></td>
	<td><?php echo $r[0]; ?></td>
	<td><?php echo $r[1]; ?></td>
	<td><?php echo $r[2]; ?></td>
	<td><?php echo $r[3]; ?></td>
	<td><?php echo $r[4]; ?></td>
	<td><?php echo $r[5]; ?></td>
	<td><a href="">Edit</a>&nbsp;|&nbsp; <a href="">Hapus</a></td>
</tr>
<?php
}
?>
</table>
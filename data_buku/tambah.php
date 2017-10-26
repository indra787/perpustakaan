<center><h2>Tambah Buku</h2></center>
<form action="proses_tambah.php" method="post">
	<table align="center" cellpadding="3" cellspacing="0" border="1" width="600">
		<tr><td>Kode Buku</td><td>:</td><td><input type="text" name="kode_buku" size="40"></td></tr>
		<tr><td>Judul Buku</td><td>:</td><td><input type="text" name="judul_buku" size="40"></td></tr>
		<tr><td>Penerbit</td><td>:</td><td><input type="text" name="penerbit" size="40"></td></tr>
		<tr><td>Tahun Penerbit</td><td>:</td><td><input type="text" name="tahun_penerbit" size="40"></td></tr>
		<tr><td>Pengarang</td><td>:</td><td><input type="text" name="pengarang" size="40"></td></tr>
		<tr><td>Jumlah Buku</td><td>:</td><td><input type="text" name="jumlah_buku" size="40"></td></tr>
		<tr><td colspan="3" align="center"><input type="submit" name="submit" value="Simpan">&nbsp;
		   							       <input type="button" value="Batal" onclick="window.location.href='index.php'">
	</table>
</form>
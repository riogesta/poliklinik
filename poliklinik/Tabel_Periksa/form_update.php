<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die("Gagal Koneksi Database");
	$kode_periksa=$_GET['kode_periksa'];
	$query="select * from periksa_obat where kode_periksa='$kode_periksa'";
	$data=mysqli_query($koneksi,$query) or die ("Gagal Menampilkan".$query);
	$sql=mysqli_fetch_array($data);
?>

<html>
	<body>
	<legend><h3>Ubah Data</h3></legend>
	<table>
		<form action="aksi_update.php" method="post">
			<tr>
				<td><label>Kode Periksa: </label></td>
				<td><input type="text" name="kode_periksa" placeholder="Kode Periksa" readonly value="<?php echo $sql['kode_periksa'];?>"/></td>
			</tr>
			<tr>
				<td><label>Kode Obat: </label></td>
				<td><input type="text" name="kode_obat" placeholder="Kode Obat" autofocus value="<?php echo $sql['kode_obat'];?>" /></td>
			</tr>
			<tr>
				<td><label>Jumlah Obat: </label></td>
				<td><input type="text" name="jumlah_obat" placeholder="jumlah Obat" value="<?php echo $sql['jumlah_obat'];?>"/></td>
			</tr>
			<tr>
				<td><label>Cara Pemakaian: </label></td>
				<td><input type="text" name="cara_pemakaian" placeholder="Cara Pemakaian" value="<?php echo $sql['cara_pemakaian'];?>"/></td>
			</tr>
			<tr>
				<td colspan="4" align="center">
				<input type="submit" name="submit" value="Submit" /></td>
			</tr>
		</form>
	</table>
	<a href="form_periksa.php">Kembali</a>
	</body>
</html>
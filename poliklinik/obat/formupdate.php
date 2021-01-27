<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die("Gagal koneksi database");
	$kode_obat=$_GET['kode_obat'];
	$query="select * from obat where kode_obat='$kode_obat'";
	$data=mysqli_query($koneksi,$query) or die ("Gagal Menampilkan".$query);
	$sql=mysqli_fetch_array($data);
?>

<html>
<body>
	<legend><h3>Ubah Data</h3><legend>
	<table>
		<form action="aksi_update.php" method="post">
			<tr>
				<td><label>Kode Obat</label></td>
				<td><input type="text" name="kode_obat" placeholder="kode_obat" readonly value="<?php echo $sql['kode_obat'];?>"></td>
			</tr>
			<tr>
				<td><label>Nama Obat</label></td>
				<td><input type="text" name="nama_obat" placeholder="nama_obat" value="<?php echo $sql['nama_obat'];?>"/></td>
			</tr>
			<tr>
				<td><label>Khasiat Obat</label></td>
				<td><input type="text" name="khasiat_obat" placeholder="khasiat_obat" value="<?php echo $sql['khasiat_obat'];?>"/></td>
			</tr>
			<tr>
				<td><label>Kategori Obat</label></td>
				<td><input type="text" name="kategori_obat" placeholder="kategori_obat" value="<?php echo $sql['kategori_obat'];?>"/></td>
			</tr>
			<tr>
				<td><label>Dosis Obat</label></td>
				<td><input type="text" name="dosis_obat" placeholder="dosis_obat" value="<?php echo $sql['dosis_obat'];?>"/></td>
			</tr>
			<tr>
				<td><label>Satuan Obat</label></td>
				<td><input type="text" name="satuan_obat" placeholder="satuan_obat" value="<?php echo $sql['satuan_obat'];?>"/></td>
			</tr>
			<tr>
				<td colspan="4" align="center">
				<input type="submit" name="submit" value="Submit"/></td>
			</tr>
		</form>
		</table>
		<a href="index.php">Kembali</a>
	</body>
</html>

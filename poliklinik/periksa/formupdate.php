<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die("Gagal koneksi database");
	$kode_periksa=$_GET['kode_periksa'];
	$query="select * from periksa where kode_periksa='$kode_periksa'";
	$data=mysqli_query($koneksi,$query) or die ("Gagal Menampilkan".$query);
	$sql=mysqli_fetch_array($data);
?>

<html>
<body>
	<legend><h3>Ubah Data</h3><legend>
	<table>
		<form action="aksi_update.php" method="post">
			<tr>
				<td><label>Kode Periksa:</label></td>
				<td><input type="text" name="kode_periksa" placeholder="Kode_Periksa" readonly value="<?php echo $sql['kode_periksa'];?>"></td>
			</tr>
			<tr>
				<td><label>Tanggal Periksa:</label></td>
				<td><input type="text" name="tanggal_periksa" placeholder="Tanggal_Periksa" value="<?php echo $sql['tanggal_periksa'];?>"/></td>
			</tr>
			<tr>
				<td><label>Kode Pasien</label></td>
				<td><input type="text" name="kode_pasien" placeholder="Kode_Pasien" value="<?php echo $sql['kode_pasien'];?>"/></td>
			</tr>
			<tr>
				<td><label>Kode Dokter</label></td>
				<td><input type="text" name="kode_dokter" placeholder="Kode_Dokter" value="<?php echo $sql['kode_dokter'];?>"/></td>
			</tr>
			<tr>
				<td><label>Keluhan Pasien</label></td>
				<td><input type="text" name="keluhan_pasien" placeholder="Keluhan_Pasien" value="<?php echo $sql['keluhan_pasien'];?>"/></td>
			</tr>
			<tr>
				<td><label>Diagnosa Dokter</label></td>
				<td><input type="text" name="diagnosa_dokter" placeholder="Diagnosa_Dokter" value="<?php echo $sql['diagnosa_dokter'];?>"/></td>
			</tr>
			<tr>
				<td><label>Tekanan Darah</label></td>
				<td><input type="text" name="tekanan_darah" placeholder="Tekanan_Darah" value="<?php echo $sql['tekanan_darah'];?>"/></td>
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

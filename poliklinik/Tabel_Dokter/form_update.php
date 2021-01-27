<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die("Gagal Koneksi Database");
	$kode_dokter=$_GET['kode_dokter'];
	$query="select * from dokter where kode_dokter='$kode_dokter'";
	$data=mysqli_query($koneksi,$query) or die ("Gagal Menampilkan".$query);
	$sql=mysqli_fetch_array($data);
?>

<html>
	<body>
	<legend><h3>Ubah Data</h3></legend>
	<table>
		<form action="aksi_update.php" method="post">
			<tr>
				<td><label>Kode Dokter: </label></td>
				<td><input type="text" name="kode_dokter" placeholder="Kode Dokter" readonly value="<?php echo $sql['kode_dokter'];?>"/></td>
			</tr>
			<tr>
				<td><label>Nama Dokter: </label></td>
				<td><input type="text" name="nama_dokter" placeholder="Nama Dokter" autofocus value="<?php echo $sql['nama_dokter'];?>" /></td>
			</tr>
			<tr>
				<td><label>Tempat Lahir: </label></td>
				<td><input type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $sql['tempat_lahir'];?>"/></td>
			</tr>
			<tr>
				<td><label>Tanggal Lahir: </label></td>
				<td><input type="text" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $sql['tanggal_lahir'];?>"/></td>
			</tr>
			<tr>
				<td><label>Jenis Kelamin: </label></td>
				<td><input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $sql['jenis_kelamin'];?>"/></td>
			</tr>
			<tr>
				<td><label>Alamat: </label></td>
				<td><input type="text" name="alamat" placeholder="Alamat" value="<?php echo $sql['alamat'];?>"/></td>
			</tr>
			<tr>
				<td><label>No Telepon: </label></td>
				<td><input type="text" name="no_tlp" placeholder="No Telepon" value="<?php echo $sql['no_tlp'];?>"/></td>
			</tr>
			<tr>
				<td><label>Spesialis: </label></td>
				<td><input type="text" name="spesialis" placeholder="Spesialis" value="<?php echo $sql['spesialis'];?>"/></td>
			</tr>
			<tr>
				<td colspan="4" align="center">
				<input type="submit" name="submit" value="Submit" /></td>
			</tr>
		</form>
	</table>
	<a href="form_dokter.php">Kembali</a>
	</body>
</html>
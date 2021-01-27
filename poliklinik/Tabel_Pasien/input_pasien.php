<html>
	<body>
	<legend><h3>Input Data</h3></legend>
	<table>
		<form action="aksi_insert.php" method="post">
			<tr>
				<td><label>Kode Pasien: </label></td>
				<td><input type="text" name="kode_pasien" placeholder="Kode Pasien"/></td>
			</tr>
			<tr>
				<td><label>Nama Pasien: </label></td>
				<td><input type="text" name="nama_pasien" placeholder="Nama Pasien"/></td>
			</tr>
			<tr>
				<td><label>Tempat Lahir: </label></td>
				<td><input type="text" name="tempat_lahir" placeholder="Tempat Lahir"/></td>
			</tr>
			<tr>
				<td><label>Tanggal Lahir: </label></td>
				<td><input type="text" name="tanggal_lahir" placeholder="Tanggal Lahir"/></td>
			</tr>
			<tr>
				<td><label>Jenis Kelamin: </label></td>
				<td><input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin"/></td>
			</tr>
			<tr>
				<td><label>Alamat: </label></td>
				<td><input type="text" name="alamat" placeholder="Alamat"/></td>
			</tr>
				<td><label>No Telepon: </label></td>
				<td><input type="text" name="no_tlp" placeholder="No Telepon"/></td>
			</tr>
			<tr>
				<td colspan="4" align="center">
				<input type="submit" name="submit" value="Submit"/></td>
			</tr>
		</form>
	</table>
	</body>
</html>
<html>
	<body>
	<legend><h3>Input Data</h3></legend>
	<table>
		<form action="aksi_insert.php" method="post">
			<tr>
				<td><label>Kode Periksa: </label></td>
				<td><input type="text" name="kode_periksa" placeholder="Kode Periksa"/></td>
			</tr>
			<tr>
				<td><label>Kode Obat: </label></td>
				<td><input type="text" name="kode_obat" placeholder="Kode Obat"/></td>
			</tr>
			<tr>
				<td><label>Jumlah Obat: </label></td>
				<td><input type="text" name="jumlah_obat" placeholder="Jumlah Obat"/></td>
			</tr>
			<tr>
				<td><label>Cara Pemakaian: </label></td>
				<td><input type="text" name="cara_pemakaian" placeholder="Cara Pemakaian"/></td>
			</tr>
			<tr>
				<td colspan="4" align="center">
				<input type="submit" name="submit" value="Submit"/></td>
			</tr>
		</form>
	</table>
	</body>
</html>
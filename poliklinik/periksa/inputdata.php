<html>
<body>
	<legend><h3>Input Data</h3></legend>
	<table>
		<form action="aksi_insert.php" method="post">
			<tr>
				<td><label>Kode Periksa:</label></td>
				<td><input type="text" name="kode_periksa" placeholder="kode_periksa"/></td>
			</tr>
			<tr>
				<td><label>Tanggal Periksa:</label></td>
				<td><input type="text" name="tanggal_periksa" placeholder="tanggal_periksa"/></td>
			</tr>
			<tr>
				<td><label>Kode Pasien</label></td>
				<td><input type="text" name="kode_pasien" placeholder="kode_pasien"/></td>
			</tr>
						<tr>
				<td><label>Kode Dokter</label></td>
				<td><input type="text" name="kode_dokter" placeholder="kode_dokter"/></td>
			</tr>
			<tr>
				<td><label>Keluhan Pasien</label></td>
				<td><input type="text" name="keluhan_pasien" placeholder="keluhan_pasien"/></td>
			</tr>
			<tr>
				<td><label>Diagnosa Dokter</label></td>
				<td><input type="text" name="diagnosa_dokter" placeholder="diagnosa_dokter"/></td>
			</tr>
			<tr>
				<td><label>Tekanan Darah</label></td>
				<td><input type="text" name="tekanan_darah" placeholder="tekanan_darah"/></td>
			</tr>
			<tr>
				<td colspan="4" align="center">
					<input type="submit" name="submit" value="Submit"/>
				</td>
			</tr>
		</form>
	</table>
</body>
</html>

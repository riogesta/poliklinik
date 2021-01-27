<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die("Gagal Koneksi Database");
	echo "Sukses Koneksi database";
?>
<html>
	<body>
		<?php
			$koneksi  = $koneksi = mysqli_connect ("localhost","root","","poliklinik");
			$query = "select * from periksa";
			$data = mysqli_query ($koneksi, $query) or die ("gagal query:" .$query);
		?>
		<table border="3">
			<tr>
				<th>Kode Periksa</th>
				<th>Tanggal Periksa</th>
				<th>Kode Pasien</th>
				<th>Kode Dokter</th>
				<th>Keluhan Pasien</th>
				<th>Diagnosa Dokter</th>
				<th>Tekanan Darah</th>
				<th>Action</th>
			</tr>
			<?php while($v=mysqli_fetch_array($data)):;?>
			<tr>
				<td><?php echo $v["kode_periksa"];?></td>
				<td><?php echo $v["tanggal_periksa"];?></td>
				<td><?php echo $v["kode_pasien"];?></td>
				<td><?php echo $v["kode_dokter"];?></td>
				<td><?php echo $v["keluhan_pasien"];?></td>
				<td><?php echo $v["diagnosa_dokter"];?></td>
				<td><?php echo $v["tekanan_darah"];?></td>
				<td><a href="aksi_hapus.php?kode_periksa=<?php echo $v["kode_periksa"];?>">Hapus</a>&nbsp;
				<a href="formupdate.php?kode_periksa=<?php echo $v["kode_periksa"];?>">Edit</a></td>
			</tr>
			<?php endwhile;?>
		</table>
		<a href="inputdata.php">Masukan Data</a>
	</body>
</html>

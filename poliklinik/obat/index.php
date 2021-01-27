<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die("Gagal Koneksi Database");
	echo "Sukses Koneksi database";
?>
<html>
	<body>
		<?php
			$koneksi  = $koneksi = mysqli_connect ("localhost","root","","poliklinik");
			$query = "select * from obat";
			$data = mysqli_query ($koneksi, $query) or die ("gagal query:" .$query);
		?>
		<table border="3">
			<tr>
				<th>Kode Obat</th>
				<th>Nama Obat</th>
				<th>Khasiat Obat</th>
				<th>Kategori Obat</th>
				<th>Dosis Obat</th>
				<th>Satuan Obat</th>
				<th>Action</th>
			</tr>
			<?php while($v=mysqli_fetch_array($data)):;?>
			<tr>
				<td><?php echo $v["kode_obat"];?></td>
				<td><?php echo $v["nama_obat"];?></td>
				<td><?php echo $v["khasiat_obat"];?></td>
				<td><?php echo $v["kategori_obat"];?></td>
				<td><?php echo $v["dosis_obat"];?></td>
				<td><?php echo $v["satuan_obat"];?></td>
				<td><a href="aksi_hapus.php?kode_obat=<?php echo $v["kode_obat"];?>">Hapus</a>&nbsp;
				<a href="formupdate.php?kode_obat=<?php echo $v["kode_obat"];?>">Edit</a></td>
			</tr>
			<?php endwhile;?>
		</table>
		<a href="inputdata.php">Masukan Data</a>
	</body>
</html>

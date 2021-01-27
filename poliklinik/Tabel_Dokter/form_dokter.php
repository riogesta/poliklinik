<html>
	<body>
		<table border="5">
		<?php
			$koneksi=mysqli_connect("localhost","root","","poliklinik")or die("Gagal Koneksi Database");
			echo"Sukses koneksi database";
		?>
			<tr>
				<th>Kode Dokter</th>
				<th>Nama Dokter</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>No Telepon</th>
				<th>Spesialis</th>
				<th>Action</th>
			</tr>	
			<?php
				$query = "select * from dokter";
				$data = mysqli_query($koneksi,$query) or die ("Gagal query".$query);
			?>
			<?php while($v=mysqli_fetch_array($data)):;?>
			<tr>
				<td><?php echo $v["kode_dokter"];?></td>
				<td><?php echo $v["nama_dokter"];?></td>
				<td><?php echo $v["tempat_lahir"];?></td>
				<td><?php echo $v["tanggal_lahir"];?></td>
				<td><?php echo $v["jenis_kelamin"];?></td>
				<td><?php echo $v["alamat"];?></td>
				<td><?php echo $v["no_tlp"];?></td>
				<td><?php echo $v["spesialis"];?></td>
				<td><a href="aksi_hapus.php?kode_dokter=<?php echo $v["kode_dokter"];?>">Hapus</a>&nbsp;
				<a href="form_update.php?kode_dokter=<?php echo $v["kode_dokter"];?>">Edit</a></td>
			</tr>
			<?php endwhile;?>
		</table>
		<a href="input_dokter.php">Masukan Data</a>
	</body>
</html>
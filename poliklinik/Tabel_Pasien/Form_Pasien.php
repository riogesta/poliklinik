<html>
	<body>
		<table border="5">
		<?php
			$koneksi=mysqli_connect("localhost","root","","poliklinik")or die("Gagal Koneksi Database");
			echo"Sukses koneksi database";
		?>
			<tr>
				<th>Kode Pasien</th>
				<th>Nama Pasien</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>No Telepon</th>
				<th>Action</th>
			</tr>	
			<?php
				$query = "select * from pasien";
				$data = mysqli_query($koneksi,$query) or die ("Gagal query".$query);
			?>
			<?php while($v=mysqli_fetch_array($data)):;?>
			<tr>
				<td><?php echo $v["kode_pasien"];?></td>
				<td><?php echo $v["nama_pasien"];?></td>
				<td><?php echo $v["tempat_lahir"];?></td>
				<td><?php echo $v["tanggal_lahir"];?></td>
				<td><?php echo $v["jenis_kelamin"];?></td>
				<td><?php echo $v["alamat"];?></td>
				<td><?php echo $v["no_tlp"];?></td>
				<td><a href="aksi_hapus.php?kode_pasien=<?php echo $v["kode_pasien"];?>">Hapus</a>&nbsp;
				<a href="form_update.php?kode_pasien=<?php echo $v["kode_pasien"];?>">Edit</a></td>
			</tr>
			<?php endwhile;?>
		</table>
		<a href="input_pasien.php">Masukan Data</a>
	</body>
</html>
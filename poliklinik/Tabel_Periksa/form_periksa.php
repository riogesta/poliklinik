<html>
	<body>
		<table border="5">
		<?php
			$koneksi=mysqli_connect("localhost","root","","poliklinik")or die("Gagal Koneksi Database");
			echo"Sukses koneksi database";
		?>
			<tr>
				<th>Kode Periksa</th>
				<th>Kode Obat</th>
				<th>Jumlah Obat</th>
				<th>Cara Pemakaian</th>
				<th>Action</th>
			</tr>	
			<?php
				$query = "select * from periksa_obat";
				$data = mysqli_query($koneksi,$query) or die ("Gagal query".$query);
			?>
			<?php while($v=mysqli_fetch_array($data)):;?>
			<tr>
				<td><?php echo $v["kode_periksa"];?></td>
				<td><?php echo $v["kode_obat"];?></td>
				<td><?php echo $v["jumlah_obat"];?></td>
				<td><?php echo $v["cara_pemakaian"];?></td>
				<td><a href="aksi_hapus.php?kode_periksa=<?php echo $v["kode_periksa"];?>">Hapus</a>&nbsp;
				<a href="form_update.php?kode_periksa=<?php echo $v["kode_periksa"];?>">Edit</a></td>
			</tr>
			<?php endwhile;?>
		</table>
		<a href="input_periksa.php">Masukan Data</a>
	</body>
</html>
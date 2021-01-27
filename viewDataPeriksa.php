<?php 

    $title = "All Data";
    include("layout/head.php");  
    include("backend/conn.php");

?>

<!-- this is menu -->
<div class="ui container">
	<!-- top menu -->
	<div class="ui pt-1 ngambang container secondary pointing menu">
		<a href="index.php" class="item">Home</a>
		<a href="viewData.php" class="active item">Data</a>
		<a href="viewAboutUs.php" class="item">About us</a>
		<div class="right menu">
			<a class="ui item"><i class="file alternate outline icon"></i>Poliklinik</a>
		</div>
	</div>
</div>
<!-- end menu -->

<!-- this is content writed -->
<div class="ui container basic segment">
    <div class="ui center aligned basic segment">

    <!-- Dokter -->
    <table class="ui celled selectable table">
		<thead>
			<tr>
				<th colspan="8"><i class="large file alternate icon"></i> Periksa Pasien
					<a href="formTambahPeriksa.php" class="ui right floated primary button tiny"><i class="add icon"></i> ADD</a>
				</th>
			</tr>
		</thead>
		<thead class="center aligned">
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
		</thead>
		<tbody class="center aligned">
			<?php
				$koneksi  = $koneksi = mysqli_connect ("localhost","root","","poliklinik");
				$query = "select * from periksa";
				$data = mysqli_query ($koneksi, $query) or die ("gagal query:" .$query);
			?>
			<?php while($v=mysqli_fetch_array($data)):;?>
			<tr>
				<td><?php echo $v["kode_periksa"];?></td>
				<td><?php echo $v["tanggal_periksa"];?></td>
				<td><?php echo $v["kode_pasien"];?></td>
				<td><?php echo $v["kode_dokter"];?></td>
				<td><?php echo $v["keluhan_pasien"];?></td>
				<td><?php echo $v["diagnosa_dokter"];?></td>
				<td><?php echo $v["tekanan_darah"];?></td>
				<td>
					<div class="ui buttons">
						<a href="formEditPeriksa.php?kode_periksa=<?php echo $v["kode_periksa"];?>" class="ui icon button inverted orange"><i class="pencil alternate icon"></i></a>
						<a href="aksi_hapusPeriksa.php?kode_periksa=<?php echo $v["kode_periksa"];?>" class="ui icon button inverted red"><i class="trash alternate icon"></i></a>
					</div>
				</td>
			</tr>
			<?php endwhile;?>
		</tbody>
	</table>

        

    </div>
</div>
<!-- end contents -->
<?php include("layout/footer.php"); ?>
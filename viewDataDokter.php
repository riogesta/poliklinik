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
		<a href="#" class="active item">Data</a>
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
                <th colspan="9"><i class="large user md icon"></i> Dokter
					<a href="formTambahDokter.php" class="ui right floated primary button tiny"><i class="add icon"></i> ADD</a>
				</th>
            </tr>
        </thead>
        <thead>
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
        </thead>
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
				<td>
					<div class="ui buttons">
						<a href="formEditDokter.php?kode_dokter=<?php echo $v["kode_dokter"];?>" class="ui icon button inverted orange"><i class="pencil alternate icon"></i></a>
						<a href="aksi_hapusDokter.php?kode_dokter=<?php echo $v["kode_dokter"];?>" class="ui icon button inverted red"><i class="trash alternate icon"></i></a>
					</div>
				</td>
			</tr>
			<?php endwhile;?>
		</table>

        

    </div>
</div>
<!-- end contents -->
<?php include("layout/footer.php"); ?>
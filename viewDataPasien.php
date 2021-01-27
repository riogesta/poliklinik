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
                    <th colspan="8"><i class="large user icon"></i> Pasien
                    	<a href="formTambahPasien.php" class="ui right floated primary button tiny"><i class="add icon"></i> ADD</a>
                    </th>
                </tr>
            </thead>
            <thead class="center aligned"> 
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
            </thead>
			<tbody class="center aligned">
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
					<td>
						<div class="ui buttons">
							<a href="formEditPasien.php?kode_pasien=<?php echo $v["kode_pasien"];?>" class="ui icon button inverted orange"><i class="pencil alternate icon"></i></a>
							<a href="aksi_hapusPasien.php?kode_pasien=<?php echo $v["kode_pasien"];?>" class="ui icon button inverted red"><i class="trash alternate icon"></i></a>
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
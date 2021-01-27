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
                <th colspan="7"><i class="large pills icon"></i> Obat
                	<a href="formTambahObat.php" class="ui right floated primary button tiny"><i class="add icon"></i> ADD</a>
                </th>
            </tr>
        </thead>
        <thead class="center aligned">
			<tr>
				<th>Kode Obat</th>
				<th>Nama Obat</th>
				<th>Khasiat Obat</th>
				<th>Kategori Obat</th>
				<th>Dosis Obat</th>
				<th>Satuan Obat</th>
				<th>Action</th>
			</tr>
        </thead>
        <tbody class="center aligned">
            <?php
                
                $query = "select * from obat";
                $data = mysqli_query($koneksi, $query) or die ("gagal query".$query);
            
            ?>
			<?php while($v=mysqli_fetch_array($data)):;?>
			<tr>
				<td><?php echo $v["kode_obat"];?></td>
				<td><?php echo $v["nama_obat"];?></td>
				<td><?php echo $v["khasiat_obat"];?></td>
				<td><?php echo $v["kategori_obat"];?></td>
				<td><?php echo $v["dosis_obat"];?></td>
				<td><?php echo $v["satuan_obat"];?></td>
				<td>
					<div class="ui buttons">
						<a href="formEditObat.php?kode_obat=<?php echo $v["kode_obat"];?>" class="ui icon button inverted orange"><i class="pencil alternate icon"></i></a>
						<a href="aksi_hapusObat.php?kode_obat=<?php echo $v["kode_obat"];?>" class="ui icon button inverted red"><i class="trash alternate icon"></i></a>
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
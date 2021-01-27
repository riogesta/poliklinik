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
                <th colspan="5"><i class="large pills icon"></i>  STOK OBAT
                    <a href="formTambahStokObat.php" class="ui right floated primary button tiny"><i class="add icon"></i> ADD</a>
                </th>
            </tr>
        </thead>
        <thead class="center aligned">
            <tr>
                <th>Kode Obat</th>
                <th>Tahun</th>
                <th>jumlah Awal</th>
                <th>jumlah Akhir</th>
				<th>Action</th>
            </tr>
        </thead>
        <tbody class="ccenter aligned">
            
            <?php
            
                    $query = "select * from stok_obat";
                    $data = mysqli_query($koneksi, $query) or die ("gagal query".$query);
            
            ?>

            <?php while($v=mysqli_fetch_array($data)):; ?>
            <tr>
                <td><?= $v['kode_obat'] ?></td>
                <td><?= $v['tahun'] ?></td>
                <td><?= $v['jumlah_awal'] ?></td>
                <td><?= $v['jumlah_akhir'] ?></td>
				<td>
					<div class="ui buttons">
						<a href="formEditStokObat.php?kode_obat=<?php echo $v["kode_obat"];?>" class="ui icon button inverted orange"><i class="pencil alternate icon"></i></a>
						<a href="aksi_HapusStokObat.php?kode_obat=<?php echo $v["kode_obat"];?>" class="ui icon button inverted red"><i class="trash alternate icon"></i></a>
					</div>
				</td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

        

    </div>
</div>
<!-- end contents -->
<?php include("layout/footer.php"); ?>
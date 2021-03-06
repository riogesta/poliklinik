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

    <!-- periksa obat -->
    <table class="ui celled selectable table">
            <thead>
                <tr>
                    <th colspan="5"><i class="large file alternate outline icon"></i>Periksa Obat
                        <a href="formTambahPeriksaObat.php" class="ui right floated primary button tiny"><i class="add icon"></i> ADD</a>
                    </th>
                </tr>
            </thead>
            <thead class="center aligned">
                <tr>
                    <th>Kode Periksa</th>
                    <th>Kode Obat</th>
                    <th>Jumlah Obat</th>
                    <th>Cara Pemakaian</th>
					<th>Action</th>
                </tr>	
            </thead>
			<?php
				$query = "select * from periksa_obat";
				$data = mysqli_query($koneksi,$query) or die ("Gagal query".$query);
			?>
            <tbody class="center aligned">
			    <?php while($v=mysqli_fetch_array($data)):;?>
                <tr>
                    <td><?php echo $v["kode_periksa"];?></td>
                    <td><?php echo $v["kode_obat"];?></td>
                    <td><?php echo $v["jumlah_obat"];?></td>
                    <td><?php echo $v["cara_pemakaian"];?></td>
                    <td>
						<div class="ui buttons">
                            <a href="formEditPeriksaObat.php?kode_periksa=<?php echo $v["kode_periksa"];?>" class="ui icon button inverted orange"><i class="pencil alternate icon"></i></a>
                            <a href="aksi_hapusPeriksaObat.php?kode_periksa=<?php echo $v["kode_periksa"];?>" class="ui icon button inverted red"><i class="trash alternate icon"></i></a>
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
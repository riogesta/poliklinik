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

    <!-- kartu stok obat -->
    <table class="ui celled selectable table">
        <thead>
            <tr>
                <th colspan="9"><i class="large clipboard outline icon"></i>  KARTU STOK OBAT
                    <a href="formTambahKartuStokObat.php" class="ui right floated primary button tiny"><i class="add icon"></i> ADD</a>
                </th>
            </tr>
        </thead>
        <thead class="center aligned">
            <tr>
                <th>ID Transaksi</th>
                <th>Kode Obat</th>
                <th>Tanggal Transaksi</th>
                <th>Keterangan</th>
                <th>Jumlah Masuk</th>
                <th>Jumlah Keluar</th>
                <th>Jumlah Saldo</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody class="ccenter aligned">

            <?php
                
                $query = "select * from kartu_stok_obat";
                $data = mysqli_query($koneksi, $query) or die ("gagal query".$query);
            
            ?>

            <?php while($v=mysqli_fetch_array($data)):; ?>
            <tr>
                <td><?= $v['id_transaksi'] ?></td>
                <td><?= $v['kode_obat'] ?></td>
                <td><?= $v['tanggal_transaksi'] ?></td>
                <td><?= $v['keterangan'] ?></td>
                <td><?= $v['jumlah_masuk'] ?></td>
                <td><?= $v['jumlah_keluar'] ?></td>
                <td><?= $v['jumlah_saldo'] ?></td>
                <td>
					<div class="ui buttons">
						<a href="formEditKartuStokObat.php?id_transaksi=<?php echo $v["id_transaksi"];?>" class="ui icon button inverted orange"><i class="pencil alternate icon"></i></a>
						<a href="aksi_HapusKartuStokObat.php?id_transaksi=<?php echo $v["id_transaksi"];?>" class="ui icon button inverted red"><i class="trash alternate icon"></i></a>
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
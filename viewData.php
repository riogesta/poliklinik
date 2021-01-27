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
    <!-- stok obat -->
    <table class="ui celled selectable table">
        <thead>
            <tr>
                <th colspan="4"><i class="large pills icon"></i>  STOK OBAT</th>
            </tr>
        </thead>
        <thead class="center aligned">
            <tr>
                <th>Kode Obat</th>
                <th>Tahun</th>
                <th>jumlah Awal</th>
                <th>jumlah Akhir</th>
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
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <div class="ui horizontal divider">
        <i class="huge chevron circle down icon"></i>
    </div>

    <!-- kartu stok obat -->
    <table class="ui celled selectable table">
        <thead>
            <tr>
                <th colspan="8"><i class="large clipboard outline icon"></i>  KARTU STOK OBAT</th>
            </tr>
        </thead>
        <thead class="center aligned">
            <tr>
                <th>ID Transaksi</th>
                <th>Kode Obat</th>
                <th>Tahun</th>
                <th>Tanggal Transaksi</th>
                <th>Keterangan</th>
                <th>Jumlah Masuk</th>
                <th>Jumlah Keluar</th>
                <th>Jumlah Saldo</th>
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
                <td><?= $v['tahun'] ?></td>
                <td><?= $v['tanggal_transaksi'] ?></td>
                <td><?= $v['keterangan'] ?></td>
                <td><?= $v['jumlah_masuk'] ?></td>
                <td><?= $v['jumlah_keluar'] ?></td>
                <td><?= $v['jumlah_saldo'] ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <div class="ui horizontal divider">
        <i class="huge chevron circle down icon"></i>
    </div>

    <!-- obat -->
    <table class="ui celled selectable table">
        <thead>
            <tr>
                <th colspan="7"><i class="large pills icon"></i> Obat</th>
            </tr>
        </thead>
        <thead>
			<tr>
				<th>Kode Obat</th>
				<th>Nama Obat</th>
				<th>Khasiat Obat</th>
				<th>Kategori Obat</th>
				<th>Dosis Obat</th>
				<th>Satuan Obat</th>
			</tr>
        </thead>
        <tbody>
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
			</tr>
			<?php endwhile;?>
        </tbody>
	</table>

    <div class="ui horizontal divider">
        <i class="huge chevron circle down icon"></i>
    </div>

    <!-- Dokter -->
    <table class="ui celled selectable table">  
        <thead>
            <tr>
                <th colspan="8"><i class="large user md icon"></i> Dokter</th>
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
			</tr>
			<?php endwhile;?>
		</table>

        <div class="ui horizontal divider">
            <i class="huge chevron circle down icon"></i>
        </div>

        <table class="ui celled selectable table">
            <thead>
                <tr>
                    <th colspan="7"><i class="large user icon"></i>  Pasien</th>
                </tr>
            </thead>
            <thead> 
                <tr>
                    <th>Kode Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                </tr>	
            </thead>
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
			</tr>
			<?php endwhile;?>
		</table>

        <div class="ui horizontal divider">
            <i class="huge chevron circle down icon"></i>
        </div>

        <table class="ui celled selectable table">
            <thead>
                <tr>
                    <th colspan="7"><i class="large file alternate icon"></i> Periksa Pasien</th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th>Kode Periksa</th>
                    <th>Tanggal Periksa</th>
                    <th>Kode Pasien</th>
                    <th>Kode Dokter</th>
                    <th>Keluhan Pasien</th>
                    <th>Diagnosa Dokter</th>
                    <th>Tekanan Darah</th>
                </tr>
            </thead>
            <tbody>
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
                </tr>
                <?php endwhile;?>
            </tbody>
		</table>

        <div class="ui horizontal divider">
            <i class="huge chevron circle down icon"></i>
        </div>

        <table class="ui celled selectable table">
            <thead>
                <tr>
                    <th colspan="4"><i class="large file alternate outline icon"></i>Periksa Obat</th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th>Kode Periksa</th>
                    <th>Kode Obat</th>
                    <th>Jumlah Obat</th>
                    <th>Cara Pemakaian</th>
                </tr>	
            </thead>
			<?php
				$query = "select * from periksa_obat";
				$data = mysqli_query($koneksi,$query) or die ("Gagal query".$query);
			?>
            <tbody>
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
            </tbody>
		</table>

    </div>
</div>
<!-- end contents -->
<?php include("layout/footer.php"); ?>
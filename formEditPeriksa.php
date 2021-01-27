<?php
	$title = "edit data dokter";
	include("layout/head.php");
	include("backend/conn.php");

	$kode_periksa=$_GET['kode_periksa'];
	$query="select * from periksa where kode_periksa='$kode_periksa'";
	$data=mysqli_query($koneksi,$query) or die ("Gagal Menampilkan".$query);
	$sql=mysqli_fetch_array($data);
?>

<!-- this is menu -->
<div class="ui container">
	<!-- top menu -->
	<div class="ui pt-1 ngambang container secondary pointing menu">
		<a class="active item">Home</a>
		<a href="viewData.php" class="item">Data</a>
		<a href="viewAboutUs.php" class="item">About us</a>
		<div class="right menu">
			<a class="ui item"><i class="file alternate outline icon"></i>Poliklinik</a>
		</div>
	</div>
</div>
<!-- end menu -->
<div class="ui pt-1 container">
	<div class="ui container basic segment">
		<form class="ui form" action="aksi_updatePeriksa.php" method="post">
		<div class="field">
			<label>Kode Periksa </label>
			<input type="text" name="kode_periksa" readonly value="<?php echo $sql['kode_periksa'];?>">
		</div>
		<div class="field">
			<label>Tanggal Periksa</label>
			<input type="Date" name="tanggal_periksa" value="<?php echo $sql['tanggal_periksa'];?>">
		</div>
		<div class="field">
			<label>Kode Pasien</label>
			<input type="text" name="kode_pasien" value="<?php echo $sql['kode_pasien'];?>">
		</div>
		<div class="field">
			<label>Kode Dokter</label>
			<input type="text" name="kode_dokter" value="<?php echo $sql['kode_dokter'];?>">
		</div>
		<div class="field">
			<label>Keluhan Pasien</label>
			<textarea name="keluhan_pasien" id="" cols="30" rows="10"><?php echo $sql['keluhan_pasien'];?></textarea>
		</div>
		<div class="field">
			<label>Diagnosa Dokter</label>
			<input type="text" name="diagnosa_dokter" value="<?php echo $sql['diagnosa_dokter'];?>">
		</div>
		<div class="field">
			<label>Tekanan Darah</label>
			<input type="text" name="tekanan_darah" value="<?php echo $sql['tekanan_darah'];?>">
		</div>
		<button class="ui button green" type="submit">Ubah</button>
		</form>
	</div>
</div>

<?php
	include("layout/footer.php");
?>

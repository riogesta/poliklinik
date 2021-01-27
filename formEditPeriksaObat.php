<?php
	$title = "edit data dokter";
	include("layout/head.php");
	include("backend/conn.php");

	$kode_periksa=$_GET['kode_periksa'];
	$query="select * from periksa_obat where kode_periksa='$kode_periksa'";
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
		<form class="ui form" action="aksi_updatePeriksaObat.php" method="post">
		<div class="field">
			<label>Kode Periksa Obat </label>
			<input type="text" name="kode_periksa" readonly value="<?php echo $sql['kode_periksa'];?>">
		</div>
		<div class="field">
			<label>Kode Obat</label>
			<input type="text" name="kode_obat" value="<?php echo $sql['kode_obat'];?>">
		</div>
		<div class="field">
			<label>Jumlah Obat</label>
			<input type="text" name="jumlah_obat" value="<?php echo $sql['jumlah_obat'];?>">
		</div>
		<div class="field">
			<label>Cara Pemakaian</label>
			<textarea name="cara_pemakaian" id="" cols="30" rows="10"><?php echo $sql['cara_pemakaian'];?></textarea>
		</div>
		<button class="ui button green" type="submit">Ubah</button>
		</form>
	</div>
</div>

<?php
	include("layout/footer.php");
?>

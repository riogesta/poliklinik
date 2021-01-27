<?php
	$title = "input data Periksa obat";
	include("layout/head.php");
?>

<!-- this is menu -->
<div class="ui container">
	<!-- top menu -->
	<div class="ui pt-1 ngambang container secondary pointing menu">
		<a class="active item">Home</a>
		<a href="#" class="item">Data</a>
		<a href="viewAboutUs.php" class="item">About us</a>
		<div class="right menu">
			<a class="ui item"><i class="file alternate outline icon"></i>Poliklinik</a>
		</div>
	</div>
</div>
<!-- end menu -->
<div class="ui pt-1 container">
	<div class="ui container basic segment">
		<form class="ui form" action="aksi_insertPeriksaObat.php" method="post">
		<div class="field">
			<label>Kode Periksa Obat</label>
			<input type="text" name="kode_periksa">
		</div>
		<div class="field">
			<label>Kode Obat</label>
			<input type="text" name="kode_obat">
		</div>
		<div class="field">
			<label>Jumlah Obat</label>
			<input type="text" name="jumlah_obat">
		</div>
		<div class="field">
			<label>Cara Pemakaian</label>
			<input type="text" name="cara_pemakaian">
		</div>
		<button class="ui button green" type="submit">Simpan</button>
		</form>
	</div>
</div>

<?php
	include("layout/footer.php");
?>

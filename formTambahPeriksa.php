<?php
	$title = "input data Pasien";
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
		<form class="ui form" action="aksi_insertPeriksa.php" method="post">
		<div class="field">
			<label>Kode Periksa</label>
			<input type="text" name="kode_periksa">
		</div>
		<div class="field">
			<label>Tanggal Periksa</label>
			<input type="Date" name="tanggal_periksa">
		</div>
		<div class="field">
			<label>Kode Pasien</label>
			<input type="text" name="kode_pasien">
		</div>
		<div class="field">
			<label>Kode Dokter</label>
			<input type="text" name="kode_dokter">
		</div>
		<div class="field">
			<label>Keluhan Pasien</label>
			<textarea name="keluhan_pasien" id="" cols="30" rows="10"></textarea>
		</div>
		<div class="field">
			<label>Diagnosa Dokter</label>
			<input type="text" name="diagnosa_dokter">
		</div>
		<div class="field">
			<label>Tekanan Darah</label>
			<input type="text" name="tekanan_darah">
		</div>
		<button class="ui button green" type="submit">Simpan</button>
		</form>
	</div>
</div>

<?php
	include("layout/footer.php");
?>

<?php
	$title = "input data Obat";
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
		<form class="ui form" action="aksi_insertObat.php" method="post">
		<div class="field">
			<label>Kode Obat</label>
			<input type="text" name="kode_obat">
		</div>
		<div class="field">
			<label>Nama Obat</label>
			<input type="text" name="nama_obat">
		</div>
		<div class="field">
			<label>Khasiat Obat</label>
			<input type="text" name="khasiat_obat">
		</div>
		<div class="field">
			<label>Kategori Obat</label>
			<input type="text" name="kategori_obat">
		</div>
		<div class="field">
			<label>Dosis Obat</label>
			<input type="text" name="dosis_obat">
		</div>
		<div class="field">
			<label>Satuan Obat</label>
			<input type="text" name="satuan_obat">
		</div>
		<button class="ui button green" type="submit">Simpan</button>
		</form>
	</div>
</div>

<?php
	include("layout/footer.php");
?>

<?php
	$title = "input data stok obat";
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
		<form class="ui form" action="aksi_insertStokObat.php" method="post">
		<div class="field">
			<label>Kode Obat</label>
			<input type="text" name="kode">
		</div>
		<div class="field">
			<label>Tahun</label>
			<input type="text" name="thn">
		</div>
		<div class="field">
			<label>Jumlah Awal</label>
			<input type="text" name="awal">
		</div>
		<div class="field">
			<label>Jumlah Akhir</label>
			<input type="text" name="akhir">
		</div>
		<button class="ui button green" type="submit">Simpan</button>
		</form>
	</div>
</div>

<?php
	include("layout/footer.php");
?>

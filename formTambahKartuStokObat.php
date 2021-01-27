<?php
	$title = "input data kartu stok obat";
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
		<form class="ui form" action="aksi_insertKartuStokObat.php" method="post">
		<div class="field">
			<label>ID Transaksi</label>
			<input type="text" name="id" readonly placeholder="otomatis">
		</div>
		<div class="field">
			<label>Kode Obat</label>
			<input type="text" name="kode_obat">
		</div>
		<div class="field">
			<label>Tanggal Transaksi</label>
			<input type="date" name="tgl">
		</div>
		<div class="field">
			<label>Keterangan</label>
			<input type="text" name="keterangan">
		</div>
		<div class="field">
			<label>Jumlah Masuk</label>
			<input type="number" name="masuk">
		</div>
		<div class="field">
			<label>Jumlah keluar</label>
			<input type="number" name="keluar">
		</div>
		<div class="field">
			<label>Jumlah Saldo</label>
			<input type="number" name="saldo">
		</div>
		<button class="ui button green" type="submit">Simpan</button>
		</form>
	</div>
</div>

<?php
	include("layout/footer.php");
?>

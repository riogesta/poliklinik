<?php
	$title = "input data dokter";
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
		<form class="ui form" action="aksi_insertDokter.php" method="post">
		<div class="field">
			<label>Kode Dokter </label>
			<input type="text" name="kode_dokter">
		</div>
		<div class="field">
			<label>Nama dokter</label>
			<input type="text" name="nama_dokter">
		</div>
		<div class="field">
			<label>Tempat Lahir</label>
			<input type="text" name="tempat_lahir">
		</div>
		<div class="field">
			<label>Tangggal Lahir</label>
			<input type="Date" name="tanggal_lahir">
		</div>
		<div class="field">
			<label>Jenis Kelamin</label>
			<select name="jenis_kelamin" id="">
				<option value="">--pilih--</option>
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</div>
		<div class="field">
			<label>Alamat</label>
			<textarea name="alamat" id="" cols="30" rows="10"></textarea>
		</div>
		<div class="field">
			<label>No. Telp</label>
			<input type="number" name="no_telp">
		</div>
		<div class="field">
			<label>Spesialis</label>
			<input type="text" name="spesialis">
		</div>
		<button class="ui button green" type="submit">Simpan</button>
		</form>
	</div>
</div>

<?php
	include("layout/footer.php");
?>

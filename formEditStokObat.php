<?php
	$title = "edit data stok obat";
	include("layout/head.php");
	include("backend/conn.php");
	$kode_obat=$_GET['kode_obat'];
	$query="select * from stok_obat where kode_obat='$kode_obat'";
	$data=mysqli_query($koneksi,$query) or die ("Gagal Menampilkan".$query);
	$sql=mysqli_fetch_array($data);
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
		<form class="ui form" action="aksi_updateStokObat.php" method="post">
		<div class="field">
			<label>Kode Obat</label>
			<input type="text" name="kode" readonly value="<?php echo $sql['kode_obat'];?>">
		</div>
		<div class="field">
			<label>Tahun</label>
			<input type="text" name="thn" value="<?php echo $sql['tahun'];?>">
		</div>
		<div class="field">
			<label>Jumlah Awal</label>
			<input type="text" name="awal" value="<?php echo $sql['jumlah_awal'];?>">
		</div>
		<div class="field">
			<label>Jumlah Akhir</label>
			<input type="text" name="akhir" value="<?php echo $sql['jumlah_akhir'];?>">
		</div>
		<button class="ui button green" type="submit">Ubah</button>
		</form>
	</div>
</div>

<?php
	include("layout/footer.php");
?>

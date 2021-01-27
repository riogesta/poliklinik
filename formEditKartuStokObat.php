<?php
	$title = "edit data kartu stok obat";
	include("layout/head.php");
	include("backend/conn.php");
	$id=$_GET['id_transaksi'];
	$query="select * from kartu_stok_obat where id_transaksi='$id'";
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
		<form class="ui form" action="aksi_updateKartuStokObat.php" method="post">
		<div class="field">
			<label>ID Transaksi</label>
			<input type="text" name="id_transaksi" readonly value="<?php echo $sql['id_transaksi'];?>">
		</div>
		<div class="field">
			<label>Kode Obat</label>
			<input type="text" name="kode_obat" value="<?php echo $sql['kode_obat'];?>">
		</div>
		<div class="field">
			<label>Tanggal Transaksi</label>
			<input type="date" name="tgl" value="<?php echo $sql['tanggal_transaksi'];?>">
		</div>
		<div class="field">
			<label>Keterangan</label>
			<input type="text" name="keterangan" value="<?php echo $sql['keterangan'];?>">
		</div>
		<div class="field">
			<label>Jumlah Masuk</label>
			<input type="text" name="masuk" value="<?php echo $sql['jumlah_masuk'];?>">
		</div>
		<div class="field">
			<label>Jumlah Keluar</label>
			<input type="text" name="keluar" value="<?php echo $sql['jumlah_keluar'];?>">
		</div>
		<div class="field">
			<label>Jumlah Saldo</label>
			<input type="text" name="saldo" value="<?php echo $sql['jumlah_saldo'];?>">
		</div>
		<button class="ui button green" type="submit">ubah</button>
		</form>
	</div>
</div>

<?php
	include("layout/footer.php");
?>

<?php
	$title = "input data Pasien";
	include("layout/head.php");
	include("backend/conn.php");
	$kode_pasien=$_GET['kode_pasien'];
	$query="select * from pasien where kode_pasien='$kode_pasien'";
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
		<form class="ui form" action="aksi_updatePasien.php" method="post">
		<div class="field">
			<label>Kode Pasien</label>
			<input type="text" name="kode_pasien" value="<?php echo $sql['kode_pasien'];?>">
		</div>
		<div class="field">
			<label>Nama Pasien</label>
			<input type="text" name="nama_pasien" value="<?php echo $sql['nama_pasien'];?>">
		</div>
		<div class="field">
			<label>Tempat Lahir</label>
			<input type="text" name="tempat_lahir" value="<?php echo $sql['tempat_lahir'];?>">
		</div>
		<div class="field">
			<label>Tangggal Lahir</label>
			<input type="Date" name="tanggal_lahir" value="<?php echo $sql['tanggal_lahir'];?>">
		</div>
		<div class="field">
			<label>Jenis Kelamin</label>
			<select name="jenis_kelamin" id="">
				<option value="<?php echo $sql['jenis_kelamin'];?>"><?php echo $sql['jenis_kelamin'];?></option>
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</div>
		<div class="field">
			<label>Alamat</label>
			<textarea name="alamat" id="" cols="30" rows="10"><?php echo $sql['alamat'];?></textarea>
		</div>
		<div class="field">
			<label>No. Telp</label>
			<input type="number" name="tlp" value="<?php echo $sql['no_tlp'];?>">
		</div>
		<button class="ui button green" type="submit">Simpan</button>
		</form>
	</div>
</div>

<?php
	include("layout/footer.php");
?>

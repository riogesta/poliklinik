<!-- heading -->
<?php 
	$title = "Sweet Home";
	include("layout/head.php");
	include("backend/conn.php");
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

<!-- this is contents writed -->
<div class="ui container">
	<!-- content -->
	<?php
		$query = "select count(*) from dokter";
		$data = mysqli_query($koneksi, $query) or die ("gagal query".$query);
		$count = mysqli_fetch_array($data);
	?>
	<div class="ui equal width grid basic segment">
		<div class="column">
			<div class="ui link cards column">
				<div class="card">
					<div class="content">
						<div class="header">Dokter</div>
						<div class="Desciption">jumlah <?= $count[0] ?></div>
					</div>
					<a href="viewDataDokter.php" class="ui bottom button">
						<i class="eye icon"></i> Open
					</a>
				</div>
			</div>
		</div>

		<?php
			$query = "select count(kode_pasien) from pasien";
			$data = mysqli_query($koneksi, $query) or die ("gagal query".$query);
			$count = mysqli_fetch_array($data);
		?>
		<div class="column">
			<div class="ui link cards column">
				<div class="card">
					<div class="content">
						<div class="header">Pasien</div>
						<div class="Desciption">jumlah <?= $count[0]; ?></div>
					</div>
					<a href="viewDataPasien.php" class="ui bottom button">
						<i class="eye icon"></i>Open
					</a>
				</div>
			</div>
		</div>

		<?php
			$query = "select count(kode_obat) from obat";
			$data = mysqli_query($koneksi, $query) or die ("gagal query".$query);
			$count = mysqli_fetch_array($data);
		?>
		<div class="column">
			<div class="ui link cards column">
				<div class="card">
					<div class="content">
						<div class="header">Obat</div>
						<div class="Description">jumlah <?= $count[0] ?></div>
					</div>
					<a href="viewDataObat.php" class="ui bottom button">
						<i class="eye icon"></i> Open
					</a>
				</div>
			</div>
		</div>

		<?php
			$query = "select count(kode_obat) from kartu_stok_obat";
			$data = mysqli_query($koneksi, $query) or die ("gagal query".$query);
			$count = mysqli_fetch_array($data);
		?>
		<div class="column">
			<div class="ui link cards column">
				<div class="card">
					<div class="content">
						<div class="header">Kartu STOK OBAT</div>
						<div class="Desciption">jumlah <?= $count[0] ?></div>
					</div>
					<a href="viewDataKartuStokObat.php" class="ui bottom button">
						<i class="eye icon"></i> Open
					</a>
				</div>
			</div>
		</div>

		<?php
			$query = "select count(kode_obat) from stok_obat";
			$data = mysqli_query($koneksi, $query) or die ("gagal query".$query);
			$count = mysqli_fetch_array($data);
		?>
		<div class="column">
			<div class="ui link cards column">
				<div class="card">
					<div class="content">
						<div class="header">STOK OBAT</div>
						<div class="Desciption">jumlah <?= $count[0]; ?></div>
					</div>
					<a href="viewDataStokObat.php" class="ui bottom button">
						<i class="eye icon"></i> Open
					</a>
				</div>
			</div>
		</div>
	</div>

	<?php
			$query = "select count(kode_periksa) from periksa";
			$data = mysqli_query($koneksi, $query) or die ("gagal query".$query);
			$count = mysqli_fetch_array($data);
		?>
	<div class="ui two column centered grid basic segment">
	<div class="four column centered row">
		<div class="column">
			<div class="ui link cards column">
				<div class="card">
					<div class="content">
						<div class="header">Periksa</div>
						<div class="Desciption">jumlah <?= $count[0] ?></div>
					</div>
					<a href="viewDataPeriksa.php" class="ui bottom button">
						<i class="eye icon"></i> Open
					</a>
				</div>
			</div>
		</div>

		<?php
			$query = "select count(kode_periksa) from periksa_obat";
			$data = mysqli_query($koneksi, $query) or die ("gagal query".$query);
			$count = mysqli_fetch_array($data);
		?>
		<div class="column">
			<div class="ui link cards column">
				<div class="card">
					<div class="content">
						<div class="header">Periksa Obat</div>
						<div class="Desciption">jumlah <?= $count[0]; ?></div>
					</div>
					<a href="viewDataPeriksaObat.php" class="ui bottom button">
						<i class="eye icon"></i>Open
					</a>
				</div>
			</div>
	</div>

		</div>
	<!-- end-contents -->
</div>
<!-- end content -->
	

<!-- footer -->
<?php include("layout/footer.php"); ?>
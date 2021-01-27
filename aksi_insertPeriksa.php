<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die ("Gagal Koneksi Database");
	$kode_periksa=$_POST['kode_periksa'];
	$tanggal_periksa=$_POST['tanggal_periksa'];
	$kode_pasien=$_POST['kode_pasien'];
	$kode_dokter=$_POST['kode_dokter'];
	$keluhan_pasien=$_POST['keluhan_pasien'];
	$diagnosa_dokter=$_POST['diagnosa_dokter'];
	$tekanan_darah=$_POST['tekanan_darah'];
	$query="insert into periksa values('$kode_periksa','$tanggal_periksa','$kode_pasien','$kode_dokter','$keluhan_pasien','$diagnosa_dokter','$tekanan_darah')";
	$sql=mysqli_query($koneksi, $query) or die ("gagal input".$query);
	header("location:viewDataPeriksa.php");
?>

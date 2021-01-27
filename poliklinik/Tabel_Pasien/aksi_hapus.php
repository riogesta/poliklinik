<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die("Gagal Koneksi Database");
	$kode_pasien=$_GET['kode_pasien'];
	$query="delete from pasien where kode_pasien='$kode_pasien'";
	$sql=mysqli_query($koneksi,$query) or die("gagal input".$query);
	header("location:Form_Pasien.php");
?>
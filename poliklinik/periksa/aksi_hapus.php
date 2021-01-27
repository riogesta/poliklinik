<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die("Gagal koneksi Database");
	$kode_periksa=$_GET['kode_periksa'];
	$query="delete from periksa where kode_periksa='$kode_periksa'";
	$sql=mysqli_query($koneksi,$query)or die("gagal input".$query);
	header("location:index.php");
?>

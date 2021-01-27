<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die("Gagal koneksi Database");
	$kode_obat=$_GET['kode_obat'];
	$query="delete from stok_obat where kode_obat='$kode_obat'";
	$sql=mysqli_query($koneksi,$query)or die("gagal input".$query);
	header("location:viewDataStokObat.php");
?>

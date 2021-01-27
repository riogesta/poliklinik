<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die ("Gagal Koneksi Database");
	
	$kode=$_POST['kode'];
	$thn=$_POST['thn'];
	$aw=$_POST['awal'];
	$ak=$_POST['akhir'];

	$query="insert into stok_obat values('$kode','$thn','$aw','$ak')";
	$sql=mysqli_query($koneksi, $query) or die ("gagal input".$query);
	header("location:viewDataStokObat.php");
?>

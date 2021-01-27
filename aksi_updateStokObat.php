<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die ("Gagal Koneksi Database");
	
	$kode=$_POST['kode'];
	$thn=$_POST['thn'];
	$aw=$_POST['awal'];
	$ak=$_POST['akhir'];

	$query="update stok_obat set tahun='$thn', jumlah_awal='$aw', jumlah_akhir='$ak' WHERE kode_obat='$kode' ";
	$sql=mysqli_query($koneksi, $query) or die ("gagal input".$query);
	header("location:viewDataStokObat.php");
?>

<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die("Gagal koneksi Database");
	$id=$_GET['id_transaksi'];
	$query="delete from kartu_stok_obat where id_transaksi='$id'";
	$sql=mysqli_query($koneksi,$query)or die("gagal input".$query);
	header("location:viewDataKartuStokObat.php");
?>

<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die ("Gagal Koneksi Database");
	
	$kode_obat=$_POST['kode_obat'];
	$tgl=$_POST['tgl'];
	$ket=$_POST['keterangan'];
	$masuk=$_POST['masuk'];
	$keluar=$_POST['keluar'];
	$saldo=$_POST['saldo'];
	$query="insert into kartu_stok_obat values('0','$kode_obat','$tgl','$ket','$masuk','$keluar','$saldo')";
	$sql=mysqli_query($koneksi, $query) or die ("gagal input".$query);
	header("location:viewDataKartuStokObat.php");
?>

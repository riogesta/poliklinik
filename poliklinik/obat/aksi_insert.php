<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die ("Gagal Koneksi Database");
	$kode_obat=$_POST['kode_obat'];
	$nama_obat=$_POST['nama_obat'];
	$khasiat_obat=$_POST['khasiat_obat'];
	$kategori_obat=$_POST['kategori_obat'];
	$dosis_obat=$_POST['dosis_obat'];
	$satuan_obat=$_POST['satuan_obat'];
	$query="insert into obat values('$kode_obat','$nama_obat','$khasiat_obat','$kategori_obat','$dosis_obat','$satuan_obat')";
	$sql=mysqli_query($koneksi, $query) or die ("gagal input".$query);
	header("location:index.php");
?>

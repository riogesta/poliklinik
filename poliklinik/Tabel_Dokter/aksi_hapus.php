<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die("Gagal Koneksi Database");
	$kode_dokter=$_GET['kode_dokter'];
	$query="delete from dokter where Kode_dokter='$kode_dokter'";
	$sql=mysqli_query($koneksi,$query) or die("gagal input".$query);
	header("location:form_dokter.php");
?>
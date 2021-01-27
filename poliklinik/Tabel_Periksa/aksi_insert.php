<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die("Gagal Koneksi Database");
	$kode_periksa=$_POST['kode_periksa'];
	$kode_obat=$_POST['kode_obat'];
	$jumlah_obat=$_POST['jumlah_obat'];
	$cara_pemakaian=$_POST['cara_pemakaian'];

	$query="insert into periksa_obat values('$kode_periksa','$kode_obat','$jumlah_obat','$cara_pemakaian')";
	$sql=mysqli_query($koneksi,$query) or die("gagal input".$query);
	header("location:form_periksa.php");
?>
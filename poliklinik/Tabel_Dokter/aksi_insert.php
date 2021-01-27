<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die("Gagal Koneksi Database");
	$kode_dokter=$_POST['kode_dokter'];
	$nama_dokter=$_POST['nama_dokter'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$alamat=$_POST['alamat'];
	$no_tlp=$_POST['no_tlp'];
	$spesialis=$_POST['spesialis'];
	$query="insert into dokter values('$kode_dokter','$nama_dokter','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$no_tlp','$spesialis')";
	$sql=mysqli_query($koneksi,$query) or die("gagal input".$query);
	header("location:form_dokter.php");
?>
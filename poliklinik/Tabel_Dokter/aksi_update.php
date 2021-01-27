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
	$query="update dokter set nama_dokter='$nama_dokter',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_tlp='$no_tlp',spesialis='$spesialis' where kode_dokter='$kode_dokter'";
	$sql=mysqli_query($koneksi,$query) or die("gagal ubah".$query);
	header("location:form_dokter.php");
?>
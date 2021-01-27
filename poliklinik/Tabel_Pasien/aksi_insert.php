<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die("Gagal Koneksi Database");
	$kode_pasien=$_POST['kode_pasien'];
	$nama_pasien=$_POST['nama_pasien'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$alamat=$_POST['alamat'];
	$no_tlp=$_POST['no_tlp'];
	$query="insert into pasien values ('$kode_pasien','$nama_pasien','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$no_tlp')";
	$sql=mysqli_query($koneksi,$query) or die("gagal input".$query);
	header("location:Form_Pasien.php");
?>
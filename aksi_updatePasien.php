<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die("Gagal Koneksi Database");
	$kode_pasien=$_POST['kode_pasien'];
	$nama_pasien=$_POST['nama_pasien'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$alamat=$_POST['alamat'];
	$no_tlp=$_POST['tlp'];
	$query="update pasien set nama_pasien='$nama_pasien',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_tlp='$no_tlp' where kode_pasien='$kode_pasien'";
	$sql=mysqli_query($koneksi,$query) or die("gagal ubah".$query);
	header("location:viewDataPasien.php");
?>
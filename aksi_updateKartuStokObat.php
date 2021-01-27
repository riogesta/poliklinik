<?php
	$koneksi=mysqli_connect("localhost","root","","poliklinik") or die ("Gagal Koneksi Database");
	
	$id=$_POST['id_transaksi'];
	$kode_obat=$_POST['kode_obat'];
	$tgl=$_POST['tgl'];
	$ket=$_POST['keterangan'];
	$masuk=$_POST['masuk'];
	$keluar=$_POST['keluar'];
	$saldo=$_POST['saldo'];
	$query="update kartu_stok_obat set kode_obat='$kode_obat', tanggal_transaksi='$tgl', keterangan='$ket', jumlah_masuk='$masuk', jumlah_keluar='$keluar', jumlah_saldo='$saldo' WHERE id_transaksi='$id' ";
	$sql=mysqli_query($koneksi, $query) or die ("gagal input".$query);
	header("location:viewDataKartuStokObat.php");
?>

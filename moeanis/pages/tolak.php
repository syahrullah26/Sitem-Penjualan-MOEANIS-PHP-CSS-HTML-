<?php
include_once 'koneksi.php';

	$id_sewa =  $_GET['delid_pemesanan'];
	$sql = mysqli_query ($konek," DELETE FROM pemesanan where id_pemesanan=' $id_sewa'");
	header('Location:index.php?page=beranda')
	
?>
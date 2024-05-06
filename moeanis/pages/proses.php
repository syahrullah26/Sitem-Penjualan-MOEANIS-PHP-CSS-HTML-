 <?php include_once '../koneksi.php'; 
 if(isset($_POST['submit']))
{
	$nama_pemesan=$_POST['nama_pemesan'];
	$nama_produk=$_POST['nama_produk'];
	$tgl_pesanan=$_POST['tgl_pesanan'];
	$jumlah=$_POST['jumlah'];
	$nproduk=mysqli_query($konek,"SELECT nama_produk FROM produk WHERE id_produk='$nama_produk'");
	while($d= mysqli_fetch_array($nproduk)){
		$namaprod=$d['nama_produk'];
	}
	$hargaproduk=mysqli_query($konek,"SELECT harga_produk FROM produk WHERE id_produk='$nama_produk'");
	while($d= mysqli_fetch_array($hargaproduk)){
		$hproduk=$d['harga_produk'];
	}
	$totalharga=$hproduk*$jumlah;
	$databarang= mysqli_query($konek,"INSERT INTO `pemesanan` (`id_pemesanan`, `id_produk` ,`nama_pemesan`,`nama_produk`, `jumlah`, `harga`, `total_harga`,`tanggal`,`status`) VALUES (NULL, '$nama_produk', '$nama_pemesan','$namaprod', '$jumlah', '$hproduk','$totalharga','$tgl_pesanan', 'belum')");
	if($databarang){
        echo "<script>alert('Berhasil Input Data'); 
        document.location='../index.php?page=input';
            </script>";
		
	}else{
		echo "<script> alert ('Input Data Gagal'); 
		document.location='../index.php?page=input';
		</script>";
	}
}
?>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    


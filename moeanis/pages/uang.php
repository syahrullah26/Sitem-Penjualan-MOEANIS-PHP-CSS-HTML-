<?php include_once '../koneksi.php'; 
 if(isset($_POST['submit']))
{
	$nama_barang=$_POST['nama_barang'];
	$jumlah=$_POST['jumlah'];
	$harga=$_POST['harga'];
	$tanggal=$_POST['tgl'];

	$uangkeluar=mysqli_query($konek,"SELECT * FROM keuangan WHERE status='keluar'");
	while($d= mysqli_fetch_array($uangkeluar)){
		$uang=$d['uang'];
	}
	$sisauang=$uang-$harga;

	$pengeluaran=mysqli_query($konek,"UPDATE keuangan SET uang='$sisauang' WHERE status='keluar'");
	$datauang= mysqli_query($konek,"INSERT INTO `catatan` (`id_catatan`, `nama_barang`, `jumlah`, `harga`, `tanggal`) VALUES (NULL, '$nama_barang $jumlah $harga $tanggal')");
	if($datauang){
        echo "<script>alert('Berhasil Input Data'); 
        document.location='../index.php?page=keuangan';
            </script>";
		
	}else{
		echo "<script> alert ('Input Data Gagal'); 
		document.location='../index.php?page=keugangan';
		</script>";
	}
}
?>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    


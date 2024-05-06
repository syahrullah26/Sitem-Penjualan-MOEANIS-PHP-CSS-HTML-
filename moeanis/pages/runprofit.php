<?php

include_once  '../koneksi.php';
if (isset($_POST['submit'])){
 $jumlah_transfer=$_POST['jumlah'];
 $tanggal=$_POST['tgl_transfer'];
 $keterangan=$_POST['keterangan'];
 $untung=mysqli_query($konek,"SELECT * FROM keuangan WHERE status='profit'");
    while($d= mysqli_fetch_array($untung)){
        $profit=$d['uang'];
    }
$sisa=mysqli_query($konek,"SELECT * FROM keuangan WHERE status='keluar'");
    while($data=mysqli_fetch_array($sisa)){
        $rugi=$data['uang'];
    }
$transfer=$rugi+$profit;
$transfer_out=$profit-$jumlah_transfer;
$query= mysqli_query($konek,"UPDATE keuangan set uang='$transfer' where status='keluar'");
$out= mysqli_query($konek,"UPDATE keuangan set uang='$transfer_out' where status='profit'");
$perintah=mysqli_query($konek,"INSERT INTO `transfer` (`id_transfer`, `jumlah`, `tanggal`, `keterangan`) VALUES (NULL, '$jumlah_transfer', '$tanggal', '$keterangan');");
if($perintah){
    echo "<script>alert('$transfer_out'); 
    document.location='../index.php?page=beranda';
        </script>";
    
}else{
    echo "<script> alert ('Transfer Gagal'); 
    document.location='../index.php?page=profit';
    </script>";
}




} 
?>
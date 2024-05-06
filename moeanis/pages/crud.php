<?php
//error_reporting(0);
include "koneksi.php";
//tambah data
if(isset($_POST['add']))
{
		$nama_produk = $_POST['nama_produk'];
		$harga = $_POST['harga'];
		$stock = $_POST['stock'];

					$sql = mysqli_query ($konek," INSERT INTO produk VALUES (NULL, '$nama_produk','$stock','$harga')");
					if($sql){
						echo "<div class='alert alert-success alert-dismissable'>
						<a href='index.php?page=informasi' class='close' data-dismiss='alert'aria-label='close'>&times;</a>
						<strong>Proses tambah Success!</strong>
						</div>";
					}else{
						echo "<div class='alert alert-danger alert-dismissable'>
						<a href='index.php?page=add' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<strong>Proses tambah Gagal! ulangi lagi</strong>
						</div>";
					}
		}
					

//edit
if(isset($_POST['edit']))
{
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
	$stock = $_POST['stock'];
				    $sql = mysqli_query ( $konek," UPDATE produk set nama_produk='$nama_produk',stock='$stock', harga='$harga' where id_produk ='$id_produk ' ");

				    if($sql)
				    {
				    echo"<div class='alert alert-success alert-dismissable'>
						<a href='index.php?page=informasi' class='close' data-dismiss='alert'aria-label='close'>&times;</a>
						<strong>Proses Edit Success!</strong>
						</div> ";

				    }else
				    {
				    echo" <strong style='color:red;'>Proses edit Gagal!</strong>";
					}
		}
		

if(isset($_GET['delid_produk']))
{
	$id_produk   =  $_GET['delid_produk'];
		$del=mysqli_query($konek,"SELECT * from produk where id_produk='$id_produk'");
		$u =mysqli_fetch_array($del);
		mysqli_query($konek, "DELETE FROM produk WHERE id_produk='$id_produk'");
		echo" <div class='alert alert-success alert-dismissable'>
		<a href='index.php?page=informasi' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		<strong>Proses Hapus Success!</strong>
		</div>";

		
		}

				
		
?>
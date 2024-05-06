<?php
$id_produk = $_GET['id_produk'];
//error_reporting(0);
include "koneksi.php";

		$query = mysqli_query ($konek,"select * from produk where id_produk='$id_produk' ");
		while ($row = mysqli_fetch_assoc($query))
		{
?>
<html>
<body style="background-color: #44749d; color: black;">
<div class="row">
 <div class="col-md-4">  
  
 </div>
 <div class="col-md-4">  
  <div class="page-header">
    <br>
   <h3 align="center">Edit Menu</h3>
   <hr color="white"/>
   <a href="index.php?page=informasi" class="btn btn-info">Kembali</a>
   <br>
   <br>
  </div>
	<?php include_once "crud.php"; ?>
  <form role="form" action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <input type="hidden" name="id_produk" class="form-control" value="<?php echo $row['id_produk']; ?>" >
    
   <div class="form-group">
    <label>Nama Produk</label>
    <input type="text" name="nama_produk" class="form-control" value="<?php echo $row['nama_produk']; ?>">
   </div>

   <div class="form-group">
    <label>Stock</label>
    <input type="text" name="stock" class="form-control" value="<?php echo $row['stock']; ?>">
   </div>

   <div class="form-group">
    <label>Harga</label>
    <input type="text" name="harga" class="form-control" value="<?php echo $row['harga']; ?>">
   </div>
   <div class="form-group">
    <button type="submit" class="btn btn-primary" name="edit"> <span class="glyphicon glyphicon-floppy-disk"> Save</span></button>
  <button type="reset" class="btn btn-danger"> <span class="glyphicon glyphicon-ban-circle"> Reset</span></button>
   </div>
  </form>
 </div>
 <div class="col-md-4">  
  
 </div>
</div>

<?php }?>
</body>
</html>


<html>
<body style="background-color: #44749d; color: black;">
<div class="row">
 <div class="col-md-4">  
  
 </div>
 <div class="col-md-4">  
  <div class="page-header">
    <br>
   <h3 align="center">Tambah Data</h3>
   <hr color="white"/>
   <a href="index.php?page=informasi" class="btn btn-info">Kembali</a>
   <br>
   <br>
  </div>
	<?php include_once "crud.php"; ?>
<form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
   <div class="form-group">
    <label>Nama Menu</label>
    <input type="text" name="nama_produk" class="form-control" placeholder="Masukan Nama Produk" required>
   </div>
   <div class="form-group">
    <label>Stock</label>
    <input type="text" name="stock" class="form-control" placeholder="Masukan Jumlah Stock" required>
   </div>
   <div class="form-group">
    <label>Harga</label>
    <input type="text" name="harga" class="form-control" placeholder="Masukan Harga Produk" required>
   </div>
   <div class="form-group centered">
    <button type="submit" class="btn btn-primary" name="add"> <span class="glyphicon glyphicon-floppy-disk"> Save</span></button>
  <button type="reset" class="btn btn-danger"> <span class="glyphicon glyphicon-ban-circle"> Reset</span></button>
   </div>
  </form>
 </div>
 <div class="col-md-4">  
  
 </div>
</div>
</body>
</html>

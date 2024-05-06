<script>
    $(document).ready(function() {
    $('#data').DataTable();
    } );
  </script>
  <div class="container">
    <br>
    <h2 style="text-align: center; ">Data Produk Moeanis</h2>   
    <br>
    <br>
    <table class="table table-bordered" width="100%" id="data">
    <thead>
    <tr>
    	<td align="center">Kode</td>
    	<td align="center">Rasa</td>
    	<td align="center">Harga </td>


    </tr>
    </thead>
     <tbody>
<?php
include_once 'koneksi.php';

$sql = mysqli_query($konek ," SELECT * FROM produk ");
while($data = mysqli_fetch_assoc($sql)){
      ?>
      <tr>
      	<td align="justify"><?php echo $data['id_produk']; ?></td>
      	<td align="justify"><?php echo'Moeanis ', $data['nama_produk']; ?></td>
      	<td align="center"><?php echo 'Rp. ', number_format( $data['harga_produk']); ?></td>
</tr>
<?php                     
}
?>
</tbody>
</table>

</div>

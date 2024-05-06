<!DOCTYPE HTML>
<html>
<head>
    <title>Desa Telang Kecamatan Kamal</title>
    <link rel="icon" type="image/x-icon" href="assets/bumdes.png">
    <!---Bootstrap Link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"></link>
    <!---Icofont Link-->
    <link href="assets/icofont/icofont.min.css" rel="stylesheet">
    <!---Font Google Link-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/jquery.table2excel.js"></script>
  <style>
    body{
      background-color: #EAE5C9;
    }
    .carousel-inner img {
          width: 100%;
          height: 100%;
      }
      .navbar{
      position: sticky;
        top: 0;
        left: 0;
        width: 100%;
        padding: 10px 100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 99;
    } 

  </style>
</head>
<body>
<script>
    $(document).ready(function() {
    $('#data').DataTable();
    } );
  </script>
  <div class="container">
    <br>
    <br>
    <br>
    <hr>
    <h2 style="text-align: center; ">Riwayat Transaksi</h2>   
    <hr>
    <br>
    <br>
    <table id="myTable" class="table table-bordered table2excel" width="100%" id="data">
    <thead>
    <tr>
      <td align="center">ID </td>
      <td align="center">Nama Menu</td>
      <td align="center">Jumlah</td>
      <td align="center">Harga</td>
      <td align="center">Total</td>
      
    </tr>
    </thead>
     <tbody>
<?php
include_once '../koneksi.php';
$sql = mysqli_query($konek ," SELECT * FROM transaksi WHERE status='selesai' ");
while($data = mysqli_fetch_assoc($sql)){
      ?>
      <tr>
        <td><?php echo $data['id_transaksi']; ?></td>
        <td><?php echo $data['nama_menu']; ?></td>
        <td><?php echo $data['jumlah']; ?></td>
        <td><?php echo $data['harga_menu']; ?></td>
        <td><?php echo $data['total']; ?></td>

</tr>
<?php                     
}
?>


</tbody>  
</table>
<script>
      window.print()
</script>
</div>
</body>
</html>   
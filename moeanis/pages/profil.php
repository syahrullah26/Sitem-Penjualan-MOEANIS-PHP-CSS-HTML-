<script>
    $(document).ready(function() {
    $('#data').DataTable();
    } );
  </script>

<div class="card-body">
	<div class="card" style="width: 100%;">
	<div class="bulat1"></div>
	  	<div class="card-body">
	    	<h5 class="card-title" style="text-align: center; font-family: 'Permanent Marker', cursive;"><b>MOEANIS</b></h5>
	    	<p class="card-text">
	    		<div class="row">
					<div class="col-md-2">
						<div class="naik"></div>
					</div>
					<div class="col-md-2">
					<?php
					include_once 'koneksi.php';
					$sql = mysqli_query($konek," SELECT * FROM keuangan where status='masuk' ");
						while($data = mysqli_fetch_assoc($sql)){?>
						<h6 style="margin:0 auto;" align="justify">Pemasukan :<?php echo'Rp.',number_format($data['uang']) ; ?></h6>
						<?php 
						$in=$data['uang'];
						}
 
 ?>
					</div>
					<div class="col-md-2">
						<div class="turun"></div>
		    		</div>
					<?php
					include_once 'koneksi.php';
					$sql = mysqli_query($konek," SELECT * FROM keuangan where status='keluar'");
						while($d = mysqli_fetch_assoc($sql)){?>

					<div class="col-md-2">
						<h6 style="margin:0 auto;" align="justify">Pengeluaran :<?php echo'Rp.',number_format($d['uang']) ; ?></h6>
						<?php
						$profit=0;
						$out=$d['uang'];
						}
 ?>
		    		</div>
					<div class="col-md-2">
						<div class="profit"></div>
		    		</div>
					<div class="col-md-2">
					<h6 style="margin:0 auto;" align="justify">Profit :<?php $profit=$in-$out; echo'Rp.',number_format($profit) ; ?></h6>
		    		</div>
	    		</div>

	    	</p>
	  

	
	<div class="card text-center">
		<div class="card-header">
	    	<h5 class="card-title" style="font-family: 'Permanent Marker', cursive;"><b>Data Pesanan Moeanis Terbaru</b></h5>
	  	</div>
	  	<div class="table-container">
<table class="table table-bordered" width="100%" id="data">
	<thead>
    <tr>
		<th scope="col" class="column-primary" data-header="Pelanggan" align="center">No</th>
		<th scope="col" align="center">Tanggal</th>
		<th scope="col" align="center">Nama Pemesan</th>
		<th scope="col" align="center">Nama Produk</th>
		<th scope="col" align="center">Jumlah Pesanan</th >
		<th scope="col" align="center">Harga Satuan</th>
		<th scope="col" align="center">Total Harga </th>
		<th scope="col" align="center">Status</th>
		<th scope="col" class="column-primary"align="center" colspan="2">Option</th>
    </tr>
    </thead>
     <tbody>
	 <?php
include_once 'koneksi.php';
$nomor=0;
$sql = mysqli_query($konek ," SELECT * FROM pemesanan WHERE status='belum'");
while($data = mysqli_fetch_assoc($sql)){
	$nomor++;
      ?>
	  <tr>
      	<td><?php echo $nomor; ?></td>
        <td><?php echo $data['tanggal']; ?></td>
        <td><?php echo $data['nama_pemesan']; ?></td>
        <td><?php echo 'Moeanis ',$data['nama_produk']; ?></td>
        <td><?php echo $data['jumlah']; ?> pcs</td>
      	<td><?php echo 'Rp.',number_format($data['harga']); ?></td>
        <td><?php echo 'Rp.',number_format($data['total_harga']); ?></td>
        <td><?php echo $data['status']; ?></td>
      	<td><a href="index.php?page=acc&id_pemesanan=<?php echo $data['id_pemesanan']; ?>" 
    onClick = "return confirm('Apakah Anda ingin Menyelesaikan Pesanan atas nama <?php echo $data['nama_pemesan']; ?>?')" 
    button class="btn btn-primary btn-md">&#10003;</a><p></p>
	
  </td>
  <td>
  <a href="index.php?page=acc&delid_pemesanan=<?php echo $data['id_pemesanan']; ?>" 
    onClick = "return confirm('Apakah Anda ingin Menghapus Pesanan atas nama <?php echo $data['nama_pemesan']; ?>?')" 
    button class="btn btn-danger 	btn-md">&#9747;</a><p></p>	
</td>
</tr>
</tbody>
</table>
			

<?php
}?>
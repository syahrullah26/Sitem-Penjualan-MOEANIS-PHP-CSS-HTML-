<script>
    $(document).ready(function() {
    $('#data').DataTable();
    } );
  </script>

<div class="card-body" style=" background-color:#FDEDFF;">
	<div class="card" style="width: 100%; background-color:#FDEDFF;">
	<div class="bulat1"></div>
	  	<div class="card-body">
	    	<h5 class="card-title" style="text-align: center; font-family: 'Permanent Marker', cursive;"><b>MOEANIS</b></h5><hr class='bg-secondary'>
	    	<p class="card-text">
	    		<div class="row text-white mt-3">
            <div class="card bg-success col-md-5 ml-5 mb-3 col-5" style="width: 18rem;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="icofont-chart-growth mr-2"></i>
                </div>
                <?php
                  include_once 'koneksi.php';
                  $sql = mysqli_query($konek," SELECT * FROM keuangan where status='masuk' ");
                    while($data = mysqli_fetch_assoc($sql)){?>
                <h5 class="card-title">PEMASUKAN</h5>
                <div class="display-5"><?php echo'Rp.',number_format($data['uang']) ; ?></div>
                <?php $in=$data['uang'];}?>
                <a href="index.php?page=profil"><p class="card-text text-white mb-2">Lihat Detail <i class="icofont-sign-in ml-3"></i></p></a>
              </div>
            </div>

            <div class="card bg-danger col-md-5 ml-5  mb-3 col-5" style="width: 18rem;">
              <div class="card-body">
                <div class="card-body-icon">
                <i class="icofont-money"></i>
                </div>
                <?php
                  include_once 'koneksi.php';
                  $pengeluaran=0;
                  $out=0;
                  $sql = mysqli_query($konek," SELECT * FROM catatan");
                    while($data = mysqli_fetch_assoc($sql)){
                      $keluar=$data['harga'];
                      $out=$keluar;
                      $pengeluaran+=$out;?>
                      <?php ;
                            $profit=0;                          
                      }?>
                      
                <h5 class="card-title">PENGELUARAN</h5>
                <div class="display-5"><?php echo'Rp.',number_format($pengeluaran) ; ?></div>
              
                <a href="index.php?page=rkeuangan"><p class="card-text text-white mb-2">Lihat Detail <i class="icofont-sign-in ml-3"></i></p></a>
              </div>
            </div>

            <div class="card bg-primary col-md-5 ml-5 mb-3 col-5" style="width: 18rem;">
              <div class="card-body">
                <div class="card-body-icon">
                <i class="icofont-handshake-deal"></i>
                </div>
                <h5 class="card-title">KEUNTUNGAN</h5>
                <?php
                  include_once 'koneksi.php';
                  $sql = mysqli_query($konek," SELECT * FROM keuangan where status='profit' ");
                    while($f = mysqli_fetch_assoc($sql)){
                      $keuntungan=$f['uang'];?>
                <div class="display-5"><?php $keuntungan=$in-$pengeluaran; echo'Rp.',number_format($keuntungan) ; }?></div>
                
                <?php 
                $query= mysqli_query($konek,"UPDATE keuangan set uang='$keuntungan' where status='profit'");
                  if ($keuntungan > 100000){
                    echo '<p class="card-text text-white mb-2">Moeanis Profit <i class="icofont-badge"></i></p>
                   '; 
                  }
                  elseif($keuntungan > 0 AND $keuntungan < 100000){
                    echo '<p class="card-text text-white mb-2">Semangat, demi liburan <i class="icofont-slightly-smile"></i></p>
                   ';
                     
                  }
                  elseif($keuntungan < 0){
                    echo '<p class="card-text text-white mb-2">Kurang, ayo semangat <i class="icofont-worried"></i></p>';
                  }
                ?>
                
              </div>
            </div>
            
            <div class="card col-md-5 ml-5 mb-3 col-5" style="width: 18rem; background-image: linear-gradient(to bottom right,  #ED98FA, #EEC8F1);">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="icofont-bank"></i>
                </div>
                <?php
                  include_once 'koneksi.php';
                  $sql = mysqli_query($konek," SELECT * FROM keuangan where status='keluar' ");
                    while($data = mysqli_fetch_assoc($sql)){
                      $sisa=$data['uang'];?>
                <h5 class="card-title">Sisa Uang</h5>
                <div class="display-5"><?php echo'Rp.',number_format($sisa) ; ?></div>
                <?php }?>
                <a href=""><p class="card-text text-white mb-2">Sisa Uang Moeanis</p></a>
              </div>
            </div>

            <div class="card col-md-11 ml-4  mb-3 col-5" style="width: 18rem; background-image: linear-gradient(to bottom right,  #B6ECFF, #0049C8);">
              <div class="card-body">
                <div class="card-body-icon">
                <i class="icofont-coins"></i>
                </div>
                <?php
                  include_once 'koneksi.php';
                  $sql = mysqli_query($konek," SELECT * FROM keuangan where status='bersih' ");
                    while($q = mysqli_fetch_assoc($sql)){
                      $bersih=$q['uang'];?>
                <h5 class="card-title">Keuntungan Bersih</h5>
                <div class="display-5"><?php echo'Rp.',number_format($bersih) ; ?></div>
                <?php }?>
                <a href=""><p class="card-text text-white mb-2">Keuntungan Bersih</p></a>
              </div>
            </div>
	    	</p>
    <div class="card text-center text-dark ml-3">
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
                    <th scope="col" class="column-primary" align="center" colspan="2">Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once 'koneksi.php';
                    $nomor=0;
                    $pcs=0;
                    $sql = mysqli_query($konek ," SELECT * FROM pemesanan WHERE status='belum'");
                    while($data = mysqli_fetch_assoc($sql)){
                        $nomor++;
                        $jumlah=$data['jumlah'];
                        $pcs+=$jumlah;
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
                        <td><a href="index.php?page=acc&id_pemesanan=<?php echo $data['id_pemesanan']; ?>"onClick = "return confirm('Apakah Anda ingin Menyelesaikan Pesanan atas nama <?php echo $data['nama_pemesan']; ?>?')" button class="btn btn-primary btn-md">&#10003;</a><p></p></td>
                        <td><a href="index.php?page=acc&delid_pemesanan=<?php echo $data['id_pemesanan']; ?>" onClick = "return confirm('Apakah Anda ingin Menghapus Pesanan atas nama <?php echo $data['nama_pemesan']; ?>?')"button class="btn btn-danger 	btn-md">&#9747;</a><p></p></td>
                    </tr>
                    <tr>
                        <td colspan='9' align=right><b>Jumlah Pesanan</b></td>
                        <td><?php echo $pcs; ?> pcs</td>
                    </tr>
                    <?php }?>
            </tbody>   
          </table>
        </div>
    </div>

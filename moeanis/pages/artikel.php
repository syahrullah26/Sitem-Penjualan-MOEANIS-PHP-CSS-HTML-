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
    <h2 style="text-align: center; font-family: 'Dangrek', cursive;">Riwayat Pemesana MOEANIS</h2>  
    <hr>
    <br>
    <br>
    <form action="index.php?page=profil" method="post" name="postform">
            <p align="center" style="font-family: 'Dangrek', cursive;"><font color="black" size="3"><b>Pencarian Data Berdasarkan Periode Tanggal</b></font></p><br />
            <table border="0" width="100%">
                <tr>
                    <td width=""><b>Dari Tanggal</b></td>
                    <td colspan="2" width=""> <input   class="form-control" type="date" name="tanggal_awal" size="16" />
                    <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_awal);return false;" ></a>                
                    </td>
                    <td width=""><b>Sampai Tanggal</b></td>
                    <td colspan="2" width=""> <input  class="form-control" type="date" name="tanggal_akhir" size="16" />
                    <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_akhir);return false;" ></a>                
                    </td>
                </tr>
                <tr>
                <td colspan="2" width="" align="justify"><input class="btn-info" type="submit" value="Pencarian Data" name="pencarian"/></td>
                <td colspan="2" width="" align="center"><input class="btn-danger" type="reset" value="Reset" /></td>
                <td colspan="2" width="" align="center"><a href="pages/printin.php" class="btn btn-warning">print</a></td>
                </tr>
            </table>
        </form><br />

        <p>
        <?php
        include_once 'koneksi.php';
            //proses jika sudah klik tombol pencarian data
            if(isset($_POST['pencarian'])){
            //menangkap nilai form
            $tanggal_awal=$_POST['tanggal_awal'];
            $tanggal_akhir=$_POST['tanggal_akhir'];
            if(empty($tanggal_awal) || empty($tanggal_akhir)){
            //jika data tanggal kosong
            ?>
            <script language="JavaScript">
                alert('Tanggal Awal dan Tanggal Akhir Harap di Isi!');
                document.location='index.php?page=rkeuangan';
            </script>
            <?php
            }else{
            ?><i><b>Informasi : </b> Hasil pencarian data berdasarkan periode Tanggal <b><?php echo $_POST['tanggal_awal']?></b> s/d <b><?php echo $_POST['tanggal_akhir']?></b></i>
            <?php
            $query=mysqli_query($konek," SELECT * FROM pemesanan where tanggal BETWEEN '$tanggal_awal' and '$tanggal_akhir' AND status='selesai'");
            }
        ?>
        </p> 
<div class="table-container">
          <table id="myTable" class="table table-bordered table2excel" width="100%" id="data">
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
              </tr>
              </thead>
              <tbody>
          <?php
          include_once 'koneksi.php';
          $total=0;
          $totaluang=0;
          $no=0;
          $pcs=0;
          while($data = mysqli_fetch_assoc($query)){
              $uang=$data['total_harga'];
              $jumlah=$data['jumlah'];
              $total=$uang;
              $totaluang+=$total;
              $pcs+=$jumlah;
              $no++;
              
                ?>
                
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['tanggal']; ?></td>
                  <td><?php echo $data['nama_pemesan']; ?></td>
                  <td><?php echo $data['nama_produk']; ?></td>
                  <td><?php echo $data['jumlah']; ?></td>
                  <td><?php echo $data['harga']; ?></td>
                  <td><?php echo $data['total_harga']; ?></td>
                  <td><?php echo $data['status']; ?></td>
          <?php                     
          }
          ?>
          <tr>
    <td colspan="7" style="text-align: right;"><b>Total Pemasukan</b></td>

    <td colspan="1" style="text-align: justify;"><?php echo 'Rp. ', number_format($totaluang,2); ?></td>
</tr>
<tr>
    <td colspan="7" style="text-align: right;"><b>Total Uang</b></td>
    <?php
					include_once 'koneksi.php';
					$sql = mysqli_query($konek," SELECT * FROM keuangan where status='masuk' ");
						while($d = mysqli_fetch_assoc($sql)){?>
    <td colspan="1" style="text-align: justify;"><?php echo 'Rp. ', number_format($d['uang'],2); ?></td>
    <?php } ?>
</tr>
<tr>
    <td colspan="7" style="text-align: right;"><b>Pesanan Terjual</b></td>

    <td colspan="1" style="text-align: justify;"><?php echo $pcs; ?> pcs</td>
</tr>
          <tr>
                          <td colspan="4" align="center"> 
                          <?php
                          //jika pencarian data tidak ditemukan
                          if(mysqli_num_rows($query)==0){
                              echo "<font color=red><blink>Pencarian data tidak ditemukan!</blink></font>";
                          }
                          ?>
                          </td>
                      </tr> 
                  <?php
                  }
                  else{
                      unset($_POST['pencarian']);
                  }
                  ?>
          </tbody>  
          </table>
      </div>
      </div>
                </div>
</div>
    <script>
        $("button").click(function(){
          $("#myTable").table2excel();
        });
    </script>

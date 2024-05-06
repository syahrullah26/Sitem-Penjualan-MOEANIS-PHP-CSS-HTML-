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
    <h2 style="text-align: center; font-family: 'Dangrek', cursive;">Riwayat Pengeluaran Moeanis</h2>   
    <hr>
    <br>
    <br>
    
    <form action="index.php?page=rkeuangan" method="post" name="postform">
            <p align="center" style="font-family: 'Dangrek', cursive;"><font color="black" size="3"><b>Pencarian Data Berdasarkan Periode Tanggal</b></font></p><br />
            <table border="0" width="100%">
                <tr>
                    <td width=""><b>Dari Tanggal</b></td>
                    <td colspan="2" width=""> <input  class="form-control" type="date" name="tanggal_awal" size="16" />
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
                <td colspan="2" width="" align="center"><a href="pages/cetak.php" class="btn btn-warning">print</a></td>
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
            ?><i><b>Informasi : </b> Hasil Pencarian dan pengeluaran Moeanis berdasarkan Tanggal  <b><?php echo $_POST['tanggal_awal']?></b> s/d <b><?php echo $_POST['tanggal_akhir']?></b></i>
            <?php
            $query=mysqli_query($konek," SELECT * FROM catatan where tanggal BETWEEN '$tanggal_awal' and '$tanggal_akhir'");
            }
        ?>
        </p>





    <table id="myTable" class="table table-bordered table2excel" width="100%" id="data">
    <thead>
    <tr>
      <td align="center">No</td>
      <td align="center">Tanggal</td>
      <td align="center">Nama Barang</td>
      <td align="center">Jumlah</td>
      <td align="center">Harga</td>

      
    </tr>
    </thead>
     <tbody>
<?php
include_once 'koneksi.php';
//$sql = mysqli_query($konek ," SELECT * FROM keuangan ");
$total=0;
$totaluang=0;
$no=0;
while($data = mysqli_fetch_assoc($query)){
    $uang=$data['harga'];
    $total=$uang;
    $totaluang+=$total;
    $no++;
    
      ?>
      <tr>
        <td align="center"><?php echo $no; ?></td>
        <td align="center"><?php echo $data['tanggal']; ?></td>
        <td align="center"><?php echo $data['nama_barang']; ?></td>
        <td align="center"><?php echo $data['jumlah']; ?></td>
        <td class='number-format' align="justify"><?php echo 'Rp. ', number_format($uang);  ?></td>


</tr>
<?php                     
}
?>
<tr>
    <td colspan="4" style="text-align: right;"><b>Total Pengeluaran</b></td>

    <td colspan="1" style="text-align: justify;"><?php echo 'Rp. ', number_format($totaluang,2); ?></td>
</tr>
<tr>
    <td colspan="4" style="text-align: right;"><b>Sisa Uang</b></td>
    <?php
					include_once 'koneksi.php';
					$sql = mysqli_query($konek," SELECT * FROM keuangan where status='keluar' ");
						while($d = mysqli_fetch_assoc($sql)){?>
    <td colspan="1" style="text-align: justify;"><?php echo 'Rp. ', number_format($d['uang'],2); ?></td>
    <?php } ?>
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
<iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;"></iframe>

</div>
    <script>
        $("button").click(function(){
          $("#myTable").table2excel();
        });
    </script>
<?php  ?>
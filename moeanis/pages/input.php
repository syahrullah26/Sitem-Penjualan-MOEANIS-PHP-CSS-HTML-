
  </div>
    <section id="works"></section>
  <div class="container"  style="width: 100%; background-color:#FDEDFF;">
    <div class="row centered mt mb">


  </div>
  <div class="col-md-12   mb ">
  <div class="card " style="background-image: linear-gradient(to bottom right,  #800C92, #EEC8F1)">
      <div class="card-header centered ">
        <h1 class="text-mono text-center text-dark">Data Pemesanan</h1>
      </div>
    </div>
    </div>
      <br>
  <div class="col-sm-12">

    <form role="form" action="pages/proses.php" method="POST">
     <div class="form-group">
     <label class="centered">Nama Pemesan</label>
  <input name="nama_pemesan" type="text" class="form-control " placeholder="Masukan Nama Pemesan" value="" required/><br>
     <?php
     include_once 'koneksi.php';
     $sql = mysqli_query($konek," SELECT * FROM produk");
        while($data = mysqli_fetch_assoc($sql)){?>

      <label class="centered">Pilih Produk</label>
          <select class="selectpicker form-control " name="nama_produk" >
        <?php include_once 'koneksi.php'; 
        $sql = mysqli_query($konek," SELECT * FROM produk");
        while($data = mysqli_fetch_assoc($sql)){?>
        <option value="<?php echo $data['id_produk']; ?>">Moeanis <?php echo $data['nama_produk']; ?>  - Rp.<?php echo $data['harga_produk']; ?></option>

          <?php }
 
           ?>
          </select><br>
      <div class="centered"></div>
      <label class="centered">Tanggal</label>
      <input name="tgl_pesanan" type="date" class="form-control"  required /><br>
  <label class="centered">Jumlah Pesanan</label>
  <input name="jumlah" type="number" class="form-control " placeholder="Jumlah Pesanan/pcs" value="" required/><br>
      <div class="form-group centered mb">
                <button type="submit" class="btn btn-primary col-md-5 ml-5 mb-3" name="submit">Confirm</button>
                <button type="reset" class="btn btn-danger col-md-5 ml-5 mb-3" name="reset">Reset</button>
             </div>
         </div>
    </form>
    <?php }?>

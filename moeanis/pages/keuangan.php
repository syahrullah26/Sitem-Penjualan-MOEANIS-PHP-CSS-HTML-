
  </div>
    <section id="works"></section>
  <div class="container"  style="width: 100%; background-color:#FDEDFF;">
    <div class="row centered mt mb">


  </div>
  <div class="col-md-12 mb "  style="width: 100%; background-color:#FDEDFF;">
  <div class="card " style="background-image: linear-gradient(to bottom right,  #800C92, #EEC8F1)">
      <div class="card-header centered ">
        <h1 class="text-mono text-center text-dark">Data Pengeluaran Moeanis </h1>
      </div>
    </div>
    </div>
      <br>
  <div class="col-sm-12"  style="width: 100%; background-color:#FDEDFF;">

    <form role="form" action="pages/uang.php" method="POST">
     <div class="form-group">
    
  <label class="centered">Nama Barang</label>
  <input name="nama_barang" type="text" class="form-control number-format " placeholder="Nama Barang" value="" required /><br>
  <label class="centered">Jumlah Barang</label>
  <input name="jumlah" type="text" class="form-control " placeholder="Jumlah" value=""  required/><br>
  <label class="centered">Total Harga</label>
  <input name="harga" type="number" class="form-control " placeholder="Rp." value="" required/><br>
      <div class="centered"></div>
      <label class="centered">Tanggal</label>
      <input name="tgl" type="date" class="form-control"   /><br>
      <div class="form-group centered mb">
                <button  type="submit" class="btn btn-primary" name="submit">Confirm</button>
                <button type="reset" class="btn btn-danger" name="reset">Reset</button>
             </div>
         </div>
    </form>
    <?php ?>

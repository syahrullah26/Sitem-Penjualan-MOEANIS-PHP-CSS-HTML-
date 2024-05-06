
  </div>
    <section id="works"></section>
  <div class="container"  style="width: 100%; background-color:#FDEDFF;">
    <div class="row centered mt mb">


  </div>
  <div class="col-md-12   mb ">
  <div class="card " style="background-image: linear-gradient(to bottom right,  #800C92, #EEC8F1)">
      <div class="card-header centered ">
        <h1 class="text-mono text-center text-dark">Transfer Uang</h1>
      </div>
    </div>
    </div>
      <br>
  <div class="col-sm-12">

    <form role="form" action="pages/runprofit.php" method="POST">
     <div class="form-group">
     <label class="centered">Jumlah Uang</label>
  <input name="jumlah" type="number" class="form-control " placeholder="Rp." value="" required/><br>
     
      <div class="centered"></div>
      <label class="centered">Tanggal</label>
      <input name="tgl_transfer" type="date" class="form-control"  required /><br>
  <label class="centered">keterangan</label>
  <input name="keterangan" type="text" class="form-control " placeholder="Inputkan Keterangan" value="" required/><br>
      <div class="form-group centered mb">
                <button type="submit" class="btn btn-primary col-md-5 ml-5" name="submit">Confirm</button>
                <button type="reset" class="btn btn-danger col-md-5 ml-5" name="reset">Reset</button>
             </div>
         </div>
    </form>

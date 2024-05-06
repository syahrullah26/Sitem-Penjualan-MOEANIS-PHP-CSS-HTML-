<html lang="en"><head>
<title>Print</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/x-icon" href="assets/moeanis.png">

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

<link rel="stylesheet" type="text/css" href="../table/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="../table/style.css">
<style>
	body{
		background-color:white;
		}
</style>


<meta name="robots" content="noindex, follow">
</head>
<body>
<div class="limiter">
<div class="container-table100">
<div class="wrap-table100">
<div class="table100 ver2 m-b-250">
	<div class="card-header centered ">
		<h1 class="mb-5 text-mono" align="center">LAPORAN PENGELUARAN MOEANIS</h1>
    </div>

<table  data-vertable="ver2">
<thead>
<tr class="row100 head">
<th class="column100 column1" data-column="column1"><b>No</b></th>
<th class="column100 column3" data-column="column3"><b>Tanggal</b></th>
<th class="column100 column4" data-column="column4"><b>Nama Pemesan</b></th>
<th class="column100 column5" data-column="column5"><b>Nama Produk</b></th>
<th class="column100 column6" data-column="column6"><b>Jumlah Pesanan</b></th>
<th class="column100 column6" data-column="column6"><b>Harga Satuan</b></th>
<th class="column100 column6" data-column="column6"><b>Total Harga</b></th>
<th class="column100 column6" data-column="column6"><b>Status</b></th>
</tr>
</thead>
<?php
include_once '../koneksi.php';
$query=mysqli_query($konek," SELECT * FROM Pemesanan where status='selesai'");
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
<tbody>
<tr class="row100">
<td class="column100 column1" data-column="column1"><?php echo $no; ?></td>
<td class="column100 column3" data-column="column3"><?php echo $data['tanggal']; ?></td> 
<td class="column100 column4" data-column="column4"><?php echo $data['nama_pemesan']; ?></td>
<td class="column100 column5" data-column="column5"><?php echo $data['nama_produk']; ?></td>
<td class="column100 column5" data-column="column5"><?php echo $data['jumlah']; ?></td>
<td class="column100 column5" data-column="column5"><?php echo 'Rp.', number_format($data['harga']); ?></td>
<td class="column100 column5" data-column="column5"><?php echo 'Rp.',number_format( $data['total_harga']); ?></td>
<td class="column100 column5" data-column="column5"><?php echo $data['status']; ?></td>

</tr>
<?php } ?>
<tr class="row100">
<td class="column100 column1" colspan="6" data-column="column1">Total Pemasukan</td>
<td class="column100 column3" align="center"colspan="2" data-column="column3"><?php echo 'Rp. ', number_format($totaluang,2); ?></td>
</tr>
<tr class="row100">
<td class="column100 column1" colspan="6" data-column="column1">Total Terjual</td>
<td class="column100 column3" align="center" colspan="2" data-column="column3"><?php echo $pcs; ?> pcs</td>
</tr>


</tbody>
</table>
</div>


</div>
</div>
</div>

<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>

<script src="js/main.js"></script>

<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
      window.print()
	</script>
<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon="{&quot;rayId&quot;:&quot;7812cd7bfd047ce0&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2022.11.3&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>


</body></html>
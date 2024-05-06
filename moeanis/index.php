<!DOCTYPE HTML>
<html>
<head>
    <title>Moeanis</title>
    <link rel="icon" type="image/x-icon" href="assets/moeanis.png">
    <!---Bootstrap Link-->
	<script src="https://kit.fontawesome.com/88d695dc22.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"></link>
	<link rel="stylesheet" type="text/css" href="bootstrap/fa/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/style.css">

    <!---Icofont Link-->
    <link href="assets/icofont/icofont.min.css" rel="stylesheet">
    <!---Font Google Link-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dangrek&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  	<script src="js/jquery.table2excel.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
	<style>
		
		body{
			background-image: linear-gradient(to bottom right,  #ED98FA, #EEC8F1);
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
		.naik {

background-image: url(assets/naik.png);

background-color: white;

background-size: cover;

border-radius: 5px;

width: 125px;

height: 100px;

margin: 0 auto;

border: 1px solid #eaeaea;

}
.profit {

background-image: url(assets/profit.png);

background-color: white;

background-size: cover;

border-radius: 5px;

width: 125px;

height: 100px;

margin: 0 auto;

border: 1px solid #eaeaea;

}
.turun {

background-image: url(assets/turun2.png);

background-color: white;

background-size: cover;

border-radius: 5px;

width: 125px;

height: 100px;

margin: 0 auto;

border: 1px solid #eaeaea;

}
		.bulat1 {

background-image: url(assets/moeanis.png);

background-color:white;

background-size: cover;

border-radius: 73px;

width: 173px;

height: 173px;

margin: 0 auto;

border: 1px solid #eaeaea;

}
		.bulat {

			background-image: url(assets/moeanis.png);

			background-color: white;

			background-size: cover;

			border-radius: 15px;

			width: 25px;

			height: 25px;

			margin: 0 auto;

			border: 1px solid #eaeaea;

		}
		.table-container {
	overflow: auto;
}

	</style>
</head>
<script>
    $(document).ready(function() {
    $('#data').DataTable();
    } );
  </script>
<body>
	<div class="header">
		<div id="gambar" class="carousel slide" data-ride="carousel">	        
	  		<!-- Indicators -->
		    <ul class="carousel-indicators">
			  	<li data-target="#gambar" data-slide-to="0" class="active"></li>
			    <li data-target="#gambar" data-slide-to="1"></li>
		    </ul>
			      
			<!-- The slideshow -->
			<!-- Left and right controls -->
		    <a class="carousel-control-prev" href="#gambar" data-slide="prev">
		        <span class="carousel-control-prev-icon"></span>
		    </a>
			<a class="carousel-control-next" href="#gambar" data-slide="next">
		        <span class="carousel-control-next-icon"></span>
	        </a>
		</div>	
	</div>
  	

	<div style="color: black">
		<marquee><i>Selamat datang di website Moeanis. Website ini dikelola oleh Kelompok POBA Moeanis STIKES Mitra Keluarga. more information : Anjani (+62 882-8994-8758)</i></marquee>
	</div>
	<?php
		include "header.inc";   
	?>
	
	<div class="container">
		<div class="card" style="border-color: white;">
	  		<div class="card-body"  style="width: 100%; background-color:#FDEDFF;">
	  			<?php
		  			if(isset($_GET['page'])){
			            $page = $_GET['page'];
			                switch ($page) {
			                    case 'beranda': include "pages/beranda.php";
			                    break;
			                    case 'profil': include "pages/artikel.php";
			                    break;
			                    case 'informasi': include "pages/usaha.php";
			                    break;
								case 'input': include "pages/input.php";
			                    break;
								case 'keuangan': include "pages/keuangan.php";
			                    break;
								case 'rkeuangan': include "pages/rkeuangan.php";
			                    break;
			                    case 'edit':
								include "pages/edit.php";
								break;

								case 'add':
								include "pages/add.php";
								break;

								case 'hapus':
								include "pages/crud.php";
								break;
								case 'acc':
								include "pages/acc.php";
								break;

								case 'tolak':
								include "pages/tolak.php";
								break;

								case 'profit':
								include "pages/profit.php";
								break;

							

			                }
			        }else{
			        	include "pages/beranda.php";
			        }
		        ?>
		           		
	  		</div>
		</div>
	</div>
	<?php
		include "footer.inc";
	?>
</body>
</html>
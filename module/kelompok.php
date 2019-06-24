<?php
include_once "../function/helper.php";
include_once "../function/koneksi.php";
?>
<head>
	<title>Katalog</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Bootstrap core CSS -->
	<link href="<?=BASE_URL.'vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<!-- Custom fonts for this template -->
	<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="<?=BASE_URL.'css/one-page-wonder.min.css'?>" rel="stylesheet">
	<link rel="stylesheet" href="<?=BASE_URL.'css/style.css'?>">
</head>
<body>
	<header class="masthead text-center text-white">
		<div class="masthead-content">
			<div class="container">
				<h1 class="masthead-heading mb-0">A Three Collection</h1>
				<h2 class="masthead-subheading mb-0">Jaket Terbaik Untuk Anda</h2>
				<a href="#" class="btn btn-primary btn-xl rounded-pill mt-5" style="opacity: 0">Learn More</a>
			</div>
		</div>
		
	</header>
	<?php include_once"nav.php" ?>
	<section class="kelompok bg-white">
		<div class="container mt-5">
			<div class="row align-items-center text-center">
				<div class="col-sm">
					<div class="p-1">
						<img class="img-fluid rounded-circle" src="<?=BASE_URL.'img/kelompok/dosen.jpg'?>" style="width: 25%">
						<h5 class="pt-1">Dr. Dini Destiani Sf, MT.</h5>
						<p>Mata Kuliah Proyek Informatika</p>
					</div>
				</div>
			</div>
			<div class="row align-items-center text-center mt-5">
				<div class="col-sm">
					<div class="p-1">
						<img class="img-fluid rounded-circle" src="<?=BASE_URL.'img/kelompok/1.jpg'?>" alt="">
						<h5 >Mochamad Syarif Hidayat</h5>
						<p>1606109</p>
					</div>
				</div>
				
				<div class="col-sm">
					<div class="p-1">
						<img class="img-fluid rounded-circle" src="<?=BASE_URL.'img/kelompok/2.jpg'?>" alt="">
						
						<h5>Yudistira Surya M </h5>
						<p>1606010</p>
					</div>
				</div>
				<div class="col-sm">
					<div class="p-1">
						<img class="img-fluid rounded-circle" src="<?=BASE_URL.'img/kelompok/3.jpg'?>" alt="">
						<h5>Faisal Difki Hermawan </h5>
						<p>1606092</p>
					</div>
				</div>
			</div>
			<div class="row align-items-center text-center  mt-5">
				<div class="col-sm">
					<div class="p-1 ">
						<img class="img-fluid rounded-circle" src="<?=BASE_URL.'img/kelompok/4.jpg'?>" alt="">
						<h5 >Rendi Algani</h5>
						<p>1606013</p>
					</div>
				</div>
				<div class="col-sm">
					<div class="p-1">
						<img class="img-fluid rounded-circle" src="<?=BASE_URL.'img/kelompok/5.jpg'?>" alt="">
						<h5>Erni Eka Sari</h5>
						<p>1606102</p>
					</div>
				</div>
				<div class="col-sm">
					<div class="p-1">
						<img class="img-fluid rounded-circle" src="<?=BASE_URL.'img/kelompok/6.jpg'?>" alt="">
						<h5>Dina Nurdinah</h5>
						<p>1606103</p>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<script src="<?=BASE_URL.'vendor/jquery/jquery.min.js'?>"></script>
	<script src="<?=BASE_URL.'vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
	<script src="<?=BASE_URL.'js/script.js'?>"></script>
</body>
<?php
	
	include_once "function/helper.php";
	include_once "function/koneksi.php";
<<<<<<< HEAD
	include_once "module/kategori.php";
	$id_kategori = isset($_GET["id_kategori"]) ? $_GET["id_kategori"] : false;
=======

	$id_kategori = isset($_GET["id_kategori"]) ? $_GET["id_kategori"] : false;
	$page = isset($_GET["page"]) ? $_GET["page"] : false;

	$file="$page.php";

>>>>>>> 55f028da0e64beba49f693747df316907b0c54bc
?>
<!DOCTYPE html>
<html>
<<<<<<< HEAD
	<head>
		<title>Katalog</title>
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="css/one-page-wonder.min.css" rel="stylesheet">
	</head>
	<body>
		<div>
			
		</div>
		<div>
			<?php include_once "depan.php"; ?>
		</div>
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#">Start Bootstrap</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					
					<?php
					foreach ($queryKategori as $rowKategori) : ?>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="<?php echo BASE_URL."index.php?id_kategori=$rowKategori[id_kategori]" ?>" class="nav-link"><?= $rowKategori["kategori"] ?>
								
							</a></li>
						</ul>
						<?php endforeach ?>
						
					</div>
				</div>
			</nav>
			<header class="masthead text-center text-white">
				<div class="masthead-content">
					<div class="container">
						<h1 class="masthead-heading mb-0">One Page Wonder</h1>
						<h2 class="masthead-subheading mb-0">Will Rock Your Socks Off</h2>
						<a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>
					</div>
				</div>
				<div class="bg-circle-1 bg-circle"></div>
				<div class="bg-circle-2 bg-circle"></div>
				<div class="bg-circle-3 bg-circle"></div>
				<div class="bg-circle-4 bg-circle"></div>
			</header>
			<section>
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 order-lg-2">
							<div class="p-5">
								<img class="img-fluid rounded-circle" src="img/01.jpg" alt="">
							</div>
						</div>
						<div class="col-lg-6 order-lg-1">
							<div class="p-5">
								<h2 class="display-4">For those about to rock...</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="p-5">
								<img class="img-fluid rounded-circle" src="img/02.jpg" alt="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="p-5">
								<h2 class="display-4">We salute you!</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 order-lg-2">
							<div class="p-5">
								<img class="img-fluid rounded-circle" src="img/03.jpg" alt="">
							</div>
						</div>
						<div class="col-lg-6 order-lg-1">
							<div class="p-5">
								<h2 class="display-4">Let there be rock!</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Footer -->
			<footer class="py-5 bg-black">
				<div class="container">
					<p class="m-0 text-center text-white small">Copyright &copy; Your Website 2019</p>
				</div>
				<!-- /.container -->
			</footer>
			<!-- Bootstrap core JavaScript -->
			<script src="vendor/jquery/jquery.min.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		</body>
	</html>
=======
<head>
	<title>Katalog</title>
</head>
<body>
	<div>
		gambar
	</div>
	<div>
		<?php include_once "module/bar.php"; ?>
	</div>
	<div>
		<?php 
			if(file_exists($file)){
				include_once "$file";
			}else{
				include_once "depan.php";
			}
		?>
	</div>
	<div>
		<?php include_once "module/informasiToko.php" ?>
	</div>
	<div>
		footer
	</div>
</body>
</html>
>>>>>>> 55f028da0e64beba49f693747df316907b0c54bc

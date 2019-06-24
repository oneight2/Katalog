<?php
	
	include_once "function/helper.php";
	include_once "function/koneksi.php";
	$id_kategori = isset($_GET["id_kategori"]) ? $_GET["id_kategori"] : false;
	$page = isset($_GET["page"]) ? $_GET["page"] : false;
	$file="$page.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Katalog</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<!-- Custom fonts for this template -->
		<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="css/one-page-wonder.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<?php
				if(file_exists($file)){
					include_once "$file";
				}else{
					include_once "depan.php";
				}
		?>
		
		<section class="kategori">
			<div class="container">
				
			</div>
		</div>
	</section>
	<section class="toko p-3 mt-5">
		<div class="container">
			<?php include_once "module/informasiToko.php" ?>
		</div>
	</section>
	<!-- Footer -->
	<footer class="py-5 bg-black" >
		<div class="container">
			<p class="m-0 text-center text-white small">Copyright &copy; Kelompok 2 2019</p>
		</div>
		<!-- /.container -->
	</footer>
	<!-- Bootstrap core JavaScript -->
	
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
<?php
include_once("function/helper.php");
include_once("function/koneksi.php");

session_start();
$login = isset($_SESSION["login"]);

if($login){
	$module = isset($_GET["module"]) ? $_GET["module"] : false;
	$page = isset($_GET["page"]) ? $_GET["page"] : false;
}else{
	header("Location: ".BASE_URL);
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	  <!-- Bootstrap core CSS -->
  	<link href="js/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  	<link href="css/simple-sidebar.css" rel="stylesheet">
  	<link rel="stylesheet" href="css/style.css">
	
</head>
<body id="bg">
	<div class="d-flex" id="wrapper">
	<div class="bg-light border-right" id="sidebar-wrapper">
		<div class="sidebar-heading">
			<h2>A Three</h2>
		</div>
		<div class="list-group list-group-flush">
			<ul>
			
				<P class="sidebar-heading" id="utama">Menu Utama</P>
				
				<li>
					<a class="list-group-item list-group-item-action bg-light"
					<?php if($module == "kategori"){echo "class='active'";}?> href="<?= BASE_URL."myprofile.php?module=kategori&page=list";?>">Kategori</a>
				</li>

				<li>
					<a class="list-group-item list-group-item-action bg-light"
					<?php if($module == "barang"){echo "class='active'";}?> href="<?= BASE_URL."myprofile.php?module=barang&page=list";?>">Barang</a>
				</li>

				<li>
					<a class="list-group-item list-group-item-action bg-light"
					 <?php if($module == "foto"){echo "class='active'";}?> href="<?= BASE_URL."myprofile.php?module=foto&page=list";?>">Foto</a>
				</li>

				<li>
					<a class="list-group-item list-group-item-action bg-light"
					<?php if($module == "slide"){echo "class='active'";}?> href="<?= BASE_URL."myprofile.php?module=slide&page=list";?>">Slider</a>
				</li>
			</ul>
		</div>
</div>
		<div id="page-content-wrapper">
			<!-- Topbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom mb-4">
        	<button id="menu-toggle">
           		<span class="navbar-toggler-icon"></span>
       		</button>
       	</button>
		<a class="btn btn-primary ml-auto mt-2 mt-lg-0"
					href="<?= BASE_URL."logout.php"?>">Logout</a>
        </nav>
			<?php  
				$file = "module/$module/$page.php";
				if( file_exists("$file")){
					include_once($file);
				}else{
					
					echo "<h1 id='pesan'>Maaf Halaman Belum dibuat</h1>";
					
				}
			?>

		</div>

	
</div>

<!-- Bootstrap core JavaScript -->
  <script src="js/vendor/jquery/jquery.min.js"></script>
  <script src="js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>
</html>
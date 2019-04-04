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
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="container">
		<div id="header" class="cf">
			<h2>A Three</h2>
		</div>
		<div id=menu-profile>
			<ul>
			
				<P id="utama">Menu Utama</P>
				
				<li>
					<a <?php if($module == "kategori"){echo "class='active'";}?> href="<?= BASE_URL."myprofile.php?module=kategori&page=list";?>">Kategori</a>
				</li>

				<li>
					<a <?php if($module == "barang"){echo "class='active'";}?> href="<?= BASE_URL."myprofile.php?module=barang&page=list";?>">Barang</a>
				</li>

				<li>
					<a <?php if($module == "foto"){echo "class='active'";}?> href="<?= BASE_URL."myprofile.php?module=foto&page=list";?>">Foto</a>
				</li>

				<li>
					<a <?php if($module == "slide"){echo "class='active'";}?> href="<?= BASE_URL."myprofile.php?module=slide&page=list";?>">Slider</a>
				</li>
				<P id="space"> </P>
				<li id="logout">
					<a href="<?= BASE_URL."logout.php"?>">Logout</a>
				</li>
			</ul>
		</div>

		<div id="content-profile">
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

</body>
</html>
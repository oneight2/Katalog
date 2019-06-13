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
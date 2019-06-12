<?php  
	
	include_once "function/helper.php";
	include_once "function/koneksi.php";
	include_once "module/kategori.php";

	$id_kategori = isset($_GET["id_kategori"]) ? $_GET["id_kategori"] : false;

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
		<?php 
			foreach ($queryKategori as $rowKategori) { ?>
				<ul>
					<li><a href="<?php echo BASE_URL."index.php?id_kategori=$rowKategori[id_kategori]" ?>"><?= $rowKategori["kategori"] ?></a></li>
				</ul>
		<?php } ?>
	</div>
	<div>
		<?php include_once "depan.php"; ?>
	</div>
	<div>
		footer
	</div>
</body>
</html>
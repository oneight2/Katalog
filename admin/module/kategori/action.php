<?php  
include_once("../../function/helper.php");
include_once("../../function/koneksi.php");

$kategori = $_POST["kategori"];
$status = $_POST["status"];
$button = $_POST["button"];

if($button == "Tambah"){
	mysqli_query($koneksi, "INSERT INTO kategori VALUES ('','$kategori','$status')");	
}else if($button == "Ubah"){
	$id_kategori = $_GET["id_kategori"];

	mysqli_query($koneksi, "UPDATE kategori SET 
									kategori='$kategori',
									status='$status' WHERE id_kategori='$id_kategori'");
}

header("Location: ".BASE_URL."myprofile.php?module=kategori&page=list");

?>
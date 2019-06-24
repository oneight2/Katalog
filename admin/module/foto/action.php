<?php 
include_once("../../function/helper.php");
include_once("../../function/koneksi.php");

$button = $_POST["button"];
$kode_barang = $_POST["kode_barang"];
$update_foto1 = "";
$update_foto2 = "";
$update_foto3 = "";
$update_foto4 = "";

if( !empty($_FILES["foto1"]["name"]) || !empty($_FILES["foto2"]["name"]) || !empty($_FILES["foto3"]["name"]) || !empty($_FILES["foto4"]["name"]) ){
	$foto1 = $_FILES["foto1"]["name"];
	$tmpName1 = $_FILES["foto1"]["tmp_name"];
	move_uploaded_file($tmpName1, "../../img/foto/".$foto1);

	$foto2 = $_FILES["foto2"]["name"];
	$tmpName2 = $_FILES["foto2"]["tmp_name"];
	move_uploaded_file($tmpName2, "../../img/foto/".$foto2);

	$foto3 = $_FILES["foto3"]["name"];
	$tmpName3 = $_FILES["foto3"]["tmp_name"];
	move_uploaded_file($tmpName3, "../../img/foto/".$foto3);

	$foto4 = $_FILES["foto4"]["name"];
	$tmpName4 = $_FILES["foto4"]["tmp_name"];
	move_uploaded_file($tmpName4, "../../img/foto/".$foto4);

	$update_foto1 = "foto1='$foto1'";
	$update_foto2 = "foto2='$foto2'";
	$update_foto3 = "foto3='$foto3'";
	$update_foto4 = "foto4='$foto4'";
}

if($button == "Tambah"){
	mysqli_query($koneksi, "INSERT INTO foto VALUES ('$kode_barang', '$foto1', '$foto2', '$foto3', '$foto4')");
}else if($button == "Ubah"){
	mysqli_query($koneksi, "UPDATE foto SET 
							$update_foto1,
							$update_foto2,
							$update_foto3,
							$update_foto4 WHERE kode_barang='$kode_barang'");
}
header("Location: ".BASE_URL."myprofile.php?module=foto&page=list");

?>
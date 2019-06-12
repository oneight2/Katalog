<?php 

include_once("../../function/helper.php");
include_once("../../function/koneksi.php");

$id_slide = isset($_GET["id_slide"]) ? $_GET["id_slide"] : "";
$judul = isset($_POST["judul"]) ? $_POST["judul"] : "";
$keterangan = isset($_POST["keterangan"]) ? $_POST["keterangan"] : "";
$urutan = isset($_POST["urutan"]) ? $_POST["urutan"] : "";
$updateGambar = "";
$button = isset($_POST["button"]) ? $_POST["button"] : $_GET["button"];

if(!empty($_FILES["gambar"]["name"])){
	$gambar = $_FILES["gambar"]["name"];
	$tmpGambar = $_FILES["gambar"]["tmp_name"];
	move_uploaded_file($tmpGambar, "../../img/slide/".$gambar);

	$updateGambar = "gambar='$gambar'";
}

if($button == "Tambah"){
	mysqli_query($koneksi, "INSERT INTO slide VALUES ('', '$judul', '$keterangan', '$gambar', '$urutan')");
}elseif($button == "Edit"){
	mysqli_query($koneksi, "UPDATE slide SET judul_slide='$judul', keterangan='$keterangan', $updateGambar, urutan='$urutan' WHERE id_slide='$id_slide'");
}elseif($button == "delete"){
	mysqli_query($koneksi,"DELETE FROM slide WHERE id_slide='$id_slide'");
}

header("Location:".BASE_URL."myprofile.php?module=slide&page=list");
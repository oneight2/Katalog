<?php  
include_once("../../function/helper.php");
include_once("../../function/koneksi.php");

$id_kategori = isset($_POST["id_kategori"]) ? $_POST["id_kategori"] : "" ;
$nama_barang = isset($_POST["nama_barang"]) ? $_POST["nama_barang"] : "" ;
$harga = isset($_POST["harga"]) ? $_POST["harga"] : "" ;
$stok = isset($_POST["stok"]) ? $_POST["stok"] : "" ;
$deskripsi = isset($_POST["deskripsi"]) ? $_POST["deskripsi"] : "" ;
$button = isset($_POST["button"]) ? $_POST["button"] : $_GET["button"];

if($button == "Tambah"){
	mysqli_query($koneksi, "INSERT INTO barang VALUES 
								('$id_kategori','$nama_barang','$harga','$stok','', '$deskripsi')");
}else if($button == "Ubah"){
	$id_barang = $_GET["id_barang"];
	mysqli_query($koneksi, "UPDATE barang SET id_kategori='$id_kategori',
												nama_barang='$nama_barang',
												harga='$harga',
												stok='$stok',
												deskripsi='$deskripsi' WHERE id_barang='$id_barang'");
}else if($button == "delete"){
	$id_barang = $_GET["id_barang"];
	mysqli_query($koneksi,"DELETE FROM barang WHERE id_barang='$id_barang'");
}
// header("Location:".BASE_URL."myprofile.php?module=barang&page=list");

?>
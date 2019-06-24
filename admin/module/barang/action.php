<?php  
include_once("../../function/helper.php");
include_once("../../function/koneksi.php");

$id_kategori = isset($_POST["nama_kategori"]) ? $_POST["nama_kategori"] : "" ;
$kode_barang = isset($_POST["kode_barang"]) ? $_POST["kode_barang"] : $_GET["kode_barang"] ;
$nama_barang = isset($_POST["nama_barang"]) ? $_POST["nama_barang"] : "" ;
$arrUkuran = isset($_POST["ukuran"]) ? $_POST["ukuran"] : "" ;
$harga = isset($_POST["harga"]) ? $_POST["harga"] : "" ;
$stok = isset($_POST["stok"]) ? $_POST["stok"] : "" ;
$deskripsi = isset($_POST["deskripsi"]) ? $_POST["deskripsi"] : "" ;
$button = isset($_POST["button"]) ? $_POST["button"] : $_GET["button"];
foreach ($arrUkuran as $rowUkuran) {
	$ukuran.=$rowUkuran.", ";
}

echo $id_kategori;

if($button == "Tambah"){
	mysqli_query($koneksi, "INSERT INTO barang VALUES 
								('$id_kategori', '$kode_barang', '$nama_barang', '$harga', '$ukuran', '$stok', '$deskripsi')");
}else if($button == "Ubah"){
	mysqli_query($koneksi, "UPDATE barang SET id_kategori='$id_kategori',
												nama_barang='$nama_barang',
												harga='$harga',
												ukuran='$ukuran',
												stok='$stok',
												deskripsi='$deskripsi' WHERE kode_barang='$kode_barang'");
}else if($button == "delete"){
	mysqli_query($koneksi,"DELETE FROM barang WHERE kode_barang='$kode_barang'");
	mysqli_query($koneksi,"DELETE FROM foto WHERE kode_barang='$kode_barang'");
}
header("Location:".BASE_URL."myprofile.php?module=barang&page=list");

?>
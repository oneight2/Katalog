<?php  

$id_slide = isset($_GET["id_slide"]) ? $_GET["id_slide"] : false;
$judul = "";
$keterangan = "";
$gambar = "";
$urutan = "";
$button = "Tambah";

if($id_slide){
	$querySlide = mysqli_query($koneksi, "SELECT * FROM slide WHERE id_slide='$id_slide'");
	$row = mysqli_fetch_assoc($querySlide);

	$judul = $row["judul_slide"];
	$keterangan = $row["keterangan"];
	$gambar = $row["gambar"];
	$urutan = $row["urutan"];
	$button = "Edit";

	$gambar = "<img src='".BASE_URL."img/slide/$gambar' style='width : 50px;'>";
}

?>
<form action="<?= BASE_URL."module/slide/action.php?id_slide=$id_slide"; ?>" method="post" enctype="multipart/form-data">
	<label>Judul SLide</label>
	<input type="text" name="judul" value="<?= $judul ?>">
	<label>Keterangan</label>
	<input type="text" name="keterangan" value="<?= $keterangan ?>">
	<label>Gambar</label>
	<input type="file" name="gambar"><?= $gambar ?>
	<label>Urutan</label>
	<input type="number" name="urutan" value="<?= $urutan ?>">
	<button name="button" value="<?= $button ?>"><?= $button ?></button>
</form>
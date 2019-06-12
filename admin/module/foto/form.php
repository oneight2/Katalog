<?php
$kode_barang = isset($_GET["kode_barang"]) ? $_GET["kode_barang"] : false;
$action = isset($_GET["action"]) ? $_GET["action"] : false;

$foto1 = "";
$foto2 = "";
$foto3 = "";
$foto4 = "";
$button = "Tambah";

if($action == "edit"){
	$queryFoto = mysqli_query($koneksi, "SELECT * FROM foto WHERE kode_barang='$kode_barang'");
	$row = mysqli_fetch_assoc($queryFoto);

	$foto1 = $row["foto1"];
	$foto2 = $row["foto2"];
	$foto3 = $row["foto3"];
	$foto4 = $row["foto4"];

	$foto1 = "<img src='".BASE_URL."img/foto/$foto1' style='width : 50px;'>";
	$foto2 = "<img src='".BASE_URL."img/foto/$foto2' style='width : 50px;'>";
	$foto3 = "<img src='".BASE_URL."img/foto/$foto3' style='width : 50px;'>";
	$foto4 = "<img src='".BASE_URL."img/foto/$foto4' style='width : 50px;'>";
	$button = "Ubah";
}
?>
<form action="<?= BASE_URL."module/foto/action.php?kode_barang=$kode_barang"; ?>" method="post" enctype="multipart/form-data">
	<div class="grid">
		<div class="left">
			<div class="element-form">
				<span>
					<label>Kode Barang</label>
					<input type="text" name="kode_barang" value="<?= $kode_barang ?>">
				</span>
			</div>
			<br>
			<span>
				<label>Foto 1</label><br>
				<input type="file" name="foto1"><?= $foto1; ?>
			</span><br>
			<span>
				<label>Foto 2</label><br>
				<input type="file" name="foto2"><?= $foto2; ?>
			</span><br></div>
			<div class="right">
				<span>
					<label>Foto 3</label><br>
					<input type="file" name="foto3"><?= $foto3; ?>
				</span><br>
				<span>
					<label>Foto 4</label><br>
					<input type="file" name="foto4"><?= $foto4; ?>
				</span><br></div>
			</div>
			<div class="form-foto">
				<span>
					<button class="btn"type="submit" name="button" value="<?= $button ?>" ><?= $button ?></button>
				</span>
			</div>
		</form>
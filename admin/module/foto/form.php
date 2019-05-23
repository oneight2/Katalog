<?php
$id_foto = isset($_GET["id_foto"]) ? $_GET["id_foto"] : false;
$foto1 = "";
$foto2 = "";
$foto3 = "";
$foto4 = "";
$id_barang = "";
$button = "Tambah";
if($id_foto){
	$queryFoto = mysqli_query($koneksi, "SELECT * FROM foto WHERE id_foto='$id_foto'");
	$row = mysqli_fetch_assoc($queryFoto);
	$foto1 = $row["foto1"];
	$foto2 = $row["foto2"];
	$foto3 = $row["foto3"];
	$foto4 = $row["foto4"];
	$id_barang = $row["id_barang"];
	$foto1 = "<img src='".BASE_URL."img/foto/$foto1' style='width : 50px;'>";
	$foto2 = "<img src='".BASE_URL."img/foto/$foto2' style='width : 50px;'>";
	$foto3 = "<img src='".BASE_URL."img/foto/$foto3' style='width : 50px;'>";
	$foto4 = "<img src='".BASE_URL."img/foto/$foto4' style='width : 50px;'>";
	$button = "Ubah";
}
?>
<form action="<?= BASE_URL."module/foto/action.php?id_foto=$id_foto"; ?>" method="post" enctype="multipart/form-data">
	<div class="grid">
		<div class="left">
			<span>
				<label>Nama Jaket</label>
				<select name="nama_jaket">
					<?php $queryBarang = mysqli_query($koneksi, "SELECT id_barang, nama_barang FROM barang ORDER BY nama_barang ASC"); ?>
					<?php while($row = mysqli_fetch_assoc($queryBarang)): ?>
					<?php if($id_barang == $row["id_barang"]) : ?>
					<option value="<?= $row['id_barang']; ?>" selected="true"><?= $row["nama_barang"]; ?></option>
					<?php else : ?>
					<option value="<?= $row['id_barang']; ?>"><?= $row["nama_barang"]; ?></option>
					<?php endif; ?>
					<?php endwhile; ?>
				</select>
			</span>
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
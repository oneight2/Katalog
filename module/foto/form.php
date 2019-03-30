<?php  

$id_foto = isset($_GET["id_foto"]) ? $_GET["id_foto"] : false;

$foto1 = "";
$foto2 = "";
$foto3 = "";
$foto4 = "";
$button = "Tambah";

if($id_foto){
	$queryFoto = mysqli_query($koneksi, "SELECT * FROM foto WHERE id_foto='$id_foto'");
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


<form action="<?= BASE_URL."module/foto/action.php?id_foto=$id_foto"; ?>" method="post" enctype="multipart/form-data">
	
	<span>
		<label>Foto 1</label><br>
		<input type="file" name="foto1"><?= $foto1; ?>
	</span><br>

	<span>
		<label>Foto 2</label><br>
		<input type="file" name="foto2"><?= $foto2; ?>
	</span><br>

	<span>
		<label>Foto 3</label><br>
		<input type="file" name="foto3"><?= $foto3; ?>
	</span><br>

	<span>
		<label>Foto 4</label><br>
		<input type="file" name="foto4"><?= $foto4; ?>
	</span><br>
<br>
	<span>
		<button type="submit" name="button" value="<?= $button ?>" ><?= $button ?></button>
	</span>

</form>
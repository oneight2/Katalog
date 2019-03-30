<?php  

$id_kategori = isset($_GET["id_kategori"]) ? $_GET["id_kategori"] : false;

$kategori = "";
$status = "";
$button = "Tambah";

if($id_kategori){
	$queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori='$id_kategori'");
	$row = mysqli_fetch_assoc($queryKategori);

	$kategori = $row["kategori"];
	$status = $row["status"];
	$button = "Ubah";
}

?>



<form action="<?php echo BASE_URL."module/kategori/action.php?id_kategori=$id_kategori"; ?>" method="post">
	<span>
		<label>Kategori</label><br>
		<input type="text" name="kategori" value="<?= $kategori; ?>">
	</span><br>

	<span>
		<label>Status</label><br>
		<input type="radio" name="status" value="on" <?php if($status == "on"){ echo "checked = 'true'"; } ?> >On
		<input type="radio" name="status" value="off" <?php if($status == "off"){ echo "checked = 'true'"; } ?> >Off
	</span><br>

	<span>
		<button type="submit" name="button" value="<?= $button; ?>"><?= $button; ?></button>
	</span>
</form>
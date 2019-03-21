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
<div class="element-form luhur">
		<label>Kategori</label><br>
		<span>
		<input type="text" name="kategori" value="<?= $kategori; ?>">
	</span>
	</div>

	<div class="element-form">
		<br>
		<label>Status</label><br>
		<span>
		<input type="radio" name="status" value="on" <?php if($status == "on"){ echo "checked = 'true'"; } ?> >On
		</div>
	<div class="element-form">
		<span>
		<input type="radio" name="status" value="off" <?php if($status == "off"){ echo "checked = 'true'"; } ?> >Off
	</span><br>
	</div>

	<span>
		<button class="btn update" name="button" value="<?= $button; ?>"><?= $button; ?></button>
	</span>
</form>
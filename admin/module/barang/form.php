<?php  

$id_barang = isset($_GET["id_barang"]) ? $_GET["id_barang"] : false;

$id_kategori = "";
$nama_barang = "";
$harga = "";
$stok = "";
$deskripsi = "";
$button = "Tambah";

if($id_barang){
	$queryBarang = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id_barang'");
	$row = mysqli_fetch_assoc($queryBarang);

	$id_kategori = $row["id_kategori"];
	$nama_barang = $row["nama_barang"];
	$harga = $row["harga"];
	$stok = $row["stok"];
	$deskripsi = $row["deskripsi"];
	$button = "Ubah";
}


?>

<script src="<?php echo BASE_URL."js/ckeditor/ckeditor.js"; ?>"></script>

<form action="<?php echo BASE_URL."module/barang/action.php?id_barang=$id_barang"; ?>" method="post">
<div class="element-form luhur">
	<span>
		<label>Kategori</label><br>
		<select name="id_kategori">
			<?php $query = mysqli_query($koneksi, "SELECT id_kategori, kategori FROM kategori WHERE status='on' ORDER BY kategori ASC"); ?>
			<?php while($row = mysqli_fetch_assoc($query)): ?>
				<?php if($id_kategori == $row["id_kategori"]) : ?>
					<option value="<?= $row['id_kategori']; ?>" selected="true"><?= $row["kategori"]; ?></option>
				<?php else : ?>
					<option value="<?= $row['id_kategori']; ?>"><?= $row["kategori"]; ?></option>
				<?php endif; ?>
			<?php endwhile; ?>			
		</select>
	</span><br>
</div>
	<div class="element-form">
	<span>
		<label>Nama Barang</label><br>
		<input type="text" name="nama_barang" value="<?= $nama_barang ?>">
	</span><br>
</div>
<div class="element-form">
	<span>
		<label>Harga</label><br>
		<input type="text" name="harga" value="<?= $harga ?>">
	</span><br>
</div>

	<div class="element-form">

	<span>
		<label>Stok</label><br>
		<input type="text" name="stok" value="<?= $stok ?>">
	</span><br>
</div>
	
	<div class="element-form">
		<span>
		<label>Deskripsi</label><br>
		<textarea name="deskripsi" id="editor"><?= $deskripsi ?></textarea>
	</span>
<br> </div>
	<span>
		<button class='btn update'type="submit" name="button" value="<?= $button ?>"><?= $button ?></button>
	</span>
</form>
<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>
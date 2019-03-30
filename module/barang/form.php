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



<form action="<?php echo BASE_URL."module/barang/action.php?id_barang=$id_barang"; ?>" method="post">
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

	<span>
		<label>Nama Barang</label><br>
		<input type="text" name="nama_barang" value="<?= $nama_barang ?>">
	</span><br>

	<span>
		<label>Harga</label><br>
		<input type="text" name="harga" value="<?= $harga ?>">
	</span><br>

	<span>
		<label>Stok</label><br>
		<input type="text" name="stok" value="<?= $stok ?>">
	</span><br>

	<span><br>
		<label>Deskripsi</label><br>
		<textarea name="deskripsi"><?= $deskripsi ?></textarea>
	</span>
<br>
	<span>
		<button type="submit" name="button" value="<?= $button ?>"><?= $button ?></button>
	</span>
</form>
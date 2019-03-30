<div id="tambah">
	<a href="<?php echo BASE_URL."myprofile.php?module=barang&page=form"; ?>" class="btn btn-action btn-tambah" >+Tambah</a>
</div>


<?php $queryBarang = mysqli_query($koneksi, "SELECT barang.*, kategori.kategori FROM barang JOIN kategori ON barang.id_kategori=kategori.id_kategori"); ?>

<?php if( mysqli_num_rows($queryBarang) == 0 ) : ?>
<div id="pesan">
	<h3>Data belum ada</h3>
	</div>
<?php else: ?>
	<table class="table-list ">
		<tr class="baris-title">
			<th class="kolom-nomor">No</th>
			<th class="kiri">Nama Jaket</th>
			<th class="kiri">Harga</th>
			<th class="kiri">Stok</th>
			<th class="tengah">kategori</th>
			<th class="tengah">Deskripsi</th>
			<th class="tengah">Action</th>
		</tr>

		<?php $no = 1; ?>
		<?php while( $row = mysqli_fetch_assoc($queryBarang) ) : ?>
			<tr>
				<td class="kolom-nomor"><?= $no ?></td>
				<td class="kiri"><?= $row["nama_barang"]; ?></td>
				<td class="kiri"><?= $row["harga"]; ?></td>
				<td class="kiri"><?= $row["stok"]; ?></td>
				<td class="tengah"><?= $row["kategori"]; ?></td>
				<td class="tengah"><?= $row["deskripsi"]; ?></td>
				<td class="tengah">
					<a href="<?= BASE_URL."myprofile.php?module=barang&page=form&id_barang=$row[id_barang]"; ?>" class="btn " >Ubah</a>
					<a href="<?= BASE_URL."module/barang/action.php?button=delete&id_barang=$row[id_barang]"; ?>" class="btn" >Hapus</a>
				</td>
			</tr>
			<?php $no++; ?>
		<?php endwhile; ?>	
	</table>
<?php endif; ?>	
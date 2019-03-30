<div id="tambah">
	<a href="<?php echo BASE_URL."myprofile.php?module=barang&page=form"; ?>">Tambah</a>
</div>

<?php $queryBarang = mysqli_query($koneksi, "SELECT barang.*, kategori.kategori FROM barang JOIN kategori ON barang.id_kategori=kategori.id_kategori"); ?>

<?php if( mysqli_num_rows($queryBarang) == 0 ) : ?>
	<h3>Data belum ada</h3>
<?php else: ?>
	<table class="table-list">
		<tr>
			<th>No</th>
			<th>Nama Jaket</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>kategori</th>
			<th>Deskripsi</th>
			<th>Action</th>
		</tr>

		<?php $no = 1; ?>
		<?php while( $row = mysqli_fetch_assoc($queryBarang) ) : ?>
			<tr>
				<td><?= $no ?></td>
				<td><?= $row["nama_barang"]; ?></td>
				<td><?= $row["harga"]; ?></td>
				<td><?= $row["stok"]; ?></td>
				<td><?= $row["kategori"]; ?></td>
				<td><?= $row["deskripsi"]; ?></td>
				<td>
					<a href="<?= BASE_URL."myprofile.php?module=barang&page=form&id_barang=$row[id_barang]"; ?>">Ubah</a>
				</td>
			</tr>
			<?php $no++; ?>
		<?php endwhile; ?>	
	</table>
<?php endif; ?>	
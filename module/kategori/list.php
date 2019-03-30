<div id="tambah">
	<a href="<?php echo BASE_URL."myprofile.php?module=kategori&page=form"; ?>">Tambah</a>
</div>

<?php $queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori"); ?>

<?php if( mysqli_num_rows($queryKategori) == 0 ) : ?>
	<h3>Data belum ada</h3>
<?php else: ?>
	<table class="table-list">
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Status</th>
			<th>Action</th>
		</tr>

		<?php $no = 1; ?>
		<?php while( $row = mysqli_fetch_assoc($queryKategori) ) : ?>
			<tr>
				<td><?= $no ?></td>
				<td><?= $row["kategori"]; ?></td>
				<td><?= $row["status"]; ?></td>
				<td>
					<a href="<?= BASE_URL."myprofile.php?module=kategori&page=form&id_kategori=$row[id_kategori]";?>">Ubah</a>
				</td>
			</tr>
			<?php $no++; ?>
		<?php endwhile; ?>	
	</table>
<?php endif; ?>	
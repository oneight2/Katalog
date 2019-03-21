<div id="tambah">
	<a href="<?php echo BASE_URL."myprofile.php?module=kategori&page=form"; ?>" class="btn btn-action btn-tambah">+Tambah</a>
</div>

<?php $queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori"); ?>

<?php if( mysqli_num_rows($queryKategori) == 0 ) : ?>
<div  id="pesan">
	<h3>Data belum ada</h3>
</div>
<?php else: ?>
	<table class="table-list">
	<tr class="baris-title">
			<th class="kolom-nomor">No</th>
			<th class="kiri">Kategori</th>
			<th class="kiri">Status</th>
			<th class="tengah">Action</th>
		</tr>

		<?php $no = 1; ?>
		<?php while( $row = mysqli_fetch_assoc($queryKategori) ) : ?>
			<tr>
				<td class="kolom-nomor"><?= $no ?></td>
				<td class="kiri"><?= $row["kategori"]; ?></td>
				<td class="kiri"><?= $row["status"]; ?></td>
				<td class="tengah">
					<a href="<?= BASE_URL."myprofile.php?module=kategori&page=form&id_kategori=$row[id_kategori]";?>" class="btn">Ubah</a>
				</td>
			</tr>
			<?php $no++; ?>
		<?php endwhile; ?>	
	</table>
<?php endif; ?>	
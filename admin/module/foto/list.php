

<?php $queryFoto = mysqli_query($koneksi, "SELECT * FROM foto"); ?>

<?php if( mysqli_num_rows($queryFoto) == 0 ) : ?>
<div  id="pesan">
	<h6>Data belum ada</h6>
</div>
<?php else: ?>
	<table class="table-list">
	<tr class="baris-title">
			<th class="kolom-nomor">No</th>
			<th class="kiri">Foto 1</th>
			<th class="kiri">Foto 2</th>
			<th class="kiri">Foto 3</th>
			<th class="kiri">Foto 4</th>
			<th class="tengah">Action</th>
		</tr>

		<?php $no = 1; ?>
		<?php while( $row = mysqli_fetch_assoc($queryFoto) ) : ?>
			<tr>
				<td class="kolom-nomor"><?= $no ?></td>
				<td class="kiri"><?= $row["foto1"]; ?></td>
				<td class="kiri"><?= $row["foto2"]; ?></td>
				<td class="kiri"><?= $row["foto3"]; ?></td>
				<td class="kiri"><?= $row["foto4"]; ?></td>
				<td class="tengah">
					<a href="<?php echo BASE_URL."myprofile.php?module=foto&page=form&id_foto=$row[id_foto]";?>" class="btn ">Ubah</a>
				</td>
			</tr>
			<?php $no++; ?>
		<?php endwhile; ?>	
	</table>
<?php endif; ?>	
<div id="tambah">
	<a href="<?php echo BASE_URL."myprofile.php?module=foto&page=form"; ?>" class="btn btn-action btn-tambah">+Tambah</a>
</div>
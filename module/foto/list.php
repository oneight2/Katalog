<div id="tambah">
	<a href="<?php echo BASE_URL."myprofile.php?module=foto&page=form"; ?>">Tambah</a>
</div>

<?php $queryFoto = mysqli_query($koneksi, "SELECT * FROM foto"); ?>

<?php if( mysqli_num_rows($queryFoto) == 0 ) : ?>
	<h3>Data belum ada</h3>
<?php else: ?>
	<table class="table-list">
		<tr>
			<th>No</th>
			<th>Foto 1</th>
			<th>Foto 2</th>
			<th>Foto 3</th>
			<th>Foto 4</th>
			<th>Action</th>
		</tr>

		<?php $no = 1; ?>
		<?php while( $row = mysqli_fetch_assoc($queryFoto) ) : ?>
			<tr>
				<td><?= $no ?></td>
				<td><?= $row["foto1"]; ?></td>
				<td><?= $row["foto2"]; ?></td>
				<td><?= $row["foto3"]; ?></td>
				<td><?= $row["foto4"]; ?></td>
				<td>
					<a href="<?php echo BASE_URL."myprofile.php?module=foto&page=form&id_foto=$row[id_foto]";?>">Ubah</a>
				</td>
			</tr>
			<?php $no++; ?>
		<?php endwhile; ?>	
	</table>
<?php endif; ?>	
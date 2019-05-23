<div class="container-fluid">
<?php $queryBarang = mysqli_query($koneksi, "SELECT barang.*, kategori.kategori FROM barang JOIN kategori ON barang.id_kategori=kategori.id_kategori"); ?>

<?php if( mysqli_num_rows($queryBarang) == 0 ) : ?>
<div id="pesan">
	<h3>Data belum ada</h3>
	</div>
<?php else: ?>
	<div class="card shadow mb-4 mt-10">
         <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Barang</h6>
         </div>
         <div class="card-body">
         	<div id="tambah">
				<a href="<?php echo BASE_URL."myprofile.php?module=barang&page=form"; ?>"  >+Tambah</a>
			</div>
		<div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
					<a href="<?= BASE_URL."myprofile.php?module=barang&page=form&id_barang=$row[id_barang]"; ?>" class="btn btn-warning btn-sm" >Ubah</a>
					<a href="<?= BASE_URL."module/barang/action.php?button=delete&id_barang=$row[id_barang]"; ?>" class="btn btn-danger btn-sm" >Hapus</a>
				</td>
			</tr>
			<?php $no++; ?>
		<?php endwhile; ?>	
	</table>
<?php endif; ?>	
</div>
</div>
</div>
</div>

<div class="container-fluid">
<?php $queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori"); ?>

<?php if( mysqli_num_rows($queryKategori) == 0 ) : ?>
<div  id="pesan">
	<h1>Data belum ada</h1>
</div>
<?php else: ?>
	<div class="card shadow mb-4 mt-10">
         <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori Produk</h6>
         </div>
         <div class="card-body">
         <div class="row">
         <div class="col-sm-12 col-md-9">
         <div id="tambah">
			<a href="<?php echo BASE_URL."myprofile.php?module=kategori&page=form"; ?>">+Tambah</a>
		 </div>
		</div>
		 <div class="col-sm-12 col-md-3">
		 	<div id="dataTable_filter" class="dataTables_filter">
		 		<input type="search" class="form-control form-control-sm" placeholder="Cari data" aria-controls="dataTable">
		 		</div>
		 	</div>
			</div>
         <div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
					<a href="<?= BASE_URL."myprofile.php?module=kategori&page=form&id_kategori=$row[id_kategori]";?>" class="btn">Ubah</a>
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
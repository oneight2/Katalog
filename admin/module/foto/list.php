<?php 

$queryBarang = mysqli_query($koneksi, "SELECT kode_barang, nama_barang FROM barang");

foreach($queryBarang as $row){
	
	$queryFoto = mysqli_query($koneksi, "SELECT * FROM foto WHERE kode_barang='$row[kode_barang]'");
}
$fotoJbarang = mysqli_query($koneksi, "SELECT foto.*, barang.nama_barang FROM foto JOIN barang ON foto.kode_barang=barang.kode_barang");

?>

<table class="table table-bordered">
	<tr>
		<th>Kode Barang</th>
		<th>Nama Barang</th>
		<th>Foto 1</th>
		<th>Foto 2</th>
		<th>Foto 3</th>
		<th>Foto 4</th>
		<th>Action</th>
	</tr>
	
		<?php foreach($queryBarang as $rowBarang) : ?>
			<tr>
				<td><?= $rowBarang["kode_barang"] ?></td>
				<td><?= $rowBarang["nama_barang"] ?></td>
				<?php $queryFoto = mysqli_query($koneksi, "SELECT * FROM foto WHERE kode_barang='$rowBarang[kode_barang]'"); ?>
				<?php if(mysqli_num_rows($queryFoto) == 0) : ?>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td><a href="<?php echo BASE_URL."myprofile.php?module=foto&page=form&kode_barang=$rowBarang[kode_barang]"; ?>">Tambah Foto</a></td>
				<?php else : ?>
					<?php 
						$foto = mysqli_fetch_assoc($queryFoto);
						$foto1 = $foto["foto1"];
						$foto2 = $foto["foto2"];
						$foto3 = $foto["foto3"];
						$foto4 = $foto["foto4"];
					?>

					<td><img src="<?php echo BASE_URL."img/foto/$foto1" ?>" width=50px></td>
					<td><img src="<?php echo BASE_URL."img/foto/$foto2" ?>" width=50px></td>
					<td><img src="<?php echo BASE_URL."img/foto/$foto3" ?>" width=50px></td>
					<td><img src="<?php echo BASE_URL."img/foto/$foto4" ?>" width=50px></td>
					<td><a href="<?php echo BASE_URL."myprofile.php?module=foto&page=form&action=edit&kode_barang=$foto[kode_barang]"; ?>">Edit</a></td>
				<?php endif; ?>
			</tr>
		<?php endforeach; ?>
	
</table>

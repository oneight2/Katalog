<?php 
	$kode_barang=isset($_GET["kode_barang"]) ? $_GET["kode_barang"] : false;

	$queryBarangKonten = mysqli_query($koneksi, "SELECT barang.nama_barang, barang.harga, barang.ukuran, barang.stok, barang.deskripsi, foto.* FROM barang JOIN foto ON barang.kode_barang=foto.kode_barang WHERE barang.kode_barang='$kode_barang' AND foto.kode_barang='$kode_barang'");
?>

<div>
	<ul>
		<?php 
			foreach($queryBarangKonten as $rowBarangKonten) { 
				$arrFoto=[$rowBarangKonten["foto1"], $rowBarangKonten["foto2"], $rowBarangKonten["foto3"], $rowBarangKonten["foto4"]];
				$arrBarang=[$rowBarangKonten["nama_barang"], $rowBarangKonten["harga"], $rowBarangKonten["ukuran"], $rowBarangKonten["stok"], $rowBarangKonten["deskripsi"]];
		?>
			<?php foreach($arrFoto as $rowArrFoto){ ?>
				<li><img src="<?= BASE_URL."admin/img/foto/$rowArrFoto"?>"></li>
			<?php } ?>

			<?php foreach($arrBarang as $rowBarang) { ?>
				<li><p><?= $rowBarang ?></p></li>
			<?php } ?>
		<?php } ?>
	</ul>
</div>
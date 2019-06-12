<?php 

	if($id_kategori){
		$barang = mysqli_query($koneksi, "SELECT nama_barang, harga, stok FROM barang WHERE id_kategori='$id_kategori' ORDER BY rand() DESC LIMIT 9");
	}else{
		$barang = mysqli_query($koneksi, "SELECT barang.nama_barang, barang.harga, barang.stok, foto.foto1 FROM barang JOIN foto ON barang.kode_barang=foto.kode_barang ORDER BY rand() DESC LIMIT 9");
	}

?>

<div>
 	<ul>
 		<?php foreach($barang as $rowBarang) { ?>
 			<li>
 				<p><?= $rowBarang["harga"] ?></p>
 				<a href=""><img src="<?php echo BASE_URL."admin/img/foto/$rowBarang[foto1]"?>"></a>
 				<p><a href=""><?= $rowBarang["nama_barang"] ?></a></p>
 				<span>Stok : <?= $rowBarang["stok"] ?></span>
 			</li>
 		<?php } ?>
 	</ul>
</div>
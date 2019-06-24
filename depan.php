<?php
	if($id_kategori){
		include_once"module/nav.php";
		$barang = mysqli_query($koneksi, "SELECT barang.kode_barang, barang.nama_barang, barang.harga, barang.stok, foto.foto1 FROM barang JOIN foto ON barang.kode_barang=foto.kode_barang WHERE barang.id_kategori='$id_kategori' ORDER BY rand() DESC");
	}else{
		include_once"module/face.php";
		echo "<h1 class='text-center'>Best Seller</h1>";
		$barang = mysqli_query($koneksi, "SELECT barang.kode_barang, barang.nama_barang, barang.harga, barang.stok, foto.foto1 FROM barang JOIN foto ON barang.kode_barang=foto.kode_barang ORDER BY id_kategori='6' DESC LIMIT 4");
	}
?>
<section class="best-seller">
	<div class="container">
		<div class="row">
			<?php foreach($barang as $rowBarang) { ?>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="card" style="width: 100%;">
					<a href="<?php echo BASE_URL."index.php?page=belakang&pageBar=barBelakang&kode_barang=$rowBarang[kode_barang]" ?>">
						<img src="<?php echo BASE_URL."admin/img/foto/$rowBarang[foto1]"?>" class="card-img-top">
					</a>
					<div class="card-body">
						<h6 class="card-title">
						<a href="<?php echo BASE_URL."index.php?page=belakang&pageBar=barBelakang&kode_barang=$rowBarang[kode_barang]" ?>"><?= $rowBarang["nama_barang"] ?></a></h6>
						<p class="card-text">
							Stok : <?= $rowBarang["stok"] ?> <br>
							<b>Rp.<?= $rowBarang["harga"] ?></b> 
						</p>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
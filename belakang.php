<?php
	$kode_barang=isset($_GET["kode_barang"]) ? $_GET["kode_barang"] : false;
	$queryBarangKonten = mysqli_query($koneksi, "SELECT barang.nama_barang, barang.harga, barang.ukuran, barang.stok, barang.deskripsi, foto.* FROM barang JOIN foto ON barang.kode_barang=foto.kode_barang WHERE barang.kode_barang='$kode_barang' AND foto.kode_barang='$kode_barang'");
?>
<?php
			include_once "module/nav.php";
			foreach($queryBarangKonten as $rowBarangKonten) {
				$arrFoto=[$rowBarangKonten["foto1"], $rowBarangKonten["foto2"], $rowBarangKonten["foto3"], $rowBarangKonten["foto4"]];
				$arrBarang=[$rowBarangKonten["nama_barang"], $rowBarangKonten["harga"], $rowBarangKonten["ukuran"], $rowBarangKonten["stok"], $rowBarangKonten["deskripsi"]];
			}
		
?>
<div class="produk">
	<div class="container">
		<div class="row ">
			<div class="col mb-3" >
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
						<?php  foreach($queryBarangKonten as $row) { ?>
							<img src="<?= BASE_URL."admin/img/foto/$row[foto1]"?>" class="d-block w-100">
						<?php } ?>
						</div>
						<?php foreach($arrFoto as $rowArrFoto){ ?>
						<div class="carousel-item">
							<img src="<?= BASE_URL."admin/img/foto/$rowArrFoto"?>" class="d-block w-100">
						</div>
						<?php } ?>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="col">
				<h3 class="mt-3"><?= $rowBarangKonten["nama_barang"] ?></h3>
				<p>Rp. <?= $rowBarangKonten["harga"] ?></p>
				<b>Detail</b>
				<?= $rowBarangKonten["deskripsi"] ?>
				<b>Size</b>
				<p><?= $rowBarangKonten["ukuran"] ?></p>
				<b>Stok</b>
				<p><?= $rowBarangKonten["stok"] ?></p>
				
				<a href="https://www.bukalapak.com/u/hamid_hamdani123" class="btn btn-outline-danger" >Toko Buka Lapak</a>
			</div>
		</div>
		<h5 class="text-center mt-5">Size Info</h5>
		<div class="row">
			
			<div class="col-5">
				<img src="img/size.png"  class="img-fluid" alt="Responsive image">
			</div>
			<div class="col-7">
				<table class="table mt-5">
					<thead>
						<tr>
							<th scope="col"></th>
							<th scope="col">Pt</th>
							<th scope="col">L</th>
							<th scope="col">PL</th>
							<th scope="col">PT</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">S</th>
							<td>55 cm</td>
							<td>50cm</td>
							<td>55 cm</td>
							<td>30 cm</td>
						</tr>
						<tr>
							<th scope="row">M</th>
							<td>60 cm</td>
							<td>50 cm</td>
							<td>60 cm</td>
							<td>30 cm</td>
						</tr>
						<tr>
							<th scope="row">L</th>
							<td>65 cm</td>
							<td>55 cm</td>
							<td>60 cm</td>
							<td>35 cm</td>
						</tr>
						<tr>
							<th scope="row">XL</th>
							<td>70 cm</td>
							<td>60 cm</td>
							<td>70 cm</td>
							<td>49 cm</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
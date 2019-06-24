<?php
	
	$queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE status='on'");
?>
<?php if($page == "belakang") { ?>
<!-- <ul>
	<li><a href="<?= BASE_URL."index.php" ?>">Home</a></li>
</ul> -->
<?php }else{ ?>
<!-- <ul>
	<li><a href="<?= BASE_URL."index.php" ?>">Home</a></li>
</ul> -->
<!-- <?php




foreach ($queryKategori as $rowKategori) { ?>
<div class="card mb-3">
	<img src="img/kategori/<?= rand(1,3)?>.jpg" class="card-img-top" alt="...">
	<div class="card-body">
		<h5 class="card-title"><a href="<?php echo BASE_URL."index.php?id_kategori=$rowKategori[id_kategori]" ?>"><?= $rowKategori["kategori"] ?></a></h5>
		<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	</div>
</div>

<?php } ?>
<?php } ?> -->
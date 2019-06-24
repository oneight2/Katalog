
<?php 
$queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE status='on'"); ?>
<nav>
	<div class="menu-icon">
		
	</div>
	<p class="logo">
		A Three
	</p>
	<div class="menu">
		<ul>
			<li><a href="<?php echo BASE_URL.'index.php'?>">Home</a></li>
			<?php foreach ($queryKategori as $rowKategori) { ?>
			<li><a href="<?php echo BASE_URL."index.php?id_kategori=$rowKategori[id_kategori]" ?>"><?= $rowKategori["kategori"] ?></a></li>
			<?php } ?>
			<li><a href="<?= BASE_URL.'module/kelompok.php'?>">About</a></li>
		</ul>
	</div>
</nav>
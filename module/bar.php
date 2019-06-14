<?php 
	
	$queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE status='on'");

?>
	<?php if($page == "belakang") { ?>
		<ul>
			<li><a href="<?= BASE_URL."index.php" ?>">Home</a></li>
		</ul>
	<?php }else{ ?>
		<ul>
			<li><a href="<?= BASE_URL."index.php" ?>">Home</a></li>
		</ul>
	<?php 
		foreach ($queryKategori as $rowKategori) { ?>
			<ul>
				<li><a href="<?php echo BASE_URL."index.php?id_kategori=$rowKategori[id_kategori]" ?>"><?= $rowKategori["kategori"] ?></a></li>
			</ul>
		<?php } ?>
	<?php } ?>
<?php 
	
	$queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE status='on'");

?>
	<?php if($page == "belakang") { ?>
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">contact</a></li>
			<li><a href="">DLL</a></li>
		</ul>
	<?php }else{ ?>
		<ul>
			<li>Home</li>
			<li>contact</li>
			<li>DLL</li>
		</ul>
	<?php 
		foreach ($queryKategori as $rowKategori) { ?>
			<ul>
				<li><a href="<?php echo BASE_URL."index.php?id_kategori=$rowKategori[id_kategori]" ?>"><?= $rowKategori["kategori"] ?></a></li>
			</ul>
		<?php } ?>
	<?php } ?>
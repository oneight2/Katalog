<?php  

$slide = mysqli_query($koneksi, "SELECT * FROM slide");

?>
<a href="<?= BASE_URL."myprofile.php?module=slide&page=form" ?>">+Tambah</a>

<table class="table table-bordered">
	<tr>
		<th>Judul</th>
		<th>Keterangan</th>
		<th>Gambar</th>
		<th>Urutan</th>
		<th>Action</th>
	</tr>
<?php foreach($slide as $row) : $gambar = $row["gambar"];?>
	<tr>
		<td><?= $row["judul_slide"] ?></td>
		<td><?= $row["keterangan"] ?></td>
		<td><img src="<?= BASE_URL."img/slide/$gambar" ?>" width=50px></td>
		<td><?= $row["urutan"] ?></td>
		<td>
			<a href="<?= BASE_URL."myprofile.php?module=slide&page=form&id_slide=$row[id_slide]"; ?>">Edit</a>
			<a href="<?= BASE_URL."module/slide/action.php?button=delete&id_slide=$row[id_slide]"; ?>">Hapus</a>
		</td>
	</tr>
<?php endforeach; ?>
</table>
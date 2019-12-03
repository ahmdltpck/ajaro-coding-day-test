<?php 
	require'functions.php';
	$data = query("SELECT * FROM data");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="container">
		<div class="header">
			<h1>Kelola Data Barang</h1>
		</div>
		<div class="content">
			<ul>
				<li><h2>Data Barang</h2></li>

				<li><a href="tambah.php">Tambah Data</a></li>
			</ul>
			<table class="tabel" cellpadding="10" border="1" cellspacing="0">
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th>Nama</th>
					<th>Harga</th>
					<th colspan="2">Aksi</th>
				</tr>
				<?php foreach ($data as $row) : ?>
				<tr>
					<td>1</td>
					<td><?= $row["kode"]; ?></td>
					<td><?= $row["nama"]; ?></td>
					<td>Rp. <?= $row["harga"]; ?></td>
					<td><a id="bl-but" href="edit.php?id=<?= $row["id"]; ?>">Edit</a></td>
					<td><a id="red-but" href="hapus.php?id=<?= $row["id"]; ?>">Hapus</a></td>
				</tr>
			<?php endforeach; ?>

			</table>
		</div>
	</div>
	<div class="footer">
		<h3>Copyright@2019</h3>
	</div>

</body>
</html>
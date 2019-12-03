<?php 
require'functions.php';
	$id = $_GET["id"];
	$data = query("SELECT * FROM data WHERE id = $id")[0];
	if(isset($_POST["submit"])){
		if(edit($_POST) > 0){
			header("Location: admin.php");
		}else{
			header("Location: admin.php");
		}
	}
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
				<li><h2>Edit Data</h2></li>
			</ul>
			<form action="" method="post" >
				<table class="tabel" cellpadding="10" >
					<input type="hidden" name="id" value="<?= $data["id"]; ?>">
					<tr>
						<td>Kode</td>
						<td>:</td>
						<td><input type="text" id="kode" name="kode" value="<?= $data["kode"]; ?>"></td>
					</tr>
					<tr>
						<td>Nama Barang</td>
						<td>:</td>
						<td><input type="text" id="nama" name="nama" value="<?= $data["nama"]; ?>"></td>
					</tr>
					<tr>
						<td>Deskripsi</td>
						<td>:</td>
						<td>
							<textarea name="deskripsi" id="deskripsi" ><?= $data["deskripsi"]; ?></textarea>
						</td>
					</tr>
					<tr>
						<td>Stok</td>
						<td>:</td>
						<td><input type="text" id="stok" name="stok" value="<?= $data["stok"]; ?>"></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td>:</td>
						<td><input type="text" id="harga" name="harga" value="<?= $data["harga"]; ?>"></td>
					</tr>
					<tr>
						<td>Berat</td>
						<td>:</td>
						<td><input id="berat" type="text"  name="berat" value="<?= $data["berat"] ?>">   <p style="
						padding: 3px;
						font-style: italic;
						">gram</p></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td colspan="2"><button type="submit" name="submit">Simpan</button><a href="admin.php">Kembali</a></td>
					</tr>
					
					
						
				</table>
			</form>
		</div>
	</div>
	<div class="footer">
		<h3>Copyright@2019</h3>
	</div>

</body>
</html>
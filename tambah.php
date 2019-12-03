<?php 
	require'functions.php';
	if(isset($_POST["submit"])){
		if(tambah($_POST) > 0){
			header("Location: admin.php");
		}else{
			echo "error";
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
				<li><h2>Tambah Data</h2></li>
			</ul>
			<form action="" method="post" >
				<table class="tabel" cellpadding="10"  >
					<tr>
						<td>Kode</td>
						<td>:</td>
						<td><input type="text" id="kode" name="kode" required></td>
					</tr>
					<tr>
						<td>Nama Barang</td>
						<td>:</td>
						<td><input type="text" id="nama" name="nama" required></td>
					</tr>
					<tr>
						<td>Deskripsi</td>
						<td>:</td>
						<td>
							<textarea name="deskripsi" id="deskripsi" required></textarea>
						</td>
					</tr>
					<tr>
						<td>Stok</td>
						<td>:</td>
						<td><input type="text" id="stok" name="stok" required></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td>:</td>
						<td><input type="text" id="harga" name="harga" required></td>
					</tr>
					<tr>
						<td>Berat</td>
						<td>:</td>
						<td><input id="berat" type="text"  name="berat" required><p style="
						padding: 3px;
						font-style: italic;
						">gram</p></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td colspan="2"><button type="submit" name="submit">Tambahkan</button><a href="admin.php">Kembali</a></td>
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
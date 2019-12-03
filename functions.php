<?php 
$koneksi = mysqli_connect("localhost" , "root", "", "ajaro");

function query($query){
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while($row = mysqli_fetch_array($result)){
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $koneksi;
	$kode = htmlspecialchars($data["kode"]);
	$nama = htmlspecialchars($data["nama"]);
	$deskripsi = $data["deskripsi"];
	$stok = htmlspecialchars($data["stok"]);
	$harga = htmlspecialchars($data["harga"]);
	$berat = htmlspecialchars($data["berat"]);

  	$query = "INSERT INTO data VALUES ('', '$kode', '$nama', '$deskripsi', '$stok', '$harga', '$berat')";
  	mysqli_query($koneksi, $query);
  	return mysqli_affected_rows($koneksi);
}

function edit($data){
	global $koneksi;
	$id = $data["id"];
	$kode = htmlspecialchars($data["kode"]);
	$nama = htmlspecialchars($data["nama"]);
	$deskripsi = $data["deskripsi"];
	$stok = htmlspecialchars($data["stok"]);
	$harga = htmlspecialchars($data["harga"]);
	$berat = htmlspecialchars($data["berat"]);

  	$query = "UPDATE data SET
  			kode = '$kode', 
  			nama = '$nama',
  			deskripsi = '$deskripsi',
  			stok = '$stok',
  			harga = '$harga',
  			berat = '$berat'
  			WHERE id = $id 
  				";
  	mysqli_query($koneksi, $query);
  	return mysqli_affected_rows($koneksi);
}

function hapus($id){
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM data WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}

 ?>
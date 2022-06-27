<?php 
require 'fungsi.php';
if (isset($_POST["submit"])) {
	// code...
	if (tambah($_POST) > 0) {
		// code...
		echo "
		<script>
		alert('data berhasil ditambah');
		document.location.href = 'latihan13.php';
		</script>
		";
	} else {
		echo "
		<script>
		alert('data gagal ditambah');
		document.location.href = 'latihan13.php';
		</script>

		";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<h3>Tambah Data</h3>
	<form action="" method="POST">
		<ul>
			<li>
				<label for="nim">N I M</label>
				<br>
				<input type="text" name="nim" id="nim" required>
			</li>
			<li>
				<label for="nama">NAMA</label>
				<br>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="email">EMAIL</label>
				<br>
				<input type="email" name="email" id="email" required>
			</li>
			<li>
				<label for="prodi">PROGRAM STUDI</label>
				<br>
				<input type="text" name="prodi" id="prodi" required>
			</li>
			<li>
				<label for="foto">NAMA FILE FOTO</label>
				<br>
				<input type="text" name="foto" id="foto" required>
			</li>
			<br>
			
			<button type="submit" name="submit">Simpan</button>
			
			
		</ul>
	</form>
	
</body>
</html>
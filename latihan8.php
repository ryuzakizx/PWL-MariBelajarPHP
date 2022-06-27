<?php
//User defined function
//Nama Fungsinya harus didefinisikan dulu
//Panggil nama fungsinya
//Fungsi biasanya memberikan nilai balik (return)
	function salam($nama) {
		return "Selamat Datang, $nama";
	}
	function salamlagi($waktu, $nama) {
		return "Selamat $waktu, $nama";
	}

	//Fungsi dengan Nilai Default, berguna jika pemanggilan fungsinya tidak diberi nilai, jika fungsi tanpa nilai default dan pemanggilannya tanpa diberi nilai maka akan terjadi kesalahan
	function salamdefault($waktu = "Datang", $nama = "Admin") {
		return "Selamat $waktu, $nama";
	}
?>

<!doctype html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Latihan Membuat Fungsi</title>
	</head>
	<body>
<h1><?php echo salam("Kamaludin"); ?></h1> <!--memanggil fungsi-->
		<h1><?php echo salamlagi("Siang", "Kamaludin"); ?></h1>
		<h1><?php echo salamdefault(); ?></h1>
	</body>
	</html>
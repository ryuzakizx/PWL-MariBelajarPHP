<?php
	//Array biasa
	$mahasiswa =
		["Anto","E1657401002","Manajemen
Informatika","anto@gmail.com"];

	//Array Multi dimensi atau Array dalam Array
	$datamhs = [
		["Bambang","E1757401011","Manajemen
Informatika","bambang@gmail.com"],
["Anto","E1657401002","Manajemen Informatika","anto@gmail.com"],
["Fitrianto","E1657401112","Manajemen
Informatika","fitri@gmail.com"]
]
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<!-- Menampilkan Daftar Mahasiswa Manual dengan HTML Biasa -->
	<h3>Dengan HTML Biasa secara langsung</h3>
	<ul>
		<li>Aanto</li>
		<li>E1657401002</li>
		<li>Manajemen Informatika</li>
		<li>anto@gmail.com</li>
	</ul>

	<h3>Dengan HTML dan PHP</h3>
	<!-- Menampilkan Daftar Mahasiswa dengan Tipe Data Array di
PHP -->
	<ul>
		<li><?php echo $mahasiswa[0]; ?></li>
		<li><?php echo $mahasiswa[1]; ?></li>
		<li><?php echo $mahasiswa[2]; ?></li>
		<li><?php echo $mahasiswa[3]; ?></li>
	</ul>

<h3>Dengan Pengulangan Foreach</h3>
	<ul>
		<?php foreach( $mahasiswa as $mhs ) : ?>
		<li><?= $mhs; ?></li>
		<?php endforeach; ?>
	</ul>

<h3>Data Array dalam Array dengan HTML dan PHP</h3>

<!-- Bagian ini jadi salah
	<ul>
Penyebab salahnya pada bagian $datamhs[0], karena
tipe datanya adalah Array Multi Dimensi jadi yang dicetak bukan
elemennya tapi Arraynya 
		<li><?php echo $datamhs[0]; ?></li>
		<li><?php echo $datamhs[1]; ?></li>
		<li><?php echo $datamhs[2]; ?></li>
		<li><?php echo $datamhs[3]; ?></li>
	</ul>
-->
<!-- maka harus diubah seperti kode berikut ini -->

 <?php foreach( $datamhs as $mhs ) : ?>
	<ul>
		<li><?php echo $mhs[0]; ?></li>
		<li><?php echo $mhs[1]; ?></li>
		<li><?php echo $mhs[2]; ?></li>
		<li><?php echo $mhs[3]; ?></li>
	</ul>
	<?php endforeach; ?>

	<h3>Data Array dalam Array dengan Pengulangan Foreach</h3>
<?php foreach( $datamhs as $mhs ) : ?>

		<ul>
			<li>Nama :<?= $mhs[0]; ?></li>
			<li>N I M :<?= $mhs[1]; ?></li>
			<li>Prodi :<?= $mhs[2]; ?></li>
			<li>Email :<?= $mhs[3]; ?></li>
		</ul>
	<?php endforeach; ?>
<!-- Penulisan data mahasiswa tidak boleh terbalik susunannya
misal sebelumnya Nama Mhs duluan diubah NIM duluan, tidak ada
kesalahan namun tampilannya jadi kurang tepat, halini karena
terjadi Array numerik adalah Array yang indexnya angka, ingat
bahwa Array adalah pasangan Key dan Value, Key-nya adalah index
yang dimulai dari Nol.
Agar kesalahan tidak terjadi maka Array harus diubah menjadi
Array Assosiatif dimana Index-nya adalah String -->
</body>
</html>
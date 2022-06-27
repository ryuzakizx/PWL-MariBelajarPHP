<!-- Cara Menampilkan Data Tipe Array (Review) -->
<?php
	$nama = "STMIK PALANGKARAYA";
	$huruf = ["A","B","C","D","E","F","G","H","I"];
	$angka = [[1,2,3],[4,5,6],[7,8,9]];

	//Cara Menampilkan data biasa
	echo $nama;
	echo "<br>";
	//Cara Menampilkan isi data tipe array biasa echo $huruf; //dianggap salah karena echo tidak bisa mencetak Array tapi mencetak elemen Araay, maka penulisan yang benar seperti berikut
	echo "<br>";
	echo $huruf[5];
	echo "<br>";

	//Cara Menampilkan isi data tipe array multi dimensi
	echo $angka[0][0];
	echo "<br>";
	echo $angka[1][0];
	echo "<br>";
?>

	<!-- Menampilkan isi array biasa dengan perulangan foreach -->
	<?php foreach( $huruf as $isi_array) : ?>
	<?= $isi_array; ?>
	<?php endforeach; ?>
	<br>

	<!-- Menampilkan isi array multi dimensi dengan perulangan
	foreach-->
	<?php foreach( $angka as $data_array ) : ?>
		<?php foreach( $data_array as $isi_array ) : ?>

			<?= $isi_array; ?>

<?php endforeach; ?>
<?php endforeach; ?>
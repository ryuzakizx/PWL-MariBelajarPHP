<?php
	// Variabel scope atau ruang lingkup variabel
	// Review Bentuk penulisan variabel yang sudah dipelajari sebelumnya
	$x = 10; //disebut variabel local hanya dikenali untuk latihan 10 ini
	echo "$x";
	echo "<br>";

function tampilx() {
	 $y = 20;
	 echo $y;
	 echo "<br>";
 }
 tampilx();

function tampily() {
	 global $x;
	 global $y;
	 echo $x;
	 echo "<br>";
	 echo $y;
 }
 tampily();
echo "<br>";
?>
<?php
 //Struktur Kendali atau Control Flow dengan Pengulangan
 //Pengulangan dengan For :
 for( $i = 0; $i < 5; $i++ ) {
 echo "Selamat Datang di STMIK Palangkaraya <br>";
 } //tanda kurung kurawal untuk menandai blok yang akan di ulang 

 //Pengulangan dengan While :
 $i = 0;
 while( $i < 5 ) {
 echo "Kita Berada di STMIK Palangkarya <br>";
 $i++; //jangan lupa increment/decrement ini karena kalau tidak ada maka pengulangan berlangsung terus menerus dan tak pernah berhenti
 } 

 // Pengulangan dengan Do...While :
 $i = 0;
 do {
 echo "Kuliah Beneran, Benar-Benar Kuliah <br>";
 $i++;
 } while( $i < 5 ); //perbedaan dengan while dikerjakan dulu baru kondisi di cek, pada while dicek dulu baru dikerjakan
?> 
<?php
 //Mengenal dan menggunakan data Array
 //Array adalah variabel yang dapat memiliki banyak nilai, cara penulisannya ada dua yaitu :
 // 1. Cara Lama
 $hari =
array("Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu")
; 
// 2. Cara Baru
 $bulan = ["Januari", "Februari", "Maret", "April", "Mei",
"Juni", "Juli", "Agustus", "September", "Nopember", "Desember"];
 // Tipe data dalam satu array boleh berbeda, selalu terdapat pasangan antara key dan value, keynya adalah index yang dimulai dari nol [0] => string(5)
 $array1 = [123,"tulisan",false]; 

 // //Menampilkan array dengan var_dump() atau print_r()
 echo "<h1>Mengenal dan Menggunakan Data Array</h1>";
 echo "<h4>Hasil tampilan array bernama hari menggunakan var_dump() adalah :</h4>";
 var_dump($hari); 
 
 echo "<h4>Hasil tampilan array bernama bulan menggunakan print_r() adalah :</h4>";
 print_r($bulan); 
 // //Menampilkan satu elemen pada array
 echo "<h4>Menampilkan isi sebuah elemen data Array</h4>";
 echo $bulan[2];
 echo "<br>";
 echo $hari[4];
 echo "<br>";
 //echo "<br>";
 //echo "<br>";
?> 

<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
         <title>Latihan Menampilkan Data Array</title>
         <!--Membuat class bernama kotak dan bersih dengan CSS-->
         <style type="text/css"> 
                .kotak { 
                    width: 50px;
                     height: 50px;
                     background-color: greenyellow;
                     text-align: center;
                     line-height: 50px;
                     margin: 3px;
                     float: left; 
                    }
                    
                    .bersih { 
                            clear: both; 
                            }
        </style>
 </head>
 <body> 
 <!--Menampilkan elemen array untuk keperluan user,
menggunakan pengulangan biasa seperti "for" atau pengulangan
pada array yaitu "foreach"-->

<h3>Menampilkan Elemen Array Untuk Keperluan Pengguna</h3>  

<?php
 $angka = [3,2,15,20,11,77,89,99,100,109];
 ?>

 <!-- Pengulangan menggunakan For -->
 <h4>Pengulangan Menggunakan For</h4>
 <?php for ($i = 0; $i < count($angka); $i++) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
 <?php } ?>
 
 <div class="bersih"></div></div> 

 <!-- Pengulangan menggunakan Foreach -->
 <h4>Pengulangan Menggunakan Foreach</h4>
 <?php foreach ( $angka as $a ) { ?> 
    <div class="kotak"><?php echo $a; ?></div>
 <?php } ?> 

 <div class="bersih"></div> 
<!-- Pengulangan menggunakan Foreach dan template tanda {} diganti dengan : dan endforeach--> 
<h4>Pengulangan Menggunakan Foreach dan Template</h4>
 <?php foreach($angka as $a ) : ?>
        <div class="kotak"><?= $a; ?></div>
 <?php endforeach; ?>
 </body>
</html> 
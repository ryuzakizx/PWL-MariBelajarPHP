<?php
 //Array biasa
 $mahasiswa = ["Fathur","E1657401002","Manajemen Informatika",
"fathur@gmail.com"];

 //Array Multi dimensi atau Array dalam Array
 $datamhs = [
 ["Danang","E1757401011","Manajemen Informatika","danang@gmail.com"], ["Fathur","E1657401002","Manajemen Informatika","fathur@gmail.com"], ["Safitri","E1657401112","Manajemen Informatika","fitri@gmail.com"]
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
 
 <!-- Menampilkan Daftar Mahasiswa Manual dengan HTML Biasa-->
 <h3>Dengan HTML Biasa secara langsung</h3>
 <ul>
 <li>Fathurahman</li>
 <li>E1657401002</li>
 <li>Manajemen Informatika</li>
 <li>fathur@gmail.com</li>
 </ul>

 <!-- Menampilkan Daftar Mahasiswa dengan Data Array di PHP-->
 <h3>Dengan HTML dan PHP</h3>
 <ul>
 <li><?php echo $mahasiswa[0]; ?></li>
 <li><?php echo $mahasiswa[1]; ?></li>
 <li><?php echo $mahasiswa[2]; ?></li>
 <li><?php echo $mahasiswa[3]; ?></li>
 </ul>

<!--   <h1>Menampilkan Data Array Multi Dimensi</h1>
 <h3>Data Array dalam Array atau Array Multi Dimensi dengan
Pengulangan Foreach</h3>
 <?php foreach( $datamhs as $mhs ) : ?>
 <ul>
 <li>Nama :<?= $mhs[0]; ?></li>
 <li>N I M :<?= $mhs[1]; ?></li>
 <li>Prodi :<?= $mhs[2]; ?></li>
 <li>Email :<?= $mhs[3]; ?></li>
 </ul>
 <?php endforeach; ?> -->
 <h3>Dengan Pengulangan Foreach</h3>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
<li><?= $mhs; ?></li>
<?php endforeach; ?>
</ul>
 </body>
</html> 

<!-- note :
ada perbedaan di nama , html = Fathurahman , php dan foreach Fathur saja -->

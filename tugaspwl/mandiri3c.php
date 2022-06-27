<?php

//Array Multi dimensi atau Array dalam Array
$datamhs = [
 ["nim" => "E1757401011", 
    "nama" => "Danang", 
    "prodi" => "Manajemen Informatika",
    "email" => "danang@gmail.com", 
    "gambar" => "foto/kaka.png"],

 ["nim" => "E1657401002", 
    "nama" => "Fathur", 
    "prodi" => "Manajemen Informatika", 
    "email" => "fathur@gmail.com", 
    "gambar" => "foto/kaka.png"],

 ["nim" => "E1657401112", 
    "nama" => "Safitri","prodi" => 
    "Manajemen Informatika", 
    "email" => "fitri@gmail.com", 
    "gambar" => "foto/kaka.png"]
 ]

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <title>Kirim Data Dengan GET</title>
    </head>
 <body>
    <h1>Daftar Mahasiswa</h1>
 <?php foreach( $datamhs as $mhs ) : ?>
     <ul>    
        <li>Nama :<?= $mhs['nama']; ?></li>
        <li>N I M :<?= $mhs['nim']; ?></li>     
        <!--  <li>Prodi :<?= $mhs['prodi']; ?></li>
        <li>Email :<?= $mhs['email']; ?></li> -->
        <li><img src="<?= $mhs['gambar']; ?>" height="100px" width="120px"></li>
     </ul> 
    <?php endforeach; ?>
 </body>
</html> 




 <!-- <?php
//Array Multi dimensi atau Array dalam Array
$datamhs = [
["E1757401011", "Danang", "Manajemen Informatika",
"danang@gmail.com"], ["E1657401002", "Fathur", "Manajemen
Informatika", "fathur@gmail.com"], ["E1657401112", "Safitri",
"Manajemen Informatika", "fitri@gmail.com"]
]
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Menampilkan Data Array Multi Dimensi</h1>
<h3>Data Array dalam Array atau Array Multi Dimensi dengan
Pengulangan Foreach</h3>
<?php foreach( $datamhs as $mhs ) : ?>
<ul>
<li>Nama :<?= $mhs[1]; ?></li>
<li>N I M :<?= $mhs[0]; ?></li>
<li>Prodi :<?= $mhs[2]; ?></li>
<li>Email :<?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html> -->
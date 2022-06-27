<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Untuk Link Detail Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
   
<?php 
   if ( !isset($_GET["nama"]) ||
         !isset($_GET["nim"]) ||
         !isset($_GET["gambar"])) {
      // code...
            //redirect (memindahakan ke halaman sebelumnya)
            header("Location: latih10.php");
            exit;
   }

 ?>

     <ul>    
        <li>Nama :<?= $_GET['nama']; ?></li>
        <li>N I M :<?= $_GET['nim']; ?></li>     
         <!-- <li>Prodi :<?= $mhs['prodi']; ?></li>
        <li>Email :<?= $mhs['email']; ?></li> -->
         <li>
            <img src="<?= $_GET['gambar']; ?>" height="100px" width="120px">
         </li>
     </ul> 
     <a href="latih10.php">Kembali</a>
  
   
</body>
</html>

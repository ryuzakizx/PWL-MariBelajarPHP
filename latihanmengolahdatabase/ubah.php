<?php
require 'fungsi.php';
//Mengambil data dari URL
$id = $_GET['nim'];
//Query data mhs berdasarkan $id
$mhs = query("SELECT * FROM mahasiswa WHERE Nim = '$id'")[0];
if (isset($_POST["submit"])) {
   if(ubah($_POST) > 0) {
       echo "
       <script>
       alert('Data Berhasil Diubah');
       document.location.href = 'latihan13.php';
       </script>
       ";
   } else {
       echo "
       <script>
       alert('Data Gagal Diubah');
       document.location.href = 'latihan13.php';
       </script>
       ";
   }
}
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Perbaiki Data Mahasiswa</title>
</head>
<body>
   <h1>Perbaiki Data</h1>
   <form action="" method="POST">
       <ul>
           <li>
               <label for="nim">N I M </label>
               <input type="text" name="nim" id="nim" required
               value="<?=$mhs["NIM"];?>"> 
           </li>
           <li>
               <label for="nama">NAMA </label>
               <input type="text" name="nama" id="nama"
               value="<?=$mhs["Nama"];?>">
           </li>
           <li>
               <label for="email">EMAIL </label>
               <input type="text" name="email" id="email"
               value="<?=$mhs["Email"];?>">
           </li>
           <li>
               <label for="prodi">PROGRAM STUDI</label>
               <input type="text" name="prodi" id="prodi"
               value="<?=$mhs["Prodi"];?>">
           </li>
           <li>
               <label for="foto">NAMA FILE FOTO</label>
               <input type="text" name="foto" id="foto"
               value="<?=$mhs["Foto"];?>">
           </li>
           <li>
               <button type="submit" name="submit">UPDATE</button>
               <button type="reset" name="reset">RESET</button>
               <button><a href="latihan13.php">BATAL</button></a>
           </li>
       </ul>
   </form>
</body>
</html> 

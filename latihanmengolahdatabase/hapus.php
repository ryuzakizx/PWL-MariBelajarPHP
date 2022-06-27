<?php
require 'fungsi.php'; 
$id = $_GET['nim'];
if (hapus($id) > 0 ) {
   echo "
   <script>
   alert('Data Berhasil Dihapus');
   document.location.href = 'latihan13.php';
   </script>
   ";
} else {
   echo "
   <script>
   alert('Data Gagal Dihapus');
   document.location.href = 'latihan13.php';
   </script>
   ";
}
?>

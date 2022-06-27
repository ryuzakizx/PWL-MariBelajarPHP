<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>POST</title>
</head>
<body>
<?php if (isset($_POST['nama'])) : ?> <!--ini untuk memeriksa apakah variabel nama yang dikirimkan sudah ada atau belum -->
 <h1>Selamat Datang <?php echo $_POST["nama"];?></h1>
<?php endif;?> <!-- ini baris untuk mengakhiri script if(isset($_POST['nama'])) -->
</body>
</html> 
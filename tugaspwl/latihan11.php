<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Metode POST untuk ambil data dari Form dengan Parameter</title>
</head>
<body>
<h1>Mengirim Data dengan Metode POST</h1>
<!-- Metode POST menggunakan Form bukan menggunakan alamat URL -->
<form action="Latihan11a.php" method="POST"> <!-- form harus diberi
attribut untuk mengirimkan data kemana jika tidak ada maka action
akan berlaku untuk halaman ini sendiri dan jika methodnya juga
kosong maka akan dikirim kehalaman ini sendiri dgn metode GET-->
Masukan Nama :
<input type="text" name="nama"> <!-- membuat masukan atau inputan
data dari pengguna name digunakan untuk menampilkan datanya di
latihan 11a-->
<br>
<button type="submit" nama="submit">Kirim</button> <!-- harus
diberi tombol untuk mengirimkan form -->
</form>
</body>
</html>
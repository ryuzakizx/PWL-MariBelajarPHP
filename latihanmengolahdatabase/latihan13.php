<?php 
require 'fungsi.php';
$mhs = query("SELECT * FROM mahasiswa");
$result = mysqli_query($conn,"SELECT * FROM mahasiswa"); 

if ( isset ($_POST['cari']) ) {
  $mhs = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Halaman Admin</title>
</head>
<body>
  <h1 align="center">Daftar Mahasiswa</h1>
  <p align="center"><a href="tambah.php">Tambah Data</a></p>
  <form action="" method="POST">
    <input type="text" name="keyword" size="60"autofocus placeholder="Masukan Kata Kunci Pencarian" autocomplete="off">
    <button type="submit" name="cari">CARI</button>
  </form><br>
  <table border="1" cellpadding="10" cellspacing="0" align="center">
    <tr>
      <th>No.</th>
      <th>Gambar</th>
      <th>Nim</th>
      <th>Nama</th>
      <th>Tempat Lahir</th>
      <th>Tgl Lahir</th>
      <th>Tindakan</th>
    </tr>
    <?php $i=1; ?>
    <?php foreach($mhs as $row) : ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><img src="foto/<?php echo $row["Foto"]; ?>" width="100px" height="140px"></td>
        <td>
          <?php echo $row["Nim"]; ?>
        </td>
        <td>
          <?php echo $row["Nama"]; ?>
        </td>
        <td>
          <?php echo $row["Email"]; ?>
        </td>
        <td>
          <?php echo $row["Prodi"]; ?>
        </td>
        <td>
          <a href="ubah.php?nim=<?= $row["Nim"]; ?>">Ubah</a> |
          <a href="hapus.php?nim=<?= $row["Nim"]; ?>" onclick="return  confirm('Yakin Akan Dihapus..?');">Hapus</a>
        </td>
      </tr>
      <?php $i++;?>
    <?php endforeach; ?>
  </body>
  </html> 
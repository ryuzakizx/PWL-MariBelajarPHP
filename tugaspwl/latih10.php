<?php 

// $x = 100; //hanya menjelaskan variabel x dan y yaitu local, ditampilkan hanya x , karena echo hanya X 
// $y = 70;
// echo "$x";
// echo "<br>";

// function tampilx() { //belajar fungsi
// 	//global $x;
// 	//$x = 50;
// 	$y = 20;
// 	echo "$y";
// 	echo "<br>";
// 	echo "$x"; // variabel x dalam fungsi ini tidak dikenali karena variabel x di function tidak sama dengan variabel x sebelumnya
// 	echo "<br>";	
//  }
//  	tampilx();

// function tampily()
// {
// 	global $x; 
// 	global $y;
// 	echo "$x";
// 	echo "<br>";
// 	echo $x + $y;

// }
// tampily();
// echo "<br>";

// var_dump($_GET);
// 	echo "<br>";
// var_dump($_POST);
// 	echo "<br>";
// var_dump($_SERVER);
// 	echo "<br>";
// echo $_SERVER["SERVER_NAME"];

// var_dump($_GET);
// 	echo "<br>";
// 	$_GET;
// 	$_GET["nama"] = "Anton";
// 	$_GET["nim"] = "E1657401002";
// 	var_dump($_GET);
// 	echo "<br>";

// http://localhost/praktikumpwl1_kamal/tugaspwl/superglobal.php?nama=Kamaludin&nim=E2057401023
// var_dump($_GET);
// echo "<br>";
// echo $_GET["nama"];
// echo "<br>";
// $hari = ["Senin", "Selasa"];
// echo $hari[1];

	

//Array Multi dimensi atau Array dalam Array
$mahasiswa = [
 [
 	"nama" => "Danang",
 	"nim" => "E1757401011",  
    "prodi" => "Manajemen Informatika",
    "email" => "danang@gmail.com", 
    "gambar" => "foto/kaka.png"],

 [
 	"nama" => "Fathur",
 	"nim" => "E1657401002", 
    "prodi" => "Manajemen Informatika", 
    "email" => "fathur@gmail.com", 
    "gambar" => "foto/kaka.png"],

 [
	"nama" => "Safitri",
 	"nim" => "E1657401112", 
    "prodi" => "Manajemen Informatika", 
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
<!--  <?php foreach( $mahasiswa as $mhs ) : ?>
     <ul>    
        <li>Nama :<?= $mhs['nama']; ?></li>
        <li>N I M :<?= $mhs['nim']; ?></li>     
         <li>Prodi :<?= $mhs['prodi']; ?></li>
        <li>Email :<?= $mhs['email']; ?></li>
         <li><img src="<?= $mhs['gambar']; ?>" height="100px" width="120px"></li>
     </ul> 
    <?php endforeach; ?> --> 

<ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
   	<li>
   		<a href="latihan10a.php?nama=<?php echo $mhs["nama"]; echo "&"; echo "nim="; echo $mhs["nim"]; echo "&"; echo "gambar="; echo $mhs["gambar"]?>"><?= $mhs["nama"]; ?></a>
   	</li>
   	<?php endforeach; ?>
  </ul>
   

 </body>
</html> 

 

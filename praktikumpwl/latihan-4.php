<?php
 // Penulisan Operator
 // Operator Aritmatika + - * / %
 echo "<p>";
 $x = 10;
 $y = 20;
 echo "<h3>Operator Aritmatika :</h3>";
 echo "Nilai $x dan $y dioperasikan dengan + hasilnya ";
 echo $x + $y;
 echo "<br>";
 echo "</p>"; 

 // Operator Penggabung String atau concatenation atau concat menggunakan simbol titik
 echo "<p>";
 echo "<h3>Operator Penggabungan :</h3>";
 $nama_depan = "STMIK";
 $nama_belakang ="PALANGKARAYA";
 echo "Kata $nama_depan ";
 echo "Digabung dengan kata $nama_belakang <br>";
 echo "Menjadi $nama_depan" . " " . $nama_belakang;
 echo "</p>"; 

 // Operator Assignment atau penugasan simbolnya = += -= *= /= %= .=
 echo "<p>";
 echo "<h3>Operator Assignment :</h3>";
 $x = 1;
 echo "Nilai x = $x <br>";
 $x += 5;
 echo "Nilai x setelah diberi operator assignment +=5 menjadi $x
<br><br>"; 

 $nama = "STMIK";
 echo "Kata $nama <br>";
 $nama .= " ";
 $nama .= "PALANGKARAYA";
 echo "Menjadi $nama <br>";
 echo "Setelah diberi operator assignment .= (penggabungan)";
 echo "</p>";

  // Operator Perbandingan < > <= >= == !=
 // Operator perbandingan tidak membandingkan tipe datanya 
 echo "<p>";
 echo "<h3>Operator Perbandingan :</h3>";
 echo "Nilai dari 1 < 5 hasilnya adalah ";
 var_dump(1 < 5); //untuk cek hailnya benar atau salah
 echo "<br>";
 echo 'Sedangkan Nilai dari 1 == "1" hasilnya adalah ';
 var_dump(1 == "1");
 echo "</p>"; 

// Operator Identitas ===, !==
 // Operator Identitas seperti operator perbandingan namun sekaligus memeriksa tipe datanya
 echo "<p>";
 echo "<h3>Operator Identitas :</h3>";
 echo "Nilai dari 1 == 1 hasilnya adalah ";
 var_dump(1 === "1");
 echo "</p>"; 

 // Operator Logika && || !
 // digunakan untuk pengkondisian
 echo "<p>";
 echo "<h3>Operator Logika :</h3>";
 $x = 10;
 echo "Nilai 10 < 20 dan 10 % 2 adalah ";
 var_dump($x < 20 && $x % 2 == 0); // hasilnya true
 echo "<br>";
 $x = 30;
 echo "Nilai 30 < 20 dan 30 % 2 adalah ";
 var_dump($x < 20 && $x % 2 == 0); //hasilnya false
 echo "</p>"; 
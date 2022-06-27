<?php
 //Penggunaan Fungsi Time / Date
 //Menggunakan Built in Function PHP tentang Fungsi Date()
 date(""); //fungsi date() memerlukan minimal 1 parameter atau nilai yang dimasukan dalam tanda kurung fungsinya
 date("l"); //perhatikan hasilnya
 echo date("l"); //perhatikan hasilnya
 echo date("d");
 echo date("m");
 echo date("l, d-M-Y"); //untuk menampilkan date format tertentu
 echo "<br>";
 echo time(); //nilai UNIX Timestamp atau EPOCH Time, detik yang sudah berlalu sejak 1 januari 1970
 echo date("l", time());
 echo date("l", time()+172800);
 echo date("l", time()+60*60*24*2);
 echo date("d M Y", time()+60*60*24*100);
 echo date("d M Y", time()-60*60*24*100); 

 //fungsi mktime() untuk membuat sendiri detik saat inidengan 6 parameter
 // mktime(0,0,0,0,0,0) dengan urutan parameter Jam, Menit, Detik, Bulan, Tanggal, Tahun
 echo date("l", mktime(0,0,0,1,4,1969));

 //fungsi strtotime() kebalikan dari mktime()
 echo strtotime("25 aut 1985");
?>
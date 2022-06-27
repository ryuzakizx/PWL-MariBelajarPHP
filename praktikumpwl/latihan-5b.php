<!doctype html>
<html>
     <head>
        <title>Latihan Pengulangan</title>
    </head>
    <body>
         <!--Lanjutan Latihan 5a membuat tabel pada script HTML-->
         <table border="1" cellpadding="10" cellspacing="0"> 
                <tr>
                     <td>1,1</td>
                     <td>1,2</td>
                     <td>1,3</td>
                     <td>1,4</td>
                     <td>1,5</td>
                </tr>
                <tr>
                     <td>2,1</td>
                     <td>2,2</td>
                     <td>2,3</td>
                     <td>2,4</td>
                     <td>2,5</td>
                </tr> 

                <?php //Membuat tabel dengan pengulangan pada script PHP
                for( $i = 1; $i <= 3; $i++ ) {
                    echo "<tr>";
                        for ($j=1; $j <=5; $j++) {
                            echo "<td>$i,$j</td>";
                        }
                    echo "</tr>";
                 }
 ?>

 <?php //Syntax Templeting, memisahkan HTML dari PHPnya ?>
 <?php for( $i=1; $i<=3; $i++ ) { //agar mudah utk templeting maka tanda { diganti dengan tanda : ?> 
                        <tr>
                            <?php for( $j = 1; $j <= 5; $j++ ) : //templeting ?>
                        <td><?php echo "$i, $j"; //<?php echo bisa diganti dengan <?= untuk mencetak isi variabel seperti contoh baris ini ?></td>
                        <?php endfor; //templeting ?> 
                        </tr>
 <?php } // tanda { disini diganti dengan endfor; utk templeting ?>
 </table>
 </body>
</html> 

 

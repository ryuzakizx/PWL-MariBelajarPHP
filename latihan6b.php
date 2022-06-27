<!doctype html>
<html>
    <head>
        <title>Latihan Pengkondisian</title>
    <style type="text/css">
 
.warna-baris {
 background: silver;
 }

    </style>
    </head>

 <body>
    <center>
 <table border="1" cellpadding="10" cellspacing="0">

    <?php //Syntax Templeting, memisahkan HTML dari PHPnya ?>
         <?php for( $i=1; $i<=5; $i++ ) : ?>
         <?php if( $i % 2 == 1) : //untuk baris ganjil i modulus 2 == 1 ?>
         <tr class="warna-baris">
         <?php else : ?>
         <tr>
         <?php endif; ?>
         <?php for( $j = 1; $j <= 5; $j++ ) : ?>
         <td><?= "$i, $j"; ?></td>
         <?php endfor; ?>
         </tr>
         <?php endfor; ?>
        </table>
        </center>
    </body>
</html>
<?php
    //Cek apakah tombol submit sudah ditekan atau belum
    if (isset($_POST["submit"])) {
         //Cek username dan password
         if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
         //jika benar, redirect ke halaman admin
            header("Location: Latihan-12a.php");
         } else {
         //jika salah, redirect ke halaman informasi salah
         echo "
<script>
 alert('Username dan Password Salah...!');
 exit;
</script>
"; 
         }
    }
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Halaman Login</title>
</head>
<body>
    <h1>Login Admin</h1>
    <ul>
      <form action="" method="POST">
         <li>
             <label for="username">Username :</label>
             <input type="text" name="username" id="username">
         </li>
         <li>
             <label for="password">Password :</label>
             <input type="password" name="password" id="password">
        </li>
         <li>
             <button type="submit" name="submit">Login</button>
         </li>
    </form>
  </ul>
</body>
</html>

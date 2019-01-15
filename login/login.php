<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == "devano" && $pass == "devano") {
        echo "Login Berhasil";
      }
    else {
       echo "Login Gagal";
     }
    ?>
    <a href="logout.php">Logout</a>
  </body>
</html>

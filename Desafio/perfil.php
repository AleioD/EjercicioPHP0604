<?php

if($_POST) {
  
}
  var_dump($_POST);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <style>

    .link {
      display:inline-block;
      padding:8px;
      text-decoration:none;
      background-color:rgba(0,0,0,0.8);
      color:white;
      margin-top: 8px;
    }

  </style>
</head>
<body>

  <h1>Te damos la bienvenida <php=$_COOKIE["nombre"]?> </h1>

  <form action="" method="post">
    <input type="text" name="nombre" value="">
    <input type="submit" name="resetear" value="Resetear colo de fondo">
  </form>

<a href="home.php" class="link">VOLVER...</a>

</body>
</html>

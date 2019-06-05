<?php

  $nombre = "nombre";
  $nombreElegido = $_POST["nombre"];

  $cookieColor = "color";
  $colorElegido = $_POST["colorPreferido"];


  setcookie($nombre, $nombreElegido, time()+60*60*24*7);
  setcookie($color, $colorElegido, time()+60*60*24*7);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <form action="" method="post">

    <h3>Nombre:
      <input type="text" name="nombre" value="">
    </h3>

    <h3>¿Cuál es tu color preferido?
      <select name="colorPreferido">
        <option value="">Elegí un color...</option>
        <option value="red">Rojo</option>
        <option value="blue">Azul</option>
        <option value="green">Verde</option>
        <option value="yellow">Amarillo</option>
        <option value="orange">Naranja</option>
      </select>
    </h3>

    <p>
      <input type="submit" name="setear" value="Enviar">
    </p>

  </form>

</body>
</html>

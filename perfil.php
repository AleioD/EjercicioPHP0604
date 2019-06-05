<?php

  if ($_GET) {
    $json = file_get_contents("users.json");
    $jsonDecode = json_decode($json, true);
    $validation = 0;
    foreach ($jsonDecode as $oneUser) {
      if ($oneUser["email"] == $_GET["email"]) {
        echo "Nombre Completo: " . $oneUser["fullName"] . "<br>";
        echo "Email: " . $oneUser["email"] . "<br><br>";
        $validation = 1;
      }
    }
    if ($validation == 0) {
      echo "El usuario que busca no existe en la base de datos.<br><br>";
    };
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil</title>
  </head>
  <body>
    <form class="" action="" method="get">
      <label for="email">Ingrese el mail que desea consultar</label><br>
      <input type="email" name="email" value=""><br>
      <input type="submit" name="" value="Enviar">
    </form>
  </body>
</html>

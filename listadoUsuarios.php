<?php

$json = file_get_contents("users.json");
$jsonDecode = json_decode($json, true);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User List</title>
  </head>
  <body>
    <h1>Listado de Usuarios</h1>
    <ul>
      <?php foreach ($jsonDecode as $oneUser): ?>
        <li><a href="perfil.php/?id=<?=$oneUser["id"];?>">Usuario N° <?=$oneUser["id"];?></a></li>
          <ul>
            <li>Nombre Completo: <?=$oneUser["fullName"];?></li>
            <li>Email: <?=$oneUser["email"];?></li>
            <br>
          </ul>
      <?php endforeach; ?>
    </ul>
  </body>
</html>

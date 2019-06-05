<?php
  session_start();
  //var_dump($_SESSION);
  $json = file_get_contents("users.json");
  $jsonDecode = json_decode($json, true);
  //echo "<pre>";var_dump($jsonDecode);echo "</pre>";
  foreach ($jsonDecode as $pos => $oneUser) {
    if ($oneUser["email"] == $_SESSION["usuario"]){
      $nombre = $oneUser["fullName"];
      $userPos = $pos;
    }
  }

  if ($_POST) {
    $jsonDecode[$userPos]["fullName"] = $_POST["fullName"];
    file_put_contents("users.json", json_encode($jsonDecode));
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cuenta</title>
  </head>
  <body>
    <h1>Tus datos</h1>
    <form class="" action="" method="post">
      Nombre Completo:
      <input type="text" name="fullName" value="<?=$nombre;?>">
      <input type="submit" name="" value="Guardar modificaciones">

    </form>
  </body>
</html>

<?php

  if($_POST){
    $json = file_get_contents("users.json");
    if($json == ""){
      $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
      $_POST["id"] = 1;
      $jsonDecode[] = $_POST;
      $json = json_encode($jsonDecode);
      file_put_contents("users.json", $json);
    } else {
        $validation = 0;
        $jsonDecode = json_decode($json, true);
        $_POST["id"] = count($jsonDecode)+1;
        foreach($jsonDecode as $oneUser){
          if ($oneUser["email"] == $_POST["email"]){
            echo "El mail ingresado ya se encuentra en la base de datos";
            $validation = 1;
          }
        }
        if($validation == 0){
          $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
          $jsonDecode[] = $_POST;
          $json = json_encode($jsonDecode);
          file_put_contents("users.json", $json);
        } else {
          $json = json_encode($jsonDecode);
          file_put_contents("users.json", $json);
          }
      }
    }

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <label for="fullName">Nombre Completo</label>
      <input type="text" name="fullName" value=""><br>
      <label for="email">Email</label>
      <input type="email" name="email" value=""><br>
      <label for="password">Password</label>
      <input type="password" name="password" value=""><br>
      <input type="submit" name="" value="Registrarse">
    </form>

  </body>
</html>

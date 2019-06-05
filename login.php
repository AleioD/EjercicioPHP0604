<?php
  session_start();
  if ($_POST) {
    if (isset($_POST["reset"])) {
      $_SESSION["usuario"] = "";
      header("Location: listadoUsuarios.php");
    }
    $json = file_get_contents("users.json");
    $jsonDecode = json_decode($json, true);
    $mail = "";
    foreach ($jsonDecode as $pos => $oneUser) {
      if ($oneUser["email"] == $_POST["email"]) {
        $mail = $_POST["email"];
        $pass = $oneUser["password"];
      }
    }
    if ($mail == "") {
      $errorMail = "El mail no existe en la base de datos. <a href='register.php'>Registrarse</a>";
    } elseif (password_verify($_POST["password"], $pass)) {
      $_SESSION["usuario"] = $mail;
      header("Location: cuenta.php");
    } else {
      $errorPass = "La contraseña es incorrecta";
    }
  }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <?= isset($logueado) ? $logueado : '';?>
    <form class="" action="" method="post">
      <label for="user">Email</label>
      <input type="email" name="email" value="">
      <br>
      <?= isset($errorMail) ? $errorMail : '';?>
      <br><br>
      <label for="password">Password</label>
      <input type="password" name="password" value="">
      <br>
      <?= isset($errorPass) ? $errorPass : '';?>
      <br><br>
      <input type="submit" name="" value="Iniciar sesión">
      <?= $_SESSION["usuario"] != "" ? "<input type='submit' name='reset' value='Cerrar sesión'>" : '';?>
    </form>
  </body>
</html>

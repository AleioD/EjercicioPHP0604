<?php
  session_start();
  if ($_POST) {
    /*var_dump($_POST);exit;*/
    if($_POST["r"]){
    $_SESSION["contador"] = 0;
  } elseif($_POST["i"]) {
    $_SESSION["contador"] = $_SESSION["contador"]+1;
  } else {
    $_SESSION["contador"] = $_SESSION["contador"];
  };
  header("Location: mostrar.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="submit" name="r" value="Reiniciar">
      <br><br>
      <input type="submit" name="i" value="Incrementar">

    </form>
  </body>
</html>

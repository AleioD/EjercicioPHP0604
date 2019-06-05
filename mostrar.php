<?php
  session_start();
  if($_SESSION["contador"]){
    $contador = $_SESSION["contador"];
  };

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>El contador es <?=$_SESSION["contador"];?></h1>
  </body>
</html>

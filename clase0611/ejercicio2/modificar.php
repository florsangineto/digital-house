<?php

  session_start();


 ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="mostrar.php" method="post">
      <input type="submit" name="reiniciar" value="Reiniciar">
    </form>
    <form action="mostrar.php" method="post">
      <input type="submit" name="incementar" value="Incrementar">
    </form>

  </body>
</html>

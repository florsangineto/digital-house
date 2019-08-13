<?php
  session_start();
  $_SESSION["name"] = $_POST['nombre'];

  setcookie("color", $_POST['colorPreferido'] , time()+3600);


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <style>
   body {
     background: <?php echo $_COOKIE["color"] ?>;
   }

    .link {
      display:inline-block;
      padding:8px;
      text-decoration:none;
      background-color:grey;
      color:white;
      margin-top: 8px;
    }

  </style>
</head>
<body>

  <h1>Te damos la bienvenida <?php echo $_SESSION["name"]; ?> </h1>

  <form action="" method="post">
    <input type="submit" name="resetear" value="Resetear color de fondo" >
  </form>

<a href="home.php" class="link">VOLVER...</a>

</body>
</html>

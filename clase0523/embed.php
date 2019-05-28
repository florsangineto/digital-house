<?php
$nombre=[NOMBRE];
$sorteo = rand(0, 1);
$web = [Google, Facebook, Twitter]

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido [NOMBRE]</h2>
    <h3>¿Es usted un ganador?</h3>

        <?php
        if ($sorteo == 1) {
          echo "Si";
        } else {
          echo "No";
        }

         ?>
    <h3>Algunos sitios interesantes:</h3>
    <ul>
      <?php for ($i=0; $i < count($web) ; $i++) :?>
        <li><?php echo $web[$i]; ?></li>
      <?php endfor ?>
      <li>
        <a href="https://google.com">Google</a>
      </li>
      <li>
        <a href="https://facebook.com">Facebook</a>
      </li>
      <li>
        <a href="https://twitter.com">Twitter</a>
      </li>
    </ul>
  </body>
</html>

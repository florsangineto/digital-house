<?php
 function dobles($array){
   foreach ($array as $num):
  $dobles[] = $num * 2;
    endforeach;

  return $dobles;
 }



 function aumentarContador(){

     return $contadorGlobal + 1;

 }


function entreDosNumeros ($numero, $limiteInferior = 0, $limiteSuperior = 100){
  if ($numero >=  $limiteInferior && $numero <= $limiteSuperior ) {
      return true;
  }

}


function entreDosNumeros ($numero, $limiteInterior, $limiteSuperior){
  if ($numero >=  $limiteInterior && $numero <= $limiteSuperior ) {
      return true;
  } else {
    return false;
  }

}



function entre0Y100($numero){
  $numero = 30;
  if ($numero > 0 && <= 100) {
    return true;
  } else {
    return false;
  }

}






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

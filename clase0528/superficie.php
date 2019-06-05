<?php
/*

Definir una función rectangulo() que retorne su superficie.
Definir una función cuadrado() que retorne su superficie.
Utilizando la función pi(), definir una función circulo() que retorne su superficie.*/

/*Definir una función triangulo() que retorne su superficie.*/
function triangulo($base, $altura){
  return $base * $altura / 2;
}


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<section>
  <h1>triangulo</h1>
  <?= triangulo(10,20) ?>
</section>

  </body>
</html>

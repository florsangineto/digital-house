<?php
  include("funciones.php");
  include("superficie.php");

  function calculo (){
    $tri1 = triangulo(10,20);
    $tri2 = triangulo(20,20);
    $tri3 = triangulo(40,20);

    return mayor($tri1, $tri2, $tri3);

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
      <h1>radios Circulos</h1>
        <?php echo calculo() ?>
    </section>
  </body>
</html>

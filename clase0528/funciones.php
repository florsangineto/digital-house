<?php

/*Definir una función mayor() que reciba 3 números y devuelva el mayor.*/
  function mayor($num1, $num2, $num3){
    if ($num1 > $num2 && $num1 > $num3) {
      return $num1;
    } elseif ($num2 > $num1 && $num2 > $num3) {
      return $num2;
    } else {
      return $num3;
    }
  }


/*Definir una función tabla() que reciba un parámetro base, un parámetro límite, y devuelve un array con la secuencia de números desde el numero base hasta el numero limite.*/
function tabla($base, $limite){
    $resultado=[];
    for ($i=1; $i <= $limite ; $i++) {
      $resultado[] = $base * $i;
    }
    return $resultado;


}

  /*Modificar mayor() para que si recibe sólo 2 parámetros, compare a esos dos números con el número 100.*/
  function mayor100($num1, $num2, $num3 = 100){
    if ($num1 > $num2 && $num1 > $num3) {
      return $num1;
    } elseif ($num2 > $num1 && $num2 > $num3) {
      return $num2;
    } else {
      return $num3;
    }
  }

  /*Modificar tabla para que si recibe un sólo parámetro utilice el número 100.*/
  function tabla100($base, $limite = 100){
      $resultado=[];
      for ($i=1; $i <= $limite ; $i++) {
        $resultado[] = $base * $i;
      }
      return $resultado;


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
        <h1>Mayor (10,20,30)</h1>
        <?= mayor(10,20,30)  ?>
      </section>

      <hr>

      <section>
        <h1>Tabla (10,20)</h1>
        <pre>
        <?= print_r(tabla(10,20))  ?>
      </pre>
      </section>
  </body>
</html>

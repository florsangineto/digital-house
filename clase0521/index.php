<pre>
<?php
/* Array PHP */
    $persona = [
        "nombre" => "Jon",
        "apellido" => "Snow",
        "edad" => 27,
        "hobbies" => ["Netflix", "Fútbol", "Programar", "Hockey"],
        "direccion" => "Winterfell",
      ];

      var_dump ($persona)
?>

<?php
/* condicional */
   $edad = 30;
   $hijos = 2;

   if ($edad > $hijos) {
     echo "El número mayor es $edad";

   } else {
     echo "El número mayor es $hijos";
   }

?>

</pre>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1><?php echo "Hola" . " " . $persona["nombre"] ?></h1>

<h2>Rand</h2>
    <?php
    $aleatorio = rand(5, 15);

    echo $aleatorio;
    ?>

<br>
<br>
<h2>Numero 3</h2>
<?php
if ($aleatorio != 3) {
  echo "El número NO es 3";
} else {
  echo 3;
}

 ?>


 <h2>Rand 1 y 100</h2>

     <?php
     $valor = rand(1, 100);
     if ($valor > 50) {
       echo "El número es mayor a 50";
     }

    else {
      if ($valor < 50) {
       echo "El número es menor a 50";
     }
     else {
       echo "El número es igual a 50";
     }
   }
     ?>



<h2>Usuario y contraseña</h2>

<?php
    $NombreDeUsuario = "admin";
    $ContraseniaDeUsuario = "1234";

    if ($NombreDeUsuario == "admin") {
      echo "Bienvenido!";
    } else {

          if ($NombreDeUsuario != "admin" || $NombreDeUsuario == "") {
            echo "Usuario incorrecto";
          }

          if ($ContraseniaDeUsuario != "1234" || $ContraseniaDeUsuario == "") {
            echo "Contraseña incorrecto";
          }

    }

 ?>

<h2>Casado Bienvenido</h2>
 <?php
    $edad = 34;
    $casado = True;
    $sexo = "Otro";

    if ($edad > 18 && $casado == False || $sexo == "Otro") {
      echo "Bienvenido";
    };

 ?>


<h2>Cantidad de alumnos</h2>

<?php
  $cantidadDeAlumnos = 100;

  if ($cantidadDeAlumnos) {
    echo "true";
  }
  else {
    echo "false";
  }
 ?>


<h2>Ternario</h2>

  <?php
    $numero = 40;

    echo ($numero % 2) ? "El número es par" : "El número es impar";

   ?>


   <h2>Nota</h2>
      <?php

        $nota = 5;

        switch ($nota) {
          case 1:
          case 2:
          case 3:
          case 4:
            echo "desaprobado";
            break;
          case 4:
          case 5:
            echo "zafamos";
            break;
          case 6:
          case 7:
          case 8:
            echo "bien";
            break;
          case 9:
            echo "MUY Bien";
            break;
          case 10:
            echo "Excelente";
            break;
          default:
            echo "El número no es válido";
            break;
        }

       ?>
  </body>
</html>

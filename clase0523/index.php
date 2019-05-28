
<?php
$ceu = [
      "Argentina" => [
        "ciudades" => ["Buenos Aires", "Córdoba", "Santa Fé"],
        "esAmericano" => true,
      ],
      "Brasil" => [
        "ciudades" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
        "esAmericano" => true,
      ],
      "Colombia" => [
        "ciudades" => ["Cartagena", "Bogota", "Barranquilla"],
        "esAmericano" => true,
      ],
      "Francia" => [
        "ciudades" => ["Paris", "Nantes", "Lyon"],
        "esAmericano" => false,
      ],
      "Italia" => [
        "ciudades" => ["Roma", "Milan", "Venecia"],
        "esAmericano" => false,
      ],
      "Alemania" => [
        "ciudades" => ["Munich", "Berlin", "Frankfurt"],
        "esAmericano" => false,
      ]
];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<section>
  <h1 style="background: red; color:#ffffff; display: block">nombre de cada país</h1>
  <?php foreach ($ceu as $pais => $datosPais) : ?>
    <?php if ($datosPais["esAmericano"]):?>
    <p>Las ciudades de <strong><?php echo $pais ?></strong> son: </p>
      <?php foreach ($datosPais["ciudades"] as $ciudad) : ?>
        <p>- <?php echo $ciudad ?></p>
      <?php endforeach; ?>

    <p>El pais es Americano</p>

    <?php endif ?>
  <?php endforeach ?>
</section>

    <section>
<h1 style="background: green; color:#ffffff; display: block">capitales</h1>

      <?php
      $ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=>
            "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" =>
            "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin",
            "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam",
            "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino
            Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica
            Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga",
            "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;

            foreach ($ceu as $capital => $value) {
              $posicion = array_search( $value, $ceu );
            echo "$value : $ceu</b></br>";
            }
?>
    </section>
    <section >
      <h1 style="background: green; color:#ffffff; display: block">array asociativo</h1>
      <?php
      $mascota = [
        animal => "perro",
        edad => "8 años",
        altura => "1.80",
        nombre => "Flor",
            ];

      foreach ($mascota as $k => $v) {
      $posicion = array_search( $v, $mascota );
    echo "<p>$k : $v</p>";
    }
    ?>

    </section>
    <section style="background: red; color:#ffffff; display: block">
      <h1>7- Aleatorio 10 de 0 a 100</h1>
      <?php
        $array = range(0,10);
        foreach ($array as $v) {
              $v = rand(0, 100);
          };

            $i = 0;

              if ($v[$i] % 2 == 0) {
                $i++;
              }

            echo "$v[$i]";

       ?>
    </section>

    <section>
      <h1 style="background: green; color:#ffffff; display: block">6- Aleatorio 0 a 10</h1>
      <?php
        $array = range(0,10);
        foreach ($array as &$v) {
              $v = rand(0, 10);
          };

            echo "$v";

            if ($v == 5) {
              echo "<br>Se encontro un 5";

            }


       ?>
    </section>

    <section>
        <h3 style="background: red; color:#ffffff; display: block">5- ARRAY con foreach</h3>

      <?php
        $array=[Flor, Lucas, Mateo, Joaco];
        $i = 0;
        foreach ($array as $nombre) {
          echo "$nombre[$i]";
          $i++;
        }

       ?>
    </section>


    <section>
        <h3 style="background: green; color:#ffffff; display: block">5- ARRAY con DO While</h3>
      <?php
        $array=[Flor, Lucas, Mateo, Joaco];
        $i = 0;
        do {
          echo "<p>{$array[$i]}</p>";
          $i++;
        } while ($i < count($array));
       ?>
    </section>

    <section>
        <h3 style="background: green; color:#ffffff; display: block">5- ARRAY con While</h3>
      <?php
        $array=[Flor, Lucas, Mateo, Joaco];
        $i = 0;
        while ($i < count($array)) {
          echo "<p>{$array[$i]}</p>";
          $i++;
        }

       ?>
    </section>
    <section>
        <h3 style="background: green; color:#ffffff; display: block">5- ARRAY con For</h3>
      <?php
        $array=[Flor, Lucas, Mateo, Joaco];

        for ($i=0; $i < count($array) ; $i++) {
          echo "<p>{$array[$i]}</p>";

        }

       ?>
    </section>

    <section>
      <h3 style="background: red; color:#ffffff; display: block">4- Tirar Moneda </h3>
          <?php

           ?>
    </section>

    <section>
      <h3 style="background: green; color:#ffffff; display: block">3- Recorremos contador </h3>
          <?php
          $contador = 1;

        	do{
        		echo $contador + $contador;
        		echo ", ";
        		$contador++;
        	}while($contador <= 5);
           ?>
    </section>


    <section>
      <h3 style="background: green; color:#ffffff; display: block">2- Recorremos el array con un while 100 hasta 85 </h3>
          <?php
          $i = 100;

        	while ($i >= 85){
        		echo "$i, ";
        		$i--;
        	};
        	echo "<br><br>";

           ?>
    </section>


<section>
<h1 style="background: green; color:#ffffff; display: block">Tabla del 2</h1>

      <?php
      for ($i=0; $i <=10 ; $i++) : ?>
        <p><?= $i*2 ?></p>
        <?php endfor ?>


</section>



  </body>
</html>

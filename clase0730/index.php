<?php

require_once 'clases/Cliente.php';
require_once 'clases/Persona.php';


$nuevoCliente = new Persona('Pedro', 'Gonzales',33444555, '1908-01-01','pedro@gonzales.com', 'qwerty');

echo $nuevoCliente->getNombre() . '<br>';
echo $nuevoCliente->getEmail() . '<br>';
echo '<br>';
$nuevoCliente->setEmail('g@gmail.com');
echo $nuevoCliente->getEmail() . '<br>';

var_dump($nuevoCliente);

 ?>

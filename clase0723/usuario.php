<?php

class Usuario {

  private $nombre;
  private $mail;
  private $pass;

  public function __construct($nombre, $mail, $pass)
  {
    $this->nombre = $nombre;
    $this->mail = $mail;
    $this->contrasena = $pass;

  }
}


 ?>

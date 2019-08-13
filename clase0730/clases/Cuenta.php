<?php

//Defino variables privadas para la clase Cliente

abstract Class Cuenta{
  Private $CBU;
  Private $balance;
  Private $fecha_ultimo_movimiento;

//Creo una función constructora con sus parámetros necesarios

  public function __construct($CBU,$balance, $fecha_ultimo_movimiento){
    $this->CBU = $CBU;
    $this->balance = $balance;
    $this->fecha_ultimo_movimiento = $fecha_ultimo_movimiento;
    
  }

  //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado


  public function setCBU($CBU){
    $this->CBU = $CBU;
  }
  public function getCBU(){
    return $this->CBU;
  }
  public function setBalance($balance){
    $this->balance = $balance;
  }
  public function getBalance(){
    return $this->balance;
  }
  public function setFecha_ultimo_movimiento($fecha_ultimo_movimiento){
    $this->fecha_ultimo_movimiento = $fecha_ultimo_movimiento;
  }
  public function getFecha_ultimo_movimiento(){
    return $this->fecha_ultimo_movimiento;
  }

  }

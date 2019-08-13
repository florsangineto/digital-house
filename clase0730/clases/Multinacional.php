<?php

require_once 'Cliente.php';


class Multinacional extends Cliente {
      Private $razonsocial;
      Private $cuit;


      public function __construct($razonsocial,$cuit,$email,$pass){
        $this->razonsocial = $razonsocial;
        $this->cuit = $cuit;
        parent::__construct($email, $pass);
      }

      public function setRazonsocial($razonsocial){
        $this->razonsocial = $razonsocial;
      }
      public function getRazonsocial(){
        return $this->$razonsocial;
      }
      public function setCuit($cuit){
        $this->cuit = $cuit;
      }
      public function getCuit(){
        return $this->$cuit;
      }
  }

 ?>

<?php
include_once('traits/Mensaje.php');
class Clase {
  use mensaje1;

  public function retornaSaludo(){
    echo "Hola, verdad que ";
  }
}
<?php
include_once('clases/Clase.php');
include_once('clases/Welcome.php');
$obj = new Clase();
$obj->retornaSaludo();
$obj->msg1();

$obj2 = new Welcome();
$obj2->msg1();

echo "<br> " . Welcome::devuelveFecha();


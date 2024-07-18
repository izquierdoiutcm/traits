<?php
trait mensaje1 {
    public function msg1() {
        echo "La programación orientada a objetos es divertida " . "<br>";
    }
    public static function devuelveFecha(){
        $currentDate = date('Y-m-d H:i:s');
        return "Fecha y hora actual: " . $currentDate;
    }
}
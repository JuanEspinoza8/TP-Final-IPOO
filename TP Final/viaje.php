<?php
class Viaje{
    private $colObjPasajero;


    // Construct
    public function __construct($colObjPasajero){
        $this->colObjPasajero = $colObjPasajero;
    }


    // Getteres
    public function getColObjPasajero(){
        return $this->colObjPasajero;
    }


    // Setters
    public function setColObjPasajero($colObjPasajero){
        $this->colObjPasajero = $colObjPasajero;
    }


    // toString
    public function __toString(){
        $cadena = "__________ Coleccion del objeto 'Pasajero'__________\n";
        foreach ($this->getColObjPasajero() as $pasajero){
            $cadena .= "------------------------------". $pasajero->__toString() ."------------------------------". "\n";
        }
        return $cadena;
    }
}


?>
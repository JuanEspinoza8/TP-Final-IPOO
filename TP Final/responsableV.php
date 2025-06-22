<?php
class ResponsableV{
    private $nroEmpleado;
    private $nroLicencia;
    private $nombre;
    private $apellido;


    public function __construct($nroEmpleado, $nroLicencia, $nombre, $apellido){
        $this->nroEmpleado = $nroEmpleado;
        $this->nroLicencia = $nroLicencia;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }


    // Getters
    

    // Setters



    // toString
    public function __toString() {
        return "Nro Empleado: {$this->nroEmpleado}, Nro Licencia: {$this->nroLicencia}, Nombre: {$this->nombre}, Apellido: {$this->apellido}";
    }
}


?>